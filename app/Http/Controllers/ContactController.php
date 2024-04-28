<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use App\Mail\NameOfMailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function contact()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phoneNumber' => 'required',
            'message' => 'required'
        ]);
    
        Mail::to('test@example.com')->send(new ContactUsMail($request));
    
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
