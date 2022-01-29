<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function news()
    {
        return view('page.news');
    }

    public function detail()
    {
        return view('page.news-detail');
    }
}
