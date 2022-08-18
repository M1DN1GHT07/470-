<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class studentcontroller extends Controller
{
    
    public function index() {
        return view ('adminpage.student');
    }

    public function store(Request $request ) {
        
        $student = new Student;
        $student->name=$request['name'];
        $student->email=$request['email'];
        $student->save();

        return redirect('/student/view');

    }

    public function view() {
        $students = Student::all();
        $data=compact('students');
        return view('adminpage.customerview')->with($data);
    }

    public function delete($id) {

      $student= Student::find($id);
      if(!is_null($student)) {
        $student->delete();
      }
      return redirect('/student/view');

    }
    public function edit($id) {
        
        $student = Student::find($id);
        if(is_null($student)) {
            return redirect('/student/view');
          }
        else {
           $url = url('/student/view/update') ."/" .$id;
           $data = compact('student');
           return view ('adminpage.update') ->with ($data);

        }
    }
    public function update($id, Request $request ) {
        
      $student = Student::find($id);
      $student->name=$request['name'];
      $student->email=$request['email'];
      $student->save();

      return redirect('/student/view');

  }

}