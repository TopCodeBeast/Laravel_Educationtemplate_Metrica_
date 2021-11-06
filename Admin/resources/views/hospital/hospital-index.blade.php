@extends('layouts.hospital-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('headerStyle')
 <!-- DataTables -->
<link href="{{ URL::asset('plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="{{ URL::asset('plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@stop

@section('content')
    <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                             @component('common-components.breadcrumb')
                                 @slot('title') Dashboard @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Hospital @endslot
                                 @endcomponent
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                   
                    <div class="row">

 @component('common-components.hospital-widget')
     @slot('title') Appointments @endslot
     @slot('icon') las la-wheelchair text-pink font-40 @endslot
     @slot('price') 40  @endslot
     @slot('extra') Yesterday 32 Add.  @endslot
 @endcomponent

 @component('common-components.hospital-widget')
     @slot('title') New Admit @endslot
     @slot('icon') las la-bed text-warning font-40 @endslot
     @slot('price') 50 @endslot
     @slot('extra') Yesterday 32 Add.  @endslot
 @endcomponent

 @component('common-components.hospital-widget')
     @slot('title') Operations @endslot
     @slot('icon') las la-cut text-success font-40 @endslot
     @slot('price') 14 @endslot
     @slot('extra') Yesterday 10 Ope.  @endslot
 @endcomponent

  @component('common-components.hospital-widget')
     @slot('title') Doctors @endslot
     @slot('icon') las la-stethoscope text-purple font-40 @endslot
     @slot('price') 10 @endslot
     @slot('extra') Today Available  @endslot
 @endcomponent


  @component('common-components.hospital-widget')
     @slot('title') Nurses @endslot
     @slot('icon') las la-user-nurse text-secondary font-40 @endslot
     @slot('price') 30 @endslot
     @slot('extra') Today Available  @endslot
 @endcomponent


  @component('common-components.hospital-widget')
     @slot('title') Earnings @endslot
     @slot('icon') las la-hand-holding-usd text-primary font-40 @endslot
     @slot('price') $41,520 @endslot
     @slot('extra') Yesterday's $38,990  @endslot
 @endcomponent
           

                                  
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body dash-info-carousel mb-0">
                                    <span class="text-success mb-2 d-block">Today Available</span>
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item">
                                                <div class="row">    
                                                    <div class="col-12 align-self-center">
                                                        <h4 class="mt-0 header-title text-left">Apollo Hospital</h4>
                                                        <div class="media mt-3">
                                                            <img src="{{ URL::asset('assets/images/users/dr-1.jpg')}}" alt="" height="120"  class="rounded-circle">                                   
                                                            <div class="media-body align-self-center ml-3">
                                                                <h2 class="mb-1 mt-0 dr-title">Dr.Helen White</h2>
                                                                <p class="text-muted font-13 mb-2"><span class="mr-2 text-secondary">MS Cardiology</span> 11:00am to 03:00pm</p>
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-20"></i></li>
                                                                    <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-20"></i></li>
                                                                    <li class="list-inline-item m-0 m-0"><i class="mdi mdi-star text-warning font-20"></i></li>
                                                                    <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-20"></i></li>
                                                                    <li class="list-inline-item m-0"><i class="mdi mdi-star-half text-warning font-20"></i></li>
                                                                    <li class="list-inline-item m-0"><small class="text-muted">4.91/5 (1021 reviews)</small></li>
                                                                </ul> 
                                                            </div><!--end media-body-->
                                                        </div> <!--end media--> 
                                                        <hr class="hr-dashed"> 
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="text-center">
                                                                    <i data-feather="phone" class="align-self-center icon-lg icon-dual-info d-block mx-auto mb-2"></i>                                 
                                                                    <h5 class="mt-0 mb-1">Phone No</h5>
                                                                    <p>+01 1234567890</p>
                                                                </div><!--end/div-->
                                                            </div><!--end col-->
                                                            <div class="col-6">
                                                                <div class="text-center">
                                                                    <i data-feather="globe" class="align-self-center icon-lg icon-dual-info d-block mx-auto mb-2"></i>                                 
                                                                    <h5 class="mt-0 mb-1">Website</h5>
                                                                    <a href="#" class="text-primary mb-0 font-14">www.example123.com</a>
                                                                </div><!--end/div-->
                                                            </div><!--end col-->
                                                        </div> <!--end row-->
                                                        <div class="p-2 bg-light">                                                           
                                                            <div class="media">
                                                               <h3 class="font-30">68</h3>                                     
                                                                <div class="media-body align-self-center ml-3">
                                                                    <p class="mb-0 font-weight-semibold text-uppercase text-dark-alt">Appointments</p>
                                                                    <p class="mb-0 text-muted">Last Saturday 52 Appointments</p>
                                                                </div><!--end media-body-->
                                                            </div>
                                                        </div>                                                    
                                                    </div><!--end col-->                                                        
                                                </div><!--end row-->                                                    
                                            </div><!--end carousel-item-->
                                            <div class="carousel-item active">
                                                <div class="row">   
                                                    <div class="col-12 align-self-center">
                                                        <h4 class="mt-0 header-title text-left">Kaiser Foundation Hospital</h4>
                                                        <div class="media mt-3">
                                                            <img src="{{ URL::asset('assets/images/users/dr-2.jpg')}}" alt="" height="120"  class="rounded-circle">                                   
                                                            <div class="media-body align-self-center ml-3">
                                                                <h2 class="mb-1 mt-0 dr-title">Dr.Wendy Keen</h2>
                                                                <p class="text-muted font-13 mb-2"><span class="mr-2 text-secondary">MD Neurology</span> 01:00pm to 04:00pm</p>
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-20"></i></li>
                                                                    <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-20"></i></li>
                                                                    <li class="list-inline-item m-0 m-0"><i class="mdi mdi-star text-warning font-20"></i></li>
                                                                    <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-20"></i></li>
                                                                    <li class="list-inline-item m-0"><i class="mdi mdi-star-half text-warning font-20"></i></li>
                                                                    <li class="list-inline-item m-0"><small class="text-muted">4.75/5 (521 reviews)</small></li>
                                                                </ul> 
                                                            </div><!--end media-body-->
                                                        </div> <!--end media-->
                                                        <hr class="hr-dashed"> 
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="text-center">
                                                                    <i data-feather="phone" class="align-self-center icon-lg icon-dual-info d-block mx-auto mb-2"></i>                                 
                                                                    <h5 class="mt-0 mb-1">Phone No</h5>
                                                                    <p>+01 1234567890</p>
                                                                </div><!--end/div-->
                                                            </div><!--end col-->
                                                            <div class="col-6">
                                                                <div class="text-center">
                                                                    <i data-feather="globe" class="align-self-center icon-lg icon-dual-info d-block mx-auto mb-2"></i>                                 
                                                                    <h5 class="mt-0 mb-1">Website</h5>
                                                                    <a href="#" class="text-primary mb-0 font-14">www.example123.com</a>
                                                                </div><!--end/div-->
                                                            </div><!--end col-->
                                                        </div> <!--end row-->
                                                        <div class="p-2 bg-light">                                                           
                                                            <div class="media">
                                                               <h3 class="font-30">42</h3>                                     
                                                                <div class="media-body align-self-center ml-3">
                                                                    <p class="mb-0 font-weight-semibold text-uppercase text-dark-alt">Appointments</p>
                                                                    <p class="mb-0 text-muted">Last Saturday 24 Appointments</p>
                                                                </div><!--end media-body-->
                                                            </div>
                                                        </div>                                                      
                                                    </div><!--end col-->                                       
                                                </div><!--end row-->                                                
                                            </div><!--end carousel-item-->

                                            <div class="carousel-item">
                                                <div class="row">  
                                                    <div class="col-12 align-self-center">
                                                        <h4 class="mt-0 header-title text-left">Florida Hospital</h4>
                                                        <div class="media mt-3">
                                                            <img src="{{ URL::asset('assets/images/users/dr-3.jpg')}}" alt="" height="120"  class="rounded-circle">                                   
                                                            <div class="media-body align-self-center ml-3">
                                                                <h2 class="mb-1 mt-0 dr-title">Dr.Lisa King</h2>
                                                                <p class="text-muted font-13 mb-2"><span class="mr-2 text-secondary">MD Orthopedic</span> 09:00am to 11:30am</p>
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-20"></i></li>
                                                                    <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-20"></i></li>
                                                                    <li class="list-inline-item m-0 m-0"><i class="mdi mdi-star text-warning font-20"></i></li>
                                                                    <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-20"></i></li>
                                                                    <li class="list-inline-item m-0"><i class="mdi mdi-star-half text-warning font-20"></i></li>
                                                                    <li class="list-inline-item m-0"><small class="text-muted">4.87/5 (628 reviews)</small></li>
                                                                </ul> 
                                                            </div><!--end media-body-->
                                                        </div>  <!--end media--> 
                                                        <hr class="hr-dashed"> 
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="text-center">
                                                                    <i data-feather="phone" class="align-self-center icon-lg icon-dual-info d-block mx-auto mb-2"></i>                                 
                                                                    <h5 class="mt-0 mb-1">Phone No</h5>
                                                                    <p>+01 1234567890</p>
                                                                </div><!--end/div-->
                                                            </div><!--end col-->
                                                            <div class="col-6">
                                                                <div class="text-center">
                                                                    <i data-feather="globe" class="align-self-center icon-lg icon-dual-info d-block mx-auto mb-2"></i>                                 
                                                                    <h5 class="mt-0 mb-1">Website</h5>
                                                                    <a href="#" class="text-primary mb-0 font-14">www.example123.com</a>
                                                                </div><!--end/div-->
                                                            </div><!--end col-->
                                                        </div> <!--end row-->
                                                        <div class="p-2 bg-light">                                                           
                                                            <div class="media">
                                                               <h3 class="font-30">35</h3>                                     
                                                                <div class="media-body align-self-center ml-3">
                                                                    <p class="mb-0 font-weight-semibold text-uppercase text-dark-alt">Appointments</p>
                                                                    <p class="mb-0 text-muted">Last Saturday 48 Appointments</p>
                                                                </div><!--end media-body-->
                                                            </div>
                                                        </div>                                                 
                                                    </div><!--end col-->                                                        
                                                </div><!--end row-->                                              
                                            </div><!--end carousel-item-->
                                            
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div><!--end card-body-->                                                                                                        
                            </div><!--end card-->
                        </div><!-- end col-->
                        <div class="col-lg-8">                                                        
                            <div class="card">
                                <div class="card-body">  
                                    <h4 class="header-title mt-0">Hospital Survey</h4>                                 
                                    <div class="">
                                        <div id="hospital_survey" class="apex-charts"></div>
                                    </div>  
                                </div><!--end card-body-->                                                           
                            </div><!--end card-->
                        </div><!-- end col-->                
                    </div><!--end row-->
                    
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Admit New Patients</h4>
                                    <div class="row">                                            
                                        <div class="col-md-4 align-self-center">
                                            <div class="text-center">
                                                <div class="icon-info mb-3">
                                                    <i class="fas fa-procedures bg-soft-info mx-auto"></i>
                                                </div>                                                
                                                <h2 class="mt-0 font-weight-bold">1200</h2> 
                                                <p class="mb-0 text-muted"><span class="text-success"><i class="mdi mdi-arrow-up"></i>14.5%</span> Up From Last Week</p>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-md-8 align-self-center">
                                            <div class="apexchart-wrapper">
                                                <div id="patient_dash_report" class="chart-gutters"></div>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->                                                                                             
                            </div><!--end card-->
                        </div><!--end col-->        
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">                                    
                                    <div class="row">                                            
                                        <div class="col-md-5">
                                            <h4 class="header-title mt-0 mb-3">Pharmacy Stocks</h4>
                                            <div class="apexchart-wrapper">
                                                <div id="dash_medicine" class="apex-charts"></div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-md-7 align-self-center">                                            
                                            <div class="text-center">
                                                <img src="{{ URL::asset('assets/images/widgets/weather.png')}}" alt="" height="70" >
                                                <h2>32°</h2>
                                                <h4 class="title-text">San Francisco, California</h4>
                                                <p class="text-muted">SUNDAY 25<sup>th</sup> Aug 2020</p>
                                                <button type="button" class="btn btn-sm btn-outline-primary btn-round dual-btn-icon">View Details <i class="mdi mdi-arrow-right"></i></button>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body--> 
                            </div><!--end card-->
                        </div><!--end col-->                        
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">                                       
                                <div class="card-body"> 
                                    <h4 class="header-title mt-0 mb-4">Activity</h4>
                                    <div class="slimscroll hospital-dash-activity">
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
                                                        <span class="text-muted">14 Nov 2020</span>
                                                    </div>
                                                    <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                                        <a href="#" class="text-info">[more info]</a>
                                                    </p> 
                                                </div>
                                            </div>                                                                                                              
                                        </div><!--end activity-->
                                    </div><!--end hospital-dash-activity-->                                    
                                </div>  <!--end card-body-->                                     
                            </div><!--end card--> 
                        </div><!--end col-->
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">    
                                    <h4 class="header-title mt-0 mb-3">New Patients</h4>                                
                                    <div class="table-responsive">
                                        <table id="datatable" class="table">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>Patient Name</th>
                                                <th>Age</th>
                                                <th>ID</th>                                                    
                                                <th>Address</th>
                                                <th>Mobile No</th>
                                                <th>Last Visit</th>
                                                <th>Diseases</th>                                                
                                                <th class="text-right">Action</th>
                                            </tr><!--end tr-->
                                            </thead>
        
                                            <tbody>
                                            <tr>
                                                <td><a href="hospital/patient-profile"><img src="{{ URL::asset('assets/images/users/user-10.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Donald Gardner</a></td>
                                                <td>36</td>
                                                <td>#1236</td>
                                                <td>B28 University Street US</td>
                                                <td>+123456789</td> 
                                                <td>18/07/2020</td>
                                                <td><span class="badge badge-soft-danger p-2">Cancer</span></td>                                                                                               
                                                <td class="text-right">                                                       
                                                    <a href="../hospital/patient-edit" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><a href="hospital/patient-profile"><img src="{{ URL::asset('assets/images/users/user-9.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Keith Jacobson</a></td>
                                                <td>48</td>
                                                <td>#1236</td>
                                                <td>B28 University Street US</td>
                                                <td>+123456789</td> 
                                                <td>18/07/2020</td>   
                                                <td><span class="badge badge-soft-success p-2">Ulcers</span></td>                                             
                                                <td class="text-right">                                                       
                                                    <a href="hospital/patient-edit" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><a href="hospital/patient-profile"><img src="{{ URL::asset('assets/images/users/user-9.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Greg Crosby</a></td>
                                                <td>27</td>
                                                <td>#1236</td>
                                                <td>B28 University Street US</td>
                                                <td>+123456789</td> 
                                                <td>18/07/2020</td>    
                                                <td><span class="badge badge-soft-danger p-2">HIV</span></td>                                           
                                                <td class="text-right">                                                       
                                                    <a href="hospital/patient-edit" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><a href="hospital/patient-profile"><img src="{{ URL::asset('assets/images/users/user-8.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Fred Godina</a></td>
                                                <td>22</td>
                                                <td>#1236</td>
                                                <td>B28 University Street US</td>
                                                <td>+123456789</td> 
                                                <td>18/07/2020</td>   
                                                <td><span class="badge badge-soft-success p-2">Virus Fever</span></td>                                           
                                                <td class="text-right">                                                       
                                                    <a href="../hospital/patient-edit" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><a href="hospital/patient-profile"><img src="{{ URL::asset('assets/images/users/user-7.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Peggy Doe</a></td>
                                                <td>51</td>
                                                <td>#7851</td>
                                                <td>B28 University Street US</td>
                                                <td>+123456789</td> 
                                                <td>20/07/2020</td> 
                                                <td><span class="badge badge-soft-success p-2">heart attack</span></td>                                               
                                                <td class="text-right">                                                       
                                                    <a href="hospital/patient-edit" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><a href="hospital/patient-profile"><img src="{{ URL::asset('assets/images/users/user-8.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Jennifer Doss</a></td>
                                                <td>18</td>
                                                <td>#3654</td>
                                                <td>B28 University Street US</td>
                                                <td>+123456789</td> 
                                                <td>19/07/2020</td>   
                                                <td><span class="badge badge-soft-danger p-2">Ebola</span></td>                                             
                                                <td class="text-right">                                                       
                                                    <a href="hospital/patient-edit" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->                              
                                            </tbody>
                                        </table>                    
                                    </div>                                         
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->                               
                    </div><!--end row--> 

                </div><!-- container -->
@stop

@section('footerScript')
<script src="{{ URL::asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ URL::asset('plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ URL::asset('assets/pages/jquery.hospital_dashboard.init.js')}}"></script>        
@stop