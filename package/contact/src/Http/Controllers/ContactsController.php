<?php

namespace Skillshare\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Skillshare\Contact\Http\Requests\ContactRequest;
use Skillshare\Contact\Models\Contact;

class ContactsController extends Controller
{
    public function index()
    {
        return view("contact::contact");
    }

    public function sendMessage(ContactRequest $request)
    {
        if(Contact::create($request->all()))
        {
            return redirect(route('contact'))->with('success', 'Your message was sent successfully');
        }
        else
        {
            return redirect(route('contact'))->with('error', 'Unable to send Message');
        }
    }
}