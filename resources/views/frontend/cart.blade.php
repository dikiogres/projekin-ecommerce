@extends('frontend.main-master')
@section('content');

<div class="body-content outer-top-xs">
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ul>
            </div>
        </div>
    </div>  
    <h3 class="container">
        My Cart
    </h3>
    <div class="container" style="display: flex">
        <div class="row">
            <div class="shopping-cart">
                <div class="shopping-cart-table">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="cart-romove item">Selection</th>
                                    <th colspan="1" class="cart-description item">Image</th>
                                    <th class="cart-product-name item">Product</th>
                                    <th class="cart-sub-total item">Price</th>
                                    <th class="cart-romove item">Remove</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <td colspan="6">
                                        <div class="shopping-cart-btn">
                                            <span class="">
                                                <a href="#"
                                                    class="btn btn-upper btn-primary pull-right outer-right-xs">Update
                                                    my cart</a>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td class="romove-item"><input type="checkbox" style="width: 20px; height: 20px">
                                    </td>
                                    <td class="cart-image">
                                        <a class="entry-thumbnail" href="detail.html">
                                            <img src={{ asset('frontend/assets/images/products/p1.jpg') }} alt="">
                                        </a>
                                    </td>
                                    <td class="cart-product-name-info">
                                        <h4 class="cart-product-description"><a href="detail.html">Floral Print Buttoned</a></h4>
                                        <div>
                                            <div class="rating rateit-small rateit"><button id="rateit-reset-3"
                                                    data-role="none" class="rateit-reset" aria-label="reset rating"
                                                    aria-controls="rateit-range-3" style="display: none;"></button>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="reviews">
                                                (06 Reviews)
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart-product-sub-total"><span class="cart-sub-total-price">$300.00</span>
                                    </td>
                                    <td class="romove-item"><a href="#" title="cancel" class="icon"><i
                                                class="fa fa-trash-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="romove-item"><input type="checkbox" style="width: 20px; height: 20px">
                                    </td>
                                    <td class="cart-image">
                                        <a class="entry-thumbnail" href="detail.html">
                                            <img src={{ asset('frontend/assets/images/products/p1.jpg') }} alt="">
                                        </a>
                                    </td>
                                    <td class="cart-product-name-info">
                                        <h4 class="cart-product-description"><a href="detail.html">Floral Print Buttoned</a></h4>
                                        <div>
                                            <div class="rating rateit-small rateit"><button id="rateit-reset-3"
                                                    data-role="none" class="rateit-reset" aria-label="reset rating"
                                                    aria-controls="rateit-range-3" style="display: none;"></button>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="reviews">
                                                (06 Reviews)
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart-product-sub-total"><span class="cart-sub-total-price">$300.00</span>
                                    </td>
                                    <td class="romove-item"><a href="#" title="cancel" class="icon"><i
                                                class="fa fa-trash-o"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div style="width: 30px"></div>
        <div>
            <div class="card">
                <div style="padding: 16px">
                    <div class="promo-btn">
                        <div class="iconLeft">
                            <img class="promo-img" src={{ asset('frontend/assets/images/voucher.png') }} alt=""/>
                        </div>
                        <div class="content">
                            <div class="css-tncl4u" data-testid="contentActionPromoWidget">
                                <span class="promo-text">Choose your promo</span>
                            </div>
                        </div>
                        <div>
                            <img class="arrow-png" src={{ asset('frontend/assets/images/arrow.png') }} alt=""/>
                        </div>
                    </div>
                </div>
                <div class="line" style="margin: 0px;"></div>
                <div style="padding: 16px">
                    <div>
                        <h3 class="text-ringkasan">Shopping Summary</h3>
                        <div style="display: flex; width: 100%">
                            <p class="total-price">Total Price (x product)</p>
                            <p class="price">Rp36.000</p>
                        </div>
                        <hr class="hr-line">
                        <div style="display: flex; width: 100%">
                            <p class="total-price1">Total Price</p>
                            <p class="price1">Rp36.000</p>
                        </div>
                    </div>
                    <div>
                        <button class="buy-btn">
                            <span>Checkout</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
