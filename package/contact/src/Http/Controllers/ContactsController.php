<?php

namespace Skillshare\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        return view("contact::contact");
    }

    public function sendMessage(Request $request)
    {
        return $request->all();
    }
}