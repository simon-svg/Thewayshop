@extends('layouts.main')

@section('allTitleBox')
    @include('includes.all.allTitleBox', ['title' => __('messages.services.services')])
@endsection

@section('ourTeam')
    @include('includes.ourTeam.ourTeam')
@endsection