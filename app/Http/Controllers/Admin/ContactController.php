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

    }
}
