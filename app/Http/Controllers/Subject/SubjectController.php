<?php

namespace App\Http\Controllers\Subject;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\User;
use App\Models\GradeSubject;
use App\Models\Subject;
use App\Models\UserSubjectGrade;
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

    public function store(Request $request){
        Subject::create([
            'subject_name'=>$request->subject_name,
            'subject_code'=>$request->subject_code,
        ]);
        return redirect('admin/subjects');
    }

    public function assignForGrade()
    {
        $classes = Grade::all();
        $subjects = Subject::all();

        return view('admin.Subjects.AssignSubjectForClass', compact('classes', 'subjects'));
    }

    public function assignForTeacher()
    {
        $users = User::all();
        $subjects = Subject::all();
        $classes = Grade::all();

        return view('admin.Subjects.AsssignSubjectForTeacher', compact('users', 'subjects','classes'));
    }


    public function assignSubjects(Request $request){
        $class = new GradeSubject;
        $subject = $request->input('subjects', []);
        // echo $garde;
        // echo implode(', ', $subject);
                foreach ($subject as $subjectId) {
                
                        $class->create([
                        'grade_id'=>$request->grade_id,
                        'subject_id' => $subjectId
                    ]);
                    }
        return redirect('admin/subjects');
       
    }

    public function assignSubjectsForTeacher(Request $request){
        $Userclass = new UserSubjectGrade;
        $grade = $request->input('classes', []);
        // echo $garde;
        // echo implode(', ', $subject);
                foreach ($grade as $gradeID) {
                
                        $Userclass->create([
                        'user_id'=>$request->user_id,
                        'subject_id'=>$request->subject_id,
                        'grade_id' => $gradeID
                    ]);
                    }
        return redirect('admin/subjects');
       
    }

    
    



}
