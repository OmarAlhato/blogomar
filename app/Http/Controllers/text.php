<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class text extends Controller
{
    //
    public function select(){
        $p=Student::get();
        return view('text',compact('p'));
    }
}
