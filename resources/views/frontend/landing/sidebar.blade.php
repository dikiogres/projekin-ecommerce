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
                @include('frontend.landing.sidebar.product-tags')
                <!-- ============================================== PRODUCT TAGS : END ============================================== -->
                


                <div class="home-banner"> <img src="{{ asset('frontend/assets/images/banners/LHS-banner.jpg') }}"
                        alt="Image"> </div>
            </div>
            <!-- /.sidemenu-holder -->
            <!-- ============================================== SIDEBAR : END ============================================== -->

