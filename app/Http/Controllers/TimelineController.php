<?php

namespace App\Http\Controllers;

use App\Models\Plate;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TimelineController extends Controller
{
    public function romo($id)
    {
        $plate = Plate::where('id', $id)->where('user_id', Auth::id())->first();
        if (!empty($plate)) {
            $services = Service::where('user_id', Auth::id())->where('plate_id', $id)
                ->where('type', 'روغن موتور')->latest('created_at')->paginate(10);
            return view('timeline.timeline-romo', compact('services'));
        } else {
            return redirect()->route('app');
        }
    }
}
