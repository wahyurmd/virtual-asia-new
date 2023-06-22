<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class MasterController extends Controller
{
    function index() : View {
        return view('main');
    }

    public function contactSend(Request $request) {
        $subject = $request->subject;
        Mail::to('virtualasia.id@gmail.com')->send(new ContactMail($request, $subject));

        return redirect()->back();
    }
}
