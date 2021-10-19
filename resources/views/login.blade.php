@extends('layouts.main')

@section('allTitleBox')
    @include('includes.all.allTitleBox', ['title' => __('messages.login.login')])
@endsection

@section('pagesContent')
    @include('includes.login&&reg.loginForm')
@endsection