<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClassesController extends Controller
 {
    public function getListClass()
    {
        $list_class = Classes::all()->sortByDesc('created_at');
        return view('listClass', compact('list_class'));
    }
    public function searchClass(Request $request)
    {
        $name = $request->keywords_name;
        $list_class = Classes::where('name', 'like', "%{$name}%")->get();
        return view('listClass', compact('list_class'));
    }
    public function addClass(Request $request)
    {
        $validate = Validator::make($request->all(), [
            "name" => "required|unique:classes|max:50",
            "avatar" => "required|url",
            "status" => "required|integer|min:1",
            "userId" => "required|integer|min:1",
            "subjectId" => "required|integer|min:1"
        ]);
        if ($validate->fails()) {
            return response()->json([
                "meta" => ["code" => "Validate loi", "msg" => $validate->errors()->all()],
                "data" => $validate->errors()->keys()],
                SC_400);
        }
        $class = new Classes();
        $class->name = $request->name;
        $class->avatar = $request->avatar;
        $class->status = $request->status;
        $class->userId = $request->userId;
        $class->subjectId = $request->subjectId;
        $class->save();
    }

    public function updateClass(Request $request, $id)
    {
    try{
        $validate = Validator::make($request->all(), [
            "name" => "required|max:50",
            "avatar" => "required|url",
            "status" => "required|integer|min:1",
            "userId" => "required|integer|min:1",
            "subjectId" => "required|integer|min:1"
        ]);
        if ($validate->fails()) {
            return response()->json([
                "meta" => ["code" => "Validate loi", "msg" => $validate->errors()->all()],
                "data" => $validate->errors()->keys()],
                SC_400);
        }
        $class = Classes::find($id);
        $class->name = $request->name;
        $class->avatar = $request->avatar;
        $class->status = $request->status;
        $class->userId = $request->userId;
        $class->subjectId = $request->subjectId;
        $class->save();
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

    public function deleteClass($id)
    {
        $class = Classes::find($id);
        $class->delete();
        return response()->json([
            "meta" => ["code" => SC_SUCCESS, "msg" => "MGS_DELETE_SUCCESS"],
            "data" => $class],
            SC_SERVER_ERROR);
    }
}
