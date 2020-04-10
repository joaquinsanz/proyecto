<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


use App\Http\Requests;


use App\ContactUs;


use Mail;

class ContactUsController extends Controller


{

    public function contactUs()
    {
        return view('contactUs');
    }

    public function contactUsPost(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        ContactUs::create($request->all());
        Mail::send(
            'email',

            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')
            ),
            function ($message) {
                $message->from('techanical-atom@gmail.com');
                $message->to('user@example.com', 'Admin')->subject('Contact Form Query');
            }
        );

        return back()->with('success', 'Thanks for contacting us!');
    }
}