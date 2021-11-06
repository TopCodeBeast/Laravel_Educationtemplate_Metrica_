@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
    
                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                             @component('common-components.breadcrumb')
                                 @slot('title') Procucts @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Ecommerce @endslot
                              @endcomponent

                           
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="ribbon1 rib1-pink">
                                        <span class="text-white text-center rib1-pink">50% off</span>                                        
                                    </div><!--end ribbon-->                                    
                                    <img src="{{ URL::asset('assets/images/products/img-7.png')}}" alt="" class="d-block mx-auto my-4" height="170">
                                    <div class="d-flex justify-content-between align-items-center my-4">
                                        <div>
                                            <p class="text-muted mb-2">Interior Product</p>
                                            <a href="#" class="header-title">Unique Black Watch</a>
                                        </div>
                                        <div>
                                            <h4 class="text-dark mt-0 mb-2">$20.00 <small class="text-muted font-14"><del>$49.00</del></small></h4>  
                                            <ul class="list-inline mb-0 product-review align-self-center">
                                                <li class="list-inline-item"><i class="la la-star text-warning font-16"></i></li>
                                                <li class="list-inline-item"><i class="la la-star text-warning font-16 ml-n2"></i></li>
                                                <li class="list-inline-item"><i class="la la-star text-warning font-16 ml-n2"></i></li>
                                                <li class="list-inline-item"><i class="la la-star text-warning font-16 ml-n2"></i></li>
                                                <li class="list-inline-item"><i class="la la-star-half-o text-warning font-16 ml-n2"></i></li>
                                            </ul> 
                                        </div>      
                                    </div> 
                                    <button class="btn btn-soft-primary btn-block">Add To Cart</button>                                                            
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="ribbon1 rib1-warning">
                                        <span class="text-white text-center rib1-warning">50% off</span>                                        
                                    </div><!--end ribbon-->
                                    <img src="{{ URL::asset('assets/images/products/img-6.png')}}" alt="" class="d-block mx-auto my-4" height="170">
                                    <div class="d-flex justify-content-between align-items-center my-4">
                                        <div>
                                            <p class="text-muted mb-2">Interior Product</p>
                                            <a href="#" class="header-title">Unique Black Watch</a>
                                        </div>
                                        <div>
                                            <h4 class="text-dark mt-0 mb-2">$20.00 <small class="text-muted font-14"><del>$49.00</del></small></h4>  
                                            <ul class="list-inline mb-0 product-review align-self-center">
                                                <li class="list-inline-item"><i class="la la-star text-warning font-16"></i></li>
                                                <li class="list-inline-item"><i class="la la-star text-warning font-16 ml-n2"></i></li>
                                                <li class="list-inline-item"><i class="la la-star text-warning font-16 ml-n2"></i></li>
                                                <li class="list-inline-item"><i class="la la-star text-warning font-16 ml-n2"></i></li>
                                                <li class="list-inline-item"><i class="la la-star-half-o text-warning font-16 ml-n2"></i></li>
                                            </ul> 
                                        </div>      
                                    </div> 
                                    <button class="btn btn-soft-primary btn-block">Add To Cart</button>      
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="ribbon1 rib1-success">
                                        <span class="text-white text-center rib1-success">50% off</span>                                        
                                    </div><!--end ribbon-->                                    
                                    <img src="{{ URL::asset('assets/images/products/img-5.png')}}" alt="" class="d-block mx-auto my-4" height="170">
                                    <div class="d-flex justify-content-between align-items-center my-4">
                                        <div>
                                            <p class="text-muted mb-2">Interior Product</p>
                                            <a href="#" class="header-title">Unique Black Watch</a>
                                        </div>
                                        <div>
                                            <h4 class="text-dark mt-0 mb-2">$20.00 <small class="text-muted font-14"><del>$49.00</del></small></h4>  
                                            <ul class="list-inline mb-0 product-review align-self-center">
                                                <li class="list-inline-item"><i class="la la-star text-warning font-16"></i></li>
                                                <li class="list-inline-item"><i class="la la-star text-warning font-16 ml-n2"></i></li>
                                                <li class="list-inline-item"><i class="la la-star text-warning font-16 ml-n2"></i></li>
                                                <li class="list-inline-item"><i class="la la-star text-warning font-16 ml-n2"></i></li>
                                                <li class="list-inline-item"><i class="la la-star-half-o text-warning font-16 ml-n2"></i></li>
                                            </ul> 
                                        </div>      
                                    </div> 
                                    <button class="btn btn-soft-primary btn-block">Add To Cart</button>      
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="ribbon1 rib1-purple">
                                        <span class="text-white text-center rib1-purple">50% off</span>                                        
                                    </div><!--end ribbon-->                                    
                                    <img src="{{ URL::asset('assets/images/products/img-4.png')}}" alt="" class="d-block mx-auto my-4" height="170">
                                    <div class="d-flex justify-content-between align-items-center my-4">
                                        <div>
                                            <p class="text-muted mb-2">Interior Product</p>
                                            <a href="#" class="header-title">Unique Black Watch</a>
                                        </div>
                                        <div>
                                            <h4 class="text-dark mt-0 mb-2">$20.00 <small class="text-muted font-14"><del>$49.00</del></small></h4>  
                                            <ul class="list-inline mb-0 product-review align-self-center">
                                                <li class="list-inline-item"><i class="la la-star text-warning font-16"></i></li>
                                                <li class="list-inline-item"><i class="la la-star text-warning font-16 ml-n2"></i></li>
                                                <li class="list-inline-item"><i class="la la-star text-warning font-16 ml-n2"></i></li>
                                                <li class="list-inline-item"><i class="la la-star text-warning font-16 ml-n2"></i></li>
                                                <li class="list-inline-item"><i class="la la-star-half-o text-warning font-16 ml-n2"></i></li>
                                            </ul> 
                                        </div>      
                                    </div> 
                                    <button class="btn btn-soft-primary btn-block">Add To Cart</button>      
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->                        
                    </div>  <!--end row-->
                    <div class="row">                       
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="ribbon4 rib4-warning">
                                        <span class="ribbon4-band ribbon4-band-warning text-white text-center">50% off</span>                                        
                                    </div><!--end ribbon-->
                                    <img src="{{ URL::asset('assets/images/products/img-3.png')}}" alt="" class="d-block mx-auto my-4" height="170">
                                    <div class="d-flex justify-content-between align-items-center my-4">
                                        <div>
                                            <p class="text-muted mb-2">Interior Product</p>
                                            <a href="#" class="header-title">Unique Black Watch</a>
                                        </div>
                                        <div>
                                            <h4 class="text-dark mt-0 mb-2">$20.00 <small class="text-muted font-14"><del>$49.00</del></small></h4>  
                                            <ul class="list-inline mb-0 product-review align-self-center">
                                                <li class="list-inline-item"><i class="la la-star text-warning font-16"></i></li>
                                                <li class="list-inline-item"><i class="la la-star text-warning font-16 ml-n2"></i></li>
                                                <li class="list-inline-item"><i class="la la-star text-warning font-16 ml-n2"></i></li>
                                                <li class="list-inline-item"><i class="la la-star text-warning font-16 ml-n2"></i></li>
                                                <li class="list-inline-item"><i class="la la-star-half-o text-warning font-16 ml-n2"></i></li>
                                            </ul> 
                                        </div>      
                                    </div> 
                                    <button class="btn btn-soft-primary btn-block">Add To Cart</button>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->             

                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="ribbon4 rib4-secondary">
                                        <span class="ribbon4-band ribbon4-band-secondary text-white text-center">50% off</span>                                        
                                    </div><!--end ribbon-->
                                    <img src="{{ URL::asset('assets/images/products/img-6.png')}}" alt="" class="d-block mx-auto my-4" height="170">
                                    <div class="d-flex justify-content-between align-items-center my-4">
                                        <div>
                                            <p class="text-muted mb-2">Interior Product</p>
                                            <a href="#" class="header-title">Unique Black Watch</a>
                                        </div>
                                        <div>
                                            <h4 class="text-dark mt-0 mb-2">$20.00 <small class="text-muted font-14"><del>$49.00</del></small></h4>  
                                            <ul class="list-inline mb-0 product-review align-self-center">
                                                <li class="list-inline-item"><i class="la la-star text-warning font-16"></i></li>
                                                <li class="list-inline-item"><i class="la la-star text-warning font-16 ml-n2"></i></li>
                                                <li class="list-inline-item"><i class="la la-star text-warning font-16 ml-n2"></i></li>
                                                <li class="list-inline-item"><i class="la la-star text-warning font-16 ml-n2"></i></li>
                                                <li class="list-inline-item"><i class="la la-star-half-o text-warning font-16 ml-n2"></i></li>
                                            </ul> 
                                        </div>      
                                    </div> 
                                    <button class="btn btn-soft-primary btn-block">Add To Cart</button>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->  

                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="ribbon3 rib3-warning">
                                        <span class="text-white text-center rib3-warning">50% off</span>                                        
                                    </div><!--end ribbon-->
                                    <img src="{{ URL::asset('assets/images/products/img-1.png')}}" alt="" class="d-block mx-auto my-4" height="170">
                                    <div class="d-flex justify-content-between align-items-center my-4">
                                        <div>
                                            <p class="text-muted mb-2">Interior Product</p>
                                            <a href="#" class="header-title">Unique Black Watch</a>
                                        </div>
                                        <div>
                                            <h4 class="text-dark mt-0 mb-2">$20.00 <small class="text-muted font-14"><del>$49.00</del></small></h4>  
                                            <ul class="list-inline mb-0 product-review align-self-center">
                                                <li class="list-inline-item"><i class="la la-star text-warning font-16"></i></li>
                                                <li class="list-inline-item"><i class="la la-star text-warning font-16 ml-n2"></i></li>
                                                <li class="list-inline-item"><i class="la la-star text-warning font-16 ml-n2"></i></li>
                                                <li class="list-inline-item"><i class="la la-star text-warning font-16 ml-n2"></i></li>
                                                <li class="list-inline-item"><i class="la la-star-half-o text-warning font-16 ml-n2"></i></li>
                                            </ul> 
                                        </div>      
                                    </div> 
                                    <button class="btn btn-soft-primary btn-block">Add To Cart</button>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="ribbon3 rib3-secondary">
                                        <span class="text-white text-center rib3-secondary">50% off</span>                                        
                                    </div><!--end ribbon-->
                                    <img src="{{ URL::asset('assets/images/products/img-7.png')}}" alt="" class="d-block mx-auto my-4" height="170">
                                    <div class="d-flex justify-content-between align-items-center my-4">
                                        <div>
                                            <p class="text-muted mb-2">Interior Product</p>
                                            <a href="#" class="header-title">Unique Black Watch</a>
                                        </div>
                                        <div>
                                            <h4 class="text-dark mt-0 mb-2">$20.00 <small class="text-muted font-14"><del>$49.00</del></small></h4>  
                                            <ul class="list-inline mb-0 product-review align-self-center">
                                                <li class="list-inline-item"><i class="la la-star text-warning font-16"></i></li>
                                                <li class="list-inline-item"><i class="la la-star text-warning font-16 ml-n2"></i></li>
                                                <li class="list-inline-item"><i class="la la-star text-warning font-16 ml-n2"></i></li>
                                                <li class="list-inline-item"><i class="la la-star text-warning font-16 ml-n2"></i></li>
                                                <li class="list-inline-item"><i class="la la-star-half-o text-warning font-16 ml-n2"></i></li>
                                            </ul> 
                                        </div>      
                                    </div> 
                                    <button class="btn btn-soft-primary btn-block">Add To Cart</button>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->                        
                    </div>  <!--end row-->

                </div><!-- container -->
@stop
