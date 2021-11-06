@extends('layouts.demos.crm-dark-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('sidebarPortion')
 
  <div id="MetricaCRM" class="main-icon-menu-pane">
                        <div class="title-box">
                            <h6 class="menu-title">CRM</h6>       
                        </div>
                        <ul class="nav">
                            <li class="nav-item"><a class="nav-link" href="/demos/crm-dark-index">Dashboard</a></li>
                            <li class="nav-item"><a class="nav-link" href="/crm/crm-contacts">Contacts</a></li>
                            <li class="nav-item"><a class="nav-link" href="/crm/crm-opportunities">Opportunities</a></li>
                            <li class="nav-item"><a class="nav-link" href="/crm/crm-leads">Leads</a></li>
                            <li class="nav-item"><a class="nav-link" href="/crm/crm-customers">Customers</a></li>
                        </ul>
                    </div><!-- end CRM -->     
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
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">CRM</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Dashboard</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4 align-self-center">
                                            <div class="icon-info">
                                                <i data-feather="smile" class="align-self-center icon-lg icon-dual-warning"></i>
                                            </div> 
                                        </div>
                                        <div class="col-8 align-self-center text-right">
                                            <div class="ml-2">
                                                <p class="mb-1 text-muted">Happy Customers</p>
                                                <h3 class="mt-0 mb-1 font-weight-semibold">65k</h3>                                                                                                                                           
                                            </div>
                                        </div>                    
                                    </div>
                                    <div class="progress mt-2" style="height:3px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4 align-self-center">
                                            <div class="icon-info">
                                                <i data-feather="users" class="align-self-center icon-lg icon-dual-purple"></i>
                                            </div> 
                                        </div>
                                        <div class="col-8 align-self-center text-right">
                                            <div class="ml-2">
                                                <p class="mb-1 text-muted">New Customers</p>
                                                <h3 class="mt-0 mb-1 font-weight-semibold">12k</h3>                                                                                                                                           
                                            </div>
                                        </div>                    
                                    </div>
                                    <div class="progress mt-2" style="height:3px;">
                                        <div class="progress-bar bg-purple" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4 align-self-center">
                                            <div class="icon-info">
                                                <i data-feather="headphones" class="align-self-center icon-lg icon-dual-success"></i>
                                            </div> 
                                        </div>
                                        <div class="col-8 align-self-center text-right">
                                            <div class="ml-2">
                                                <p class="mb-0 text-muted">New Deals</p>
                                                <h3 class="mt-0 mb-1 font-weight-semibold d-inline-block">40</h3>
                                                <span class="badge badge-soft-success mt-1 shadow-none">Active</span>                                                                                                                                     
                                            </div>
                                        </div>                    
                                    </div>
                                    <div class="progress mt-2" style="height:3px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 48%;" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4 col-4 align-self-center">
                                            <div class="icon-info">
                                                <i data-feather="check-square" class="align-self-center icon-lg icon-dual-pink"></i>
                                            </div> 
                                        </div>
                                        <div class="col-sm-8 col-8 align-self-center text-right">
                                            <div class="ml-2">
                                                <p class="mb-1 text-muted">New Register</p>
                                                <h3 class="mt-0 mb-1 font-weight-semibold">890</h3>                                                                                                                                           
                                            </div>
                                        </div>                    
                                    </div>
                                    <div class="progress mt-2" style="height:3px;">
                                            <div class="progress-bar bg-pink" role="progressbar" style="width: 22%;" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->                                    
                        </div><!--end col-->
                    </div><!--end row-->
                    
                    <div class="row">
                        <div class="col-lg-8">                                                        
                            <div class="card">
                                <div class="card-body">  
                                    <h4 class="header-title mt-0">Leads And Vendors</h4>                                 
                                    <div class="">
                                        <div id="liveVisits" class="apex-charts"></div>
                                    </div>  
                                </div><!--end card-body-->                                                           
                            </div><!--end card--> 
                            <div class="row">
                                <div class="col-md-6 col-lg-6">                            
                                    <div class="card">
                                        <div class="card-body">
                                            <div class=" d-flex justify-content-between">
                                                <img src="{{ URL::asset('assets/images/widgets/monthly-re.png')}}" alt="" height="80">
                                                <div class="align-self-center">
                                                    <h2 class="mt-0 mb-2 font-weight-semibold">$955<span class="badge badge-soft-success font-11 ml-2"><i class="fas fa-arrow-up"></i> 8.6%</span></h2>
                                                    <h4 class="title-text mb-0">Monthly Revenue</h4>
                                                </div>
                                            </div>
                                            <hr class="hr-dashed">
                                            <div class="d-flex justify-content-between bg-light p-2 mt-3 rounded">
                                                <div class="align-self-center">
                                                    <h6 class="m-0 font-weight-semibold">Last Month</h6>
                                                </div>
                                                <div class="align-self-center">
                                                    <h4 class=" m-0 font-weight-semibold font-20">$3512.00</h4>                                                    
                                                </div>
                                            </div>                                    
                                        </div><!--end card-body-->
                                    </div><!--end card-->                            
                                </div><!--end col-->
                                <div class="col-md-6 col-lg-6">                            
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card dash-data-card text-center">
                                                <div class="card-body"> 
                                                    <div class="icon-info mb-3">
                                                        <i class="fab fa-facebook bg-soft-primary"></i>
                                                    </div>
                                                    <h3 class="text-dark">184k</h3>
                                                    <h6 class="font-14 text-dark">Followers</h6>                                                                                                                            
                                                </div><!--end card-body--> 
                                            </div><!--end card-->   
                                        </div><!-- end col-->
                                        <div class="col-lg-6">
                                            <div class="card dash-data-card text-center">
                                                <div class="card-body"> 
                                                    <div class="icon-info mb-3">
                                                        <i class="fab fa-twitter bg-soft-secondary"></i>
                                                    </div>
                                                    <h3 class="text-dark">101k</h3>
                                                    <h6 class="font-14 text-dark">Followers</h6>                                                                                                                            
                                                </div><!--end card-body--> 
                                            </div><!--end card-->   
                                        </div><!-- end col-->  
                                                              
                                    </div><!--end row-->                         
                                </div><!--end col-->
                                
                            </div><!--end row-->     
                        </div><!--end col-->
                        <div class="col-xl-4">                            
                            <div class="card">
                                <div class="card-body dash-info-carousel">
                                    <h4 class="mt-0 header-title mb-4">New Leads</h4>
                                    <div id="carousel_2" class="carousel slide" data-ride="carousel">
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
                                            <div class="carousel-item active">
                                                <div class="media">
                                                    <img src="{{ URL::asset('assets/images/users/user-2.jpg')}}" class="mr-2 thumb-lg rounded-circle" alt="...">
                                                    <div class="media-body align-self-center">                                                           
                                                        <h4 class="mt-0 mb-1 title-text">Wireless Headphone</h4>
                                                        <p class="text-muted mb-0">Python Devloper</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="media">
                                                    <img src="{{ URL::asset('assets/images/users/user-3.jpg')}}" class="mr-2 thumb-lg rounded-circle" alt="...">
                                                    <div class="media-body align-self-center">                                                          
                                                        <h4 class="mt-0 mb-1 title-text">Leather Bag</h4>
                                                        <p class="text-muted mb-0">Python Devloper</p>
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
                                   
                                    <div class="m-0">
                                        <div id="apex_radialbar3" class="apex-charts"></div>
                                    </div> 
                                    <div class="bg-light p-3 d-flex justify-content-between">
                                        <div>
                                            <h2 class="mb-1 font-weight-semibold">402</h2>
                                            <p class="text-muted mb-0">Recent Leads</p>
                                        </div>
                                        <div class="img-group align-self-center">
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/user-6.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/user-2.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/user-3.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/user-4.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a href="" class="avatar-box thumb-xs align-self-center">
                                                <span class="avatar-title bg-soft-info rounded-circle font-13 font-weight-normal">+25</span>
                                            </a>    
                                        </div>
                                    </div>
                                    <div class="media mt-3">
                                        <i data-feather="globe" class="align-self-center icon-lg icon-dual-primary mr-2"></i>                                     
                                        <div class="media-body align-self-center">
                                            <h5 class="mt-0 mb-1">Website</h5>
                                            <a href="#" class="text-primary mb-0 font-14 pr-5">www.example123.com</a>
                                        </div><!--end media-body-->
                                    </div>
                                    <hr class="hr-dashed">
                                    <div class="media mt-3">
                                        <i data-feather="tag" class="align-self-center icon-lg icon-dual-primary mr-2"></i>                                     
                                        <div class="media-body align-self-center">
                                            <h5 class="mt-0 mb-1">Tags</h5>
                                            <span class="badge badge-light">HTML5</span>
                                            <span class="badge badge-light">Css3</span>
                                            <span class="badge badge-light">Python</span>
                                            <span class="badge badge-light">Flutter</span>
                                        </div><!--end media-body-->
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                    
                    
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0 mb-3">Leads Report</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Lead</th>
                                                    <th>Email</th>
                                                    <th>Phone No</th>                                                    
                                                    <th>Company</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr><!--end tr-->
                                            </thead>
        
                                            <tbody>
                                                <tr>
                                                    <td><img src="{{ URL::asset('assets/images/users/user-10.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Donald Gardner</td>
                                                    <td>xyx@gmail.com</td>
                                                    <td>+123456789</td>
                                                    <td>Starbucks coffee</td>
                                                    <td> <span class="badge badge-md badge-soft-purple">New Lead</span></td>
                                                    <td>                                                                                                       
                                                        <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                    </td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <td><img src="{{ URL::asset('assets/images/users/user-9.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Matt Rosales</td>
                                                    <td>xyx@gmail.com</td>
                                                    <td>+123456789</td>
                                                    <td>Mac Donald</td>
                                                    <td> <span class="badge badge-md badge-soft-purple">New Lead</span></td>
                                                    <td>                                                       
                                                        <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                    </td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <td><img src="{{ URL::asset('assets/images/users/user-8.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Michael Hill</td>
                                                    <td>xyx@gmail.com</td>
                                                    <td>+123456789</td>
                                                    <td>Life Good</td>
                                                    <td> <span class="badge badge-md badge-soft-danger">Lost</span></td>
                                                    <td>                                                       
                                                        <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                    </td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <td><img src="{{ URL::asset('assets/images/users/user-7.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Nancy Flanary</td>
                                                    <td>xyx@gmail.com</td>
                                                    <td>+123456789</td>
                                                    <td>Flipcart</td>
                                                    <td> <span class="badge badge-md badge-soft-purple">New Lead</span></td>
                                                    <td>                                                       
                                                        <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                    </td>
                                                </tr><!--end tr--> 
                                                <tr>
                                                    <td><img src="{{ URL::asset('assets/images/users/user-6.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Dorothy Key</td>
                                                    <td>xyx@gmail.com</td>
                                                    <td>+123456789</td>
                                                    <td>Adidas</td>
                                                    <td> <span class="badge badge-md badge-soft-primary">Follow Up</span></td>
                                                    <td>                                                       
                                                        <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                    </td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <td><img src="{{ URL::asset('assets/images/users/user-5.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Joseph Cross</td>
                                                    <td>xyx@gmail.com</td>
                                                    <td>+123456789</td>
                                                    <td>Reebok</td>
                                                    <td> <span class="badge badge-md badge-soft-success">Converted</span></td>
                                                    <td>                                                       
                                                        <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                    </td>
                                                </tr><!--end tr-->                                    
                                            </tbody>
                                        </table>                    
                                    </div>  
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-4">
                            <div class="card">                                       
                                <div class="card-body"> 
                                    <h4 class="header-title mt-0 mb-3">Activity</h4>
                                    <div class="slimscroll crm-dash-activity">
                                        <div class="activity">
                                            <div class="activity-info">
                                                <div class="icon-info-activity">
                                                    <i class="mdi mdi-checkbox-marked-circle-outline bg-soft-success"></i>
                                                </div>
                                                <div class="activity-info-text">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6 class="m-0 w-75">Task finished</h6>
                                                        <span class="text-muted d-block">10 Min ago</span>
                                                    </div>
                                                    <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                                        <a href="#" class="text-info">[more info]</a>
                                                    </p>
                                                </div>
                                            </div> 

                                            <div class="activity-info">
                                                <div class="icon-info-activity">
                                                    <i class="mdi mdi-timer-off bg-soft-pink"></i>
                                                </div>
                                                <div class="activity-info-text">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6 class="m-0  w-75">Task Overdue</h6>
                                                        <span class="text-muted">50 Min ago</span>
                                                    </div>
                                                    <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                                        <a href="#" class="text-info">[more info]</a>
                                                    </p>
                                                    <span class="badge badge-soft-secondary">Design</span>
                                                    <span class="badge badge-soft-secondary">HTML</span>  
                                                </div>
                                            </div>
                                            <div class="activity-info">
                                                <div class="icon-info-activity">
                                                    <i class="mdi mdi-alert-decagram bg-soft-purple"></i>
                                                </div>
                                                <div class="activity-info-text">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6 class="m-0  w-75">New Task</h6>
                                                        <span class="text-muted">10 hours ago</span>
                                                    </div> 
                                                    <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                                        <a href="#" class="text-info">[more info]</a>
                                                    </p>
                                                </div>
                                            </div>   

                                            <div class="activity-info">
                                                <div class="icon-info-activity">
                                                    <i class="mdi mdi-clipboard-alert bg-soft-warning"></i>
                                                </div>
                                                <div class="activity-info-text">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6 class="m-0">New Comment</h6>
                                                        <span class="text-muted">Yesterday</span>
                                                    </div>
                                                    <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                                        <a href="#" class="text-info">[more info]</a>
                                                    </p>     
                                                </div>
                                            </div>  
                                            <div class="activity-info">
                                                <div class="icon-info-activity">
                                                    <i class="mdi mdi-clipboard-alert bg-soft-secondary"></i>
                                                </div>
                                                <div class="activity-info-text">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6 class="m-0">New Lead Miting</h6>
                                                        <span class="text-muted">14 Nov 2019</span>
                                                    </div>
                                                    <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                                        <a href="#" class="text-info">[more info]</a>
                                                    </p> 
                                                </div>
                                            </div>                                                                                                              
                                        </div><!--end activity-->
                                    </div><!--end crm-dash-activity-->
                                </div>  <!--end card-body-->                                     
                            </div><!--end card--> 
                        </div><!--end col-->  
                    </div><!--end row-->

                </div><!-- container -->
@stop

@section('footerScript')
        <script src="{{ URL::asset('assets/pages/jquery.crm_dashboard.init.js')}}"></script> 
@stop