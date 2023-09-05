@extends('admin.master')
@section('controller','Danh Mục')
@section('action','Danh Sách')
@section('content')
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>STT</th>
            <th>Tên Danh Mục</th>
            <th>Danh Mục Cha</th>
            <th>Xóa</th>
            <th>Sửa</th>
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
                @if ($item['parent_id'] == 0)
                    {!! "None" !!}
                @else
                    <?php
                    $parent = DB::table('cates')->where('id',$item['parent_id'])->first();
                    //var_dump($parent);
                      echo $parent->name;
                    ?>
                @endif
            </td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('Bạn có muốn xóa không')" href="{!! URL::route('admin.cate.getDelete',$item['id'])!!}"> Xóa</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('admin.cate.getEdit',$item['id'])!!}">Sửa</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection()
               