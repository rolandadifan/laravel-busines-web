<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $about = Menu::where('key', 'about')->first();
        $visi = Menu::where('key', 'visi')->first();
        $misi = Menu::where('key', 'misi')->first();
        $knowus = Menu::where('key', 'knowus')->first();
        return view('admin.page.menu.about', [
            'about' => $about,
            'visi' => $visi,
            'misi' => $misi,
            'knowus' => $knowus
        ]);
    }

    public function update(Request $request)
    {
        try {
            //code...
            $about['value'] = $request->about;
            $visi['value'] = $request->visi;
            $misi['value'] = $request->misi;
            $knowus['value'] = $request->knowus;
    
            $about_update = Menu::where('key', 'about')->first();
            $visi_update = Menu::where('key', 'visi')->first();
            $misi_update = Menu::where('key', 'misi')->first();
            $knowus_update = Menu::where('key', 'knowus')->first();
    
            $about_update->update($about);
            $visi_update->update($visi);
            $misi_update->update($misi);
            $knowus_update->update($knowus);
    
            return redirect()->back()->with('status', 'Successfully update menu');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error',  $th->getMessage());
        }
    }
}
