@extends('layouts.main')
@section('content')
@include('partials.breadcrumbs')
<!--====== Checkout Form Steps Part Start ======-->
<section class="checkout-wrapper section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="checkout-steps-form-style-1">
                    <ul id="accordionExample">
                        <li>
                            <h6 class="title collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                aria-expanded="false" aria-controls="collapseFour">Shipping Address</h6>
                            <section class="checkout-steps-form-content collapse show" id="collapseFour"
                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="single-form form-default">
                                            <label>User Name</label>
                                            <div class="row">
                                                <div class="col-md-6 form-input form">
                                                    <input type="text" placeholder="First Name">
                                                </div>
                                                <div class="col-md-6 form-input form">
                                                    <input type="text" placeholder="Last Name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form form-default">
                                            <label>Email Address</label>
                                            <div class="form-input form">
                                                <input type="text" placeholder="Email Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form form-default">
                                            <label>Phone Number</label>
                                            <div class="form-input form">
                                                <input type="text" placeholder="Phone Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form form-default">
                                            <label>City</label>
                                            <div class="form-input form">
                                                <input type="text" placeholder="City">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form form-default">
                                            <label>Post Code</label>
                                            <div class="form-input form">
                                                <input type="text" placeholder="Post Code">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-payment-option">
                                            <h6 class="heading-6 font-weight-400 payment-title">Select Delivery
                                                Option</h6>
                                            <div class="payment-option-wrapper">
                                                <div class="single-payment-option">
                                                    <input type="radio" name="shipping" checked id="shipping-1">
                                                    <label for="shipping-1">
                                                        <img src="https://via.placeholder.com/60x32"
                                                            alt="Sipping">
                                                        <p>Standerd Shipping</p>
                                                        <span class="price">$10.50</span>
                                                    </label>
                                                </div>
                                                <div class="single-payment-option">
                                                    <input type="radio" name="shipping" id="shipping-2">
                                                    <label for="shipping-2">
                                                        <img src="https://via.placeholder.com/60x32"
                                                            alt="Sipping">
                                                        <p>Standerd Shipping</p>
                                                        <span class="price">$10.50</span>
                                                    </label>
                                                </div>
                                                <div class="single-payment-option">
                                                    <input type="radio" name="shipping" id="shipping-3">
                                                    <label for="shipping-3">
                                                        <img src="https://via.placeholder.com/60x32"
                                                            alt="Sipping">
                                                        <p>Standerd Shipping</p>
                                                        <span class="price">$10.50</span>
                                                    </label>
                                                </div>
                                                <div class="single-payment-option">
                                                    <input type="radio" name="shipping" id="shipping-4">
                                                    <label for="shipping-4">
                                                        <img src="https://via.placeholder.com/60x32"
                                                            alt="Sipping">
                                                        <p>Standerd Shipping</p>
                                                        <span class="price">$10.50</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-12">
                                        <div class="steps-form-btn button">
                                            <button class="btn" data-bs-toggle="collapse"
                                                data-bs-target="#collapsefive" aria-expanded="false"
                                                aria-controls="collapsefive">Lanjut</button>
                                        </div>
                                    </div> --}}
                                </div>
                            </section>
                        </li>
                        {{-- <li>
                            <h6 class="title collapsed" data-bs-toggle="collapse" data-bs-target="#collapsefive"
                                aria-expanded="false" aria-controls="collapsefive">Payment Info</h6>
                            <section class="checkout-steps-form-content collapse" id="collapsefive"
                                aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="checkout-payment-form">
                                            <div class="single-form form-default">
                                                <label>Cardholder Name</label>
                                                <div class="form-input form">
                                                    <input type="text" placeholder="Cardholder Name">
                                                </div>
                                            </div>
                                            <div class="single-form form-default">
                                                <label>Card Number</label>
                                                <div class="form-input form">
                                                    <input id="credit-input" type="text"
                                                        placeholder="0000 0000 0000 0000">
                                                    <img src="assets/images/payment/card.png" alt="card">
                                                </div>
                                            </div>
                                            <div class="payment-card-info">
                                                <div class="single-form form-default mm-yy">
                                                    <label>Expiration</label>
                                                    <div class="expiration d-flex">
                                                        <div class="form-input form">
                                                            <input type="text" placeholder="MM">
                                                        </div>
                                                        <div class="form-input form">
                                                            <input type="text" placeholder="YYYY">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-form form-default">
                                                    <label>CVC/CVV <span><i
                                                                class="mdi mdi-alert-circle"></i></span></label>
                                                    <div class="form-input form">
                                                        <input type="text" placeholder="***">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-form form-default button">
                                                <button class="btn">pay now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </li> --}}
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="checkout-sidebar">
                    {{-- <div class="checkout-sidebar-coupon">
                        <p></p>
                        <form action="#">
                            <div class="single-form form-default">
                                <div class="form-input form">
                                    <input type="text" placeholder="Kode Kupon">
                                </div>
                                <div class="button">
                                    <button class="btn">Gunakan</button>
                                </div>
                            </div>
                        </form>
                    </div> --}}
                    <div class="checkout-sidebar-price-table mt-0">
                        <h5 class="title">Tabel Harga</h5>

                        <div class="sub-total-price">
                            <div class="total-price">
                                <p class="value">Subotal:</p>
                                <p class="price">$144.00</p>
                            </div>
                            <div class="total-price shipping">
                                <p class="value">Pengiriman:</p>
                                <p class="price">$10.50</p>
                            </div>
                            <div class="total-price discount">
                                <p class="value">Biaya Penaganan</p>
                                <p class="price">$10.00</p>
                            </div>
                        </div>
                        <div class="total-payable">
                            <div class="payable-price">
                                <p class="value">Total:</p>
                                <p class="price">$164.50</p>
                            </div>
                        </div>
                        <div class="price-table-btn button">
                            <a href="javascript:void(0)" class="btn btn-alt">Beli</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== Checkout Form Steps Part Ends ======-->
@endsection
