<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function confirm(Request $request)
    {   
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'postcode', 'address', 'building_name', 'opinion']);

        return view('confirm', ['contact' => $contact]);
    }
    public function store(Request $request)
    {

        Contact::create(['fullname' => $request->last_name . $request->first_name]);
        $contact =  $request->only(['gender', 'email', 'postcode', 'address', 'building_name', 'opinion']);
        Contact::create($contact);

        return view('thanks');
    }
}
