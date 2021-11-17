@extends('layouts.main')

@section('allTitleBox')
    @include('includes.all.allTitleBox', ['title' => __('messages.product-details.product details')])
@endsection

@section('pagesContent')
    <div class="shop-detail-box-main">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            @foreach ($product->imgs as $img)
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/storage/{{ $img->img }}"
                                        alt="{{ $product->name_en }}">
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">@lang('messages.product-details.previous')</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">@lang('messages.product-details.next')</span>
                        </a>
                        <ol class="carousel-indicators">
                            @foreach ($product->imgs as $img)
                                <li data-target="#carousel-example-1" data-slide-to="{{ $img->id }}"
                                    class="active">
                                    <img class="d-block w-100 img-fluid" src="/storage/{{ $img->img }}"
                                        alt="{{ $product->name_en }}" />
                                </li>
                            @endforeach
                        </ol>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="single-product-details">
                        <h2>{{ $product->name_en }}</h2>
                        <h5>
                            @if (!empty($product->sale))
                                <del>${{ $product->price }}</del>
                                ${{ $product->sale }}
                            @else
                                ${{ $product->price }}
                            @endif
                        </h5>
                        <p class="available-stock">@lang('messages.product-details.number')</span>
                        <p>
                        <h4>@lang('messages.product-details.short description')</h4>
                        <p>{{ $product->description_en }}</p>
                        <ul>
                            <li>
                                <div class="form-group size-st">
                                    <label class="size-label">@lang('messages.product-details.size')</label>
                                    <select id="basic" class="selectpicker show-tick form-control">
                                        @foreach ($product->size as $size)
                                            <option value="{{ $size->id }}">{{ $size->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="form-group quantity-box">
                                    <label class="control-label">@lang('messages.product-details.quantity')</label>
                                    <input class="form-control" value="0" min="0" max="20" type="number">
                                </div>
                            </li>
                        </ul>

                        <div class="price-box-bar">
                            <div class="cart-and-bay-btn">
                                <a class="btn hvr-hover" data-fancybox-close=""
                                    href="#">@lang('messages.product-details.buy new')</a>
                                <a class="btn hvr-hover" data-fancybox-close=""
                                    href="#">@lang('messages.product-details.add to cart')</a>
                            </div>
                        </div>

                        <div class="add-to-btn">
                            <div class="add-comp">
                                <a class="btn hvr-hover" href="#">
                                    <i class="fas fa-heart"></i> @lang('messages.product-details.add to wishlist')
                                </a>
                                <a class="btn hvr-hover" href="#">
                                    <i class="fas fa-sync-alt"></i> @lang('messages.product-details.add to compare')
                                </a>
                            </div>
                            <div class="share-bar">
                                <a class="btn hvr-hover" href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                                <a class="btn hvr-hover" href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a>
                                <a class="btn hvr-hover" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                <a class="btn hvr-hover" href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
                                <a class="btn hvr-hover" href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('includes.productsBox.productsBox')
        </div>
    </div>
    <script src="/js/products.js"></script>
@endsection
