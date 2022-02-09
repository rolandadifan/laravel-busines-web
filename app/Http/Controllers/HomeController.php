<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\News;
use App\Models\Project;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $about = Menu::where('key', 'about')->first();
        $knowus = Menu::where('key', 'knowus')->first();
        $yt = Menu::where('key', 'youtube')->first();
        $news = News::orderBy('created_at', 'DESC')->limit(4)->get();
        $projects = Project::with(['gallery'])->orderBy('created_at', 'DESC')->limit(5)->get();


        return view('welcome', [
            'about' => $about,
            'knowus' => $knowus,
            'news' => $news,
            'yt' => $yt,
            'projects' => $projects
        ]);
    }
}
