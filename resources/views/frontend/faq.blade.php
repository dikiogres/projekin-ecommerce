@extends('frontend.main-master')
@section('content')
<div class="container mt-5 mb-5">

    <div class="row">

        <div class="col-md-12">

            <div class="card">


                <div class="card-div d-flex flex-column">

                    <h3 class="font-weight-bold">Frequently Asked Questions</h3>

                    <span class="d-block text-center font-agak-besar">If you are new to Projekin or looking for answer
                        to your
                        questions. this guide will <br> help you to learn more about our service and their
                        features.</span>


                </div>


                <div class="card-div-2">

                    <div class="px-1">

                        <div class="search">

                            <i class="fa fa-search"></i>
                            <input type="text" class="form-control" placeholder="Have a question? Ask Now">
                            <button class="btn btn-primary">Search</button>

                        </div>


                    </div>


                </div>

                <div class="col-sm accordion_one">
                    <div class="panel-group" id="accordionFourLeft">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion_oneLeft"
                                        href="#collapseFiveLeftone" aria-expanded="false" class="collapsed">
                                        Is my personal information safe ?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFiveLeftone" class="panel-collapse collapse" aria-expanded="false"
                                role="tablist" style="height: 0px;">
                                <div class="panel-body">
                                    <div class="img-accordion">
                                        <img src="https://img.icons8.com/color/81/000000/person-female.png" alt="">
                                    </div>
                                    <div class="text-accordion">
                                        <p>
                                            We care about your privacy. You can read our Privacy Policy for more. The
                                            Privacy Policy is part of our Terms of Service.
                                        </p>
                                    </div>
                                </div>
                                <!-- end of panel-body -->
                            </div>
                        </div>
                        <!-- /.panel-default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion_oneLeft"
                                        href="#collapseFiveLeftTwo" aria-expanded="false">
                                        How long does it take for me to receive revenues from an order ?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFiveLeftTwo" class="panel-collapse collapse" aria-expanded="false"
                                role="tablist" style="height: 0px;">
                                <div class="panel-body">
                                    <div class="img-accordion">
                                        <img src="https://img.icons8.com/color/81/000000/person-female.png" alt="">
                                    </div>
                                    <div class="text-accordion">
                                        <p>
                                            Buyers pay Projekin for orders in advance. Once the order is created and
                                            started, Sellers must fulfill their orders as described in their Gig
                                            description and must deliver completed files and/or proof of work using the
                                            Deliver Your Order button (located on the Order page). Once work is
                                            delivered, the Buyer has three days to respond and post a review (or 14 days
                                            for gigs with shipping). If no response is provided within the response
                                            time, the order will be considered completed. After the order is marked as
                                            complete, you have to wait 14 days to withdraw your funds. Note: The waiting
                                            period for Top Rated Sellers is seven days.
                                        </p>
                                    </div>
                                </div>
                                <!-- end of panel-body -->
                            </div>
                        </div>
                        <!-- /.panel-default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion_oneLeft"
                                        href="#collapseFiveLeftThree" aria-expanded="false">
                                        Are there any fees when withdrawing revenue ?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFiveLeftThree" class="panel-collapse collapse" aria-expanded="false"
                                role="tablist">
                                <div class="panel-body">
                                    <div class="img-accordion">
                                        <img src="https://img.icons8.com/color/81/000000/person-female.png" alt="">
                                    </div>
                                    <div class="text-accordion">
                                        <p>
                                            There are no fees for withdrawing through PayPal.

                                            Withdrawing to your Projekin Revenue Card varies, Please review the fee
                                            table associated with the card.
                                            Fees are charged by MasterCard. Projekin does not charge any fees for this
                                            card.

                                            Withdrawing by Bank Transfer or Direct deposit also incur fees, see
                                            Withdrawing Funds.
                                        </p>
                                    </div>
                                </div>
                                <!-- end of panel-body -->
                            </div>
                        </div>
                        <!-- /.panel-default -->
                    </div>
                    <!--end of /.panel-group-->
                </div>


            </div>


        </div>



    </div>

</div>


@endsection
