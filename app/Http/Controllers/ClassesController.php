<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function getListClass()
    {
        $list_class = Classes::all()->sortByDesc('created_at');
        return view('listClass', compact('list_class'));
    }

    public function addClass(Request $request)
    {
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
        $class = Classes::find($id);
        $class->name = $request->name;
        $class->avatar = $request->avatar;
        $class->status = $request->status;
        $class->userId = $request->userId;
        $class->subjectId = $request->subjectId;
        $class->save();
    }

    public function deleteClass($id)
    {
        $class = Classes::find($id);
        $class->delete();
        return response([
            "meta" => ["code" => SC_SUCCESS, "msg" => "MGS_DELETE_SUCCESS"],
            "data" =>$class],
            SC_SERVER_ERROR);
    }
}
