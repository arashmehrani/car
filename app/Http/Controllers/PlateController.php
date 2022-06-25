<?php

namespace App\Http\Controllers;

use App\Models\Plate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlateController extends Controller
{
    public function plateNew(Request $request)
    {
        $validated = $request->validate([
            'p1' => 'required|digits:2|numeric',
            'p2' => 'required|string',
            'p3' => 'required|digits:3|numeric',
            'p4' => 'required|digits:2|numeric',
            'company' => 'required|string',
            'title' => 'required|string',
            'km_current' => 'required|numeric',
            'km_average' => 'required|numeric',
        ]);
        $plateAll = $request->p1 . $request->p2 . $request->p3 . $request->p4;
        $plate = new Plate();
        $plate->title = $request->title;
        $plate->p1 = $request->p1;
        $plate->p2 = $request->p2;
        $plate->p3 = $request->p3;
        $plate->p4 = $request->p4;
        $plate->plate = $plateAll;
        $plate->km_current = $request->km_current;
        $plate->km_average = $request->km_average;
        $plate->vin = $request->vin;
        $plate->company = $request->company;
        $plate->user_id = Auth::id();
        $plate->save();
        session()->flash('msg', 'پلاک جدید ثبت شد');
        return redirect()->back();
    }
}
