@extends('layouts.admin')

@section('adminHeader')
    @include('includes.admin.header', ['title' => 'product'])
@endsection

@section('adminContent')
    @include('includes.admin.product.productInsertForm')
@endsection