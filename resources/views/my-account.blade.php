@extends('layouts.main')

@section('allTitleBox')
    @include('includes.all.allTitleBox', ['title' => __('messages.account.my account')])
@endsection

@section('pagesContent')
    <div class="my-account-box-main">
        <div class="container">
            <div class="account__cont">
                <div class="account__panel">
                    <ul class="account__panel_list">
                        <li class="account_panel_item">
                            <a href="#" class="account__panel_name active">@lang('messages.account.main')</a>
                        </li>
                        <li class="account_panel_item">
                            <a href="{{ route('myAccountSettings') }}" class="account__panel_name">@lang('messages.account.settings')</a>
                        </li>
                    </ul>
                </div>
                <div class="account__inner">
                    <h2 class="account__welcome">@lang('messages.account.hi') {{ $user->name }}</h2>
                </div>
            </div>
        </div>
    </div>
@endsection
