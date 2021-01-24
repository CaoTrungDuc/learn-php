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
    public function addUserAdmin(Request $request){
        $admin = new User();
        $admin->fullName = $request->input('fullName');
        $admin->birthday = $request->input('birthday');
        $admin->email = $request->input('email');
        $admin->phoneNumber = $request->input('phoneNumber');
        $admin->Job = $request->input('Job');
        $admin->avatar = $request->input('avatar');
        $admin->facebook = $request->input('facebook');
        $admin->gender = $request->input('gender');
        $admin->country = $request->input('country');
        $admin->role = $request->input('role');
        $admin->status = $request->input('status');
        $admin->save();
    }
}
