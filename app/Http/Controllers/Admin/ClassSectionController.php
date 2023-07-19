<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Section;


class ClassSectionController extends Controller
{
    public function index(){
        $grades=Grade::all();
        $sections=Section::all();
        return view('admin.ClassSection.ClassSectionManagement',compact('sections','grades'));
    }
    public function createGrade(){
        return view('admin.ClassSection.AddGrade');
    }
    public function createSection(){
        $grades=Grade::all();
        $users=User::all();
        return view('admin.ClassSection.AddSection',compact('grades','users'));
    }
    
    public function storeGrade(Request $request){
        Grade::create([
            'grade_name'=>$request->grade_name,
        ]);
        return redirect('admin/classSections');
    }
    public function storeSection(Request $request){
        $grade=Grade::findOrFail($request->grade_id);
        $user=User::findOrFail($request->user_id);
        ($grade)->sections()->create([
            'user_id'=>$request->user_id,
            'section_name'=>$request->section_name,
            ]);
        return redirect('admin/classSections');
    }
    public function destroyGrade(int $grade_id){
        Grade::FindOrFail($grade_id)->delete();
        
        return redirect('admin/classSections');
    }

    public function destroySection(int $section_id){
        Grade::FindOrFail($section_id)->delete();
        return redirect('admin/classSections');
    }
}
