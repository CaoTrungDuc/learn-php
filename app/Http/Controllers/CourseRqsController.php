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
        $courseRqs->frequency=$request->frequency;
        $courseRqs->duration=$request->duration;
        $courseRqs->targetTop=$request->targetTop;
        $courseRqs->wishJob=$request->wishJob;
        $courseRqs->completeExercise=$request->completeExercise;
        $courseRqs->outCondition=$request->outCondition;
        $courseRqs->nowSkill=$request->nowSkill;
        $courseRqs->mission=$request->mission;
        $courseRqs->userId=$request->userId;
        $courseRqs->classesId=$request->classesId;
        $courseRqs->status=$request->status;
        $courseRqs->save();
    }
    public function updateCourseRqs(Request $request,$id){
        $courseRqs=Course_rqs::find($id);
        $courseRqs->frequency=$request->frequency;
        $courseRqs->duration=$request->duration;
        $courseRqs->targetTop=$request->targetTop;
        $courseRqs->wishJob=$request->wishJob;
        $courseRqs->completeExercise=$request->completeExercise;
        $courseRqs->outCondition=$request->outCondition;
        $courseRqs->nowSkill=$request->nowSkill;
        $courseRqs->mission=$request->mission;
        $courseRqs->userId=$request->userId;
        $courseRqs->classesId=$request->classesId;
        $courseRqs->status=$request->status;
        $courseRqs->save();
    }
    public function deleteCourseRqs($id){
        $courseRqs=Course_rqs::find($id);
        $courseRqs->delete();
        return response()->json([
            "meta" =>["code"=>SC_SUCCESS,"mgs" =>"MGS_DELETE_SUCCESS"],
            "data" => $courseRqs],
            SC_SERVER_ERROR);
    }
}
