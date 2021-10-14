@extends('layouts.admin')

@section('adminHeader')
    @include('includes.admin.header', ['title' => 'user'])
@endsection

@section('adminContent')
    @include('includes.admin.user.userInsertForm')
@endsection