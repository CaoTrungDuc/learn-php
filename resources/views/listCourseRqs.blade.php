@extends('layout')
@section('content')

<table class="table table-hover">
    <th>ID</th>
    <th>Tần suất học</th>
    <th>Thời lượng học</th>
    <th>Đặt mục tiêu</th>
    <th>Muốn có công việc </th>
    <th>Cam kết làm bài tập</th>
    <th>Không làm bài bị out</th>
    <th>Kỹ năng có</th>
    <th>Mục tiêu</th>
    <th>Người đăng kí</th>
    <th>Lớp đăng kí</th>
    <th>Trạng thái</th>
    <th>Ngày tạo</th>
    <th>Chỉnh sửa</th>
    @foreach($list_courseRqs as $courseRqs)
        <tr>
            <td>{{$courseRqs->id}}</td>
            <td>{{$courseRqs->frequency}}</td>
            <td>
                @if($courseRqs->duration === 5400)
                    1:30p
                @else
                    @if($courseRqs->duration === 7200)
                        2:00p
                    @else
                        2:30p
                    @endif
                @endif
                </td>
            <td>
                @if($courseRqs->targetTop === 1)
                    Có
                @else
                    @if($courseRqs->targetTop === 2)
                        Phân vân
                    @else
                        Không
                    @endif
                @endif
               </td>
            <td>
                @if($courseRqs->wishJob === 1)
                    Có
                @else
                    @if($courseRqs->wishJob === 2)
                        Phân vân
                    @else
                        Không
                    @endif
                @endif
            </td>
            <td>
                @if($courseRqs->completeExercise === 1)
                    Có
                @else
                    @if($courseRqs->completeExercise === 2)
                        Phân vân
                    @else
                        Không
                    @endif
                @endif
            </td>
            <td>
                @if($courseRqs->outCondition === 1)
                    Có
                @else
                    @if($courseRqs->outCondition === 2)
                        Phân vân
                    @else
                        Không
                    @endif
                @endif
            </td>
            <td>{{$courseRqs->nowSkill }}</td>
            <td>{{$courseRqs->mission}}</td>
            <td>{{$courseRqs->userId}}</td>
            <td>{{$courseRqs->classesId}}</td>
            <td>
            @if($courseRqs->status === 1)
                <span style="color: green">Chấp nhận</span>
            @else
                @if($courseRqs->status === 2)
                    <span style="color: red">Từ chối</span>
                @else
                    <span style="color: goldenrod">Đang xét duyệt</span>
                @endif
            @endif
            </td>
            <td>{{$courseRqs->created_at}}</td>
            <td><span style="color: blue;cursor: pointer">Chỉnh sửa</span></td>

        </tr>
    @endforeach
</table>
@endsection
