@extends('layouts.helpdesk-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
  <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                            @component('common-components.breadcrumb')
                                 @slot('title') Dashboard @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Helpdesk @endslot
                              @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-9">  
                            <div class="row">


 @component('common-components.helpdesk-widget')
     @slot('title') New Tickets @endslot
     @slot('iconClaass') align-self-center icon-lg icon-dual-warning @endslot
     @slot('feather') tag @endslot
     @slot('price') 198 @endslot
     @slot('percentage') 3.9% @endslot
     @slot('extra') From Average Yesterday @endslot
 @endcomponent

 @component('common-components.helpdesk-widget')
     @slot('title') Open Tickets @endslot
     @slot('iconClaass') align-self-center icon-lg icon-dual-pink @endslot
     @slot('feather') book-open @endslot
     @slot('price') 124 @endslot
     @slot('percentage') 10.1% @endslot
     @slot('extra') From Average Yesterday @endslot
 @endcomponent

 @component('common-components.helpdesk-widget')
     @slot('title') On Hold @endslot
     @slot('iconClaass') align-self-center icon-lg icon-dual-success @endslot
     @slot('feather') coffee @endslot
     @slot('price') 21 @endslot
     @slot('percentage') 2.6% @endslot
     @slot('extra') From Average Yesterday @endslot
 @endcomponent

 @component('common-components.helpdesk-widget')
     @slot('title') Unassigned @endslot
     @slot('iconClaass') align-self-center icon-lg icon-dual-purple @endslot
     @slot('feather') lock @endslot
     @slot('price') 73 @endslot
     @slot('percentage') 5.5% @endslot
     @slot('extra') From Average Yesterday @endslot
 @endcomponent

                                                       
                            </div><!--end row-->                                                      
                            <div class="card">
                                <div class="card-body">  
                                    <h4 class="header-title mt-0">Tickets Status</h4>                                                                    
                                    <div class="">
                                        <div id="Tickets_Status" class="apex-charts"></div>
                                    </div>  
                                </div><!--end card-body-->                                
                            </div><!--end card-->                            
                        </div><!--end col-->
                        <div class="col-lg-3">                            
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0">Customer Satisfaction</h4>
                                    <div class="happiness-score">
                                        <h2 class="mb-1">94.5%</h2>
                                        <p class="mb-0 text-uppercase">Happiness</p>
                                    </div> 
                                    <div id="ana_device" class="apex-charts my-3"></div>                                                                       
                                    <div class="table-responsive">
                                        <table class="table border-dashed mb-0">
                                            <thead class="thead-light">
                                            <tr>
                                                <th class="border-bottom-0">Performance Type</th>
                                                <th class="border-bottom-0 text-right">Score</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th class="border-top-0 text-dark" scope="row"><i class="far fa-grin-stars text-success font-24 mr-2 align-middle"></i>Excellent</th>
                                                <td class="border-top-0 text-right">65%</td>
                                            </tr>
                                            <tr>
                                                <th class="text-dark" scope="row"><i class="far fa-smile text-primary font-24 mr-2 align-middle"></i>Very Good</th>
                                                <td class="text-right">20%</td>                                                 
                                            </tr>
                                            <tr>
                                                <th class="text-dark" scope="row"><i class="far fa-meh text-warning font-24 mr-2 align-middle"></i>Good</th>
                                                <td class="text-right">10%</td>
                                            </tr>
                                            <tr>
                                                <th class="text-dark" scope="row"><i class="far fa-frown text-pink font-24 mr-2 align-middle"></i>Fair</th>
                                                <td class="text-right">5%</td>
                                            </tr>
                                            
                                            </tbody>
                                        </table><!--end /table-->
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->                            
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
                                                    <i class="dripicons-phone bg-soft-dark"></i>
                                                </div>                                                
                                                <h3 class="mt-0 text-dark">0m:27s</h3> 
                                                <h4 class="mt-0 header-title text-truncate">Avg.Speed of answer</h4>
                                                <p class="text-muted mb-0 text-truncate">It is a long established fact that a reader.</p>
                                                
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-5 align-self-center">
                                            <div class="apexchart-wrapper">
                                                <div id="dash_spark_1" class="chart-gutters"></div>
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
                                                    <i class="dripicons-clock bg-soft-dark"></i>
                                                </div>                                                
                                                <h3 class="mt-0 text-dark">4m:30s</h3> 
                                                <h4 class="mt-0 header-title text-truncate">Time to Resolved Complaint</h4>
                                                <p class="text-muted mb-0 text-truncate">It is a long established fact that a reader.</p>
                                                
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-5 align-self-center">
                                            <div class="apexchart-wrapper">
                                                <div id="dash_spark_2" class="chart-gutters"></div>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->                                                                                                  
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0 mb-2">Support Status</h4>  
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h2 class="font-weight-semibold">1530</h2>
                                            <h5>Tickets</h5>
                                        </div>
                                        <div>
                                            <ul class="list-unstyled url-list">
                                                <li>
                                                    <i class="mdi mdi-circle-medium text-pink"></i>
                                                    <span>Open Tickets</span>                                                                                                      
                                                </li>
                                                <li>
                                                    <i class="mdi mdi-circle-medium text-primary"></i> 
                                                    <span>Resolved Tickets</span>                                              
                                                </li>
                                                <li>
                                                    <i class="mdi mdi-circle-medium text-success"></i>
                                                    <span>Unresolved Tickets</span>                                                 
                                                </li>                                                
                                            </ul> 
                                        </div>
                                    </div>
                                    <div class="progress">                                                    
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                                        <div class="progress-bar bg-pink" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">5%</div>
                                    </div>                              
                                </div><!--end card-body-->
                            </div><!--end card--> 
                        </div><!--end col-->                        
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body"> 
                                    <h4 class="header-title mt-0 mb-4">Latest Activity</h4>
                                    <div class="slimscroll help-activity-height">
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
                                                        <span class="text-muted">10 Minutes ago</span>
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
                                                        <span class="text-muted">50 Minutes ago</span>
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
                        
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <p class="badge badge-soft-pink font-11 p-1 mb-1 float-lg-right float-md-none">Last updated 15 minutes ago</p>
                                    <h4 class="header-title mt-0 mb-3">Agent Performance</h4>                                    
                                    <div class="table-responsive browser_users">
                                        <table class="table mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th class="border-top-0">Agent</th>
                                                    <th class="border-top-0">Total Calls</th>
                                                    <th class="border-top-0">Calls Answered</th>
                                                    <th class="border-top-0">Avg.Speed of answer</th>
                                                    <th class="border-top-0">Adherence %</th>
                                                    <th class="border-top-0">Action</th>
                                                </tr><!--end tr-->
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img src="{{ URL::asset('assets/images/users/user-1.png')}}" alt="" class="thumb-sm rounded-circle mr-2">                                       
                                                            <div class="media-body align-self-center text-truncate">
                                                                <h6 class="mt-0 mb-1 text-dark">Donald Gardner</h6>
                                                                <p class="text-muted mb-0">Dummy text of the printing.</p>
                                                            </div><!--end media-body-->
                                                        </div>
                                                    </td>
                                                    <td>38</td>
                                                    <td>32</td>
                                                    <td>3:12s</td>
                                                    <td>80%</td>
                                                    <td>                                                                                                       
                                                        <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                    </td>
                                                </tr><!--end tr--> 
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <div class="avatar-box thumb-sm align-self-center mr-2">
                                                                <span class="avatar-title bg-soft-pink rounded-circle">NS</span>
                                                            </div>                                    
                                                            <div class="media-body align-self-center text-truncate">
                                                                <h6 class="mt-0 mb-1 text-dark">Nicholas Smith</h6>
                                                                <p class="text-muted mb-0">Dummy text of the printing.</p>
                                                            </div><!--end media-body-->
                                                        </div>
                                                    </td>
                                                    <td>50</td>
                                                    <td>45</td>
                                                    <td>2:45s</td>
                                                    <td>84%</td>
                                                    <td>                                                                                                       
                                                        <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                    </td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img src="{{ URL::asset('assets/images/users/user-4.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">                                       
                                                            <div class="media-body align-self-center text-truncate">
                                                                <h6 class="mt-0 mb-1 text-dark">Paula Anderson</h6>
                                                                <p class="text-muted mb-0">Dummy text of the printing.</p>
                                                            </div><!--end media-body-->
                                                        </div>
                                                    </td>
                                                    <td>32</td>
                                                    <td>24</td>
                                                    <td>4:15s</td>
                                                    <td>73%</td>
                                                    <td>                                                                                                       
                                                        <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                    </td>
                                                </tr><!--end tr-->
                                                
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img src="{{ URL::asset('assets/images/users/user-3.png')}}" alt="" class="thumb-sm rounded-circle mr-2">                                       
                                                            <div class="media-body align-self-center text-truncate">
                                                                <h6 class="mt-0 mb-1 text-dark">Lucy Peterson</h6>
                                                                <p class="text-muted mb-0">Dummy text of the printing.</p>
                                                            </div><!--end media-body-->
                                                        </div>
                                                    </td>
                                                    <td>25</td>
                                                    <td>21</td>
                                                    <td>5:42s</td>
                                                    <td>93%</td>
                                                    <td>                                                                                                       
                                                        <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                    </td>
                                                </tr><!--end tr-->  
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <div class="avatar-box thumb-sm align-self-center mr-2">
                                                                <span class="avatar-title bg-soft-primary rounded-circle">JR</span>
                                                            </div>                                    
                                                            <div class="media-body align-self-center text-truncate">
                                                                <h6 class="mt-0 mb-1 text-dark">Joseph Rust</h6>
                                                                <p class="text-muted mb-0">Dummy text of the printing.</p>
                                                            </div><!--end media-body-->
                                                        </div>
                                                    </td>
                                                    <td>50</td>
                                                    <td>45</td>
                                                    <td>2:45s</td>
                                                    <td>84%</td>
                                                    <td>                                                                                                       
                                                        <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
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
<script src="../assets/pages/jquery.helpdesk-dashboard.init.js"></script>
        

@stop