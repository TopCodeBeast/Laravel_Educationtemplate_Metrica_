@extends('layouts.ecommerce-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
 <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                            @component('common-components.breadcrumb')
                                 @slot('title') Procuct-Detail @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Pages @endslot
                                 @slot('item3') Detail @endslot
                              @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <img src="{{ URL::asset('assets/images/products/img-7.png') }}" alt="" class=" mx-auto  d-block" height="400">                                           
                                        </div><!--end col-->
                                        <div class="col-lg-6 align-self-center">
                                            <div class="single-pro-detail">
                                                <p class="mb-1">Metrica</p>
                                                <div class="custom-border mb-3"></div>
                                                <h3 class="pro-title">Metrica Morden Watch</h3>
                                                <p class="text-muted mb-0">Morden and good look model 2019</p> 
                                                <ul class="list-inline mb-2 product-review">
                                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                                    <li class="list-inline-item">4.5 (30 reviews)</li>
                                                </ul>
                                                <h2 class="pro-price">$89.00 <span><del>$180.00</del></span><span class="text-danger font-weight-bold ml-2">50% Off</span></h2>                                                 
                                                <h6 class="text-muted font-13">Features :</h6> 
                                                <ul class="list-unstyled pro-features border-0">
                                                    <li>It is a long established fact that a reader will be distracted.</li>
                                                    <li>Contrary to popular belief, Lorem Ipsum is not text. </li>
                                                </ul>
                                                <h6 class="text-muted font-13 d-inline-block align-middle mr-2">Color :</h6> 
                                                <div class="radio2 radio-info2 form-check-inline ml-2">
                                                    <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                                                    <label for="inlineRadio1"></label>
                                                </div>
                                                <div class="radio2 radio-dark2 form-check-inline">
                                                    <input type="radio" id="inlineRadio2" value="option2" name="radioInline">
                                                    <label for="inlineRadio2"></label>
                                                </div>                                                
                                                <div class="quantity mt-3 ">
                                                    <input class="form-control" type="number" min="0" value="0" id="example-number-input">
                                                    <a href="" class="btn btn-gradient-primary text-white px-4 d-inline-block"><i class="mdi mdi-cart mr-2"></i>Add to Cart</a>
                                                </div>                                             
                                            </div>
                                        </div><!--end col-->                                            
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="pro-order-box">
                                                <i class="mdi mdi-truck-fast text-success"></i>
                                                <h4 class="header-title">Fast Delivery</h4>
                                                <p class="text-muted mb-0">
                                                    It is a long established fact that a reader will be distracted.
                                                    Contrary to popular belief.
                                                </p>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-3">
                                            <div class="pro-order-box">
                                                <i class="mdi mdi-refresh text-danger"></i>
                                                <h4 class="header-title">Returns in 30 Days</h4>
                                                <p class="text-muted mb-0">
                                                    It is a long established fact that a reader will be distracted.
                                                    Contrary to popular belief.
                                                </p>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-3">
                                            <div class="pro-order-box">
                                                <i class="mdi mdi-headset text-warning"></i>
                                                <h4 class="header-title">Online Support 24/7</h4>
                                                <p class="text-muted mb-0">
                                                    It is a long established fact that a reader will be distracted.
                                                    Contrary to popular belief.
                                                </p>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-3">
                                            <div class="pro-order-box mb-0">
                                                <i class="mdi mdi-wallet text-purple"></i>
                                                <h4 class="header-title">Secure Payment</h4>
                                                <p class="text-muted mb-0">
                                                    It is a long established fact that a reader will be distracted.
                                                    Contrary to popular belief.
                                                </p>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                    
                    <div class="row">                                        
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="mt-0">Related Products</h5>
                                    <p class="text-muted mb-3 font-14">There are many variations of passages of Lorem Ipsum available, 
                                        but the majority have suffered alteration in some form, by injected humour, 
                                        or randomised words which don't look even slightly believable. 
                                        If you are going to use a passage.
                                    </p>
                                </div><!--end card-body-->
                            </div><!--end card-->
                            <div class="row">                        
                                <div class="col-lg-4">
                                    <div class="card e-co-product">
                                        <a href="">  
                                            <img src="{{ URL::asset('assets/images/products/img-1.png')}}" alt="" class="img-fluid">
                                        </a>                                    
                                        <div class="card-body product-info">
                                            <a href="" class="product-title">Unique Shoe (White)</a>
                                            <div class="d-flex justify-content-between my-2">
                                                <p class="product-price">$29.00 <span class="ml-2"><del>$49.00</del></span></p>
                                                <ul class="list-inline mb-0 product-review align-self-center">
                                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                                </ul>
                                            </div>
                                            <button class="btn btn-gradient-primary btn-round px-3 btn-sm waves-effect waves-light"><i class="mdi mdi-cart mr-1"></i> Add To Cart</button>
                                            <button class="btn btn-dark  btn-sm waves-effect waves-light wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="mdi mdi-heart"></i></button>
                                            <button class="btn btn-dark  btn-sm waves-effect waves-light quickview"  data-toggle="tooltip" data-placement="top" title="Quickview"><i class="mdi mdi-magnify"></i></button>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->
                                <div class="col-lg-4">
                                    <div class="card e-co-product">
                                        <a href="">  
                                            <img src="{{ URL::asset('assets/images/products/img-3.png')}}" alt="" class="img-fluid">
                                        </a>                                    
                                        <div class="card-body product-info">
                                            <a href="" class="product-title">Headphone F2019</a>
                                            <div class="d-flex justify-content-between my-2">
                                                <p class="product-price">$49.00 <span class="ml-2"><del>$79.00</del></span></p>
                                                <ul class="list-inline mb-0 product-review align-self-center">
                                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                                </ul>
                                            </div>
                                            <button class="btn btn-gradient-primary btn-round px-3 btn-sm waves-effect waves-light"><i class="mdi mdi-cart mr-1"></i> Add To Cart</button>
                                            <button class="btn btn-dark btn-sm waves-effect waves-light wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="mdi mdi-heart"></i></button>
                                            <button class="btn btn-dark btn-sm waves-effect waves-light quickview"  data-toggle="tooltip" data-placement="top" title="Quickview"><i class="mdi mdi-magnify"></i></button>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->
                                <div class="col-lg-4">
                                    <div class="card e-co-product">
                                        <a href="">  
                                            <img src="{{ URL::asset('assets/images/products/img-4.png')}}" alt="" class="img-fluid">
                                        </a>                                    
                                        <div class="card-body product-info">
                                            <a href="" class="product-title">Lavie Purse CN120</a>
                                            <div class="d-flex justify-content-between my-2">
                                                <p class="product-price">$60.00 <span class="ml-2"><del>$99.00</del></span></p>
                                                <ul class="list-inline mb-0 product-review align-self-center">
                                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                                </ul>
                                            </div>
                                            <button class="btn btn-gradient-primary btn-round px-3 btn-sm waves-effect waves-light"><i class="mdi mdi-cart mr-1"></i> Add To Cart</button>
                                            <button class="btn btn-dark btn-sm waves-effect waves-light wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="mdi mdi-heart"></i></button>
                                            <button class="btn btn-dark btn-sm waves-effect waves-light quickview"  data-toggle="tooltip" data-placement="top" title="Quickview"><i class="mdi mdi-magnify"></i></button>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->                                
                            </div><!--end row-->
                        </div><!--end col-->
                        <div class="col-md-3"> 
                            <div class="card">
                                <div class="card-body">
                                    <div class="review-box text-center align-item-center">                                                                    
                                        <h1>4.8</h1> 
                                        <h4 class="header-title">Overall Rating</h4>  
                                        <ul class="list-inline mb-0 product-review">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                            <li class="list-inline-item"><small class="text-muted">Total Review (700)</small></li>
                                        </ul>                                     
                                    </div> 
                                    <ul class="list-unstyled mt-3">
                                        <li class="mb-2">
                                            <span class="text-info">5 Star</span>
                                            <small class="float-right text-muted ml-3 font-14">593</small>
                                            <div class="progress mt-2" style="height:5px;">
                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 80%; border-radius:5px;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </li>
                                        <li class="mb-2">
                                            <span class="text-info">4 Star</span>
                                            <small class="float-right text-muted ml-3 font-14">99</small>
                                            <div class="progress mt-2" style="height:5px;">
                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 18%; border-radius:5px;" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </li>
                                        <li class="mb-2">
                                            <span class="text-info">3 Star</span>
                                            <small class="float-right text-muted ml-3 font-14">6</small>
                                            <div class="progress mt-2" style="height:5px;">
                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 10%; border-radius:5px;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </li>
                                        <li class="mb-2">
                                            <span class="text-info">2 Star</span>
                                            <small class="float-right text-muted ml-3 font-14">2</small>
                                            <div class="progress mt-2" style="height:5px;">
                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 1%; border-radius:5px;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="text-info">1 Star</span>
                                            <small class="float-right text-muted ml-3 font-14">0</small>
                                            <div class="progress mt-2" style="height:5px;">
                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 0%; border-radius:5px;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="review-box text-center align-item-center">                                                                    
                                        <h3>100%</h3> 
                                        <h4 class="header-title">Satisfied Customer</h4> 
                                        <p class="text-muted mb-0">All Customers give this product 4 and 5 Star Rating.</p>                                                                                                       
                                    </div>  
                                </div><!--end card-body-->
                            </div><!--end card-->                                                                     
                        </div><!--end col-->
                    </div><!--end row-->

                </div><!-- container -->
@stop
