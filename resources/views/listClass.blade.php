@extends('layout')
@section('content')
    <table class="table table-hover">
        <th>ID</th>
        <th>Tên Lớp</th>
        <th>Avatar</th>
        <th>Người đăng kí</th>
        <th>Môn học</th>
        <th>Trạng thái</th>
        <th>Ngày tạo</th>
        <th>Chỉnh sửa</th>
        @section('search')
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                    <form action="{{URL::to('/class/search')}}" method="POST" class="d-flex">
                        {{csrf_field()}}
                        <input class="form-control me-2" type="search" name="keywords_name" placeholder="Search" aria-label="Search">
                        <input class="btn btn-outline-success" type="submit" value="Tìm kiếm"></input>
                    </form>
                </div>
            </nav>
        @endsection
        @foreach($list_class as $class)
            <tr>
                <td>{{$class->id}}</td>
                <td>{{$class->name}}</td>
                <td><img style="height: 40px" src="{{$class->avatar}}" alt="avatar_class" </td>
                <td>{{$class->userId}}</td>
                <td>{{$class->subjectId}}</td>
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
