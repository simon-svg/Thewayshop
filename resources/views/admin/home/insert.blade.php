@extends('layouts.admin')

@section('adminHeader')
    @include('includes.admin.header', ['title' => 'home'])
@endsection

@section('adminContent')
    @include('includes.admin.home.homeInsertForm')
@endsection