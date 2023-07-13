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


    //  public function index()
    //  {
    //      return view('pages.parent.children');
    //  }
    // teacher
    
    public function teacherprofile(){
        return view('pages.teacher.home');
     }
     public function homeattendance(){
        return view('pages.teacher.homeattendance');
     }
     public function mystudent(){
        return view('pages.teacher.studentlist');
     }
     public function studentgrade(){
        return view('pages.teacher.studentgrades');
     }
     public function childgrade(){
        return view('pages.parent.children_grade');
     }

     public  function index(){
return view('pages.teacher.class');
     }
    // public function index()
    // {
    //     return view('pages.teacher.class');
    // }

    public function grades()
    {
        return view('pages.student.Mygrades');
    }
    public function attendances()
    {
        return view('pages.student.attendance');
    }
    // student controller '


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