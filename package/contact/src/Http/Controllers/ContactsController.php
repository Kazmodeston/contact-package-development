<?php

namespace Skillshare\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Skillshare\Contact\Http\Requests\ContactRequest;
use Skillshare\Contact\Mail\ContactMail;
use Skillshare\Contact\Models\Contact;

class ContactsController extends Controller
{
    public function index()
    {
        return view("contact::contact");
    }

    public function sendMessage(ContactRequest $request)
    {
        try{
                if($result = Contact::create($request->all()))
                {
                    return redirect(route('contact'))->with('success', 'Your message was sent successfully');
                }
                else
                {
                    return redirect(route('contact'))->with('error', 'Unable to send Message');
                }
        }
        catch(\Exception $ex)
        {
            dd($ex->getMessage());
        }
    }
}