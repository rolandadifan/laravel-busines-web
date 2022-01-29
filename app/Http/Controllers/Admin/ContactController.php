<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function social()
    {
        $fb = Contact::where('key', 'fb')->first();
        $yt = Contact::where('key', 'yt')->first();
        $wa = Contact::where('key', 'wa')->first();
        $ig = Contact::where('key', 'ig')->first();
        return view('admin.page.menu.social')->with([
            'fb' => $fb,
            'yt' => $yt,
            'wa' => $wa,
            'ig' => $ig,
        ]);
    }

    public function update_social(Request $request)
    {   
        try {
            //code...
            $fb = $request->fb;
            $yt = $request->yt;
            $wa = $request->wa;
            $ig = $request->ig;
        
           
            $update_fb = Contact::where('key', 'fb')->first();
            $update_fb->update([
                'value' => $fb
            ]);
            $update_fb->save();
        
        
            $update_yt = Contact::where('key', 'yt')->first();
            $update_yt->update([
                'value' => $yt
            ]);
            $update_yt->save();
        
            $update_wa = Contact::where('key', 'wa')->first();
            $update_wa->update([
                'value' => $wa
            ]);
            $update_wa->save();
        
            $update_ig = Contact::where('key', 'ig')->first();
            $update_ig->update([
                'value' => $ig
            ]);
            $update_ig->save();
            
            return redirect()->back()->with('status', 'Successfully update social media');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', $th->getMessage());
        }

        
    }

    public function contact()
    {
        $location = Contact::where('key', 'location')->first();
        $email = Contact::where('key', 'email')->first();
        $phone = Contact::where('key', 'phone')->first();
        $fax = Contact::where('key', 'fax')->first();
        return  view('admin.page.menu.contact')->with([
            'location' => $location,
            'email' => $email,
            'phone' => $phone,
            'fax' => $fax
        ]);
    }

    public function update_contact(Request $request)
    {
        try {
            //code...
            $location = $request->location;
            $email = $request->email;
            $phone = $request->phone;
            $fax = $request->fax;
    
            $location_update = Contact::where('key', 'location')->first();
            $email_update = Contact::where('key', 'email')->first();
            $phone_update = Contact::where('key', 'phone')->first();
            $fax_update = Contact::where('key', 'fax')->first();
    
            $location_update->update([
                'value' => $location
            ]);
            $location_update->save();
    
            $email_update->update([
                'value' => $email
            ]);
            $email_update->save();
    
            $phone_update->update([
                'value' => $phone
            ]);
            $phone_update->save();
    
            $fax_update->update([
                'value' => $fax
            ]);
            $fax_update->save();
    
            return redirect()->back()->with('status', 'Successfully update contact');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
