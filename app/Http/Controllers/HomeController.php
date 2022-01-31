<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\News;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $about = Menu::where('key', 'about')->first();
        $knowus = Menu::where('key', 'knowus')->first();
        $news = News::orderBy('created_at', 'DESC')->limit(4)->get();


        return view('welcome', [
            'about' => $about,
            'knowus' => $knowus,
            'news' => $news
        ]);
    }
}
