<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin extends Controller
{
    public function student() {
        return view ('adminpage.student') ;
    }
    public function result() {
        return view ('adminpage.result') ;
    }

    
    
}
