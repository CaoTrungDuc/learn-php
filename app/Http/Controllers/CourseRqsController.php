<?php

namespace App\Http\Controllers;

use App\Models\Course_rqs;
use Illuminate\Http\Request;

class CourseRqsController extends Controller
{
    public function getListCourseRqs(){
        $list_courseRqs=Course_rqs::all()->sortByDesc('created_at');
        return view('listCourseRqs',compact('list_courseRqs'));
    }
    public function addCourseRqs(Request $request){
        $courseRqs=new Course_rqs();
        $courseRqs->frequency=$request->input('frequency');
        $courseRqs->duration=$request->input('duration');
        $courseRqs->targetTop=$request->input('targetTop');
        $courseRqs->wishJob=$request->input('wishJob');
        $courseRqs->completeExercise=$request->input('completeExercise');
        $courseRqs->outCondition=$request->input('outCondition');
        $courseRqs->nowSkill=$request->input('nowSkill');
        $courseRqs->mission=$request->input('mission');
        $courseRqs->userId=$request->input('userId');
        $courseRqs->classesId=$request->input('classesId');
        $courseRqs->status=$request->input('status');
        $courseRqs->save();
    }
}
