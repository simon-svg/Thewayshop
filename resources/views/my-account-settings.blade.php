@extends('layouts.main')

@section('allTitleBox')
    @include('includes.all.allTitleBox', ['title' => __('messages.account.account settings')])
@endsection

@section('pagesContent')
    <div class="my-account-box-main">
        <div class="container">
            <div class="account__cont">
                <div class="account__panel">
                    <ul class="account__panel_list">
                        <li class="account_panel_item">
                            <a href="{{ route('myAccount') }}" class="account__panel_name">@lang('messages.account.main')</a>
                        </li>
                        <li class="account_panel_item">
                            <a href="#" class="account__panel_name active">@lang('messages.account.settings')</a>
                        </li>
                    </ul>
                </div>
                <div class="account__inner">
                    <form class="account__settings_form" action="{{ route('myAccountSettingsChange') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <span>@lang('messages.account.name')</span>
                                <div class="form-group">
                                    <input type="text" class="form-control account__settings_inp" name="name" value="{{ $user->name }}"
                                        placeholder=@lang('messages.account.name-placheholder')>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <span>@lang('messages.account.last Name')</span>
                                <div class="form-group">
                                    <input type="text" class="form-control account__settings_inp" name="lastName"
                                        value="{{ $user->last_name }}" placeholder=@lang('messages.account.last name-placheholder')>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <span>@lang('messages.account.email')</span>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control account__settings_inp" value="{{ $user->email }}"
                                        placeholder="example@gmail.com">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <span>@lang('messages.account.profession')</span>
                                <div class="form-group">
                                    <input type="text" class="form-control account__settings_inp" name="profession"
                                    value="{{ $user->profession }}" placeholder="@lang('messages.account.profession-placheholder')">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <span>@lang('messages.account.country')</span>
                                <div class="form-group">
                                    <input type="text" class="form-control account__settings_inp" name="country"
                                    value="{{ $user->country }}" placeholder=@lang('messages.account.country')>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <span>@lang('messages.account.address')</span>
                                <div class="form-group">
                                    <input type="text" class="form-control account__settings_inp" name="address"
                                    value="{{ $user->address }}" placeholder=@lang('messages.account.address')>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <span>@lang('messages.account.phone')</span>
                                <div class="form-group">
                                    <input type="number" class="form-control account__settings_inp" name="phone"
                                    value="{{ $user->phone }}" placeholder="+374 55555555">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <span>@lang('messages.account.description')</span>
                                <div class="form-group">
                                    <textarea class="form-control account__settings_inp" name="description"
                                    placeholder=@lang('messages.account.description')>{{ $user->description }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <span>@lang('messages.account.login')</span>
                                <div class="form-group">
                                    <input type="text" name="login" class="form-control account__settings_inp"
                                    value="{{ $user->login }}" placeholder=@lang('messages.account.login')>
                                </div>
                            </div>

                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <div class="col-md-12">
                                <div class="submit-button text-center">
                                    <button class="btn hvr-hover" type="submit">@lang('messages.account.send')</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
