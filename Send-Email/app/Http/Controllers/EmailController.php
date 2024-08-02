<?php

namespace App\Http\Controllers;

use App\Mail\welcomeEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $toEmail = 'abc@gmail.com';
        $moreUser = 'other mail Id for carbon copy send to other person like boss';
        $message = "hello , welcome to our website";
        $subject = "welcome to Isha";

        $request = Mail::to($toEmail)->send(new welcomeEmail($message, $subject));
        dd($request);



        /* $toEmail = 'abc@gmail.com';
        $moreUser = 'other mail Id for carbon copy send to other person like boss';
        $message = "hello , welcome to our website";
        $subject = "welcome to Isha";
        $details = [
            'name' => 'John Doe',
            'product' => 'Laravel Book',
            'price' => '$25'
        ];

        $request = Mail::to($toEmail)->send(new welcomeEmail($message, $subject, $details));
        dd($request); */

        /* $request = Mail::to($toEmail)->cc($moreUser)->send(new welcomeEmail($message, $subject, $details)); */

        /* $emails = [
            'user@gmail.com',
            'user1@gmail.com',
            'user2@gmail.com',
            'user3@gmail.com',
            'user4@gmail.com',
            'user5@gmail.com',
            'user6@gmail.com',
        ];

        foreach ($emails as $recipient) {
            Mail::to($toEmail)->send(new welcomeEmail($message, $subject, $details));
        } */
    }

    public function contactForm()
    {
        return view("contact");
    }

    public function sendContactEmail(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|min:10|max:100',
            'message' => 'required|min:10|max:255',
            'file' => 'nullable|mimes:pdf,doc,docx,xls,xlsx|max:2048',
        ]);

        $fileName = time() . "." . $request->file('file')->extension();
        $request->file('file')->move('uploads', $fileName);
        $adminEmail = "abc@gmail.com";
        $response = Mail::to($adminEmail)->send(new welcomeEmail($request->all(), $fileName));

        if ($response) {
            return back()->with("success", 'Thank you for contacting us. We will get back to you soon.');
        } else {
            return back()->with("error", 'enable to contact form , please try again');
        }


        // dd($fileName);
    }
}