<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Plate;
use App\Models\Service;
use App\Models\Transfer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlateController extends Controller
{
    public function new(Request $request)
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
        return redirect()->route('app');
    }

    public function delete($id)
    {
        $plate = Plate::where('id', $id)->where('user_id', Auth::id())->first();
        if (!empty($plate)) {
            $transfer = Transfer::where('user_old', Auth::id())->where('plate_id', $id)->where('pending', true)->first();
            if (!empty($transfer)) {
                $plate->user_id = null;
                $plate->save();
            } else {
                $plate->delete();
            }
            return redirect()->back();
        } else {
            return redirect()->route('app');
        }
    }

    public function edit($id)
    {
        $plate = Plate::where('id', $id)->where('user_id', Auth::id())->first();
        if (!empty($plate)) {
            $companies = Company::all();
            return view('plate-edit', compact('plate', 'companies'));
        } else {
            return redirect()->route('app');
        }
    }

    public function editPost(Request $request)
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
        $plate = Plate::where('id', $request->plate_id)->where('user_id', Auth::id())->first();
        if (!empty($plate)) {
            $plateAll = $request->p1 . $request->p2 . $request->p3 . $request->p4;
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
            $plate->save();

            $services = Service::where('user_id', Auth::id())->where('plate_id', $plate->id)->where('passed', false)->get();
            foreach ($services as $service) {
                $km_feli = (int)$plate->km_current;
                $km_zaman_taviz = (int)$service->km_now;
                $km_zaman_taviz_badi = (int)$service->km_next;
                $km_between_zaman_taviz_feli = $km_zaman_taviz - $km_feli;
                $km_mandeh = ($km_zaman_taviz_badi - $km_feli ) + $km_between_zaman_taviz_feli; /// km mandeh to taviz
                $day_next = $km_mandeh / $plate->km_average;
                $day_next = (int) round($day_next); /// days mandeh ta taviz
                $time = Carbon::now()->addDays($day_next);
                $time = Carbon::parse($time);
                $service->time_next = $time;
                $service->save();
            }
            session()->flash('msg', 'پلاک ویرایش شد');
            return redirect()->route('app');
        } else {
            return redirect()->route('app');
        }
    }
}
