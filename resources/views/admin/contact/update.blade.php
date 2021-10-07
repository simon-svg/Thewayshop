@extends('layouts.admin')

@section('adminHeader')
    @include('includes.admin.header', ['title' => 'contact'])
@endsection

@section('adminContent')
    @include('includes.admin.contact.contactUpdateForm')
@endsection