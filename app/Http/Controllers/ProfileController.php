<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit(Request $request)
    {
       $validated = $request->validate([
            'name' => 'required|string|min:3',
            'state' => 'required',
            'city' => 'required',
        ]);
        $user = Auth::user();
        $user->name = $request->name;
        $user->state = $request->state;
        $user->city = $request->city;
        $user->save();
        session()->flash('msg', 'مشخصات با موفقیت ویرایش شد');
        return redirect()->back();
    }
}
