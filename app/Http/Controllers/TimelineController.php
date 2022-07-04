<?php

namespace App\Http\Controllers;

use App\Models\Plate;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TimelineController extends Controller
{
    public function battrey($id)
    {
        $plate = Plate::where('id', $id)->where('user_id', Auth::id())->first();
        if (!empty($plate)) {
            $services = Service::where('user_id', Auth::id())->where('plate_id', $id)
                ->where('type', 'باتری')->latest('created_at')->paginate(10);
            return view('timeline.timeline-battrey', compact('services'));
        } else {
            return redirect()->route('app');
        }
    }

    public function bime($id)
    {
        $plate = Plate::where('id', $id)->where('user_id', Auth::id())->first();
        if (!empty($plate)) {
            $services = Service::where('user_id', Auth::id())->where('plate_id', $id)
                ->where('type', 'بیمه')->latest('created_at')->paginate(10);
            return view('timeline.timeline-bime', compact('services'));
        } else {
            return redirect()->route('app');
        }
    }

    public function clutch($id)
    {
        $plate = Plate::where('id', $id)->where('user_id', Auth::id())->first();
        if (!empty($plate)) {
            $services = Service::where('user_id', Auth::id())->where('plate_id', $id)
                ->where('type', 'کلاچ')->latest('created_at')->paginate(10);
            return view('timeline.timeline-clutch', compact('services'));
        } else {
            return redirect()->route('app');
        }
    }

    public function lastik($id)
    {
        $plate = Plate::where('id', $id)->where('user_id', Auth::id())->first();
        if (!empty($plate)) {
            $services = Service::where('user_id', Auth::id())->where('plate_id', $id)
                ->where('type', 'لاستیک')->latest('created_at')->paginate(10);
            return view('timeline.timeline-lastik', compact('services'));
        } else {
            return redirect()->route('app');
        }
    }

    public function lent($id)
    {
        $plate = Plate::where('id', $id)->where('user_id', Auth::id())->first();
        if (!empty($plate)) {
            $services = Service::where('user_id', Auth::id())->where('plate_id', $id)
                ->where('type', 'لنت')->latest('created_at')->paginate(10);
            return view('timeline.timeline-lent', compact('services'));
        } else {
            return redirect()->route('app');
        }
    }

    public function rogi($id)
    {
        $plate = Plate::where('id', $id)->where('user_id', Auth::id())->first();
        if (!empty($plate)) {
            $services = Service::where('user_id', Auth::id())->where('plate_id', $id)
                ->where('type', 'روغن گیربکس')->latest('created_at')->paginate(10);
            return view('timeline.timeline-rogi', compact('services'));
        } else {
            return redirect()->route('app');
        }
    }

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

    public function sham($id)
    {
        $plate = Plate::where('id', $id)->where('user_id', Auth::id())->first();
        if (!empty($plate)) {
            $services = Service::where('user_id', Auth::id())->where('plate_id', $id)
                ->where('type', 'شمع')->latest('created_at')->paginate(10);
            return view('timeline.timeline-sham', compact('services'));
        } else {
            return redirect()->route('app');
        }
    }

    public function tas($id)
    {
        $plate = Plate::where('id', $id)->where('user_id', Auth::id())->first();
        if (!empty($plate)) {
            $services = Service::where('user_id', Auth::id())->where('plate_id', $id)
                ->where('type', 'تسمه')->latest('created_at')->paginate(10);
            return view('timeline.timeline-tas', compact('services'));
        } else {
            return redirect()->route('app');
        }
    }

    public function vasher($id)
    {
        $plate = Plate::where('id', $id)->where('user_id', Auth::id())->first();
        if (!empty($plate)) {
            $services = Service::where('user_id', Auth::id())->where('plate_id', $id)
                ->where('type', 'واشر')->latest('created_at')->paginate(10);
            return view('timeline.timeline-vasher', compact('services'));
        } else {
            return redirect()->route('app');
        }
    }
}
