<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\faculty;
use App\Models\Results;
use App\Models\library;

class Productscontroll extends Controller
{
    public function index() {
        return view ('pages.index') ;
    }

    public function About() {
        $result = Results::all();
        $data=compact('result');
        return view('pages.About')->with($data);
    }

    public function Courses() {
        return view ('pages.Home') ;
    }

    public function Notice() {
        return view ('pages.Notice') ;
    }

    public function faculty() {
        $faculty = new Faculty;
        $faculty = Faculty::all();
        $data=compact('faculty');
        return view('pages.faculty')->with($data);
    }

    public function library() {
        $library = new library;
        $library = library::all();
        $data=compact('library');
        return view('pages.library')->with($data);
    }
}

