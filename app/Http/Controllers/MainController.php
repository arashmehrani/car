<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        return view('app');
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
        if(session('phone')){
            return view('login-verify');
        }else{
            return redirect()->route('login');
        }

    }

    public function profile()
    {
        return view('profile');
    }

    public function plateNew()
    {
        return view('plate-new');
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
