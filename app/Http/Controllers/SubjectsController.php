<?php

namespace App\Http\Controllers;

use App\Models\Subjects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubjectsController extends Controller
{
    public function getListSubject()
    {
        $list_subject = Subjects::all()->sortByDesc('created_at');
        return view('listSubject', compact('list_subject'));
    }

    public function addSubject(Request $request)
    {
        $validate =Validator::make($request->all(),[
            "name" =>"required|unique:subjects",
            "description" =>"required",
            "avatar" =>"required|url",
            "status" =>"required|integer",
            "userId" =>"required|integer",
        ]);
        if ($validate->fails()) {
            return response()->json([
                "meta" => ["code" => "Validate loi", "msg" => $validate->errors()->all()],
                "data" => $validate->errors()->keys()],
                SC_400);
        }
        $subject = new Subjects();
        $subject->name = $request->name;
        $subject->description = $request->description;
        $subject->avatar = $request->avatar;
        $subject->status = $request->status;
        $subject->userId = $request->userId;
        $subject->save();
    }

    public function updateSubject(Request $request, $id)
    {
        try{
        $validate =Validator::make($request->all(),[
            "name" =>"required",
            "description" =>"required",
            "avatar" =>"required|url",
            "status" =>"required|integer|max:2|min:1",
            "userId" =>"required|integer",
        ]);
        if ($validate->fails()) {
            return response()->json([
                "meta" => ["code" => "Validate loi", "msg" => $validate->errors()->all()],
                "data" => $validate->errors()->keys()],
                SC_400);
        }
        $subject = Subjects::find($id);
        $subject->name = $request->name;
        $subject->description = $request->description;
        $subject->avatar = $request->avatar;
        $subject->status = $request->status;
        $subject->userId = $request->userId;
        $subject->save();
        }catch (ModelNotFoundException $ex) {
            return response()->json([],
            QUERY_ERROR);
        }catch (Exception $ex) {
        return response()->json([
            "meta" => ["code" => SC_SERVER_ERROR, "msg" => "SERVER LOI"],
            "data" => $ex],
        SC_SERVER_ERROR);
        }
    }
    public function deleteSubject($id)
    {
        $subject = Subjects::find($id);
        $subject->delete();
        return response()->json([
            "meta" =>["code"=>SC_SUCCESS,"mgs" =>"MGS_DELETE_SUCCESS"],
            "data" => $subject],
            SC_SERVER_ERROR);
    }
}
