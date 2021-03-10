<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function getListUser()
    {
        $list_user = User::all()->sortByDesc('created_at');
        return view('listUser', compact('list_user'));
    }

    public function addAdmin(Request $request)
    {
        $validate = Validator::make($request->all(), [
            "fullName" => "required|max:30|min:2",
            "birthday" => "required|integer",
            "email" => "required|email|unique:users",
            "Job" => "required",
            "phoneNumber" => "required|integer|unique:users",
            "avatar" => "required|unique:users",
            "facebook" => "required|unique:users|url",
            "gender" => "required|integer",
            "country" => "required",
            "role" => "required|integer|max:2|min:1",
            "status" => "required|integer|min:1|max:4",
        ]);
        if ($validate->fails()) {
            return response()->json([
                "meta" => ["code" => "Validate loi", "msg" => $validate->errors()->all()],
                "data" => $validate->errors()->keys()],
                SC_400);
        }
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

    public function updateAdmin(Request $request, $id)
    {
        try {
            $validate = Validator::make($request->all(), [
                "fullName" => "required|max:30|min:2",
                "birthday" => "required|integer",
                "email" => "required|email",
                "Job" => "required",
                "phoneNumber" => "required|integer",
                "avatar" => "required",
                "facebook" => "required|url",
                "gender" => "required|integer",
                "country" => "required",
                "role" => "required|integer|max:2|min:1",
                "status" => "required|integer|min:1|max:4",
            ]);
            if ($validate->fails()) {
                return response()->json([
                    "meta" => ["code" => "Validate loi", "msg" => $validate->errors()->all()],
                    "data" => $validate->errors()->keys()],
                    SC_400);
            }
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
        } catch (ModelNotFoundException $ex) {
            return response()->json([],
                QUERY_ERROR);
        } catch (Exception $ex) {
            return response()->json([
                "meta" => ["code" => SC_SERVER_ERROR, "msg" => "SERVER LOI"],
                "data" => $ex],
                SC_SERVER_ERROR);
        }
    }

    public function deleteAdmin($id): \Illuminate\Http\JsonResponse
    {
        $admin = User::find($id);
        $admin->delete();
        return response()->json([
            "meta" => ["code" => SC_SUCCESS, "mgs" => "MGS_DELETE_SUCCESS"],
            "data" => $admin],
            SC_SERVER_ERROR);
    }

    public function searchUser(Request $request)
    {
        $name = $request->keywords_name;
        $list_user = User::where('fullName', 'like', "%{$name}%")
                 ->get();
        return view('listUser', compact('list_user'));
    }
    public function loginAccount(Request $request)
    {
        $email =$request->email;
        $password=$request->password;
        $result = User::where('email','=',$email)->get('email');
        dd($result,$email);

//        else
//            return view('thatbai', compact('result'));
    }
}
