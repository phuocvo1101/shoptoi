@extends('admin.master')
@section('controller','User')
@section('action','Cập nhập')
@section('content')
<div class="col-lg-7" style="padding-bottom:120px">
    <form action="" method="POST">
    @include('admin.blocks.errors')
    <input type="hidden" name="_token" value="{{ csrf_token() }}"  />
        <div class="form-group">
            <label>Tên đăng nhập</label>
            <input class="form-control" name="txtUser" value="{{$user->username}}" disabled />
        </div>
        <div class="form-group">
            <label>Mật Khẩu</label>
            <input type="password" class="form-control" name="txtPass" placeholder="Vui lòng nhập mật khẩu" />
        </div>
        <div class="form-group">
            <label>Nhập Lại Mật Khẩu</label>
            <input type="password" class="form-control" name="txtRePass" placeholder="Nhập lại mật khẩu" />
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="txtEmail" placeholder="Please Enter Email" value="{{$user->email}}" />
        </div>
        <div class="form-group">
            <label>User Level</label>
            <label class="radio-inline">
                <input name="rdoLevel" value="1" @if ($user->level == 1) checked="checked" @endif type="radio">

                Quản Trị
            </label>
            <label class="radio-inline">
                <input name="rdoLevel" value="2" type="radio" @if ($user->level == 2) checked="checked" @endif>Thành Viên
            </label>
        </div>
        <button type="submit" class="btn btn-default">Cập Nhật</button>
    <form>
</div>
@endsection
               