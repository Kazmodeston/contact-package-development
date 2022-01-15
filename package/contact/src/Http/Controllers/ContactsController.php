<?php

namespace Skillshare\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Skillshare\Contact\Http\Requests\ContactRequest;

class ContactsController extends Controller
{
    public function index()
    {
        return view("contact::contact");
    }

    public function sendMessage(ContactRequest $request)
    {
        
    }
}