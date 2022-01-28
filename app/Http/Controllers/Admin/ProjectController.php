<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Category;
use App\Models\ProductGallery;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Exception;

use Illuminate\Support\Facades\Storage;



class ProjectController extends Controller
{
    public function index()
    {
        $project = Project::orderBy('created_at', 'DESC')->get();
        return view('admin.page.project.list')->with([
            'project' => $project
        ]);
    }

    public function create()
    {
        $category = DB::select('select * from categories');
        return view('admin.page.project.create')->with([
            'category' => $category
        ]);
    }

    public function store(Request $request)
    {
        try {
            if($request->file('video_link')){
                $title  = $request->title;
                $slug = Str::slug($title);
                $category_id = $request->category_id;
                $description = $request->description;
                $video = $request->file('video_link')->store('video', 'public');
                $image = $request->file('thumbnail')->store('thumbnail', 'public');
                
        
                $data_projects = Project::create([
                    'title' => $title,
                    'slug' => $slug,
                    'category_id' => $category_id,
                    'description' => $description,
                    'video_link' => $video,
                    'thumbnail' => $image
                ]);

                
                foreach ($request->file('image') as $images) {
                    $path = $images->store('project', 'public');
                    ProductGallery::create([
                        'project_id' => $data_projects->id,
                        'image' => $path
                    ]);
                }
                
        
                return redirect()->route('project.index')->with('status', 'Succesfully create project');
            }else{
                $title  = $request->title;
                $slug = Str::slug($title);
                $category_id = $request->category_id;
                $description = $request->description;

                if($request->file('thumbnail')){
                    return redirect()->back()->with('error', 'Must add video');
                }

                $projects = Project::create([
                    'title' => $title,
                    'slug' => $slug,
                    'category_id' => $category_id,
                    'description' => $description,
                ]);

                
                foreach ($request->file('image') as $images) {
                    $path = $images->store('project', 'public');
                    ProductGallery::create([
                        'project_id' => $projects->id,
                        'image' => $path
                    ]);
                }
                
        
                return redirect()->route('project.index')->with('status', 'Succesfully create project');

            }
        } catch (Exception $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function show($id)
    {
        $project = Project::with(['category', 'gallery'])->findOrFail($id);
        $category = DB::select('select * from categories');
        return view('admin.page.project.edit')->with([
            'project' => $project,
            'category' => $category
        ]);
    }

    public function update(Request $request, $id)
    {
        try {
            $project = Project::findOrFail($id);
            if($request->video_link){
                $title  = $request->title;
                $slug = Str::slug($title);
                $category_id = $request->category_id;
                $description = $request->description;    
                $video = $request->file('video_link')->store('video', 'public');
                $image = $request->file('thumbnail')->store('thumbnail', 'public');

                $file_path = Storage::url($project->video_link);
                $path = str_replace('\\', '/', public_path());
                if (file_exists($path . $file_path)) {
                    unlink($path . $file_path);
                }
                $file_path2 = Storage::url($project->thumbnail);
                $path2 = str_replace('\\', '/', public_path());
                if (file_exists($path2 . $file_path2)) {
                    unlink($path2 . $file_path2);
                }
                $project->update([
                    'title' => $title,
                    'slug' => $slug,
                    'category_id' => $category_id,
                    'description' => $description,
                    'video_link' => $video,
                    'thumbnail' => $image
                ]);
                $project->save();
                return redirect()->back()->with('status', 'Succesfully update project');
            }else if($request->file('thumbnail') && $request->video_link === NULL){
                $title  = $request->title;
                $slug = Str::slug($title);
                $category_id = $request->category_id;
                $description = $request->description;  
                $image = $request->file('thumbnail')->store('thumbnail', 'public');
                if($project->video_link === 'NULL'){
                    return redirect()->back()->with('error', 'Must add videosss');
                }

                $file_path2 = Storage::url($project->thumbnail);
                $path2 = str_replace('\\', '/', public_path());
                if (file_exists($path2 . $file_path2)) {
                    unlink($path2 . $file_path2);
                }
                $project->update([
                    'title' => $title,
                    'slug' => $slug,
                    'category_id' => $category_id,
                    'description' => $description,
                    'thumbnail' => $image
                ]);
                $project->save();
                return redirect()->back()->with('status', 'Succesfully update project');
            }else if(!$request->file('video_link') && !$request->file('thumbnail')){
                $title  = $request->title;
                $slug = Str::slug($title);
                $category_id = $request->category_id;
                $description = $request->description;

                $project->update([
                    'title' => $title,
                    'slug' => $slug,
                    'category_id' => $category_id,
                    'description' => $description,
                ]);

                return redirect()->back()->with('status', 'Succesfully create project');

            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $project = Project::findOrFail($id)->delete();
            return redirect()->back()->with('status', 'Succesfully delete project');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function addImage(Request $request)
    {
        $product = $request->product_id;
        $check = ProductGallery::where('project_id', $product)->get();
        if(count($check) > 6){
            return redirect()->back()->with('error', 'Image maksimum upload 6');
        }
        foreach ($request->file('image') as $images) {
            $path = $images->store('project', 'public');
            ProductGallery::create([
                'project_id' => $product,
                'image' => $path
            ]);
        }
        return redirect()->back()->with('status', 'Succesfully add image');

    }

    public function destroyGallery($id)
    {
        try {
            $gallery = ProductGallery::findOrFail($id);
            $file_path2 = Storage::url($gallery->image);
            $path2 = str_replace('\\', '/', public_path());
                if (file_exists($path2 . $file_path2)) {
                    unlink($path2 . $file_path2);
                }
            $gallery->delete();
            return redirect()->back()->with('status', 'Succesfully delete image');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
