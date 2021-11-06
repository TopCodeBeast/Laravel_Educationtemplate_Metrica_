@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('headerStyle')
        <link href="{{ URL::asset('plugins/dropify/css/dropify.min.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('plugins/filter/magnific-popup.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('plugins/lightpick/lightpick.css')}}" rel="stylesheet" />

@stop

@section('content')
  <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                             @component('common-components.breadcrumb')
                                 @slot('title') Profile @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Pages @endslot
                                 @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body  met-pro-bg">
                                    <div class="met-profile">
                                        <div class="row">
                                            <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                                                <div class="met-profile-main">
                                                    <div class="met-profile-main-pic">
                                                        <img src="{{ URL::asset('assets/images/users/user-4.jpg')}}" alt="" class="rounded-circle">
                                                        <span class="fro-profile_main-pic-change">
                                                            <i class="fas fa-camera"></i>
                                                        </span>
                                                    </div>
                                                    <div class="met-profile_user-detail">
                                                        <h5 class="met-user-name">Rosa Dodson</h5>                                                        
                                                        <p class="mb-0 met-user-name-post">UI/UX Designer</p>
                                                    </div>
                                                </div>                                                
                                            </div><!--end col-->
                                            <div class="col-lg-4 ml-auto">
                                                <ul class="list-unstyled personal-detail">
                                                    <li class=""><i class="dripicons-phone mr-2 text-info font-18"></i> <b> phone </b> : +91 23456 78910</li>
                                                    <li class="mt-2"><i class="dripicons-mail text-info font-18 mt-2 mr-2"></i> <b> Email </b> : mannat.theme@gmail.com</li>
                                                    <li class="mt-2"><i class="dripicons-location text-info font-18 mt-2 mr-2"></i> <b>Location</b> : USA</li>
                                                </ul>
                                                <div class="button-list btn-social-icon">                                                
                                                    <button type="button" class="btn btn-blue btn-circle">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </button>
            
                                                    <button type="button" class="btn btn-secondary btn-circle ml-2">
                                                        <i class="fab fa-twitter"></i>
                                                    </button>
            
                                                    <button type="button" class="btn btn-pink btn-circle  ml-2">
                                                        <i class="fab fa-dribbble"></i>
                                                    </button>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end f_profile-->                                                                                
                                </div><!--end card-body-->
                                <div class="card-body">
                                    <ul class="nav nav-pills mb-0" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="general_detail_tab" data-toggle="pill" href="#general_detail">General</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="activity_detail_tab" data-toggle="pill" href="#activity_detail">Activity</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="portfolio_detail_tab" data-toggle="pill" href="#portfolio_detail">Portfolio</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="settings_detail_tab" data-toggle="pill" href="#settings_detail">Settings</a>
                                        </li>
                                    </ul>        
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content detail-list" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="general_detail">
                                    <div class="row">
                                        <div class="col-xl-4"> 
                                            
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class=" d-flex justify-content-between">
                                                        <img src="{{ URL::asset('assets/images/widgets/monthly-re.png')}}" alt="" height="75">
                                                        <div class="align-self-center">
                                                            <h2 class="mt-0 mb-2 font-weight-semibold">$955<span class="badge badge-soft-success font-11 ml-2"><i class="fas fa-arrow-up"></i> 8.6%</span></h2>
                                                            <h4 class="title-text mb-0">Monthly Revenue</h4>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between bg-light p-3 mt-3 rounded">
                                                        <div>
                                                            <h4 class="mb-1 font-weight-semibold">$10255</h4>
                                                            <p class="mb-0">Card Balance</p>
                                                        </div>
                                                        <div>
                                                            <h4 class=" mb-1 font-weight-semibold">25.12 <small>BTC</small></h4>
                                                            <p class="mb-0">Crypto Balance</p>
                                                        </div>
                                                    </div>                                    
                                                </div><!--end card-body-->
                                            </div><!--end card-->                        
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="header-title mt-0 mb-3">Transaction Details</h4>
                                                    <ul class="list-unsyled m-0 pl-0 transaction-history">
                                                        <li class="align-items-center d-flex justify-content-between">
                                                            <div class="media">
                                                                <div class="transaction-icon">
                                                                    <i class="mdi mdi-arrow-top-right-thick"></i>
                                                                </div>                                                
                                                                <div class="media-body align-self-center"> 
                                                                    <div class="transaction-data">                                                  <h3 class="m-0">Apple Co Pvt. Ltd</h3>
                                                                        <p class="text-muted mb-0">6 June 2019 10:25 AM</p>
                                                                    </div>                                                                                              
                                                                </div><!--end media body-->
                                                            </div>
                                                            <span class="text-danger">$1420.00 USA</span>
                                                        </li>
                                                        <li class="align-items-center d-flex justify-content-between">
                                                            <div class="media">
                                                                <div class="transaction-icon">
                                                                    <i class="mdi mdi-arrow-down-thick"></i>
                                                                </div>                                                
                                                                <div class="media-body align-self-center"> 
                                                                    <div class="transaction-data">                                                        
                                                                        <h3 class="m-0">Vivo Mobile</h3>
                                                                        <p class="text-muted mb-0">4 June 2019 7:05 PM</p>
                                                                    </div>                                                                                              
                                                                </div><!--end media body-->
                                                            </div>
                                                            <span class="text-success">$3651.00 USA</span>
                                                        </li>
                                                        <li class="align-items-center d-flex justify-content-between">
                                                            <div class="media">
                                                                <div class="transaction-icon">
                                                                    <i class="mdi mdi-arrow-top-right-thick"></i>
                                                                </div>                                                
                                                                <div class="media-body align-self-center"> 
                                                                    <div class="transaction-data">                                                        
                                                                        <h3 class="m-0">ICICI Bank Transfer</h3>
                                                                        <p class="text-muted mb-0">1 June 2019 11:30 PM</p>
                                                                    </div>                                                                                              
                                                                </div><!--end media body-->
                                                            </div>
                                                            <span class="text-danger">$625.22 CAN</span>
                                                        </li>
                                                        <li class="align-items-center d-flex justify-content-between">
                                                            <div class="media">
                                                                <div class="transaction-icon">
                                                                    <i class="mdi mdi-arrow-top-right-thick"></i>
                                                                </div>                                                
                                                                <div class="media-body align-self-center"> 
                                                                    <div class="transaction-data">                                                        
                                                                        <h3 class="m-0">Sony LLP</h3>
                                                                        <p class="text-muted mb-0">28 May 2019 08:45 AM</p>
                                                                    </div>                                                                                              
                                                                </div><!--end media body-->
                                                            </div>
                                                            <span class="text-danger">$6621.00 USA</span>
                                                        </li>
                                                        <li class="align-items-center d-flex justify-content-end">
                                                            <a href="#" class="">View All<i class="dripicons-arrow-thin-right ml-2"></i></a>
                                                        </li>
                                                    </ul>                                       
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="dash-datepick">
                                                        <input type="hidden" id="light_datepick"/>
                                                    </div>
                                                    <div class="d-flex justify-content-between p-3 bg-light">
                                                        <div class="media">
                                                            <img src="{{ URL::asset('assets/images/users/user-2.jpg')}}" class="mr-3 thumb-md rounded-circle" alt="...">
                                                            <div class="media-body align-self-center">                                                           
                                                                <h5 class="mt-0 text-dark mb-1">Harry McCall</h5>  
                                                                <p class="mb-0">Dealer USA <span class="text-muted">Today Harry's Birth Day</span></p>                                                              
                                                            </div>
                                                        </div>
                                                        <span class="font-24 align-self-center">🎂</span>
                                                    </div>
                                                </div><!--end card-body-->                                                                                                  
                                            </div><!--end card-->
                                            
                                        </div><!--end col-->

                                        <div class="col-lg-8">
                                            <div class="row">
                                                
