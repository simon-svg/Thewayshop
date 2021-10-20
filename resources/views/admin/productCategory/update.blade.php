@extends('layouts.admin')

@section('adminHeader')
    @include('includes.admin.header', ['title' => 'product category'])
@endsection

@section('adminContent')
    @include('includes.admin.productCategory.productCategoryUpdateForm')
@endsection