@extends('admin.master')
@section('controller','Slider')
@section('action','Danh Sách')
@section('content')
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>STT</th>
            <th>Tên</th>
            <th>Hình</th>
            <th>Xóa</th>
        </tr>
    </thead>
    <tbody>
        <?php $stt = 0 ?>
        @foreach ($data as $item)
        <?php $stt = $stt +1; ?>
        <tr class="odd gradeX" align="center">
            <td>{{ $stt }}</td>
            <td>{!! $item['name']!!}</td>
            <td>
                <img class="imgDetail" style="height: 200px; width: 400px" name="img" src="{{ asset('upload/'.$item['img']) }}" />
            </td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('Bạn có muốn xóa không')" href="{!! URL::route('admin.slider.getDelete',$item['id'])!!}"> Xóa</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection()
               