<?php

namespace Bitfume\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Bitfume\Contact\Mail\ContactMailable;
use Bitfume\Contact\Models\Contact;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name));
        Contact::create($request->all());
        return redirect(route('contact'));
    }
}
