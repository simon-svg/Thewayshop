@extends('layouts.main')

@section('allTitleBox')
    @include('includes.all.allTitleBox', ['title' => __('messages.cart.cart')])
@endsection

@section('pagesContent')
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>@lang('messages.cart.images')</th>
                                    <th>@lang('messages.cart.product name')</th>
                                    <th>@lang('messages.cart.price')</th>
                                    <th>@lang('messages.cart.quantity')</th>
                                    <th>@lang('messages.cart.total')</th>
                                    <th>@lang('messages.cart.remove')</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="thumbnail-img">
                                        <a href="#">
                                            <img class="img-fluid" src="/images/img-pro-01.jpg" alt="" />
                                        </a>
                                    </td>
                                    <td class="name-pr">
                                        <a href="#">
                                            Lorem ipsum dolor sit amet
                                        </a>
                                    </td>
                                    <td class="price-pr">
                                        <p>$ 80.0</p>
                                    </td>
                                    <td class="quantity-box"><input type="number" size="4" value="1" min="0" step="1"
                                            class="c-input-text qty text"></td>
                                    <td class="total-pr">
                                        <p>$ 80.0</p>
                                    </td>
                                    <td class="remove-pr">
                                        <a href="#">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="thumbnail-img">
                                        <a href="#">
                                            <img class="img-fluid" src="/images/img-pro-02.jpg" alt="" />
                                        </a>
                                    </td>
                                    <td class="name-pr">
                                        <a href="#">
                                            Lorem ipsum dolor sit amet
                                        </a>
                                    </td>
                                    <td class="price-pr">
                                        <p>$ 60.0</p>
                                    </td>
                                    <td class="quantity-box"><input type="number" size="4" value="1" min="0" step="1"
                                            class="c-input-text qty text"></td>
                                    <td class="total-pr">
                                        <p>$ 80.0</p>
                                    </td>
                                    <td class="remove-pr">
                                        <a href="#">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="thumbnail-img">
                                        <a href="#">
                                            <img class="img-fluid" src="/images/img-pro-03.jpg" alt="" />
                                        </a>
                                    </td>
                                    <td class="name-pr">
                                        <a href="#">
                                            Lorem ipsum dolor sit amet
                                        </a>
                                    </td>
                                    <td class="price-pr">
                                        <p>$ 30.0</p>
                                    </td>
                                    <td class="quantity-box"><input type="number" size="4" value="1" min="0" step="1"
                                            class="c-input-text qty text"></td>
                                    <td class="total-pr">
                                        <p>$ 80.0</p>
                                    </td>
                                    <td class="remove-pr">
                                        <a href="#">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-6 col-sm-6">
                    <div class="coupon-box">
                        <div class="input-group input-group-sm">
                            <input class="form-control" aria-label="Coupon code" type="text"
                                placeholder="@lang('messages.cart.coupon code placheholder')">
                            <div class="input-group-append">
                                <button class="btn btn-theme" type="button">@lang('messages.cart.apply coupon')</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="update-box">
                        <input value=@lang('messages.cart.update cart') type="submit">
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-8 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12">
                    <div class="order-box">
                        <h3>@lang('messages.cart.order summary')</h3>
                        <div class="d-flex">
                            <h4>@lang('messages.cart.sub total')</h4>
                            <div class="ml-auto font-weight-bold"> $ 130 </div>
                        </div>
                        <div class="d-flex">
                            <h4>@lang('messages.cart.discount')</h4>
                            <div class="ml-auto font-weight-bold"> $ 40 </div>
                        </div>
                        <hr class="my-1">
                        <div class="d-flex">
                            <h4>@lang('messages.cart.coupon discount')</h4>
                            <div class="ml-auto font-weight-bold"> $ 10 </div>
                        </div>
                        <div class="d-flex">
                            <h4>@lang('messages.cart.tax')</h4>
                            <div class="ml-auto font-weight-bold"> $ 2 </div>
                        </div>
                        <div class="d-flex">
                            <h4>@lang('messages.cart.shipping cost')</h4>
                            <div class="ml-auto font-weight-bold"> Free </div>
                        </div>
                        <hr>
                        <div class="d-flex gr-total">
                            <h5>@lang('messages.cart.grand total')</h5>
                            <div class="ml-auto h5"> $ 388 </div>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="col-12 d-flex shopping-box">
                    <a href="checkout.html" class="ml-auto btn hvr-hover">@lang('messages.cart.checkout')</a>
                </div>
            </div>
        </div>
    </div>
@endsection
