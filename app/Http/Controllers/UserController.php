<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getListUser(){
        $list_user =User::all();
        return view('listUser',compact('list_user'));
    }
}
