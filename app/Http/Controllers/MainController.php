<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Plate;
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

    public function serviceSelect()
    {
        return view('service-select');
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
