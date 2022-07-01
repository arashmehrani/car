<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Plate;
use App\Models\Service;
use App\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function start()
    {
        return view('start');
    }

    public function app()
    {
        $plates = Plate::where('user_id', Auth::id())->get();
        $transfer = Transfer::where('user_new', Auth::id())->where('pending', true)->first();
        if (!empty($transfer)) {
            $plate = Plate::where('id', $transfer->plate_id)->first();
            $vin = $plate->vin;
            return view('app', compact('plates', 'transfer', 'vin'));
        }
        return view('app', compact('plates'));
    }

    public function home()
    {
        return redirect()->route('app');
    }

    public function login()
    {
        return view('login');
    }

    public function verifyPhone()
    {
        if (session('phone')) {
            return view('login-verify');
        } else {
            return redirect()->route('login');
        }

    }

    public function profile()
    {
        return view('profile');
    }

    public function plateNew()
    {
        $companies = Company::all();
        return view('plate-new', compact('companies'));
    }

    public function serviceSelect($id)
    {
        $plate = Plate::where('id', $id)->where('user_id', Auth::id())->first();

        $romo = Service::where('user_id', Auth::id())->where('plate_id', $id)
            ->where('type', 'روغن موتور')->latest()->first();
        $rogi = Service::where('user_id', Auth::id())->where('plate_id', $id)
            ->where('type', 'روغن گیربکس')->latest()->first();
        $tas = Service::where('user_id', Auth::id())->where('plate_id', $id)
            ->where('type', 'تسمه')->latest()->first();
        $sham = Service::where('user_id', Auth::id())->where('plate_id', $id)
            ->where('type', 'شمع')->latest()->first();
        $lent = Service::where('user_id', Auth::id())->where('plate_id', $id)
            ->where('type', 'لنت')->latest()->first();
        $battery = Service::where('user_id', Auth::id())->where('plate_id', $id)
            ->where('type', 'باتری')->latest()->first();
        $clutch = Service::where('user_id', Auth::id())->where('plate_id', $id)
            ->where('type', 'کلاچ')->latest()->first();
        $vasher = Service::where('user_id', Auth::id())->where('plate_id', $id)
            ->where('type', 'واشر')->latest()->first();
        $lastik = Service::where('user_id', Auth::id())->where('plate_id', $id)
            ->where('type', 'لاستیک')->latest()->first();
        $bime = Service::where('user_id', Auth::id())->where('plate_id', $id)
            ->where('type', 'بیمه')->latest()->first();
        if (!empty($plate)) {
            return view('service-select', compact('id', 'romo', 'rogi', 'tas', 'sham', 'lent', 'battery', 'clutch', 'vasher', 'lastik', 'bime'));
        }
        return redirect()->route('app');
    }

    public function notifications()
    {
        return view('notifications');
    }

    public function notificationsDetails()
    {
        return view('notification-detail');
    }

    public function support()
    {
        return view('support');
    }

}
