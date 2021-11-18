@extends('layouts.main')

@section('allTitleBox')
    @include('includes.all.allTitleBox', ['title' => __('messages.shop.shop')])
@endsection

@section('pagesContent')
    <div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                    <div class="product-categori">
                        <div class="search-product">
                            <form action="#" method="get">
                                <input class="form-control" name="query"
                                placeholder=@lang('messages.shop.search here placeholder') type="text">
                                <button type="submit"> <i class="fa fa-search"></i> </button>
                            </form>
                        </div>
                        <div class="filter-sidebar-left">
                            <div class="title-left">
                                <h3>@lang('messages.shop.categories')</h3>
                            </div>
                            <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men"
                                data-children=".sub-men">
                                <div class="list-group-collapse sub-men">
                                    @foreach ($productsCategory as $productCategory)
                                        <a class="list-group-item list-group-item-action"
                                            href="{{ route('shop', ['name' => $productCategory->name_en]) }}">
                                            {{ $productCategory->name_en }}
                                            {{-- <small class="text-muted">(100)</small> --}}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                    <div class="right-product-box">
                        <div class="product-item-filter row">
                            <div class="col-12 col-sm-8 text-center text-sm-left">
                                <div class="toolbar-sorter-right">
                                    <span>@lang('messages.shop.sort by') </span>
                                    <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
                                        <option data-display="Select">
                                            <a href="{{ route('shop') }}">
                                                @lang('messages.shop.sort by nothing')
                                            </a>
                                        </option>
                                        <option value="1">
                                            <a href="{{ route('shop', ['sort' => '1']) }}">
                                                @lang('messages.shop.sort by hight low')
                                            </a>
                                        </option>
                                        <option value="2">
                                            <a href="{{ route('shop', ['sort' => '2']) }}">
                                                @lang('messages.shop.sort by low hight')
                                            </a>
                                        </option>
                                        <option value="3">
                                            <a href="{{ route('shop', ['sort' => '3']) }}">
                                                @lang('messages.shop.sort by best selling')
                                            </a>
                                        </option>
                                    </select>
                                </div>
                                <p>@lang('messages.shop.showing all result', ['count' => count($products)])</p>
                            </div>
                            <div class="col-12 col-sm-4 text-center text-sm-right">
                                <ul class="nav nav-tabs ml-auto">
                                    <li>
                                        <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i
                                                class="fa fa-th"></i> </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#list-view" data-toggle="tab"> <i
                                                class="fa fa-list-ul"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="row product-categorie-box">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                    <div class="row">
                                        @forelse ($products as $product)
                                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                <div class="products-single fix">
                                                    <div class="box-img-hover">
                                                        @if (!is_null($product->sale))
                                                            <div class="type-lb">
                                                                <p class="sale">@lang('messages.shop.sale')</p>
                                                            </div>
                                                        @endif
                                                        <img src="/storage/{{ $product->img }}" class="img-fluid"
                                                            alt="{{ $product->name_en }}">
                                                        <div class="mask-icon">
                                                            <ul>
                                                                <li>
                                                                    <a href="{{ route('productDetail', ['id' => $product->id]) }}"
                                                                        data-toggle="tooltip" data-placement="right"
                                                                        title=@lang('messages.shop.view')>
                                                                        <i class="fas fa-eye"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <a class="cart" href="#">
                                                                @lang('messages.shop.add to cart')
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="why-text">
                                                        <h4>{{ $product->name_en }}</h4>
                                                        <h5>
                                                            @if (!empty($product->sale))
                                                                ${{ $product->sale }}
                                                            @else
                                                                ${{ $product->price }}
                                                            @endif
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <span class="no_item_found">@lang('messages.shop.no items found')</span>
                                        @endforelse
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="list-view">
                                    <div class="row">
                                        @forelse ($products as $product)
                                            <div class="list-view-box">
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xShowing l-4">
                                                        <div class="products-single fix">
                                                            <div class="box-img-hover">
                                                                <div class="type-lb">
                                                                    <p class="new">@lang('messages.shop.new')</p>
                                                                </div>
                                                                <img src="/storage/{{ $product->img }}"
                                                                    class="img-fluid" alt="{{ $product->name_en }}">
                                                                <div class="mask-icon">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="{{ route('productDetail', ['id' => $product->id]) }}"
                                                                                data-toggle="tooltip" data-placement="right"
                                                                                title=@lang('messages.shop.view')>
                                                                                <i class="fas fa-eye"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                                        <div class="why-text full-width">
                                                            <h4>{{ $product->name_en }}</h4>
                                                            <h5>
                                                                @if (!empty($product->sale))
                                                                    <del>${{ $product->price }}</del>
                                                                    ${{ $product->sale }}
                                                                @else
                                                                    ${{ $product->price }}
                                                                @endif
                                                            </h5>
                                                            <p>{{ $product->description_en }}</p>
                                                            <a class="btn hvr-hover" href="#">@lang('messages.shop.add to
                                                                cart')</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <span class="no_item_found">@lang('messages.shop.no items found')</span>
                                    </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                    {{ $products->links('vendor/pagination/bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection
