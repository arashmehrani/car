<?php

namespace App\Http\Controllers;

use App\Models\Plate;
use Illuminate\Http\Request;

class PlateController extends Controller
{
    public function plateNew(Request $request)
    {
        $validated = $request->validate([
            'p1' => 'required|digits:2|numeric',
            'p2' => 'required|string|max:1',
            'p3' => 'required|digits:3|numeric',
            'p4' => 'required|digits:2|numeric',
            'company' => 'required|string',
            'title' => 'required|string',
            'km_current' => 'required|numeric',
            'km_average' => 'required|numeric',
        ]);
        $plateAll = $request->p4 . $request->p3 . $request->p2 . $request->p1;
        dd($plateAll);
        $plate = new Plate();
    }
}
