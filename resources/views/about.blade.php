@extends('layouts.main')

@section('allTitleBox')
    @include('includes.all.allTitleBox', ['title' => __('messages.about.about us')])
@endsection

@section('pagesContent')
    <div class="about-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="noo-sh-title">@lang('messages.about.we are thewayshop')</h2>
                    <p>@lang('messages.about.we are thewayshop info')</p>
                </div>
                <div class="col-lg-6">
                    <div class="banner-frame"> <img class="img-thumbnail img-fluid" src="images/about-img.jpg" alt="" />
                    </div>
                </div>
            </div>
            @section('ourTeam')
                @include('includes.ourTeam.ourTeam')
            @endsection
        </div>
    </div>
@endsection
