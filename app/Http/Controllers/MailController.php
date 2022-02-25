<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send_mail(Request $request)
    {
        try {
            //code...
            $name = $request->name;
            $email = $request->email;
            $phone = $request->phone;
            $country = $request->country;
            $file = $request->file('file');
            $message = $request->message;

            $details = [
                'name' => $name,
                'phone' => $phone,
                'country' => $country,
                'message' => $message,
                'email' => $email,
                'file' => $file,
            ];
            Mail::to('sbs.office@sbsolusi.com')->send(new \App\Mail\Contact($details));
            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
            print_r($th->getMessage());
        }
    }
}
