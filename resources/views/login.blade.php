@extends('layouts.main')

@section('allTitleBox')
    @include('includes.all.allTitleBox', ['title' => "Login"])
@endsection

@section('pagesContent')
    @include('includes.login&&reg.loginForm')
@endsection