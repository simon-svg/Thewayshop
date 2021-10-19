<div class="services-box-main">
    <div class="container">
        <div class="row my-5">
            <div class="col-sm-6 col-lg-4">
                <div class="service-block-inner">
                    <h3>@lang('messages.about.our mission')</h3>
                    <p>@lang('messages.about.our mission info')</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="service-block-inner">
                    <h3>@lang('messages.about.our vision')</h3>
                    <p>@lang('messages.about.our vision info')</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="service-block-inner">
                    <h3>@lang('messages.about.our philosophy')</h3>
                    <p>@lang('messages.about.our philosophy info')</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="service-block-inner">
                    <h3>@lang('messages.about.we are trusted')</h3>
                    <p>@lang('messages.about.we are trusted info')</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="service-block-inner">
                    <h3>@lang('messages.about.we are proffesional')</h3>
                    <p>@lang('messages.about.we are proffesional info')</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="service-block-inner">
                    <h3>@lang('messages.about.our stories')</h3>
                    <p>@lang('messages.about.our stories info')</p>
                </div>
            </div>
        </div>

        <div class="row my-4">
            <div class="col-12">
                <h2 class="noo-sh-title">@lang('messages.about.meet our team')</h2>
            </div>
            @foreach ($team as $person)
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="{{ Storage::url($person->img) }}" alt="" />
                            <div class="team-content">
                                <h3 class="title">{{ $person->name }}</h3>
                                <span class="post">{{ $person->position }}</span>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="#" class="fab fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-google-plus"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-youtube"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p>{{ $person->description }}</p>
                        </div>
                        <hr class="my-0">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
