<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }

    public function verify()
    {
        return view('login-verify');
    }

    public function profile()
    {
        return view('profile');
    }

    public function carNew()
    {
        return view('car-new');
    }
    public function serviceList()
    {
        return view('service-list');
    }
    public function notifications()
    {
        return view('notifications');
    }
    public function notificationsDetails()
    {
        return view('notifications-details');
    }
    public function contact()
    {
        return view('contact');
    }

}
