@extends('layout')
@section('content')
    <table class="table table-hover">
        <th>ID</th>
        <th>Tên Môn</th>
        <th>Avatar</th>
        <th>Mô tả</th>
        <th>Người đăng kí</th>
        <th>Trạng thái</th>
        <th>Ngày tạo</th>
        <th>Chỉnh sửa</th>
        @section('search')
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                    <form action="{{URL::to('/subject/search')}}" method="POST" class="d-flex">
                        {{csrf_field()}}
                        <input class="form-control me-2" type="search" name="keywords_name" placeholder="Search" aria-label="Search">
                        <input class="btn btn-outline-success" type="submit" value="Tìm kiếm"></input>
                    </form>
                </div>
            </nav>
        @endsection
        @foreach($list_subject as $subject)
            <tr>
                <td>{{$subject->id}}</td>
                <td>{{$subject->name}}</td>
                <td><img style="height: 40px;" src="{{$subject->avatar}}" alt="avatar_class" </td>
                <td>{{$subject->description}}</td>
                <td>{{$subject->userId}}</td>
                <td>
                    @if($subject->status === 1)
                        <span style="color: green"> Đang hoạt động</span>
                    @else
                        <span style="color: red">Ngừng hoạt động</span>
                    @endif
                </td>
                <td>{{$subject->created_at }}</td>
                <td><span style="color: blue;cursor: pointer">Chỉnh sửa</span></td>

            </tr>
        @endforeach
    </table>
@endsection
