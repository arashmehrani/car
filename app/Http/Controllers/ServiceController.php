<?php

namespace App\Http\Controllers;

use App\Models\Plate;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function romo($id)
    {
        $plate = Plate::where('id', $id)->where('user_id', Auth::id())->first();
        if (!empty($plate)) {
            return view('service.service-romo', compact('id'));
        }
        return redirect()->route('app');

    }

    public function romoPost(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'km_now' => 'required|numeric',
            'km_next' => 'required|numeric',
            'workshop' => 'nullable|string',
            'price' => 'nullable|numeric',
        ]);
        $plate = Plate::where('id', $request->plate_id)->where('user_id', Auth::id())->first();
        if (!empty($plate)) {
            $service = new Service();
            $service->title = $request->title;
            $service->price = $request->price;
            $service->workshop = $request->workshop;
            $service->type = 'روغن موتور';
            $service->km_now = $request->km_now;
            $service->km_next = $request->km_next;
            $service->time_now = now();
            $service->user_id = Auth::id();
            $service->plate_id = $plate->id;
            $service->passed = false;
            $meta = null;
            if ($request->has('romo_filter')) {
                $meta["romo_filter"] = "1";
            }
            if ($request->has('air_filter')) {
                $meta["air_filter"] = "1";
            }
            if ($request->has('cabin_filter')) {
                $meta["cabin_filter"] = "1";
            }
            if ($request->has('ro_hydro')) {
                $meta["ro_hydro"] = "1";
            }
            $service->meta = $meta;
            $service->save();
            session()->flash('msg', 'سرویس جدید ثبت شد');
            return redirect()->route('service.select', $plate->id);
        }
        return redirect()->route('app');
    }

    public function rogi($id)
    {
        $plate = Plate::where('id', $id)->where('user_id', Auth::id())->first();
        if (!empty($plate)) {
            return view('service.service-rogi', compact('id'));
        }
        return redirect()->route('app');

    }

    public function rogiPost(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'km_now' => 'required|numeric',
            'km_next' => 'required|numeric',
            'workshop' => 'nullable|string',
            'price' => 'nullable|numeric',
        ]);
        $plate = Plate::where('id', $request->plate_id)->where('user_id', Auth::id())->first();
        if (!empty($plate)) {
            $service = new Service();
            $service->title = $request->title;
            $service->price = $request->price;
            $service->workshop = $request->workshop;
            $service->type = 'روغن گیربکس';
            $service->km_now = $request->km_now;
            $service->km_next = $request->km_next;
            $service->time_now = now();
            $service->user_id = Auth::id();
            $service->plate_id = $plate->id;
            $service->passed = false;
            $service->save();
            session()->flash('msg', 'سرویس جدید ثبت شد');
            return redirect()->route('service.select', $plate->id);
        }
        return redirect()->route('app');
    }

    public function tas($id)
    {
        $plate = Plate::where('id', $id)->where('user_id', Auth::id())->first();
        if (!empty($plate)) {
            return view('service.service-tas', compact('id'));
        }
        return redirect()->route('app');

    }

    public function tasPost(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'km_now' => 'required|numeric',
            'km_next' => 'required|numeric',
            'workshop' => 'nullable|string',
            'price' => 'nullable|numeric',
        ]);
        $plate = Plate::where('id', $request->plate_id)->where('user_id', Auth::id())->first();
        if (!empty($plate)) {
            $service = new Service();
            $service->title = $request->title;
            $service->price = $request->price;
            $service->workshop = $request->workshop;
            $service->type = 'تسمه';
            $service->km_now = $request->km_now;
            $service->km_next = $request->km_next;
            $service->time_now = now();
            $service->user_id = Auth::id();
            $service->plate_id = $plate->id;
            $service->passed = false;
            $meta = null;
            if ($request->has('tas_time')) {
                $meta["tas_time"] = "1";
            }
            if ($request->has('tas_hydro')) {
                $meta["tas_hydro"] = "1";
            }
            if ($request->has('tas_dinam')) {
                $meta["tas_dinam"] = "1";
            }
            if ($request->has('tas_ac')) {
                $meta["tas_ac"] = "1";
            }
            $service->meta = $meta;
            $service->save();
            session()->flash('msg', 'سرویس جدید ثبت شد');
            return redirect()->route('service.select', $plate->id);
        }
        return redirect()->route('app');
    }

    public function sham($id)
    {
        $plate = Plate::where('id', $id)->where('user_id', Auth::id())->first();
        if (!empty($plate)) {
            return view('service.service-sham', compact('id'));
        }
        return redirect()->route('app');

    }

    public function shamPost(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'km_now' => 'required|numeric',
            'km_next' => 'required|numeric',
            'workshop' => 'nullable|string',
            'price' => 'nullable|numeric',
        ]);
        $plate = Plate::where('id', $request->plate_id)->where('user_id', Auth::id())->first();
        if (!empty($plate)) {
            $service = new Service();
            $service->title = $request->title;
            $service->price = $request->price;
            $service->workshop = $request->workshop;
            $service->type = 'شمع';
            $service->km_now = $request->km_now;
            $service->km_next = $request->km_next;
            $service->time_now = now();
            $service->user_id = Auth::id();
            $service->plate_id = $plate->id;
            $service->passed = false;
            $meta = null;
            if ($request->has('sham')) {
                $meta["sham"] = "1";
            }
            if ($request->has('wire')) {
                $meta["wire"] = "1";
            }
            $service->meta = $meta;
            $service->save();
            session()->flash('msg', 'سرویس جدید ثبت شد');
            return redirect()->route('service.select', $plate->id);
        }
        return redirect()->route('app');
    }

    public function lent($id)
    {
        $plate = Plate::where('id', $id)->where('user_id', Auth::id())->first();
        if (!empty($plate)) {
            return view('service.service-lent', compact('id'));
        }
        return redirect()->route('app');

    }

    public function lentPost(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'km_now' => 'required|numeric',
            'km_next' => 'required|numeric',
            'workshop' => 'nullable|string',
            'price' => 'nullable|numeric',
        ]);
        $plate = Plate::where('id', $request->plate_id)->where('user_id', Auth::id())->first();
        if (!empty($plate)) {
            $service = new Service();
            $service->title = $request->title;
            $service->price = $request->price;
            $service->workshop = $request->workshop;
            $service->type = 'لنت';
            $service->km_now = $request->km_now;
            $service->km_next = $request->km_next;
            $service->time_now = now();
            $service->user_id = Auth::id();
            $service->plate_id = $plate->id;
            $service->passed = false;
            $meta = null;
            if ($request->has('lent_front')) {
                $meta["lent_front"] = "1";
            }
            if ($request->has('lent_back')) {
                $meta["lent_back"] = "1";
            }
            $service->meta = $meta;
            $service->save();
            session()->flash('msg', 'سرویس جدید ثبت شد');
            return redirect()->route('service.select', $plate->id);
        }
        return redirect()->route('app');
    }

    public function battery($id)
    {
        $plate = Plate::where('id', $id)->where('user_id', Auth::id())->first();
        if (!empty($plate)) {
            return view('service.service-battery', compact('id'));
        }
        return redirect()->route('app');

    }

    public function batteryPost(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'km_now' => 'required|numeric',
            'km_next' => 'required|numeric',
            'workshop' => 'nullable|string',
            'price' => 'nullable|numeric',
        ]);
        $plate = Plate::where('id', $request->plate_id)->where('user_id', Auth::id())->first();
        if (!empty($plate)) {
            $service = new Service();
            $service->title = $request->title;
            $service->price = $request->price;
            $service->workshop = $request->workshop;
            $service->type = 'باتری';
            $service->km_now = $request->km_now;
            $service->km_next = $request->km_next;
            $service->time_now = now();
            $service->user_id = Auth::id();
            $service->plate_id = $plate->id;
            $service->passed = false;
            $service->save();
            session()->flash('msg', 'سرویس جدید ثبت شد');
            return redirect()->route('service.select', $plate->id);
        }
        return redirect()->route('app');
    }

    public function clutch($id)
    {
        $plate = Plate::where('id', $id)->where('user_id', Auth::id())->first();
        if (!empty($plate)) {
            return view('service.service-clutch', compact('id'));
        }
        return redirect()->route('app');

    }

    public function clutchPost(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'km_now' => 'required|numeric',
            'km_next' => 'required|numeric',
            'workshop' => 'nullable|string',
            'price' => 'nullable|numeric',
        ]);
        $plate = Plate::where('id', $request->plate_id)->where('user_id', Auth::id())->first();
        if (!empty($plate)) {
            $service = new Service();
            $service->title = $request->title;
            $service->price = $request->price;
            $service->workshop = $request->workshop;
            $service->type = 'کلاچ';
            $service->km_now = $request->km_now;
            $service->km_next = $request->km_next;
            $service->time_now = now();
            $service->user_id = Auth::id();
            $service->plate_id = $plate->id;
            $service->passed = false;
            $service->save();
            session()->flash('msg', 'سرویس جدید ثبت شد');
            return redirect()->route('service.select', $plate->id);
        }
        return redirect()->route('app');
    }

    public function vasher($id)
    {
        $plate = Plate::where('id', $id)->where('user_id', Auth::id())->first();
        if (!empty($plate)) {
            return view('service.service-vasher', compact('id'));
        }
        return redirect()->route('app');

    }

    public function vasherPost(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'km_now' => 'required|numeric',
            'km_next' => 'required|numeric',
            'workshop' => 'nullable|string',
            'price' => 'nullable|numeric',
        ]);
        $plate = Plate::where('id', $request->plate_id)->where('user_id', Auth::id())->first();
        if (!empty($plate)) {
            $service = new Service();
            $service->title = $request->title;
            $service->price = $request->price;
            $service->workshop = $request->workshop;
            $service->type = 'واشر';
            $service->km_now = $request->km_now;
            $service->km_next = $request->km_next;
            $service->time_now = now();
            $service->user_id = Auth::id();
            $service->plate_id = $plate->id;
            $service->passed = false;
            $service->save();
            session()->flash('msg', 'سرویس جدید ثبت شد');
            return redirect()->route('service.select', $plate->id);
        }
        return redirect()->route('app');
    }

    public function lastik($id)
    {
        $plate = Plate::where('id', $id)->where('user_id', Auth::id())->first();
        if (!empty($plate)) {
            return view('service.service-lastik', compact('id'));
        }
        return redirect()->route('app');

    }

    public function lastikPost(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'km_now' => 'required|numeric',
            'km_next' => 'required|numeric',
            'workshop' => 'nullable|string',
            'price' => 'nullable|numeric',
        ]);
        $plate = Plate::where('id', $request->plate_id)->where('user_id', Auth::id())->first();
        if (!empty($plate)) {
            $service = new Service();
            $service->title = $request->title;
            $service->price = $request->price;
            $service->workshop = $request->workshop;
            $service->type = 'لاستیک';
            $service->km_now = $request->km_now;
            $service->km_next = $request->km_next;
            $service->time_now = now();
            $service->user_id = Auth::id();
            $service->plate_id = $plate->id;
            $service->passed = false;
            $meta = null;
            if ($request->has('lastik_front')) {
                $meta["lastik_front"] = "1";
            }
            if ($request->has('lastik_back')) {
                $meta["lastik_back"] = "1";
            }
            $service->meta = $meta;
            $service->save();
            session()->flash('msg', 'سرویس جدید ثبت شد');
            return redirect()->route('service.select', $plate->id);
        }
        return redirect()->route('app');
    }

    public function bime($id)
    {
        $plate = Plate::where('id', $id)->where('user_id', Auth::id())->first();
        if (!empty($plate)) {
            return view('service.service-bime', compact('id'));
        }
        return redirect()->route('app');

    }

    public function bimePost(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'price' => 'nullable|numeric',
        ]);
        $plate = Plate::where('id', $request->plate_id)->where('user_id', Auth::id())->first();
        if (!empty($plate)) {
            $service = new Service();
            $service->title = $request->title;
            $service->price = $request->price;
            $service->type = 'بیمه';
            $service->time_now = now();
            $service->user_id = Auth::id();
            $service->plate_id = $plate->id;
            $service->passed = false;
            $meta = null;
            if ($request->has('bime_sales')) {
                $meta["bime_sales"] = "1";
            }
            if ($request->has('bime_badane')) {
                $meta["bime_badane"] = "1";
            }
            $service->meta = $meta;
            $service->save();
            session()->flash('msg', 'سرویس جدید ثبت شد');
            return redirect()->route('service.select', $plate->id);
        }
        return redirect()->route('app');
    }
}
