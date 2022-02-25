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
                // $video = $request->file('video_link')->store('video', 'public');
                // $image = $request->file('thumbnail')->store('thumbnail', 'public');

                $fileName1 = time().'.'.$request->file('video_link')->extension();  
                $request->file('video_link')->move(public_path('upload/video'), $fileName1);

                $fileName2 = time().'.'.$request->file('thumbnail')->extension();  
                $request->file('thumbnail')->move(public_path('upload/thumbnail'), $fileName2);
                
        
                $data_projects = Project::create([
                    'title' => $title,
                    'slug' => $slug,
                    'category_id' => $category_id,
                    'description' => $description,
                    'video_link' => 'upload/video/' .$fileName1,
                    'thumbnail' => 'upload/thumbnail/' .$fileName2,
                ]);

                
                foreach ($request->file('image') as $images) {
                    $fileName3 =  time() . rand(10,100) . '.'.$images->extension();  
                    $images->move(public_path('upload/project'), $fileName3);
                    ProductGallery::create([
                        'project_id' => $data_projects->id,
                        'image' => 'upload/project/' . $fileName3
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
                    $fileName =  time() . rand(10,100) . '.'.$images->extension();  
                    $images->move(public_path('upload/project'), $fileName);
                    ProductGallery::create([
                        'project_id' => $projects->id,
                        'image' => 'upload/project/' . $fileName
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
                // $video = $request->file('video_link')->store('video', 'public');
                // $image = $request->file('thumbnail')->store('thumbnail', 'public');

                $fileName1 = time().'.'.$request->file('video_link')->extension();  
                $request->file('video_link')->move(public_path('upload/video'), $fileName1);

                $fileName2 = time().'.'.$request->file('thumbnail')->extension();  
                $request->file('thumbnail')->move(public_path('upload/thumbnail'), $fileName2);

                // $file_path = Storage::url($project->video_link);
                $file_path = '/' . $project->video_link;
                $path = str_replace('\\', '/', public_path());
                if (file_exists($path . $file_path)) {
                    unlink($path . $file_path);
                }
                // $file_path2 = Storage::url($project->thumbnail);
                $file_path2 = '/' . $project->thumbnail;
                $path2 = str_replace('\\', '/', public_path());
                if (file_exists($path2 . $file_path2)) {
                    unlink($path2 . $file_path2);
                }
                $project->update([
                    'title' => $title,
                    'slug' => $slug,
                    'category_id' => $category_id,
                    'description' => $description,
                    'video_link' => 'upload/video/' .$fileName1,
                    'thumbnail' => 'upload/thumbnail/' .$fileName2,
                ]);
                $project->save();
                return redirect()->back()->with('status', 'Succesfully update project');
            }else if($request->file('thumbnail') && $request->video_link === NULL){
                $title  = $request->title;
                $slug = Str::slug($title);
                $category_id = $request->category_id;
                $description = $request->description;  
                // $image = $request->file('thumbnail')->store('thumbnail', 'public');
                $fileName2 = time().'.'.$request->file('thumbnail')->extension();  
                $request->file('thumbnail')->move(public_path('upload/thumbnail'), $fileName2);


                // $file_path2 = Storage::url($project->thumbnail);
                $file_path2 = '/' . $project->thumbnail;
                $path2 = str_replace('\\', '/', public_path());
                if (file_exists($path2 . $file_path2)) {
                    unlink($path2 . $file_path2);
                }
                $project->update([
                    'title' => $title,
                    'slug' => $slug,
                    'category_id' => $category_id,
                    'description' => $description,
                    'thumbnail' => 'upload/thumbnail/' .$fileName2,
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
            $project = Project::findOrFail($id);
             $file_path = '/' . $project->video_link;
             $path = str_replace('\\', '/', public_path());
             if (file_exists($path . $file_path)) {
                 unlink($path . $file_path);
             }
             $file_path2 = '/' . $project->thumbnail;
             $path2 = str_replace('\\', '/', public_path());
             if (file_exists($path2 . $file_path2)) {
                 unlink($path2 . $file_path2);
             }
             $project->delete();
            return redirect()->route('project.index')->with('status', 'Succesfully delete project');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'harus menghapus image terlebih dahulu');
        }
    }

    public function addImage(Request $request)
    {
        try {
            //code...
            $product = $request->project_id;
            foreach ($request->file('image') as $images) {
                // $path = $images->store('project', 'public');
                $fileName =  time() . rand(10,100) . '.'.$images->extension();  
                $images->move(public_path('upload/project'), $fileName);
                ProductGallery::create([
                    'project_id' => $product,
                    'image' => 'upload/project/' . $fileName
                ]);
            }
            return redirect()->back()->with('status', 'Succesfully add image');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', $th->getMessage());
        }

    }

    public function destroyGallery($id)
    {
        try {
            $gallery = ProductGallery::findOrFail($id);
            // $file_path2 = Storage::url($gallery->image);
            $file_path2 = '/' . $gallery->image;
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
