<?php

namespace App\Http\Controllers;

use App\Models\Support;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupportController extends Controller
{
    public function support(Request $request)
    {
        $validated = $request->validate([
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        $support = new Support();
        $support->subject = $request->subject;
        $support->message = $request->message;
        $support->user_id = Auth::user()->id;
        $support->save();
        session()->flash('msg', 'پیام با موفقیت ارسال شد');
        return redirect()->back();
    }
}
