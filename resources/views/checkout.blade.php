@extends('layouts.main')

@section('allTitleBox')
    @include('includes.all.allTitleBox', ['title' => __('messages.checkout.checkout')])
@endsection

@section('pagesContent')
    <div class="cart-box-main">
        <div class="container">
            <div class="row new-account-login">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="title-left">
                        <h3>@lang('messages.checkout.account login')</h3>
                    </div>
                    <h5>
                        <a data-toggle="collapse" href="#formLogin" role="button" aria-expanded="false">
                            @lang('messages.checkout.clich here to login')
                        </a>
                    </h5>
                    <form class="mt-3 collapse review-form-box" id="formLogin">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="login"
                                    placeholder=@lang('messages.login.login-placeholder')>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="password" class="form-control" name="password"
                                    placeholder=@lang('messages.login.password-placeholder')>
                            </div>
                        </div>
                        <button type="submit" class="btn hvr-hover">@lang('messages.login.login')</button>
                    </form>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="title-left">
                        <h3>@lang('messages.checkout.create new account')</h3>
                    </div>
                    <h5>
                        <a data-toggle="collapse" href="#formRegister" role="button" aria-expanded="false">
                            @lang('messages.checkout.click here to register')
                        </a>
                    </h5>
                    <form class="mt-3 collapse review-form-box" id="formRegister">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="InputName"
                                placeholder=@lang('messages.register.name-placeholder')>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="InputLastname"
                                placeholder=@lang('messages.register.last-name-placeholder')>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" id="InputEmail1"
                                placeholder=@lang('messages.register.email-placeholder')>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="password" class="form-control" id="InputPassword1"
                                placeholder=@lang('messages.register.password-placeholder')>
                            </div>
                        </div>
                        <button type="submit" class="btn hvr-hover">@lang('messages.register.register')</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="checkout-address">
                        <div class="title-left">
                            <h3>@lang('messages.checkout.billing address')</h3>
                        </div>
                        <form class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">@lang('messages.checkout.first name') *</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="" value=""
                                        required>
                                    <div class="invalid-feedback">@lang('messages.checkout.valid name')</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">@lang('messages.checkout.last name') *</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" value=""
                                        required>
                                    <div class="invalid-feedback">@lang('messages.checkout.valid last name')</div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="username">@lang('messages.checkout.username') *</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="username" placeholder="" required>
                                    <div class="invalid-feedback" style="width: 100%;">
                                        @lang('messages.checkout.valid username')
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email">@lang('messages.checkout.email address') *</label>
                                <input type="email" class="form-control" id="email" placeholder="">
                                <div class="invalid-feedback">
                                    @lang('messages.checkout.valid shipping address')
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="address">@lang('messages.checkout.address') *</label>
                                <input type="text" class="form-control" id="address" placeholder="" required>
                                <div class="invalid-feedback">
                                    @lang('messages.checkout.valid shipping address')
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="address2">@lang('messages.checkout.address 2') *</label>
                                <input type="text" class="form-control" id="address2" placeholder="">
                            </div>
                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <label for="country">@lang('messages.checkout.country') *</label>
                                    <select class="wide w-100" id="country">
                                        <option value="Choose..." data-display="Select">@lang('messages.checkout.choose')</option>
                                        <option value="United States">@lang('messages.checkout.armenia')</option>
                                        <option value="United States">@lang('messages.checkout.united states')</option>
                                        <option value="United States">@lang('messages.checkout.russia')</option>
                                    </select>
                                    <div class="invalid-feedback">@lang('messages.checkout.valid country')</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="state">@lang('messages.checkout.state') *</label>
                                    <select class="wide w-100" id="state">
                                        <option data-display="Select">@lang('messages.checkout.choose')</option>
                                        <option>@lang('messages.checkout.california')</option>
                                    </select>
                                    <div class="invalid-feedback">@lang('messages.checkout.valid state')</div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="zip">@lang('messages.checkout.zip') *</label>
                                    <input type="text" class="form-control" id="zip" placeholder="" required>
                                    <div class="invalid-feedback">@lang('messages.checkout.valid zip')</div>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="same-address">
                                <label class="custom-control-label" for="same-address">
                                    @lang('messages.checkout.shipping address')
                                </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="save-info">
                                <label class="custom-control-label" for="save-info">
                                    @lang('messages.checkout.save this information')
                                </label>
                            </div>
                            <hr class="mb-4">
                            <div class="title"> <span>@lang('messages.checkout.payment')</span> </div>
                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input"
                                        checked required>
                                    <label class="custom-control-label" for="credit">@lang('messages.checkout.credit card')</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input"
                                        required>
                                    <label class="custom-control-label" for="debit">@lang('messages.checkout.debit card')</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input"
                                        required>
                                    <label class="custom-control-label" for="paypal">@lang('messages.checkout.paypal')</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="cc-name">@lang('messages.checkout.name on card')</label>
                                    <input type="text" class="form-control" id="cc-name" placeholder="" required> <small
                                        class="text-muted">@lang('messages.checkout.full name')</small>
                                    <div class="invalid-feedback">@lang('messages.checkout.valid card name')</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cc-number">@lang('messages.checkout.credit card number')</label>
                                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                    <div class="invalid-feedback">@lang('messages.checkout.valid card number')</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">@lang('messages.checkout.expiration')</label>
                                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                    <div class="invalid-feedback">@lang('messages.checkout.valid expiration date')</div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">@lang('messages.checkout.cvv')</label>
                                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                    <div class="invalid-feedback">@lang('messages.checkout.valid security code')</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="payment-icon">
                                        <ul>
                                            <li><img class="img-fluid" src="images/payment-icon/1.png" alt=""></li>
                                            <li><img class="img-fluid" src="images/payment-icon/2.png" alt=""></li>
                                            <li><img class="img-fluid" src="images/payment-icon/3.png" alt=""></li>
                                            <li><img class="img-fluid" src="images/payment-icon/5.png" alt=""></li>
                                            <li><img class="img-fluid" src="images/payment-icon/7.png" alt=""></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-1">
                        </form>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="shipping-method-box">
                                <div class="title-left">
                                    <h3>@lang('messages.checkout.shipping method')</h3>
                                </div>
                                <div class="mb-4">
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption1" name="shipping-option" class="custom-control-input"
                                            checked="checked" type="radio">
                                        <label class="custom-control-label" for="shippingOption1">
                                            @lang('messages.checkout.standard delivery')
                                        </label>
                                        <span class="float-right font-weight-bold">@lang('messages.checkout.free')</span>
                                    </div>
                                    <div class="ml-4 mb-2 small">(3-7 @lang('messages.checkout.business days'))</div>
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption2" name="shipping-option" class="custom-control-input"
                                            type="radio">
                                        <label class="custom-control-label" for="shippingOption2">
                                            @lang('messages.checkout.express delivery')
                                        </label>
                                        <span class="float-right font-weight-bold">$10.00</span>
                                    </div>
                                    <div class="ml-4 mb-2 small">(2-4 @lang('messages.checkout.business days'))</div>
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption3" name="shipping-option" class="custom-control-input"
                                            type="radio">
                                        <label class="custom-control-label" for="shippingOption3">
                                            @lang('messages.checkout.next business day')
                                        </label>
                                        <span class="float-right font-weight-bold">$20.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="odr-box">
                                <div class="title-left">
                                    <h3>@lang('messages.checkout.shopping cart')</h3>
                                </div>
                                <div class="rounded p-2 bg-light">
                                    <div class="media mb-2 border-bottom">
                                        <div class="media-body"> <a href="detail.html"> Lorem ipsum dolor sit amet</a>
                                            <div class="small text-muted">Price: $80.00 <span
                                                    class="mx-2">|</span> Qty: 1 <span
                                                    class="mx-2">|</span> Subtotal: $80.00</div>
                                        </div>
                                    </div>
                                    <div class="media mb-2 border-bottom">
                                        <div class="media-body"> <a href="detail.html"> Lorem ipsum dolor sit amet</a>
                                            <div class="small text-muted">Price: $60.00 <span
                                                    class="mx-2">|</span> Qty: 1 <span
                                                    class="mx-2">|</span> Subtotal: $60.00</div>
                                        </div>
                                    </div>
                                    <div class="media mb-2">
                                        <div class="media-body"> <a href="detail.html"> Lorem ipsum dolor sit amet</a>
                                            <div class="small text-muted">Price: $40.00 <span
                                                    class="mx-2">|</span> Qty: 1 <span
                                                    class="mx-2">|</span> Subtotal: $40.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="order-box">
                                <div class="title-left">
                                    <h3>@lang('messages.checkout.your order')</h3>
                                </div>
                                <div class="d-flex">
                                    <div class="font-weight-bold">@lang('messages.cart.product name')</div>
                                    <div class="ml-auto font-weight-bold">@lang('messages.cart.total')</div>
                                </div>
                                <hr class="my-1">
                                <div class="d-flex">
                                    <h4>@lang('messages.cart.sub total')</h4>
                                    <div class="ml-auto font-weight-bold"> $ 440 </div>
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
                        <div class="col-12 d-flex shopping-box"> <a href="checkout.html"
                                class="ml-auto btn hvr-hover">@lang('messages.checkout.place order')</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
