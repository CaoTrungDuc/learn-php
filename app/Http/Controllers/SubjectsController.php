<?php

namespace App\Http\Controllers;

use App\Models\Subjects;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    public function getListSubject()
    {
        $list_subject = Subjects::all()->sortByDesc('created_at');
        return view('listSubject', compact('list_subject'));
    }

    public function addSubject(Request $request)
    {
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
        $subject = Subjects::find($id);
        $subject->name = $request->name;
        $subject->description = $request->description;
        $subject->avatar = $request->avatar;
        $subject->status = $request->status;
        $subject->userId = $request->userId;
        $subject->save();
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
