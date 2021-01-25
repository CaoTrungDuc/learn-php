<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getListUser(){
        $list_user =User::all()->sortByDesc('created_at');
        return view('listUser',compact('list_user'));
    }
    public function addAdmin(Request $request){
        $admin = new User();
        $admin->fullName = $request->fullName;
        $admin->birthday = $request->birthday;
        $admin->email = $request->email;
        $admin->phoneNumber = $request->phoneNumber;
        $admin->Job = $request->Job;
        $admin->avatar = $request->avatar;
        $admin->facebook = $request->facebook;
        $admin->gender = $request->gender;
        $admin->country = $request->country;
        $admin->role = $request->role;
        $admin->status = $request->status;
        $admin->save();
    }
    public function updateAdmin(Request $request ,$id){
        $admin = User::find($id);
        $admin->fullName = $request->fullName;
        $admin->birthday = $request->birthday;
        $admin->email = $request->email;
        $admin->phoneNumber = $request->phoneNumber;
        $admin->Job = $request->Job;
        $admin->avatar = $request->avatar;
        $admin->facebook = $request->facebook;
        $admin->gender = $request->gender;
        $admin->country = $request->country;
        $admin->role = $request->role;
        $admin->status = $request->status;
        $admin->save();
    }
    public function deleteAdmin($id): \Illuminate\Http\JsonResponse
    {
        $admin = User::find($id);
        $admin ->delete();
        return response()->json([
            "meta" =>["code"=>SC_SUCCESS,"mgs" =>"MGS_DELETE_SUCCESS"],
            "data" => $admin],
            SC_SERVER_ERROR);
    }
}
