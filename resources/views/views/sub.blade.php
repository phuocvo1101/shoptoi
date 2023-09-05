@extends('views.master')
@section('title', 'layout template')
@section('sidebar')
Nam phia tren
@parent
Nam phia duoi
@stop
@section('noidung')
Day la trang sub
<?php $hoten ="Phuoc vo trainning"; ?>
{!! $hoten !!}
@stop