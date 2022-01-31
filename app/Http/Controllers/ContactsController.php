<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactsController extends Controller
{
    public function contact()
    {
        $location = Contact::where('key', 'location')->first();
        $email = Contact::where('key', 'email')->first();
        $phone = Contact::where('key', 'phone')->first();
        $fax = Contact::where('key', 'fax')->first();
        $address = Contact::where('key', 'address')->first();
        $fb = Contact::where('key', 'fb')->first();
        $ig = Contact::where('key', 'ig')->first();
        $wa = Contact::where('key', 'wa')->first();
        $yt = Contact::where('key', 'yt')->first();
        return view('page.contact', [
            'location' => $location,
            'email' => $email,
            'phone' => $phone,
            'fax' => $fax,
            'address' => $address,
            'fb' => $fb,
            'wa' => $wa,
            'yt' => $yt,
            'ig' => $ig,
        ]);
    }
}
