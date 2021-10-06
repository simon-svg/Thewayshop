@extends('layouts.admin')

@section('adminHeader')
    @include('includes.admin.header', ['title' => 'header categories'])
@endsection

@section('adminContent')
    @include('includes.admin.header.headerCat.headerCatUpdateForm')
@endsection