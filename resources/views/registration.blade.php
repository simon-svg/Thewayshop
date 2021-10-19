@extends('layouts.main')

@section('allTitleBox')
    @include('includes.all.allTitleBox', ['title' => __('messages.register.register')])
@endsection

@section('pagesContent')
    @include('includes.login&&reg.registrationForm')
@endsection