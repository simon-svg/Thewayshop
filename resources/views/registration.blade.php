@extends('layouts.main')

@section('allTitleBox')
    @include('includes.all.allTitleBox', ['title' => "Registration"])
@endsection

@section('pagesContent')
    @include('includes.login&&reg.registrationForm')
@endsection