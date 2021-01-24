<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function getListClass(){
        $list_class =Classes::all()->sortByDesc('created_at');
        return view('listClass',compact('list_class'));
    }
    public function addClass(Request $request){
        $class = new Classes();
        $class->name =$request->input('name');
        $class->avatar =$request->input('avatar');
        $class->status =$request->input('status');
        $class->userId =$request->input('userId');
        $class->subjectId =$request->input('subjectId');
        $class->save();
    }
}
