<?php

namespace App\Http\Controllers;

use App\Models\Plate;
use App\Models\Transfer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TransferController extends Controller
{
    public function transfer($id)
    {
        $plate = Plate::where('id', $id)->where('user_id', Auth::id())->first();
        if (!empty($plate)) {
            return view('plate-transfer', compact('plate'));
        } else {
            return redirect()->route('app');
        }
    }

    public function transferPost(Request $request)
    {
        $validated = $request->validate([
            'phone' => 'required|regex:/(09)[0-9]{9}/|digits:11|numeric',
        ]);
        if ($request->phone == Auth::user()->phone) {
            return redirect()->back()->withErrors(['phone' => 'شماره مالک جدید نمیتواند با شماره فعلی شما یکی باشد.']);
        }
        $plate = Plate::where('id', $request->plate_id)->where('user_id', Auth::id())->first();
        if (!empty($plate)) {
            $user_new = User::where('phone', $request->phone)->first();
            if (empty($user_new)) {
                $user_new = new User();
                $user_new->phone = $request->phone;
                $user_new->password = Hash::make(rand(6, 8));
                $user_new->save();
            }
            $transfer = new Transfer();
            $transfer->user_old = Auth::id();
            $transfer->user_new = $user_new->id;
            $transfer->plate_id = $plate->id;
            $transfer->pending = true;
            $transfer->save();
            $plate->pending = true;
            $plate->save();
            return redirect()->route('app');
        } else {
            return redirect()->route('app');
        }
    }
}
