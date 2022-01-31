<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewController extends Controller
{
    public function news()
    {
        $news = News::orderBy('created_at', 'DESC')->paginate(5);
        return view('page.news', [
            'news' => $news
        ]);
    }

    public function detail($slug)
    {
        $news = News::where('slug', $slug)->first();
        $int = News::all()->count();

        $lenght = $int;
        if ($int >= 8 ){
            $lenght = 8;
        } 
        $random = News::all()->random($lenght);
        return view('page.news-detail', [
            'news' => $news,
            'random' => $random
        ]);
    }
}
