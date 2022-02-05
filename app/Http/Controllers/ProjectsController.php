<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Project;

class ProjectsController extends Controller
{
    public function project()
    {
        $categories = Category::with(['project'])->get();
        $projects = Project::with(['gallery'])->orderBy('created_at', 'DESC')->paginate(18);
        return view('page.project', [
            'categories' => $categories,
            'projects' => $projects
        ]);
    }

    public function detail($slug)
    {
        $projects = Project::with(['gallery'])->where('slug', $slug)->first();
        $int = Project::all()->count();

        $lenght = $int;
        if ($int >= 8 ){
            $lenght = 8;
        } 
        $random = Project::all()->random($lenght);
        return view('page.detail-project', [
            'projects' => $projects,
            'random' => $random
        ]);
    }

    public function category(Request $request)
    {
        $id = $request->id;
        $categories = Category::with(['project'])->get();
        $projects = Project::with(['gallery'])->orderBy('created_at', 'DESC')->where('category_id', $id)->get();
        return view('page.category', [
            'categories' => $categories,
            'projects' => $projects
        ]);
    }

    public function cari(Request $request)
    {
        $name = $request->q;
        $categories = Category::with(['project'])->get();
        $projects = Project::where('title','LIKE', '%'.$name.'%')->with(['gallery'])->get();
        return view('page.category', [
            'categories' => $categories,
            'projects' => $projects
        ]);
    }

    public function terlama()
    {
        $categories = Category::with(['project'])->get();
        $projects = Project::with(['gallery'])->orderBy('created_at', 'ASC')->paginate(18);
        return view('page.project-olders', [
            'categories' => $categories,
            'projects' => $projects
        ]);
    }
}
