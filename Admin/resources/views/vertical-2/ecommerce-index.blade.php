@extends('layouts.vertical-2-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('headerStyle')
        <link href="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('plugins/lightpick/lightpick.css')}}" rel="stylesheet" />

@stop

@section('sidebarPortion')
    <li class="leftbar-menu-item">
                    <a href="javascript: void(0);" class="menu-link">
                        <i data-feather="shopping-cart" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>
                        <span>Dashboard</span>
                        <span class="menu-arrow">
                            <i class="mdi mdi-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="/vertical-2/ecommerce-index"><i class="ti-control-record"></i>Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link" href="/ecommerce/ecommerce-products"><i class="ti-control-record"></i>Products</a></li>
                        <li class="nav-item"><a class="nav-link" href="/ecommerce/ecommerce-product-list"><i class="ti-control-record"></i>Product List</a></li>
                        <li class="nav-item"><a class="nav-link" href="/ecommerce/ecommerce-product-detail"><i class="ti-control-record"></i>Product Detail</a></li>
                        <li class="nav-item"><a class="nav-link" href="/ecommerce/ecommerce-cart"><i class="ti-control-record"></i>Cart</a></li>
                        <li class="nav-item"><a class="nav-link" href="/ecommerce/ecommerce-checkout"><i class="ti-control-record"></i>Checkout</a></li>
                    </ul>
                </li>
@stop

@section('content')
  <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-right">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Metrica</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Dashboard</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">                                    
                                    <h4 class="header-title mt-0">Revenue</h4>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="media my-3">
                                                <img src="{{ URL::asset('assets/images/widgets/dollar.png')}}" alt="" class="thumb-md rounded-circle">                                      
                                                <div class="media-body align-self-center text-truncate ml-3">                                                    
                                                    <h4 class="mt-0 mb-1 font-weight-semibold text-dark font-24">$36154.00</h4>   
                                                    <p class="text-muted text-uppercase mb-0 font-12">Total Revenue Of This Month</p>                                         
                                                </div><!--end media-body-->
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-md-8">
                                            <ul class="nav-border nav nav-pills" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link font-weight-semibold" data-toggle="tab" href="#Today" role="tab">Today</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link font-weight-semibold" data-toggle="tab" href="#This_Week" role="tab">This Week</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link active font-weight-semibold" data-toggle="tab" href="#This_Month" role="tab">This Month</a>
                                                </li>
                                            </ul>
                                        </div><!--end col-->                                                                            
                                    </div> <!--end row-->
                                    <div class="tab-content">
                                        <div class="tab-pane pt-3" id="Today" role="tabpanel">
                                            <div id="eco_dash" class="apex-charts"></div>
                                        </div><!-- Tab panes -->   
                                        <div class="tab-pane pt-3" id="This_Week" role="tabpanel">
                                            <div id="Top_Week" class="apex-charts"></div>
                                        </div><!-- Tab panes -->   
                                        <div class="tab-pane active pt-3" id="This_Month" role="tabpanel">
                                            <canvas id="bar" class="drop-shadow w-100"  height="350"></canvas>
                                        </div><!-- Tab panes -->   
                                    </div><!-- Tab content -->   
                                </div><!--end card-body-->
                            </div><!--end card-->                            
                        </div><!--end col--> 

                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4 align-self-center text-center">
                                                    <i data-feather="users" class="align-self-center icon-lg icon-dual-pink"></i>
                                                </div><!--end col-->
                                                <div class="col-8">
                                                    <h3 class="mt-0 mb-1 font-weight-semibold">24k</h3>
                                                    <p class="mb-0 font-12 text-muted text-uppercase font-weight-semibold-alt">Visits</p>   
                                                </div><!--end col-->
                                            </div> <!--end row--> 
                                        </div><!--end card-body-->
                                    </div><!--end  card-->
                                </div> <!--end col--> 
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body justify-content-center">
                                            <div class="row">
                                                <div class="col-4 align-self-center text-center">
                                                    <i data-feather="shopping-cart" class="align-self-center icon-lg icon-dual-secondary"></i>
                                                </div><!--end col-->
                                                <div class="col-8">
                                                    <h3 class="mt-0 mb-1 font-weight-semibold">10k</h3>
                                                    <p class="mb-0 font-12 text-muted text-uppercase font-weight-semibold-alt">New Orders</p>
                                                </div><!--end col-->
                                            </div> <!--end row--> 
                                        </div><!--end card-body-->
                                    </div><!--end  card-->
                                </div> <!--end col-->                                           
                            </div><!--end row-->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4 align-self-center text-center">
                                                    <i data-feather="repeat" class="align-self-center icon-lg icon-dual-purple"></i>
                                                </div><!--end col-->
                                                <div class="col-8">
                                                    <h3 class="mt-0 mb-1 font-weight-semibold">1.5k</h3>
                                                    <p class="mb-0 font-12 text-uppercase font-weight-semibold-alt text-muted">Return Orders</p>   
                                                </div><!--end col-->
                                            </div> <!--end row--> 
                                        </div><!--end card-body-->
                                    </div><!--end  card-->
                                </div> <!--end col--> 
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body justify-content-center">
                                            <div class="row">
                                                <div class="col-4 align-self-center text-center">
                                                    <i data-feather="layers" class="align-self-center icon-lg icon-dual-warning"></i>
                                                </div><!--end col-->
                                                <div class="col-8">
                                                    <h3 class="mt-0 mb-1 font-weight-semibold">+22.98%</h3>
                                                    <p class="mb-0 font-12 text-uppercase font-weight-semibold-alt text-muted">Growth</p>
                                                </div><!--end col-->
                                            </div> <!--end row--> 
                                        </div><!--end card-body-->
                                    </div><!--end  card-->
                                </div> <!--end col-->                                           
                            </div><!--end row--> 
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-3">Monthly Trends</h4>
                                    <div class="row">
                                        <div class="col-6">
                                            <div id="eco_categories" class="apex-charts mb-n3"></div>
                                        </div><!--end col-->
                                        <div class="col-6 align-self-center">
                                            <ul class="list-unstyled">
                                                <li class="list-item mb-2 font-weight-semibold-alt">
                                                    <i class="fas fa-play text-primary mr-2"></i>Electronic
                                                </li>
                                                <li class="list-item mb-2 font-weight-semibold-alt">
                                                    <i class="fas fa-play text-success mr-2"></i>Footwear
                                                </li>
                                                <li class="list-item font-weight-semibold-alt">
                                                    <i class="fas fa-play text-pink mr-2"></i>Clothes
                                                </li>
                                            </ul>
                                            <button type="button" class="btn btn-sm btn-outline-primary btn-round dual-btn-icon">View Details <i class="mdi mdi-arrow-right"></i></button>
                                        </div><!--end col-->
                                    </div> <!--end row--> 
                                </div><!--end card-body-->
                            </div><!--end  card-->                                                                                                             
                        </div><!--end col-->                       
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">                                            
                                        <div class="col-7 align-self-center">
                                            <div class="timer-data">
                                                <div class="icon-info mt-1 mb-4">
                                                    <i class="mdi mdi-bullseye bg-soft-success"></i>
                                                </div>                                                
                                                <h3 class="mt-0 text-dark">45k <span class="font-14">of 70k</span></h3> 
                                                <h4 class="mt-0 header-title text-truncate mb-1">Monthly Goal</h4>
                                                <p class="text-muted mb-0 text-truncate">It is a long established fact that a reader.</p>                                                
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-5 align-self-center">
                                            <div class="mt-4">
                                                <span class="text-info">Complate</span>
                                                <small class="float-right text-muted ml-3 font-14">62%</small>
                                                <div class="progress mt-2" style="height:5px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 62%; border-radius:5px;" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->                                                                                                  
                            </div><!--end card-->
                        </div><!--end col--> 
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">                                            
                                        <div class="col-7 align-self-center">
                                            <div class="timer-data">
                                                <div class="icon-info mt-1 mb-4">
                                                    <i class="mdi mdi-bullseye-arrow bg-soft-pink"></i>
                                                </div>                                                
                                                <h3 class="mt-0 text-dark">26m <span class="font-14">of 30m</span></h3> 
                                                <h4 class="mt-0 header-title text-truncate mb-1">Yearly Goal</h4>
                                                <p class="text-muted mb-0 text-truncate">It is a long established fact that a reader.</p>                                                
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-5 align-self-center">
                                            <div class="mt-4">
                                                <span class="text-info">Complate</span>
                                                <small class="float-right text-muted ml-3 font-14">81%</small>
                                                <div class="progress mt-2" style="height:5px;">
                                                    <div class="progress-bar bg-pink" role="progressbar" style="width: 81%; border-radius:5px;" aria-valuenow="81" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->                                                                                                  
                            </div><!--end card-->
                        </div><!--end col--> 

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body dash-info-carousel">
                                    <h4 class="mt-0 header-title mb-0">Top 3 Best Saler</h4>
                                    <div id="carousel_1" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item">
                                                <div class="media mb-2 mt-3">
                                                    <div class="user-img-box">
                                                        <img src="{{ URL::asset('assets/images/users/user-5.jpg')}}" alt="" class=" rounded-circle">
                                                        <img src="{{ URL::asset('assets/images/flags/french_flag.jpg')}}" alt="" class="flag">
                                                    </div>                                                                              
                                                    <div class="media-body align-self-center text-truncate ml-3">                                                    
                                                        <h4 class="mt-0 font-weight-semibold text-dark font-24">Matt Rosales</h4>   
                                                        <p class="text-muted text-uppercase mb-0 font-12">Total Revenue Of This Month</p>  
                                                        <h4 class="font-18 text-success font-weight-semibold">$42,874.00</h4>                                                                                  
                                                    </div><!--end media-body-->
                                                </div><!--end media-->
                                            </div><!--end carousel-item-->
                                            <div class="carousel-item active">
                                                <div class="media mb-2 mt-3">
                                                    <div class="user-img-box">
                                                        <img src="{{ URL::asset('assets/images/users/user-7.jpg')}}" alt="" class=" rounded-circle">
                                                        <img src="{{ URL::asset('assets/images/flags/us_flag.jpg')}}" alt="" class="flag">
                                                    </div>                                                                              
                                                    <div class="media-body align-self-center text-truncate ml-3">                                                    
                                                        <h4 class="mt-0 font-weight-semibold text-dark font-24">Rosa Dodson</h4>   
                                                        <p class="text-muted text-uppercase mb-0 font-12">Total Revenue Of This Month</p>  
                                                        <h4 class="font-18 text-success font-weight-semibold">$30,125.00</h4>                                                                                  
                                                    </div><!--end media-body-->
                                                </div><!--end media-->
                                            </div><!--end carousel-item-->
                                            <div class="carousel-item">
                                                <div class="media mb-2 mt-3">
                                                    <div class="user-img-box">
                                                        <img src="{{ URL::asset('assets/images/users/user-6.jpg')}}" alt="" class=" rounded-circle">
                                                        <img src="{{ URL::asset('assets/images/flags/spain_flag.jpg')}}" alt="" class="flag">
                                                    </div>                                                                              
                                                    <div class="media-body align-self-center text-truncate ml-3">                                                    
                                                        <h4 class="mt-0 font-weight-semibold text-dark font-24">Helen White</h4>   
                                                        <p class="text-muted text-uppercase mb-0 font-12">Total Revenue Of This Month</p>  
                                                        <h4 class="font-18 text-success font-weight-semibold">$51,541.00</h4>                                                                                  
                                                    </div><!--end media-body-->
                                                </div><!--end media-->
                                            </div><!--end carousel-item-->
                                        </div><!--end carousel-inner-->
                                        <a class="carousel-control-prev" href="#carousel_1" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel_1" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div><!--end carousel-->                                    
                                </div><!--end card-body-->                                                                                                  
                            </div><!--end card-->
                        </div><!--end col--> 
                        
                    </div><!--end row--> 

                    <div class="row">                        
                        
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title mb-3">Populer Product</h4>
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                            <tbody>
                                                <tr>
                                                    <td class="border-top-0">
                                                        <div class="media">
                                                            <img src="{{ URL::asset('assets/images/products/img-7.png')}}" height="80" class="mr-4" alt="...">
                                                            <div class="media-body align-self-center"> 
                                                                <span class="badge badge-soft-warning p-2 font-12 mb-2">354 sold</span>                                                           
                                                                <h4 class="mt-0 title-text mb-0">Unique Watch</h4>                                                                
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right border-top-0">
                                                        <h5 class="">$99.00</h5>
                                                    </td>
                                                </tr><!--/tr-->
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img src="{{ URL::asset('assets/images/products/img-1.png')}}" height="80" class="mr-4" alt="...">
                                                            <div class="media-body align-self-center"> 
                                                                <span class="badge badge-soft-pink p-2 font-12 mb-2">654 sold</span>                                                          
                                                                <h4 class="mt-0 title-text mb-0">Sport Shoe</h4>                                                                
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right">
                                                        <h5 class="">$49.00</h5>
                                                    </td>
                                                </tr><!--/tr-->
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img src="{{ URL::asset('assets/images/products/img-4.png')}}" height="80" class="mr-4" alt="...">
                                                            <div class="media-body align-self-center"> 
                                                                <span class="badge badge-soft-success p-2 font-12 mb-2">551 sold</span>                                                            
                                                                <h4 class="mt-0 title-text mb-0">Unique Watch</h4>                                                                
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right">
                                                        <h5 class="">$59.00</h5>
                                                    </td>
                                                </tr><!--/tr-->
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col--> 
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0 mb-4">Top Sales In USA</h4>
                                    <div class="row"> 
                                        <div class="col-lg-7">
                                            <div id="usa" class="drop-shadow-map" style="height: 305px"></div> 
                                        </div><!--end col-->
                                        <div class="col-lg-5 align-self-center">                                           
                                            <div class="">
                                                <span class="text-dark">Texas</span>
                                                <small class="float-right text-muted ml-3 font-13">81%</small>
                                                <div class="progress mt-2" style="height:3px;">
                                                    <div class="progress-bar bg-pink" role="progressbar" style="width: 81%; border-radius:5px;" aria-valuenow="81" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <span class="text-dark">Washington</span>
                                                <small class="float-right text-muted ml-3 font-13">68%</small>
                                                <div class="progress mt-2" style="height:3px;">
                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 68%; border-radius:5px;" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>   
                                            <div class="mt-3">
                                                <span class="text-dark">Wyoming</span>
                                                <small class="float-right text-muted ml-3 font-13">48%</small>
                                                <div class="progress mt-2" style="height:3px;">
                                                    <div class="progress-bar bg-purple" role="progressbar" style="width: 48%; border-radius:5px;" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            
                                            <div class="mt-3">
                                                <span class="text-dark">Virginia</span>
                                                <small class="float-right text-muted ml-3 font-13">32%</small>
                                                <div class="progress mt-2" style="height:3px;">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 32%; border-radius:5px;" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100"></div>
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
                                <div class="card-body order-list">
                                    <h4 class="header-title mt-0 mb-3">Order List</h4>
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th class="border-top-0">Product</th>
                                                    <th class="border-top-0">Pro Name</th>
                                                    <th class="border-top-0">Country</th>
                                                    <th class="border-top-0">Order Date/Time</th>
                                                    <th class="border-top-0">Pcs.</th>                                    
                                                    <th class="border-top-0">Amount ($)</th>
                                                    <th class="border-top-0">Status</th>
                                                </tr><!--end tr-->
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img class="" src="{{ URL::asset('assets/images/products/img-1.png')}}" alt="user"> </td>
                                                    <td>
                                                        Shoe
                                                    </td>
                                                    <td>                                                                
                                                        <img src="{{ URL::asset('assets/images/flags/us_flag.jpg')}}" alt="" class="img-flag thumb-xxs rounded-circle">
                                                    </td>
                                                    <td>3/03/2019 4:29 PM</td>
                                                    <td>200</td>                                   
                                                    <td> $750</td>
                                                    <td>                                                                        
                                                        <span class="badge badge-md badge-boxed  badge-soft-success">Shipped</span>
                                                    </td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <td>
                                                        <img class="" src="{{ URL::asset('assets/images/products/img-2.png')}}" alt="user"> </td>
                                                    <td>
                                                      Wall Watch
                                                    </td>
                                                    <td>                                                                
                                                        <img src="{{ URL::asset('assets/images/flags/french_flag.jpg')}}" alt="" class="img-flag thumb-xxs rounded-circle">
                                                    </td>
                                                    <td>13/03/2019 1:09 PM</td>
                                                    <td>180</td>                                   
                                                    <td> $970</td>
                                                    <td>
                                                        <span class="badge badge-md badge-boxed  badge-soft-danger">Delivered</span>
                                                    </td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <td>
                                                        <img class="" src="{{ URL::asset('assets/images/products/img-3.png')}}" alt="user"> </td>
                                                    <td>
                                                        Showpiece
                                                    </td>
                                                    <td>                                                                
                                                        <img src="{{ URL::asset('assets/images/flags/spain_flag.jpg')}}" alt="" class="img-flag thumb-xxs rounded-circle">
                                                    </td>
                                                    <td>22/03/2019 12:09 PM</td>
                                                    <td>30</td>                                   
                                                    <td> $2800</td>
                                                    <td>
                                                        <span class="badge badge-md badge-boxed badge-soft-warning">Pending</span>
                                                    </td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <td>
                                                        <img class="" src="{{ URL::asset('assets/images/products/img-4.png')}}" alt="user"> </td>
                                                    <td>
                                                        Watch
                                                    </td>
                                                    <td>                                                                
                                                        <img src="{{ URL::asset('assets/images/flags/russia_flag.jpg')}}" alt="" class="img-flag thumb-xxs rounded-circle">
                                                    </td>
                                                    <td>14/03/2019 8:27 PM</td>
                                                    <td>100</td>                                   
                                                    <td> $520</td>
                                                    <td>                                                                                                                                              
                                                        <span class="badge badge-md badge-boxed  badge-soft-success">Shipped</span>                                                                    
                                                    </td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <td>
                                                        <img class="" src="{{ URL::asset('assets/images/products/img-5.png')}}" alt="user"> </td>
                                                    <td>
                                                        Beg
                                                    </td>
                                                    <td>                                                                
                                                        <img src="{{ URL::asset('assets/images/flags/italy_flag.jpg')}}" alt="" class="img-flag thumb-xxs rounded-circle">
                                                    </td>
                                                    <td>18/03/2019 5:09 PM</td>
                                                    <td>100</td>                                   
                                                    <td> $1150</td>
                                                    <td>
                                                        <span class="badge badge-md badge-boxed badge-soft-warning">Pending</span>
                                                    </td>
                                                </tr><!--end tr-->                                           
                                            </tbody>
                                        </table> <!--end table-->                                               
                                    </div><!--end /div-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                </div><!-- container -->
@stop

@section('footerScript')

        <script src="{{ URL::asset('plugins/chartjs/chart.min.js')}}"></script>
        <script src="{{ URL::asset('plugins/chartjs/roundedBar.min.js')}}"></script>
        <script src="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
        <script src="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-us-aea-en.js')}}"></script>
        <script src="{{ URL::asset('assets/pages/jquery.ecommerce_dashboard.init.js')}}"></script> 
        
@stop