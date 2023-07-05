<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles=Role::WhereNotIn('name',['admin'])->get();
        $permissions=Permission::all();
        return view('admin.RolePermission.RolePermissionManagement', compact('roles','permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createRole()
    {
        $permission = Permission::get();
        return view('admin.RolePermission.CreateRole',compact('permission'));
    }
    public function createPermission()
    {
        //
        return view('admin.RolePermission.CreatePermission');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function roleStore(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|unique:roles,name',
            'permission'=>'required',
        ]);
       $role= Role::create(['name'=>$request->input('name')]);
       $role->syncPermissions($request->input('permission'));
        return redirect()->route('admin.RolePermission.RolePermissionManagement');
    }
    public function permissionStore(Request $request)
    {
        $validated=$request->validate(['name'=>['required','min:3']]);
        Permission::create($validated);
        return redirect()->route('admin.RolePermission.RolePermissionManagement');
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
    public function editPermission(string $id){
        $permission = Permission::find($id);
        return view('admin.RolePermission.EditPermission', compact('permission'));
    }
    public function editRole(string $id){
        $role = Role::find($id);
        $permissions=Permission::all();
        return view('admin.RolePermission.EditRole', compact('role','permissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatePermission(Request $request)
    {
        $validated=$request->validate(['name'=>['required']]);
        $permission = Permission::find($request->permission);
        $permission->update($validated);
        
        return redirect()->route('admin.RolePermission.RolePermissionManagement');
    }

    public function updateRole(Request $request)
    {
        $validated=$request->validate(['name'=>['required']]);
        $role = Role::find($request->role);
        $role->update($validated);
        
        return redirect()->route('admin.RolePermission.RolePermissionManagement');
    }
    /**
     * Remove the specified resource from storage.
     */


    public function givePermission(Request $request,Role $role){
        if($role->hasPermissionTo($request->permission)){
            return back()->with('message','permission added');

        }
        $role->givePermissionTo($request->permission);
        return back()->with('message','Permission added');

    }

    public function revokePermission(Role $role, Permission $permission){
        if($role->hasPermissionTo($permission)){
            $role->revokePermissionTo($permission);
            return back()->with('message','permission revoke');
        }
        return back()->with('message','permission not exist');
    }

    public function destroyRole(int $role_id){
        Role::FindOrFail($role_id)->delete();
        return redirect('admin/roles');
    }
    public function destroyPermission(int $permission_id){
        Permission::FindOrFail($permission_id)->delete();
        return redirect('admin/roles');
    }
}
