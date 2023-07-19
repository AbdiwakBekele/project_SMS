<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Hash;
// use Illuminate\Support\Arr;

class UserRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::orderBy('id','DESC')->paginate(5);
       return view('admin.Staff.ManageUsers',compact('data'))->with('i',(request()->input('page',1) - 1)*5); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('admin.Staff.RegisterUsers',compact('roles'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       

        $this->validate($request,[
                'full_name'=>'required',
                'email'=>'required|email|unique:users,email',
                'phone_number'=>'required',
                'address'=>'required',
                'city'=>'required',
                'state'=>'required',
                'literacy_level'=>'required',
                'password' => 'required|same:confirm-password',
                'roles'=>'required'
        ]);
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
    
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
       
        return redirect()->route('admin.Staff.ManageUsers')
                        ->with('success','User created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $user_id){
        User::FindOrFail($user_id)->delete();
        return redirect('admin/Users');
    }
}
