<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Session;
use App\Contact;

class ContactController extends Controller
{
    public function sendMessage(ContactRequest $request){

        $input = $request->all();
        Contact::create($input);
        Session::flash('flash_guest', 'Message sent successfully!');
        return redirect()->back();
    }
}
