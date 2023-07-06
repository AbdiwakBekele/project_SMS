<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.teacher.studentgrades');
    }
    // public function index()
    // {
    //     return view('pages.admin.dashboard');
    // }
    public function parentlist(){


        return view('pages.admin.parent.parentlist');
    }
    public function addparent(){

        return view('pages.admin.parent.registerparent');
    }
    public function checkregister(){

        return view('pages.admin.parent.register');
    }

    // roles
    public function addrole(){


        return view('pages.admin.role.addrole');
    }
    public function permissions(){

        return view('pages.admin.role.permissions');
    }
    public function roles(){

        return view('pages.admin.role.roles');
    }public function updatepermission(){


        return view('pages.admin.role.updatepermission');
    }
    public function updaterole(){

        return view('pages.admin.role.updaterole');
    }
    public function registerstudent(){

        return view('pages.admin.student.registerstudent');
    }
    public function studentlist(){

        return view('pages.admin.student.studentlist');
    }
    public function  Attendancereport(){
        return view('pages.admin.student.Attendancereport');
    }
    public function  studentattendance(){
        return view('pages.admin.student.studentattendance');
    }
    public function  registerstaff(){
        return view('pages.admin.staff.registerstaff');
    }
    public function  stafflist(){
        return view('pages.admin.staff.stafflist');
    }
}