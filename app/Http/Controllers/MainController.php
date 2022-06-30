<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Plate;
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
        if (!empty($transfer)){
            $plate = Plate::where('id',$transfer->plate_id)->first();
            $vin = $plate->vin;
            return view('app', compact('plates','transfer','vin'));
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
        $plate_id = $id;
        return view('service-select', compact('plate_id'));
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
