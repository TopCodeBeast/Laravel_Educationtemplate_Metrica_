@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
 <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                             @component('common-components.breadcrumb')
                                 @slot('title') Cart @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Ecommerce @endslot
                              @endcomponent

                           
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0">Shopping Cart</h4>
                                    <p class="mb-4 text-muted">Metrica morden shopping cart.</p>
                                    <div class="table-responsive shopping-cart">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>                                                        
                                                    <th>Total</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="{{ URL::asset('assets/images/products/img-5.png')}}" alt="" height="52">
                                                        <p class="d-inline-block align-middle mb-0">
                                                            <a href="" class="d-inline-block align-middle mb-0 product-name">Reebok Shoes</a> 
                                                            <br>
                                                            <span class="text-muted font-13">size-08 (Model 2019)</span> 
                                                        </p>
                                                    </td>
                                                    <td>$99</td>
                                                    <td>
                                                        <input class="form-control w-25" type="number" value="2" id="example-number-input1">
                                                    </td>
                                                    <td>$198</td>
                                                    <td>
                                                        <a href="" class="text-dark"><i class="mdi mdi-close-circle-outline font-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="{{ URL::asset('assets/images/products/3.png')}}" alt="" height="52">
                                                        <p class="d-inline-block align-middle mb-0">
                                                            <a href="" class="d-inline-block align-middle mb-0 product-name">Red Morden Chair</a> 
                                                            <br>
                                                            <span class="text-muted font-13">size-06 (Model 2019)</span> 
                                                        </p>
                                                    </td>
                                                    <td>$75</td>
                                                    <td>
                                                        <input class="form-control w-25" type="number" value="2" id="example-number-input2">
                                                    </td>
                                                    <td>$150</td>
                                                    <td>
                                                        <a href="" class="text-dark"><i class="mdi mdi-close-circle-outline font-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="{{ URL::asset('assets/images/products/img-4.png')}}" alt="" height="52">
                                                        <p class="d-inline-block align-middle mb-0">
                                                            <a href="" class="d-inline-block align-middle mb-0 product-name">Lava Purse</a> 
                                                            <br>
                                                            <span class="text-muted font-13">Pure Lether 100%(Model 2019)</span> 
                                                        </p>
                                                    </td>
                                                    <td>$49</td>
                                                    <td>
                                                        <input class="form-control w-25" type="number" value="1" id="example-number-input3">
                                                    </td>
                                                    <td>$49</td>
                                                    <td>
                                                        <a href="" class="text-dark"><i class="mdi mdi-close-circle-outline font-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="{{ URL::asset('assets/images/products/1.png')}}" alt="" height="52">
                                                        <p class="d-inline-block align-middle mb-0">
                                                            <a href="" class="d-inline-block align-middle mb-0 product-name">Important Chair</a> 
                                                            <br>
                                                            <span class="text-muted font-13">size-07 (Model 2019)</span> 
                                                        </p>
                                                    </td>
                                                    <td>$99</td>
                                                    <td>
                                                        <input class="form-control w-25" type="number" value="1" id="example-number-input4">
                                                    </td>
                                                    <td>$99</td>
                                                    <td>
                                                        <a href="" class="text-dark"><i class="mdi mdi-close-circle-outline font-18"></i></a>
                                                    </td>
                                                </tr>                                                    
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-6 align-self-center">
                                            <div class="text-center cart-promo">
                                                <img src="{{ URL::asset('assets/images/logo-sm.png')}}" alt="" height="50" class="mb-2">
                                                <h4 class="">Have a promo code ?</h4>
                                                <p class="font-13">If you have a promocode, You can take discount !</p>
                                                <div class="input-group w-75 mx-auto">
                                                    <input type="text" class="form-control" placeholder="Use Promocode" aria-describedby="button-addon2">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-gradient-primary" type="button" id="button-addon2">Apply</button>
                                                    </div>
                                                </div>                                                    
                                            </div>
                                            <div class="mt-4">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <a href="" class="text-info"><i class="fas fa-long-arrow-alt-left mr-1"></i> Continue Shopping</a>
                                                    </div>                                                        
                                                    <div class="col-6 text-right">
                                                        <a href="/material-version/app-ecommerce-checkout" class="text-info">Checkout <i class="fas fa-long-arrow-alt-right ml-1"></i></a>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div><!--end col--> 
                                        <div class="col-md-6">
                                            <div class="total-payment p-3">
                                                <h4 class="header-title">Total Payment</h4>
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td class="payment-title">Subtotal</td>
                                                            <td>$496.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="payment-title">Shipping</td>
                                                            <td>
                                                                <ul class="list-unstyled mb-0">
                                                                    <li>
                                                                        <div class="radio radio-info">
                                                                            <input type="radio" name="radio" id="radio_1" value="option_1" checked>
                                                                            <label for="radio_1">
                                                                                Shipping Charge : $5.00
                                                                            </label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="radio radio-info">
                                                                            <input type="radio" name="radio" id="radio_2" value="option_2">
                                                                            <label for="radio_2">
                                                                                Express Shipping Charge : $10.00
                                                                            </label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <a href="" class="text-dark"><strong>Change Address</strong></a> 
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="payment-title">Promo Code</td>
                                                            <td>-$10.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="payment-title">Total</td>
                                                            <td class="text-dark"><strong>$491.00</strong></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!--end col--> 
                                    </div><!--end row--> 
                                </div><!--end card-->
                            </div><!--end card-body-->
                        </div><!--end col-->
                    </div><!--end row--> 

                </div><!-- container -->

@stop
