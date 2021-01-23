<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function getListClass(){
        $list_class =Classes::all();
        return view('listClass',compact('list_class'));
    }
}
