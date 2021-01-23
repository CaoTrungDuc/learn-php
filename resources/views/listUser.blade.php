@extends('layout')
@section('content')
    <table class="table table-hover">
        <th>Id</th>
        <th>Họ Và Tên</th>
        <th>Avatar</th>
        <th>email</th>
        <th>Ngày sinh</th>
        <th>Số điện thoại</th>
        <th>Nghề nghiệp</th>
        <th>Facebook</th>
        <th>Giới tính</th>
        <th>Quê Quán</th>
        <th>Quyền</th>
        <th>Trạng thái</th>
        <th>Ngày tạo</th>
        <th>Chỉnh sửa</th>
        @foreach($list_user as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->fullName}}</td>
                <td>
                    <img style="height: 40px" src="{{$user->avatar}}" alt="avatar_user">
                </td>
                <td>
                        <span class="d-inline-block text-truncate" style="max-width: 100px;">
                            {{$user->email}}
                        </span>
                </td>
                <td>{{date("d/m/y",$user->birthday)}}</td>
                <td>{{$user->phoneNumber}}</td>
                <td>{{$user->job}}</td>
                <td><a style="color: blue" target="_blank"
                       href="{{$user->facebook}}">
                        <span class="d-inline-block text-truncate" style="max-width: 100px;">
                            {{$user->facebook}}
                        </span>
                    </a>
                </td>
                <td>{{$user->gender === 1 ? "Nam" : "Nữ"}}</td>
                <td>{{$user->country}}</td>
                <td>{{$user->role === 1 ? "Admin" : "User Course"}}</td>
                <td><span style="color: green">{{$user->status === 1 ? "Hoạt động" : "Không hoạt động"}}</span></td>
                <td>{{$user->created_at}}</td>
                <td><a style="cursor: pointer ; color: blue" href="" >Chỉnh sửa</a></td>
            </tr>
        @endforeach
    </table>
@endsection
