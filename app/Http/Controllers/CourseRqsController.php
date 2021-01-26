<?php

namespace App\Http\Controllers;

use App\Models\Course_rqs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourseRqsController extends Controller
{
    public function getListCourseRqs(){
        $list_courseRqs=Course_rqs::all()->sortByDesc('created_at');
        return view('listCourseRqs',compact('list_courseRqs'));
    }
    public function addCourseRqs(Request $request){
        $validate = Validator::make($request->all(),[
            "frequency"=>"required|integer|max:3|min:1",
            "duration"=>"required|integer",
            "targetTop"=>"required|integer|max:3|min:1",
            "wishJob"=>"required|integer|max:3|min:1",
            "completeExercise"=>"required|integer|max:3|min:1",
            "outCondition"=>"required|integer|max:3|min:1",
            "nowSkill"=>"required",
            "mission"=>"required",
            "userId"=>"required|integer",
            "classesId"=>"required|integer",
            "status"=>"required|integer|max:3|min:1",
        ]);
        if ($validate->fails()) {
            return response()->json([
                "meta" => ["code" => "Validate loi", "msg" => $validate->errors()->all()],
                "data" => $validate->errors()->keys()],
                SC_400);
        }
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
    public function updateCourseRqs(Request $request,$id)
    {
        try{
        $validate = Validator::make($request->all(),[
            "frequency"=>"required|integer|max:3|min:1",
            "duration"=>"required|integer",
            "targetTop"=>"required|integer|max:3|min:1",
            "wishJob"=>"required|integer|max:3|min:1",
            "completeExercise"=>"required|integer|max:3|min:1",
            "outCondition"=>"required|integer|max:3|min:1",
            "nowSkill"=>"required",
            "mission"=>"required",
            "userId"=>"required|integer",
            "classesId"=>"required|integer",
            "status"=>"required|integer|max:3|min:1",
        ]);
        if ($validate->fails()) {
            return response()->json([
                "meta" => ["code" => "Validate loi", "msg" => $validate->errors()->all()],
                "data" => $validate->errors()->keys()],
                SC_400);
        }
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
        }catch (ModelNotFoundException $ex) {
            return response()->json([],
                QUERY_ERROR);
        } catch (Exception $ex) {
            return response()->json([
                "meta" => ["code" => SC_SERVER_ERROR, "msg" => "SERVER LOI"],
                "data" => $ex],
                SC_SERVER_ERROR);
        }
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
