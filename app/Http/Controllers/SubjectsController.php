<?php

namespace App\Http\Controllers;

use App\Models\Subjects;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    public function getListSubject(){
        $list_subject=Subjects::all()->sortByDesc('created_at');
        return view('listSubject',compact('list_subject'));
    }
    public function addSubject(Request $request){
        $subject = new Subjects();
        $subject->name =$request->input('name');
        $subject->description =$request->input('description');
        $subject->avatar =$request->input('avatar');
        $subject->status =$request->input('status');
        $subject->userId =$request->input('userId');
        $subject->save();
    }
}
