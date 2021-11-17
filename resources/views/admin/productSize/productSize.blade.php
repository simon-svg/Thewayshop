@extends('layouts.admin')

@section('adminHeader')
    @include('includes.admin.header', ['title' => 'product size'])
@endsection

@section('adminContent')
    @include('includes.admin.productSize.productSizeContent')
@endsection