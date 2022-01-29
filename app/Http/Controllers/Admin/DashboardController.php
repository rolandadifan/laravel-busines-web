<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\News;
use App\Models\Employee;

class DashboardController extends Controller
{
    public function index()
    {
        $project = Project::all()->count();
        $news = News::all()->count();
        $employee = Employee::all()->count();
        return view('admin/dashboad', [
            'project' => $project,
            'news' => $news,
            'employee' => $employee
        ]);
    }
}
