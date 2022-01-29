<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function project()
    {
        return view('page.project');
    }

    public function detail()
    {
        return view('page.detail-project');
    }
}
