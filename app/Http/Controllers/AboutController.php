<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Employee;

class AboutController extends Controller
{
    public function about()
    {
        $about = Menu::where('key', 'about')->first();
        $visi = Menu::where('key', 'visi')->first();
        $misi = Menu::where('key', 'misi')->first();
        $pic = Menu::where('key', 'pic_about')->first();
        $employes = Employee::orderBy('created_at', 'DESC')->get();
        return view('page.about', [
            'about' => $about,
            'visi' => $visi,
            'misi' => $misi,
            'employes' => $employes,
            'pic' => $pic
        ]);
    }
    
}
