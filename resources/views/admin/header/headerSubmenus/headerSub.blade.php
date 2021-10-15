@extends('layouts.admin')

@section('adminHeader')
    @include('includes.admin.header', ['title' => 'header submenu'])
@endsection

@section('adminContent')
    @include('includes.admin.header.headerSub.headerSubContent')
@endsection