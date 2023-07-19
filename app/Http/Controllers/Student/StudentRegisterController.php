<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Parents;
use App\Models\Student;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
// use Hash;


class StudentRegisterController extends Controller
{
    public function index()
    {
        $data = Student::orderBy('id','DESC')->paginate(5);
       return view('admin.Students.ManageStudents',compact('data'))->with('i',(request()->input('page',1) - 1)*5); 
    }
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        $parents=Parents::all();
        return view('admin.Students.RegisterStudents',compact('roles','parents'));
    }
    public function store(Request $request)
    {
        $parent=Parents::FindOrFail($request->parent_id);
        $input=($parent)->students()->create([
                'student_name'=>$request->student_name,
                'email'=>$request->email,
                'age'=>$request->age,
                'year'=>$request->year,
                'grade'=>$request->grade,
                'address'=>$request->address,
                'mothers_name'=>$request->mothers_name,
                'fathers_name'=>$request->fathers_name,
                'school_branch'=>$request->school_branch,
                'password' =>$request->password,
                'roles'=>'required'
        ]);

      
        $input->assignRole($request->roles);
        
        return redirect()->route('admin.Students.ManageStudents')
                        ->with('success','User created successfully');
    }
    public function destroy(int $student_id){
        Student::FindOrFail($student_id)->delete();
        return redirect('admin/Students');
    }
}
                                                                                                                                                                                                                                                                                                                                                                                                                                                   