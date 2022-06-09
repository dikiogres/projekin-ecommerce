@extends('frontend.main-master')
@section('content')

@section('title')
Home | Projekin
@endsection

<div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <!-- ============================================== SIDEBAR ============================================== -->
            @include('frontend.landing.sidebar')
            <div class="col-xs-12 col-sm-12 col-md-3 sidebar">

                <!-- ================================== TOP NAVIGATION ================================== -->
                @include('frontend.common.vertical_menu')
                <!-- ================================== TOP NAVIGATION : END ================================== -->

                <!-- ============================================== HOT DEALS ============================================== -->
                <div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
                    <h3 class="section-title">hot deals</h3>
                    <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
                        @foreach($hot_deals as $product)
                        <div class="item">
                            <div class="products">
                                <div class="hot-deal-wrapper">
                                    <div class="image"> <img src="{{ asset($product->product_thumbnail) }}" alt="">
                                    </div>

                                    @php
                                    $amount = $product->selling_price - $product->discount_price;
                                    $discount = ($amount/$product->selling_price) * 100;
                                    @endphp

                                    @if ($product->discount_price == NULL)
                                    <div class="tag new"><span>new</span></div>
                                    @else
                                    <div class="sale-offer-tag"><span>{{ round($discount) }}%<br>
                                            off</span></div>
                                    @endif
                                    <div class="timing-wrapper">
                                        <div class="box-wrapper">
                                            <div class="date box"> <span class="key">120</span> <span
                                                    class="value">DAYS</span> </div>
                                        </div>
                                        <div class="box-wrapper">
                                            <div class="hour box"> <span class="key">20</span> <span
                                                    class="value">HRS</span> </div>
                                        </div>
                                        <div class="box-wrapper">
                                            <div class="minutes box"> <span class="key">36</span> <span
                                                    class="value">MINS</span> </div>
                                        </div>
                                        <div class="box-wrapper hidden-md">
                                            <div class="seconds box"> <span class="key">60</span> <span
                                                    class="value">SEC</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.hot-deal-wrapper -->

                                <div class="product-info text-left m-t-20">
                                    <h3 class="name"><a href="detail.html">
                                            @if(session()->get('language') == 'indonesia')
                                            {{ $product->product_name_ind }}
                                            @else
                                            {{ $product->product_name_en }}
                                            @endif
                                        </a></h3>
                                    <div class="rating rateit-small"></div>

                                    @if ($product->discount_price == NULL)
                                    <div class="product-price"> <span class="price">
                                            ${{ $product->selling_price }} </span> </div>
                                    @else
                                    <div class="product-price"> <span class="price"> ${{ $product->discount_price }}
                                        </span> <span class="price-before-discount"> ${{ $product->selling_price }}
                                        </span> </div>
                                    @endif

                                    <!-- /.product-price -->

                                </div>
                                <!-- /.product-info -->

                                <div class="cart clearfix animate-effect">
                                    <div class="action">
                                        <div class="add-cart-button btn-group">
                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                <i class="fa fa-shopping-cart"></i> </button>
                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                        </div>
                                    </div>
                                    <!-- /.action -->
                                </div>
                                <!-- /.cart -->
                            </div>
                        </div>
                        @endforeach
                        <!-- end hot deals foreach -->
                    </div>
                    <!-- /.sidebar-widget -->
                </div>
                <!-- ============================================== HOT DEALS: END ============================================== -->


                <!-- ============================================== PRODUCT TAGS ============================================== -->
                @include('frontend.common.product_tags')
                <!-- ============================================== PRODUCT TAGS : END ============================================== -->


                <div class="home-banner"> <img src="{{ asset('frontend/assets/images/banners/LHS-banner.jpg') }}"
                        alt="Image"> </div>
            </div>
            <!-- /.sidemenu-holder -->
            <!-- ============================================== SIDEBAR : END ============================================== -->

            <!-- ============================================== CONTENT ============================================== -->
            <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                <!-- ========================================== SECTION – HERO ========================================= -->
                @include('frontend.landing.hero')
                <!-- ========================================= SECTION – HERO : END ========================================= -->

                <!-- ============================================== INFO BOXES ============================================== -->
                @include('frontend.landing.info-boxes')
                <!-- ============================================== INFO BOXES : END ============================================== -->
                
                <!-- ============================================== SCROLL TABS ============================================== -->
                @include('frontend.landing.scroll-tabs')
                <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
                    <div class="more-info-tab clearfix ">
                        <h3 class="new-product-title pull-left">New Products</h3>
                        <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
                            <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">
                                    @if(session()->get('language') == 'indonesia')
                                    Semua
                                    @else
                                    All
                                    @endif
                                </a></li>
                            @foreach($categories as $category)
                            <li><a data-transition-type="backSlide" href="#category{{ $category->id }}"
                                    data-toggle="tab">
                                    @if(session()->get('language') == 'indonesia')
                                    {{ $category->category_name_ind }}
                                    @else
                                    {{ $category->category_name_en }}
                                    @endif
                                </a></li>
                            @endforeach
                        </ul>
                        <!-- /.nav-tabs -->
                    </div>
                    <div class="tab-content outer-top-xs">
                        <div class="tab-pane in active" id="all">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">

                                    @foreach($products as $product)
                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a
                                                            href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en) }}"><img
                                                                src="{{ asset($product->product_thumbnail) }}"
                                                                alt=""></a>
                                                    </div>
                                                    <!-- /.image -->

                                                    @php
                                                    $amount = $product->selling_price - $product->discount_price;
                                                    $discount = ($amount/$product->selling_price) * 100;
                                                    @endphp

                                                    <div>
                                                        @if ($product->discount_price == NULL)
                                                        <div class="tag new"><span>new</span></div>
                                                        @else
                                                        <div class="tag hot"><span>{{ round($discount) }}%</span></div>
                                                        @endif
                                                    </div>
                                                </div>

                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="">
                                                            @if(session()->get('language') == 'indonesia')
                                                            {{ $product->product_name_ind }}
                                                            @else
                                                            {{ $product->product_name_en }}
                                                            @endif
                                                        </a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    @if ($product->discount_price == NULL)
                                                    <div class="product-price"> <span class="price">
                                                            ${{ $product->selling_price }} </span> </div>
                                                    @else
                                                    <div class="product-price"> <span class="price">
                                                            ${{ $product->discount_price }} </span> <span
                                                            class="price-before-discount">$
                                                            {{ $product->selling_price }}</span> </div>
                                                    @endif
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">

                                                                <button class="btn btn-primary icon" type="button"
                                                                    title="Add Cart" data-toggle="modal"
                                                                    data-target="#exampleModal" id="{{ $product->id }}"
                                                                    onclick="productView(this.id)"> <i
                                                                        class="fa fa-shopping-cart"></i> </button>

                                                                <button class="btn btn-primary cart-btn"
                                                                    type="button">Add to cart</button>
                                                            </li>

                                                            <button class="btn btn-primary icon" type="button"
                                                                title="Wishlist" id="{{ $product->id }}"
                                                                onclick="addToWishList(this.id)"> <i
                                                                    class="fa fa-heart"></i> </button>

                                                            <li class="lnk"> <a data-toggle="tooltip"
                                                                    class="add-to-cart" href="detail.html"
                                                                    title="Compare"> <i class="fa fa-signal"
                                                                        aria-hidden="true"></i> </a> </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->
                                    @endforeach
                                    <!--  // end all optionproduct foreach  -->
                                </div>
                                <!-- /.home-owl-carousel -->
                            </div>
                            <!-- /.product-slider -->
                        </div>
                        <!-- /.tab-pane -->

                        @foreach($categories as $category)
                        <div class="tab-pane" id="category{{ $category->id }}">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">

                                    @php
                                    $catwiseProduct =
                                    App\Models\Product::where('category_id',$category->id)->orderBy('id','DESC')->get();
                                    @endphp

                                    @forelse($catwiseProduct as $product)
                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href=""><img
                                                                src="{{ asset($product->product_thumbnail) }}"
                                                                alt=""></a>
                                                    </div>
                                                    <!-- /.image -->

                                                    @php
                                                    $amount = $product->selling_price - $product->discount_price;
                                                    $discount = ($amount/$product->selling_price) * 100;
                                                    @endphp

                                                    <div>
                                                        @if ($product->discount_price == NULL)
                                                        <div class="tag new"><span>new</span></div>
                                                        @else
                                                        <div class="tag hot"><span>{{ round($discount) }}%</span></div>
                                                        @endif
                                                    </div>
                                                </div>

                                                <!-- /.product-image -->
                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                            href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
                                                            @if(session()->get('language') == 'indonesia')
                                                            {{ $product->product_name_ind }} @else
                                                            {{ $product->product_name_en }} @endif
                                                        </a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    @if ($product->discount_price == NULL)
                                                    <div class="product-price"> <span class="price">
                                                            ${{ $product->selling_price }} </span> </div>
                                                    @else
                                                    <div class="product-price"> <span class="price">
                                                            ${{ $product->discount_price }} </span> <span
                                                            class="price-before-discount">$
                                                            {{ $product->selling_price }}</span> </div>
                                                    @endif

                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">

                                                                <button class="btn btn-primary icon" type="button"
                                                                    title="Add Cart" data-toggle="modal"
                                                                    data-target="#exampleModal" id="{{ $product->id }}"
                                                                    onclick="productView(this.id)"> <i class="fa fa-shopping-cart"></i>
                                                                </button>

                                                                <button class="btn btn-primary cart-btn"
                                                                    type="button">Add
                                                                    to cart</button>
                                                            </li>

                                                            <button class="btn btn-primary icon" type="button"
                                                                title="Wishlist" id="{{ $product->id }}" onclick=""> <i
                                                                    class="fa fa-heart"></i> </button>

                                                            <li class="lnk"> <a data-toggle="tooltip"
                                                                    class="add-to-cart" href="detail.html"
                                                                    title="Compare"> <i class="fa fa-signal"
                                                                        aria-hidden="true"></i> </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->
                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->
                                    @empty
                                    <h5 class="text-danger">No Product Found</h5>
                                    @endforelse
                                    <!--  // end all optionproduct foreach  -->
                                </div>
                                <!-- /.home-owl-carousel -->
                            </div>
                            <!-- /.product-slider -->
                        </div>
                        <!-- /.tab-pane -->
                        @endforeach
                        <!-- end categor foreach -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- ============================================== SCROLL TABS : END ============================================== -->

                <!-- ============================================== WIDE PRODUCTS ============================================== -->
                @include('frontend.landing.wide-products')
                <!-- ============================================== WIDE PRODUCTS : END ============================================== -->

                <!-- ============================================== BEST SELLER ============================================== -->
                @include('frontend.landing.best-seller')
                <!-- ============================================== BEST SELLER : END ============================================== -->

                <!-- ============================================== BLOG SLIDER ============================================== -->
                @include('frontend.landing.blog-slider')
                <!-- ============================================== BLOG SLIDER : END ============================================== -->

            </div>
            <!-- /.homebanner-holder -->
            <!-- ============================================== CONTENT : END ============================================== -->
        </div>
        <!-- /.row -->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->
        @include('frontend.body.brands')
        <!-- /.logo-slider -->
        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
    </div>
    <!-- /.container -->
</div>

@endsection