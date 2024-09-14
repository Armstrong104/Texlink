<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function postMessage(Request $request){


        // Form Validation
      $mailData  =  $request->validate([
            "name" => "required",
            "email"=> "required | email",
            "phone" => "required | numeric | digits:11 | starts_with:01",
            "message" => "max:256"
        ], [
            "phone.required" => "Phone number is required",
            "phone.digits" => "Phone number must be 11 digits",
            "phone.starts_with" => "Phone number must starts with 01",
        ]


    );

        Mail::to('info@texlinkservices.com')->send(new ContactFormMail($mailData));


        return back()->with('success','Your message has been sent!!');
    }
}