@component('common-components.profile')
    @slot('count') 184 @endslot
    @slot('title') New Tickets @endslot
    @slot('iClass') fas fa-ticket-alt bg-soft-warning @endslot
@endcomponent

@component('common-components.profile')
    @slot('count') 101 @endslot
    @slot('title') Open Tickets @endslot
    @slot('iClass') fab fa-codepen bg-soft-pink @endslot
@endcomponent

@component('common-components.profile')
    @slot('count') 18 @endslot
    @slot('title') On Hold @endslot
    @slot('iClass') fas fa-hands bg-soft-success @endslot
@endcomponent

@component('common-components.profile')
    @slot('count') 92 @endslot
    @slot('title') Unassigned @endslot
    @slot('iClass') fas fa-lock bg-soft-primary @endslot
@endcomponent           
                                            </div><!--end row-->
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="float-lg-right float-none eco-revene-history justify-content-end">
                                                        <ul class="nav">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" href="#">This Week</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Last Week</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Last Month</a>
                                                            </li>                                     
                                                        </ul>
                                                    </div>
                                                    <h4 class="header-title mt-0">Revenue</h4>
                                                    <canvas id="bar" class="drop-shadow w-100"  height="350"></canvas>
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                            
                                            <div class="card dash-info-carousel">
                                                <div class="card-body">
                                                    <div id="carousel_2" class="carousel slide" data-ride="carousel">
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item">
                                                                <div class="media">
                                                                    <img src="{{ URL::asset('assets/images/products/img-1.png')}}" class="mr-3 thumb-xl align-self-center" alt="...">
                                                                    <div class="media-body align-self-center">                                                          
                                                                        <h4 class="mt-0 mb-1 title-text text-dark">White Shoe</h4>
                                                                        <p class="text-muted mb-1">Standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
                                                                        <p class="text-muted">When an unknown printer took a galley of type.</p>
                                                                        <span class="px-2 py-1 bg-soft-pink d-inline-block">Sold 582</span>
                                                                        <a href="" class="bg-soft-purple px-2 py-1"><i class="dripicons-download"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="carousel-item">
                                                                <div class="media">
                                                                    <img src="{{ URL::asset('assets/images/products/img-2.png')}}" class="mr-3 thumb-xl align-self-center" alt="...">
                                                                    <div class="media-body align-self-center">                                                           
                                                                        <h4 class="mt-0 mb-1 title-text">Unique Watch</h4>
                                                                        <p class="text-muted mb-1">Standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
                                                                        <p class="text-muted">When an unknown printer took a galley of type.</p>
                                                                        <span class="px-2 py-1 bg-soft-pink d-inline-block">Sold 582</span>
                                                                        <a href="" class="bg-soft-purple px-2 py-1"><i class="dripicons-download"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="carousel-item active">
                                                                <div class="media">
                                                                    <img src="{{ URL::asset('assets/images/products/img-7.png')}}" class="mr-3 thumb-xl align-self-center" alt="...">
                                                                    <div class="media-body align-self-center">                                                          
                                                                        <h4 class="mt-0 mb-1 title-text">Unique Watch</h4>
                                                                        <p class="text-muted mb-1">Standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
                                                                        <p class="text-muted">When an unknown printer took a galley of type.</p>
                                                                        <span class="px-2 py-1 bg-soft-pink d-inline-block">Sold 582</span>
                                                                        <a href="" class="bg-soft-purple px-2 py-1"><i class="dripicons-download"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="carousel-control-prev" href="#carousel_2" role="button" data-slide="prev">
                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#carousel_2" role="button" data-slide="next">
                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="row">
                                                 
                                                <div class="col-lg-6">
                                                    <div class="card">
                                                        <div class="card-body dash-info-carousel">
                                                            <h4 class="mt-0 header-title mb-4">New Leads</h4>
                                                            <div id="carousel_1" class="carousel slide" data-ride="carousel">
                                                                <div class="carousel-inner">
                                                                    <div class="carousel-item">
                                                                        <div class="media">
                                                                            <img src="{{ URL::asset('assets/images/users/user-1.jpg')}}" class="mr-2 thumb-lg rounded-circle" alt="...">
                                                                            <div class="media-body align-self-center">                                                          
                                                                                <h4 class="mt-0 mb-1 title-text text-dark">Important Watch</h4>
                                                                                <p class="text-muted mb-0">Python Devloper</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="carousel-item">
                                                                        <div class="media">
                                                                            <img src="{{ URL::asset('assets/images/users/user-2.jpg')}}" class="mr-2 thumb-lg rounded-circle" alt="...">
                                                                            <div class="media-body align-self-center">                                                           
                                                                                <h4 class="mt-0 mb-1 title-text">Wireless Headphone</h4>
                                                                                <p class="text-muted mb-0">Python Devloper</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="carousel-item active">
                                                                        <div class="media">
                                                                            <img src="{{ URL::asset('assets/images/users/user-3.jpg')}}" class="mr-2 thumb-lg rounded-circle" alt="...">
                                                                            <div class="media-body align-self-center">                                                          
                                                                                <h4 class="mt-0 mb-1 title-text">Leather Bag</h4>
                                                                                <p class="text-muted mb-0">Python Devloper</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a class="carousel-control-prev" href="#carousel_1" role="button" data-slide="prev">
                                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                    <span class="sr-only">Previous</span>
                                                                </a>
                                                                <a class="carousel-control-next" href="#carousel_1" role="button" data-slide="next">
                                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                    <span class="sr-only">Next</span>
                                                                </a>
                                                            </div>
                                                            <div class="row my-3">
                                                                <div class="col-sm-6">
                                                                    <p class="mb-0 text-muted font-13"><i class="mdi mdi-album mr-2 text-secondary"></i>New Leads</p>                            
                                                                </div><!-- end col-->
                                                                <div class="col-sm-6">
                                                                    <p class="mb-0 text-muted font-13"><i class="mdi mdi-album mr-2 text-warning"></i>New Leads Target</p>
                                                                </div><!-- end col-->
                                                            </div><!-- end row-->
                                                            <div class="progress bg-warning mb-3" style="height:5px;">
                                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>                                                            
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                </div> <!--end col-->
                                                
                                                <div class="col-lg-6">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="p-4 bg-light text-center align-item-center">                                                                    
                                                                <h1 class="font-weight-semibold">4.8</h1> 
                                                                <h4 class="header-title">Overall Rating</h4>  
                                                                <ul class="list-inline mb-0 product-review">
                                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning font-24"></i></li>
                                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning font-24"></i></li>
                                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning font-24"></i></li>
                                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning font-24"></i></li>
                                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star-half text-warning font-24"></i></li>
                                                                    <li class="list-inline-item"><small class="text-muted">Total Review (700)</small></li>
                                                                </ul>                                     
                                                            </div> 
                                                        </div><!--end card-body-->                                                                                                  
                                                    </div><!--end card-->
                                                </div><!--end col--> 
                                            </div><!--end row-->                                          
                                        </div><!--end col-->
                                    </div><!--end row-->                                                                              
                                </div><!--end general detail-->

                                <div class="tab-pane fade" id="activity_detail">                                                
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-body"> 
                                                    <h4 class="header-title mt-0 mb-4">Latest Activity</h4>
                                                    <div class="slimscroll profile-activity-height">
                                                        <div class="activity">
                                                            <div class="activity-info">
                                                                <div class="icon-info-activity">
                                                                    <i class="mdi mdi-checkbox-marked-circle-outline bg-soft-success"></i>
                                                                </div>
                                                                <div class="activity-info-text">
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <p class="text-muted mb-0 font-14 w-75"><span class="text-dark font-14">Donald</span> 
                                                                            updated the status of <a href="" class="text-dark">Refund #1234</a> to awaiting customer response
                                                                        </p>
                                                                        <span class="text-muted">10 Min ago</span>
                                                                    </div>    
                                                                </div>
                                                            </div>   
                
                                                            <div class="activity-info">
                                                                <div class="icon-info-activity">
                                                                    <i class="mdi mdi-timer-off bg-soft-pink"></i>
                                                                </div>
                                                                <div class="activity-info-text">
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <p class="text-muted mb-0 font-14 w-75"><span class="text-dark font-14">Lucy Peterson</span> 
                                                                            was added to the group, group name is <a href="" class="text-dark">Overtake</a>
                                                                        </p>
                                                                        <span class="text-muted">50 Min ago</span>
                                                                    </div>    
                                                                </div>
                                                            </div>   
                
                                                            <div class="activity-info">
                                                                <div class="icon-info-activity">
                                                                    <i class="mdi mdi-alert-decagram bg-soft-purple"></i>
                                                                </div>
                                                                <div class="activity-info-text">
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <p class="text-muted mb-0 font-14 w-75"><span class="text-dark font-14">Joseph Rust</span> 
                                                                            opened new showcase <a href="" class="text-dark">Mannat #112233</a> with theme market
                                                                        </p>
                                                                        <span class="text-muted">10 hours ago</span>
                                                                    </div>    
                                                                </div>
                                                            </div>   
                
                                                            <div class="activity-info">
                                                                <div class="icon-info-activity">
                                                                    <i class="mdi mdi-clipboard-alert bg-soft-warning"></i>
                                                                </div>
                                                                <div class="activity-info-text">
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <p class="text-muted mb-0 font-14 w-75"><span class="text-dark font-14">Donald</span> 
                                                                            updated the status of <a href="" class="text-dark">Refund #1234</a> to awaiting customer response
                                                                        </p>
                                                                        <span class="text-muted">Yesterday</span>
                                                                    </div>    
                                                                </div>
                                                            </div>   
                                                            <div class="activity-info">
                                                                <div class="icon-info-activity">
                                                                    <i class="mdi mdi-clipboard-alert bg-soft-secondary"></i>
                                                                </div>
                                                                <div class="activity-info-text">
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <p class="text-muted mb-0 font-14 w-75"><span class="text-dark font-14">Lucy Peterson</span> 
                                                                            was added to the group, group name is <a href="" class="text-dark">Overtake</a>
                                                                        </p>
                                                                        <span class="text-muted">14 Nov 2019</span>
                                                                    </div>    
                                                                </div>
                                                            </div> 
                                                            <div class="activity-info">
                                                                <div class="icon-info-activity">
                                                                    <i class="mdi mdi-clipboard-alert bg-soft-info"></i>
                                                                </div>
                                                                <div class="activity-info-text">
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <p class="text-muted mb-0 font-14 w-75"><span class="text-dark font-14">Joseph Rust</span> 
                                                                            opened new showcase <a href="" class="text-dark">Mannat #112233</a> with theme market
                                                                        </p>
                                                                        <span class="text-muted">15 Nov 2019</span>
                                                                    </div>    
                                                                </div>
                                                            </div>                                                                                                                                      
                                                        </div><!--end activity-->
                                                    </div><!--crypot dash activity-->
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                        </div><!--end col-->

                                        <div class="col-lg-4">
                                            <div class="card">                                       
                                                <div class="card-body"> 
                                                    <h4 class="header-title mt-0 mb-3">Sales Category</h4>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <img src="{{ URL::asset('assets/images/widgets/sales-re.svg')}}" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="col-8 align-self-center">
                                                            <p class="skill-detail">Contrary to popular belief, Lorem Ipsum is not simply random text. 
                                                                It has roots in a piece of classical Latin literature from 45 BC, 
                                                                making it over 2000 years old. Richard McClintock, a Latin professor.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="text-right mt-3">
                                                        <span class="bg-light p-2 rounded">Last Update : 2 hours</span>
                                                    </div>
                                                    
                                                    <div class="skills mt-4">
                                                        <div class="skill-box"> 
                                                            <h4 class="skill-title">Electronic</h4> 
                                                            <div class="progress-line"> 
                                                                <span data-percent="78" style="width: 78%;">
                                                                    <span class="percent-tooltip">78%</span>
                                                                </span> 
                                                            </div>
                                                        </div>
                                                        <div class="skill-box"> 
                                                            <h4 class="skill-title">Clothes</h4> 
                                                            <div class="progress-line"> 
                                                                <span data-percent="90" style="width: 90%;">
                                                                    <span class="percent-tooltip">90%</span>
                                                                </span> 
                                                            </div>
                                                        </div>
                                                        <div class="skill-box"> 
                                                            <h4 class="skill-title">Phones</h4> 
                                                            <div class="progress-line"> 
                                                                <span data-percent="80" style="width: 80%;">
                                                                    <span class="percent-tooltip">80%</span>
                                                                </span> 
                                                            </div>
                                                        </div>
                                                        <div class="skill-box"> 
                                                            <h4 class="skill-title">Medicine</h4> 
                                                            <div class="progress-line"> 
                                                                <span data-percent="95" style="width: 95%;">
                                                                    <span class="percent-tooltip">95%</span>
                                                                </span> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  <!--end card-body-->                                     
                                            </div><!--end card-->
                                        </div><!--end col-->
                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="blog-card">
                                                        <img src="{{ URL::asset('assets/images/small/img-12.jpg')}}" alt="" class="img-fluid">
                                                        <span class="badge badge-purple px-3 py-2 bg-soft-secondary font-weight-semibold mt-3">Food</span>   
                                                        <h4 class="my-3">
                                                            <a href="" class="">It is a long established fact that a reader will be</a>
                                                        </h4>
                                                        <p class="text-muted text-truncate">The standard chunk of Lorem Ipsum used since the for those interested.</p>
                                                        <hr class="hr-dashed">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="meta-box">
                                                                <div class="media">
                                                                    <img src="{{ URL::asset('assets/images/users/user-1.png')}}" alt="" class="thumb-sm rounded-circle mr-2">                                       
                                                                    <div class="media-body align-self-center text-truncate">
                                                                        <h6 class="mt-0 mb-1 text-dark">Donald Gardner</h6>
                                                                        <ul class="p-0 list-inline mb-0">
                                                                            <li class="list-inline-item">26 mars 2020</li>
                                                                            <li class="list-inline-item">by <a href="">admin</a></li>
                                                                        </ul>
                                                                    </div><!--end media-body-->
                                                                </div>                                            
                                                            </div><!--end meta-box-->
                                                            <div class="align-self-center">
                                                                <a href="#" class="text-primary">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                                                            </div>
                                                        </div>                                        
                                                    </div><!--end blog-card-->                                                                               
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                        </div><!--end col-->
                                    </div><!--end row-->  
                                </div><!--end education detail-->

                                <div class="tab-pane fade" id="portfolio_detail">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <ul class="col container-filter categories-filter mb-0" id="filter">
                                                            <li><a class="categories active" data-filter="*">All</a></li>
                                                            <li><a class="categories" data-filter=".branding">Branding</a></li>
                                                            <li><a class="categories" data-filter=".design">Design</a></li>
                                                            <li><a class="categories" data-filter=".photo">Photo</a></li>
                                                            <li><a class="categories" data-filter=".coffee">coffee</a></li>
                                                        </ul>
                                                    </div><!-- End portfolio  -->
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                            
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row container-grid nf-col-3  projects-wrapper">
                                                        <div class="col-lg-4 col-md-6 p-0 nf-item branding design coffee spacing">
                                                            <div class="item-box">
                                                                <a class="cbox-gallary1 mfp-image" href="{{ URL::asset('assets/images/small/img-1.jpg')}}" title="Consequat massa quis">
                                                                    <img class="item-container " src="{{ URL::asset('assets/images/small/img-1.jpg')}}" alt="7" />
                                                                    <div class="item-mask">
                                                                        <div class="item-caption">
                                                                            <h5 class="text-white">Consequat massa quis</h5>
                                                                            <p class="text-white">Branding, Design, Coffee</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div><!--end item-box-->
                                                        </div><!--end col-->
                                        
                                                        <div class="col-lg-4 col-md-6 p-0 nf-item photo spacing">
                                                            <div class="item-box">
                                                                <a class="cbox-gallary1 mfp-image" href="{{ URL::asset('assets/images/small/img-2.jpg')}}" title="Vivamus elementum semper">
                                                                    <img class="item-container mfp-fade" src="{{ URL::asset('assets/images/small/img-2.jpg')}}" alt="2" />
                                                                    <div class="item-mask">
                                                                        <div class="item-caption">
                                                                            <h5 class="text-light">Vivamus elementum semper</h5>
                                                                            <p class="text-light">Photo</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div><!--end item-box-->
                                                        </div><!--end col-->
                                        
                                                        <div class="col-lg-4 col-md-6 p-0 nf-item branding coffee spacing">
                                                            <div class="item-box">
                                                                <a class="cbox-gallary1 mfp-image" href="{{ URL::asset('assets/images/small/img-3.jpg')}}" title="Quisque rutrum">
                                                                    <img class="item-container" src="{{ URL::asset('assets/images/small/img-3.jpg')}}" alt="4" />
                                                                    <div class="item-mask">
                                                                        <div class="item-caption">
                                                                            <h5 class="text-light">Quisque rutrum</h5>
                                                                            <p class="text-light">Branding, Design, Coffee</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div><!--end item-box-->
                                                        </div><!--end col-->
                                        
                                                        <div class="col-lg-4 col-md-6 p-0 nf-item branding design spacing">
                                                            <div class="item-box">
                                                                <a class="cbox-gallary1 mfp-image" href="{{ URL::asset('assets/images/small/img-4.jpg')}}" title="Tellus eget condimentum">
                                                                    <img class="item-container" src="{{ URL::asset('assets/images/small/img-4.jpg')}}" alt="5" />
                                                                    <div class="item-mask">
                                                                        <div class="item-caption">
                                                                            <h5 class="text-light">Tellus eget condimentum</h5>
                                                                            <p class="text-light">Design</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div><!--end item-box-->
                                                        </div><!--end col-->
                                        
                                                        <div class="col-lg-4 col-md-6 p-0 nf-item branding design spacing">
                                                            <div class="item-box">
                                                                <a class="cbox-gallary1 mfp-image" href="{{ URL::asset('assets/images/small/img-5.jpg')}}" title="Nullam quis ant">
                                                                    <img class="item-container" src="{{ URL::asset('assets/images/small/img-5.jpg')}}" alt="6" />
                                                                    <div class="item-mask">
                                                                        <div class="item-caption">
                                                                            <h5 class="text-light">Nullam quis ant</h5>
                                                                            <p class="text-light">Branding, Design</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div><!--end item-box-->
                                                        </div><!--end col-->
                                        
                                                        <div class="col-lg-4 col-md-6 p-0 nf-item photo spacing">
                                                            <div class="item-box">
                                                                <a class="cbox-gallary1 mfp-image" href="{{ URL::asset('assets/images/small/img-6.jpg')}}" title="Sed fringilla mauris">
                                                                    <img class="item-container" src="{{ URL::asset('assets/images/small/img-6.jpg')}}" alt="1" />
                                                                    <div class="item-mask">
                                                                        <div class="item-caption">
                                                                            <h5 class="text-light">Sed fringilla mauris</h5>
                                                                            <p class="text-light">Photo</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div><!--end item-box-->
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                        </div><!--end col-->
                                        <div class="col-lg-4">
                                            <div class="card ">
                                                <div class="card-body">
                                                    <div class="text-center">
                                                        <h4><i class="fas fa-quote-left text-primary"></i></h4>
                                                    </div>                                            
                                                    <div id="carouselExampleFade2" class="carousel slide" data-ride="carousel">
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item">
                                                                <div class="text-center">
                                                                    <p class="text-muted px-4">
                                                                        It is a long established fact that a reader will be distracted by 
                                                                        the readable content of a page when looking at its layout. 
                                                                        The point of using Lorem Ipsum is that it has a more-or-less 
                                                                        normal distribution of letters, as opposed to using.
                                                                    </p>
                                                                    <div class="">
                                                                        <img src="{{ URL::asset('assets/images/users/user-10.jpg')}}" alt="" class="rounded-circle thumb-lg mb-2">
                                                                        <p class="mb-0 text-primary"><b>- Mary K. Myers</b></p>
                                                                        <small class="text-muted">CEO Facebook</small>
                                                                    </div>                                                            
                                                                </div>
                                                            </div>
                                                            <div class="carousel-item active">
                                                                <div class="text-center">
                                                                    <p class="text-muted px-4">                                                                
                                                                        Where does it come from?
                                                                        Contrary to popular belief, Lorem Ipsum is not simply random text. 
                                                                        It has roots in a piece of classical Latin literature from 45 BC, 
                                                                        making it over 2000 years  popular belief,old.
                                                                    </p>
                                                                    <div class="">
                                                                        <img src="{{ URL::asset('assets/images/users/user-4.jpg')}}" alt="" class="rounded-circle  thumb-lg mb-2">
                                                                        <p class="mb-0 text-primary"><b>- Michael C. Rios</b></p>
                                                                        <small class="text-muted">CEO Facebook</small>
                                                                    </div>                                                            
                                                                </div>
                                                            </div>
                                                            <div class="carousel-item">
                                                                <div class="text-center">
                                                                    <p class="text-muted px-4">
                                                                        There are many variations of passages of Lorem Ipsum available, 
                                                                        but the majority have suffered alteration in some form, by injected humour, 
                                                                        or randomised words which don't look even slightly believable. 
                                                                        If you are going to use a passage of Lorem Ipsum. 
                                                                    </p>
                                                                    <div class="">
                                                                        <img src="{{ URL::asset('assets/images/users/user-5.jpg')}}" alt="" class="rounded-circle  thumb-lg mb-2">
                                                                        <p class="mb-0 text-primary"><b>- Lisa D. Pullen</b></p>
                                                                        <small class="text-muted">CEO Facebook</small>
                                                                    </div>                                                            
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end row-->
                                </div><!--end portfolio detail-->
                                
                                <div class="tab-pane fade" id="settings_detail">
                                    <div class="row">
                                        <div class="col-lg-12 col-xl-9 mx-auto">
                                            <div class="card">
                                                <div class="card-body">
                                                    <form method="post" class="card-box">
                                                        <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="../assets/images/users/user-4.jpg"/>
                                                        <span class="input-icon icon-right">
                                                            <textarea rows="4" class="form-control" placeholder="Post a new message"></textarea>
                                                        </span>
                                                        <div class="float-right my-3">
                                                            <a class="btn btn-sm btn-gradient-primary text-white px-4 mb-0">Send</a>
                                                        </div>
                                                        <ul class="list-inline mt-1">                                                                
                                                            <li class="list-inline-item">
                                                                <a href="#"><i class=" fas fa-video font-18 mr-2 mt-2 text-primary"></i></a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#"><i class="fas fa-camera  font-18 mt-2 text-primary"></i></a>
                                                            </li>
                                                        </ul>
                                                    </form>
        
                                                    <div class="">
                                                        <form class="form-horizontal form-material mb-0">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Full Name" class="form-control">
                                                            </div>
                                                            
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <input type="email" placeholder="Email" class="form-control" name="example-email" id="example-email">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <input type="password" placeholder="password" class="form-control">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <input type="password" placeholder="Re-password" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-6">
                                                                    <input type="text" placeholder="Phone No" class="form-control">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <select class="form-control">
                                                                        <option>London</option>
                                                                        <option>India</option>
                                                                        <option>Usa</option>
                                                                        <option>Canada</option>
                                                                        <option>Thailand</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <textarea rows="5" placeholder="Message" class="form-control"></textarea>
                                                                <button class="btn btn-gradient-primary btn-sm px-4 mt-3 float-right mb-0">Update Profile</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>                                            
                                            </div>
                                        </div> <!--end col-->                                          
                                    </div><!--end row-->
                                </div><!--end settings detail-->
                            </div><!--end tab-content--> 
                            
                        </div><!--end col-->
                    </div><!--end row-->

                </div><!-- container -->
@stop

@section('footerScript')
        <script src="{{ URL::asset('plugins/dropify/js/dropify.min.js')}}"></script>
        <script src="{{ URL::asset('plugins/moment/moment.js')}}"></script>
        <script src="{{ URL::asset('plugins/filter/isotope.pkgd.min.js')}}"></script>
        <script src="{{ URL::asset('plugins/filter/masonry.pkgd.min.js')}}"></script>
        <script src="{{ URL::asset('plugins/filter/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{ URL::asset('plugins/chartjs/chart.min.js')}}"></script>
        <script src="{{ URL::asset('plugins/chartjs/roundedBar.min.js')}}"></script>
        <script src="{{ URL::asset('plugins/lightpick/lightpick.js')}}"></script>
        <script src="{{ URL::asset('assets/pages/jquery.profile.init.js')}}"></script>
@stop