@extends('layouts.admin')

@section('adminHeader')
    @include('includes.admin.header', ['title' => 'team'])
@endsection

@section('adminContent')
    @include('includes.admin.team.teamContent')
@endsection