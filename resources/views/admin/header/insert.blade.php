@extends('layouts.admin')

@section('adminHeader')
    @include('includes.admin.header', ['title' => 'header'])
@endsection

@section('adminContent')
    @include('includes.admin.header.headerInsertForm')
@endsection