<div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
<!-- ============================================== SIDEBAR ============================================== -->
            <div class="col-xs-12 col-sm-12 col-md-3 sidebar">

                <!-- ================================== TOP NAVIGATION ================================== -->
                <div class="side-menu animate-dropdown outer-bottom-xs">

                    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i>
                        @if(session()->get('language') == 'indonesia')
                        Kategori
                        @else
                        Category
                        @endif
                    </div>
                    <nav class="yamm megamenu-horizontal">
                        <ul class="nav">
                            @foreach($categories as $category)
                            <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle"
                                    data-toggle="dropdown"><i class="icon {{ $category->category_icon }}"
                                        aria-hidden="true"></i>
                                    @if(session()->get('language') == 'indonesia')
                                    {{ $category->category_name_ind }}
                                    @else
                                    {{ $category->category_name_en }}
                                    @endif
                                </a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <div class="row">
                                            @php
                                            $subcategories =
                                            App\Models\SubCategory::where('category_id',$category->id)->orderBy('subcategory_name_en','ASC')->get();
                                            @endphp

                                            @foreach($subcategories as $subcategory)
                                            <div class="col-sm-12 col-md-3">
                                                <h2 class="title">
                                                    @if(session()->get('language') == 'indonesia')
                                                    {{ $subcategory->subcategory_name_ind }}
                                                    @else
                                                    {{ $subcategory->subcategory_name_en }}
                                                    @endif
                                                </h2>

                                                @php
                                                $subsubcategories =
                                                App\Models\SubSubCategory::where('subcategory_id',$subcategory->id)->orderBy('subsubcategory_name_en','ASC')->get();
                                                @endphp

                                                @foreach($subsubcategories as $subsubcategory)
                                                <ul class="links list-unstyled">
                                                    <li><a href="#">
                                                            @if(session()->get('language') == 'indonesia')
                                                            {{ $subsubcategory->subsubcategory_name_ind }}
                                                            @else {{ $subsubcategory->subsubcategory_name_en }}
                                                            @endif
                                                        </a></li>
                                                </ul>
                                                @endforeach
                                            </div>
                                            @endforeach
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.row -->
                                    </li>
                                    <!-- /.yamm-content -->
                                </ul>
                                <!-- /.dropdown-menu -->
                            </li>
                            <!-- /.menu-item -->
                            @endforeach

                            <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle"
                                    data-toggle="dropdown"><i class="icon fa fa-paper-plane"></i>Kids and Babies</a>
                                <!-- /.dropdown-menu -->
                            </li>
                            <!-- /.menu-item -->

                            <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle"
                                    data-toggle="dropdown"><i class="icon fa fa-futbol-o"></i>Sports</a>
                                <!-- ================================== MEGAMENU VERTICAL ================================== -->
                                <!-- /.dropdown-menu -->
                                <!-- ================================== MEGAMENU VERTICAL ================================== -->
                            </li>
                            <!-- /.menu-item -->

                            <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle"
                                    data-toggle="dropdown"><i class="icon fa fa-envira"></i>Home and Garden</a>
                                <!-- /.dropdown-menu -->
                            </li>
                            <!-- /.menu-item -->

                        </ul>
                        <!-- /.nav -->
                    </nav>
                    <!-- /.megamenu-horizontal -->
                </div>
                <!-- /.side-menu -->
                <!-- ================================== TOP NAVIGATION : END ================================== -->

                <!-- ============================================== HOT DEALS ============================================== -->
                <div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
                    <h3 class="section-title">hot deals</h3>
                    <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
                    @foreach($hot_deals as $product) 
                    <div class="item">
                            <div class="products">
                                <div class="hot-deal-wrapper">
                                    <div class="image"> <img
                                            src="{{ asset($product->product_thumbnail) }}" alt=""> </div>

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
                                    <div class="product-price"> <span class="price"> ${{ $product->discount_price }} </span> <span
                                            class="price-before-discount"> ${{ $product->selling_price }} </span> </div>
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
                        @endforeach <!-- end hot deals foreach -->
                    </div>
                    <!-- /.sidebar-widget -->
                </div>
                <!-- ============================================== HOT DEALS: END ============================================== -->


                <!-- ============================================== PRODUCT TAGS ============================================== -->
                <div class="sidebar-widget product-tag wow fadeInUp">
                    <h3 class="section-title">Product tags</h3>
                    <div class="sidebar-widget-body outer-top-xs">
                        <div class="tag-list"> <a class="item" title="Phone" href="category.html">Phone</a> <a
                                class="item active" title="Vest" href="category.html">Vest</a> <a class="item"
                                title="Smartphone" href="category.html">Smartphone</a> <a class="item" title="Furniture"
                                href="category.html">Furniture</a> <a class="item" title="T-shirt"
                                href="category.html">T-shirt</a> <a class="item" title="Sweatpants"
                                href="category.html">Sweatpants</a> <a class="item" title="Sneaker"
                                href="category.html">Sneaker</a> <a class="item" title="Toys"
                                href="category.html">Toys</a> <a class="item" title="Rose" href="category.html">Rose</a>
                        </div>
                        <!-- /.tag-list -->
                    </div>
                    <!-- /.sidebar-widget-body -->
                </div>
                <!-- /.sidebar-widget -->
                <!-- ============================================== PRODUCT TAGS : END ============================================== -->


                <div class="home-banner"> <img src="{{ asset('frontend/assets/images/banners/LHS-banner.jpg') }}"
                        alt="Image"> </div>
            </div>
            <!-- /.sidemenu-holder -->
            <!-- ============================================== SIDEBAR : END ============================================== -->

