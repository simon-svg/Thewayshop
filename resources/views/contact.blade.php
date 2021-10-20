@extends('layouts.main')

@section('allTitleBox')
    @include('includes.all.allTitleBox', ['title' => __('messages.contact us.contact us')])
@endsection

@section('pagesContent')
    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="contact-info-left">
                        <h2>@lang('messages.contact us.contact info')</h2>
                        <p>@lang('messages.contact us.contact info text')</p>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>
                                    @lang('messages.contact us.address')
                                </p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>@lang('messages.contact us.phone')
                                    <a href="tel:+1-888705770">+1-888 705 770</a>
                                </p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>@lang('messages.contact us.email')
                                    <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-12">
                    <div class="contact-form-right">
                        <h2>@lang('messages.contact us.get in touch')</h2>
                        <p>@lang('messages.contact us.get in touch subtitle')</p>
                        <form id="contactForm" action="{{ route('admin.contact.insert') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder=@lang('messages.contact us.name placheholder') required
                                            data-error="@lang('messages.contact us.enter name')">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder=@lang('messages.contact us.email placheholder')
                                            id="email" class="form-control" name="email" required
                                            data-error="@lang('messages.contact us.enter email')">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" name="subject"
                                            placeholder=@lang('messages.contact us.subject placheholder') required
                                            data-error="@lang('messages.contact us.enter subject')">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" name="message"
                                            placeholder=@lang('messages.contact us.message placheholder') rows="4"
                                            data-error="@lang('messages.contact us.write message')" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="submit-button text-center">
                                        <button class="btn hvr-hover" id="submit" type="submit">
                                            @lang('messages.contact us.send message')
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        {{-- errors --}}
                        @if ($errors->any())
                            @foreach ($errors->all() as $e)
                                <p class="error">{{ $e }}</p>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
