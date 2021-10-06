@extends('layouts.admin')

@section('adminHeader')
    @include('includes.admin.header', ['title' => 'header submenus'])
@endsection

@section('adminContent')
    @include('includes.admin.header.headerSub.headerSubContent')
@endsection