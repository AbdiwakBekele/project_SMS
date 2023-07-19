<?php

namespace App\Http\Controllers\Parent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Parents;
use Hash;
use Spatie\Permission\Models\Role;

class ParentRegisterController extends Controller
{
    public function index()
    {
        $data = Parents::orderBy('id','DESC')->paginate(5);
       return view('admin.Parents.ManageParents',compact('data'))->with('i',(request()->input('page',1) - 1)*5); 
    }
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('admin.Parents.RegisterParents',compact('roles'));
    }
    public function store(Request $request)
    {
        

        $this->validate($request,[
                'parents_name'=>'required',
                'email'=>'required|email|unique:users,email',
                'phone_number'=>'required',
                'phone_number2'=>'required',
                'address'=>'required',
                'password' => 'required|same:confirm-password',
                'roles'=>'required'
        ]);
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
    
        $parent = Parents::create($input);
        $parent->assignRole($request->input('roles'));
        
        return redirect()->route('admin.Parents.ManageParents')
                        ->with('success','User created successfully');
    }
    public function destroy(int $parent_id){
        Parents::FindOrFail($parent_id)->delete();
        return redirect('admin/Parents');
    }
}
