@extends('admin.master')
@section('controller','Tin Tức')
@section('action','Danh Sách')
@section('content')
                    <!-- /.col-lg-12 -->
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>STT</th>
            <th>Tên Bài Viêt</th>
            <th>Ngày Tạo</th>
            <th>Xóa</th>
            <th>Sửa</th>
        </tr>
    </thead>
    <tbody>
    <?php $stt = 0; ?>
        @foreach ($data as $item)
        <?php $stt++; ?>
        <tr class="odd gradeX" align="center">
            <td>{{ $stt }}</td>
            <td>{!! $item['name']!!}</td>
            <td>
                {!! \Carbon\Carbon::createFromTimeStamp(strtotime($item["created_at"]))->diffForHumans(); !!}
            </td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{!! URL::route('admin.news.getDelete', $item['id']) !!}" onclick= "return xacnhanxoa('Do You want delete this News')"> Xóa</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('admin.news.getEdit', $item['id']) !!}">Sửa</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection