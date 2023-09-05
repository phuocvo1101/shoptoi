
@extends('admin.master')
@section('controller','User')
@section('action','Thêm')
@section('content')
<div class="col-lg-7" style="padding-bottom:120px">
    <form action="" method="POST">
    @include('admin.blocks.errors')
    <input type="hidden" name="_token" value="{{ csrf_token() }}"  />
        <div class="form-group">
            <label>Tên đăng nhập</label>
            <input class="form-control" name="txtUser" placeholder="Please Enter Username" value="{{ old('txtUser') }}" />
        </div>
        <div class="form-group">
            <label>Mật khẩu</label>
            <input type="password" class="form-control" name="txtPass" placeholder="Vui lòng nhập mật khẩu" />
        </div>
        <div class="form-group">
            <label>Nhập lại mật khẩu</label>
            <input type="password" class="form-control" name="txtRePass" placeholder="Nhập lại mật khẩu" />
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="txtEmail" placeholder="Please Enter Email" value="{{ old('txtEmail') }}"  />
        </div>
        <div class="form-group">
            <label>User Level</label>
            <label class="radio-inline">
                <input name="rdoLevel" value="1" checked="" type="radio">Quản trị
            </label>
            <label class="radio-inline">
                <input name="rdoLevel" value="2" type="radio">Thành Viên
            </label>
        </div>
        <button type="submit" class="btn btn-default">Thêm</button>
    <form>
</div>
@endsection
               