<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginOtp(Request $request)
    {

        $validated = $request->validate([
            'phone' => 'required|regex:/(09)[0-9]{9}/|digits:11|numeric',
        ]);

        $phone = $request->phone;
        $user = User::where('phone', $phone)->first();
        if (empty($user)) {

            $request->session()->put('phone', $phone);
            $newUser = new User();
            $newUser->phone = $phone;
            $newUser->password = Hash::make(rand(6, 8));
            $newUser->save();
            return redirect('/verify-number');

        } else {
            $request->session()->put('phone', $phone);
            return redirect('/verify-number');
        }

    }

    public function verify(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|digits:4|numeric',
        ]);
        if (session('phone')) {
            $user = User::where('phone', session('phone'))->first();
            $code = $user->token;
            if ($code == $request->code){
                auth()->login($user, true);
                session()->forget('phone');
                return redirect()->route('home');
            }else{
                return redirect()->back()->withErrors(['msg' => 'کد وارد شده صحیح نیست']);
            }

        } else {
            session()->forget('phone');
            return redirect('/login');
        }
    }

    public function logout()
    {
        Auth::logout();
        session()->flush();
        return redirect('/login');
    }
}
