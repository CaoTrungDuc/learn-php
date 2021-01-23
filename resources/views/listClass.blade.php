@extends('layout')
@section('content')
    <table class="table table-hover">
        <th>ID</th>
        <th>Tên Lớp</th>
        <th>Avatar</th>
        <th>Trạng thái</th>
        <th>Ngày tạo</th>
        <th>Chỉnh sửa</th>
        @foreach($list_class as $class)
            <tr>
                <td>{{$class->id}}</td>
                <td>{{$class->name}}</td>
                <td><img style="height: 40px" src="{{$class->avatar}}" alt="avatar_class" </td>
                <td>
                    @if($class->status === 1)
                    <span style="color: green"> Đang hoạt động</span>
                    @else
                        <span style="color: red">Ngừng hoạt động</span>
                    @endif
                </td>
                <td>{{$class->created_at }}</td>
                <td><span style="color: blue;cursor: pointer">Chỉnh sửa</span></td>
            </tr>
         @endforeach

    </table>
@endsection
