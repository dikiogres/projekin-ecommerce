@extends('frontend.main-master')
@section('content');

<div>
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li class="active">Checkout</li>
                </ul>
            </div>
        </div>
    </div>
    <h3 class="container">
        Checkout Order
    </h3>
    <div class="container" style="display: flex">
        <div class="card">
            <div class="full">
                <header class="sec-head">
                    <h4 class="payment-method">
                        Payment Method
                    </h4>
                </header>
                <div class="card">
                    <div class="payment-list">
                        <div class="cred">
                            <div class="pay-cred">
                                <div class="pay-header">
                                    <span class="cc-title">Credit & Debit Cards</span>
                                    <ul style="display: flex">
                                        <li><img src="http://127.0.0.1:8000/frontend/assets/images/payments/1.png" alt=""></li>
                                        <li><img src="http://127.0.0.1:8000/frontend/assets/images/payments/2.png" alt=""></li>
                                        <li><img src="http://127.0.0.1:8000/frontend/assets/images/payments/3.png" alt=""></li>
                                        <li><img src="http://127.0.0.1:8000/frontend/assets/images/payments/4.png" alt=""></li>
                                        <li><img src="http://127.0.0.1:8000/frontend/assets/images/payments/5.png" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="payment-method-container">
                            <div>
                                <form class="payment-form">
                                    <div class="card-number-form">
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection