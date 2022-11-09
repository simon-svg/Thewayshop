@extends('layouts.admin')

@section('adminHeader')
    @include('includes.admin.header', ['title' => 'product img'])
@endsection

@section('adminContent')
    @include('includes.admin.productImg.productImgContent')
@endsection