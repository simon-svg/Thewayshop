<div class="main-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="text-slid-box">
                    <div id="offer-box" class="carouselTicker">
                        <ul class="offer-box">
                            <li>
                                <i class="fab fa-opencart"></i> Off 10%! Shop Now Man
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 50% - 80% off on Fashion
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT20
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 50%! Shop Now
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 10%! Shop Now Man
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 50% - 80% off on Fashion
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT20
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 50%! Shop Now
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="custom-select-box">
                        <a class="header__change_lang" href="{{ route('en') }}">EN</a>
                        <a class="header__change_lang" href="{{ route('ru') }}">RU</a>
                    {{-- <select id="basic" class="selectpicker show-tick form-control" data-placeholder="en">
                        <option>EN</option>
                        <option>AM</option>
                    </select> --}}
                </div>
                <div class="right-phone-box">
                    <p>Call US :- +374 55-32-14-13</p>
                </div>
                <div class="our-link">
                    <ul>
                        @auth("web")
                            <li>
                                <a href="{{ route('admin.header.view') }}">Admin</a>
                            </li>
                            <li>
                                <a href="{{ route('myAccount') }}">My Account</a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}">Log Out</a>
                            </li>
                        @endauth
                        @guest("web")
                            <li>
                                <a href="{{ route('registration') }}">Register</a>
                            </li>
                            <li>
                                <a href="{{ route('login') }}">Log In</a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<header class="main-header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu"
                    aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}"><img src="images/logo.png" class="logo"
                        alt="thewayshop"></a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                    @foreach ($data as $item)
                        @if (@isset($item['link']))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route($item['link']) }}">
                                    {{ $item['name'] }}
                                </a>
                            <li>
                            @else
                            <li class="dropdown megamenu-fw">
                                <a class="nav-link dropdown-toggle arrow" data-toggle="dropdown"
                                    href="#">{{ $item['name'] }}</a>
                                <ul class="dropdown-menu header__item_cont" role="menu">
                                    <li>
                                        <div class="row">
                                            @foreach ($item['categories'] as $cat)
                                                <div class="col-menu header__item_cont_item">
                                                    <h6 class="title">{{ $cat['name'] }}</h6>
                                                    <div class="content">
                                                        <ul class="menu-col">
                                                            @foreach ($cat['categories'] as $menu)
                                                                @if (@isset($menu['link']))
                                                                    <li>
                                                                        <a href="{{ route($menu['link']) }}">
                                                                            {{ $menu['name'] }}
                                                                        </a>
                                                                    </li>
                                                                @else
                                                                    <li>
                                                                        <a href="{{ route('shop') }}">
                                                                            {{ $menu['name'] }}
                                                                        </a>
                                                                    </li>
                                                                @endif
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <!-- /.navbar-collapse -->

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                    <li class="side-menu"><a href="#">
                            <i class="fa fa-shopping-bag"></i>
                            <span class="badge">3</span>
                        </a></li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->
        </div>
        <!-- Start Side Menu -->
        <div class="side">
            <a href="#" class="close-side"><i class="fa fa-times"></i></a>
            <li class="cart-box">
                <ul class="cart-list">
                    <li>
                        <a href="#" class="photo"><img src="images/img-pro-01.jpg" class="cart-thumb"
                                alt="" /></a>
                        <h6><a href="#">Delica omtantur </a></h6>
                        <p>1x - <span class="price">$80.00</span></p>
                    </li>
                    <li>
                        <a href="#" class="photo"><img src="images/img-pro-02.jpg" class="cart-thumb"
                                alt="" /></a>
                        <h6><a href="#">Omnes ocurreret</a></h6>
                        <p>1x - <span class="price">$60.00</span></p>
                    </li>
                    <li>
                        <a href="#" class="photo"><img src="images/img-pro-03.jpg" class="cart-thumb"
                                alt="" /></a>
                        <h6><a href="#">Agam facilisis</a></h6>
                        <p>1x - <span class="price">$40.00</span></p>
                    </li>
                    <li class="total">
                        <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                        <span class="float-right"><strong>Total</strong>: $180.00</span>
                    </li>
                </ul>
            </li>
        </div>
    </nav>
</header>

<div class="top-search">
    <div class="container">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Search">
            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
        </div>
    </div>
</div>
