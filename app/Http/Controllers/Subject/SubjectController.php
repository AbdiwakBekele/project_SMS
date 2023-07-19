<?php

namespace App\Http\Controllers\Subject;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index(){
        $subjects=Subject::all();
        return view('admin.Subjects.ManageSubjects',compact('subjects'));
    }
    public function create(){
        return view('admin.Subjects.AddSubjects');
    }
}
