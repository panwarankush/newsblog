<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;





class ContactController extends Controller
{

    public function contact()
    {
        return view('contact');
    }


    public function contactPost(Request $request)
    {

        Mail::send(
            'email',
            [
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'messages' => $request->get('message')
            ],
            function ($message) {
                $message->from('test@mail.com');
                $message->to('ankushpanwar111@gmail.com', 'RiskyRider')
                    ->subject('Uptodate Contact');
            }
        );

        return Redirect::refresh()->with('success', 'Query Submitted Successfully !! We will get back to you Soon...');
    }


}
