<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Results;

class Resultcontroller extends Controller
{
    
    public function index() {
        return view ('adminpage.result');
    }

    public function store(Request $request) {
        
        $result = new Results;
        $result->student_id=$request['student_id'];
        $result->Grade_point=$request['Grade_point'];
        $result->Grade=$request['Grade'];
        $result->save();

        return redirect('/student/resultview');

    }

    public function view() {
        $result = Results::all();
        $data=compact('result');
        return view('adminpage.resultview')->with($data);
    }
}