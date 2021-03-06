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
        $pic = Menu::where('key', 'pic_about')->first();
        return view('admin.page.menu.about', [
            'about' => $about,
            'visi' => $visi,
            'misi' => $misi,
            'knowus' => $knowus,
            'pic' => $pic
        ]);
    }

    public function video()
    {
        $yt = Menu::where('key', 'youtube')->first();
        return view('admin.page.menu.video', [
            'yt' => $yt
        ]);
    }

    public function video_update(Request $request)
    {
        try {
            //code...
            $yt['value'] = $request->yt;
            $yt_update = Menu::where('key', 'youtube')->first();
            $yt_update->update($yt);
            return redirect()->back()->with('status', 'Successfully update video');  
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error',  $th->getMessage());
        }

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

    public function update_image(Request $request)
    {
        try {
            //code...
            $pic = $request->pic_about;
            $image = Menu::where('key', 'pic_about')->first();
            if($image->value === 'no pic'){
                // $image_insert = $request->file('pic_about')->store('abouts', 'public');
                $fileName =  time().'.'.$request->file('pic_about')->extension();  
                $request->file('pic_about')->move(public_path('upload/about'), $fileName);
                $image->update([
                    'value' => 'upload/about/' . $fileName
                ]);
                $image->save();
                return redirect()->back()->with('status', 'Successfully update menu');   
            }else{
                $file_path = $file_path = '/' . $image->value;
                $path = str_replace('\\', '/', public_path());
                if (file_exists($path . $file_path)) {
                    unlink($path . $file_path);
                }
                // $image_insert = $request->file('pic_about')->store('abouts', 'public');
                $fileName =  time().'.'.$request->file('pic_about')->extension();  
                $request->file('pic_about')->move(public_path('upload/about'), $fileName);
                $image->update([
                    'value' => 'upload/about/' . $fileName
                ]);
                $image->save();
                return redirect()->back()->with('status', 'Successfully update menu');  

            }
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error',  $th->getMessage());
        }
    }
}
