<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Storage;


class EmployeeController extends Controller
{
    public function index()
    {
        $datas = Employee::orderBy('created_at', 'DESC')->get();
        return view('admin.page.employee.index', ['datas' => $datas]);
    }

    public function store(Request $request)
    {
        try {
            //code...
            $data['name'] = $request->name;
            $data['role'] = $request->role;
            $data['phone'] = $request->phone;
            $data['email'] = $request->email;
            // $data['avatar'] = $request->file('avatar')->store('employee', 'public');
            

            $fileName = time().'.'.$request->file('avatar')->extension();  
            $request->file('avatar')->move(public_path('upload/employe'), $fileName);

            $data['avatar'] = 'upload/employe/' . $fileName;
    
            Employee::create($data);

            return redirect()->back()->with('status', 'Successfully created employe');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', $th->getMessage());

        }
    }

    public function show($id)
    {
        $data = Employee::findOrFail($id);
        return view('admin.page.employee.edit', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        try {
            //code...
            $employee = Employee::findOrFail($id);
            $name = $request->name;
            $role = $request->role;
            $phone = $request->phone;
            $email = $request->email;
            if($request->file('avatar')){
                // $avatar = $request->file('avatar')->store('employee', 'public');
                $fileName = time().'.'.$request->file('avatar')->extension();  
                $request->file('avatar')->move(public_path('upload/employe'), $fileName);

                $file_path = '/' .$employee->avatar;
                $path = str_replace('\\', '/', public_path());
                if (file_exists($path . $file_path)) {
                    unlink($path . $file_path);
                }
                $employee->update([
                    'name' => $name,
                    'role' => $role,
                    'phone' => $phone,
                    'email' => $email,
                    'avatar' => 'upload/employe/' . $fileName
                ]);
                $employee->save();
                return redirect()->back()->with('status', 'Successfully update employe');
            }
            $employee->update([
                'name' => $name,
                'role' => $role,
                'phone' => $phone,
                'email' => $email,
            ]);
            $employee->save();
            return redirect()->back()->with('status', 'Successfully update employe');
            
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        // $file_path = Storage::url($employee->avatar);
        $file_path = '/' .$employee->avatar;
        $path = str_replace('\\', '/', public_path());
        if (file_exists($path . $file_path)) {
            unlink($path . $file_path);
        }
        $employee->delete();
        return redirect()->back()->with('status', 'Successfully delete employe');
    }
}
