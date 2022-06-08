<div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
<!-- ============================================== SIDEBAR ============================================== -->
            <div class="col-xs-12 col-sm-12 col-md-3 sidebar">

                <!-- ================================== TOP NAVIGATION ================================== -->
                @include('frontend.landing.sidebar.top-navigation')
                <!-- ================================== TOP NAVIGATION : END ================================== -->

                <!-- ============================================== HOT DEALS ============================================== -->
                @include('frontend.landing.sidebar.hot-deals')
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

