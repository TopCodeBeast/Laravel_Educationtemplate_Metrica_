@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('headerStyle')
<link href="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet">   
@stop

@section('content')
     <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                              <!-- Page-Title -->
                             @component('common-components.breadcrumb')
                                 @slot('title') Dashboard @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Analytics @endslot
                              @endcomponent

                           
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-8">                                                        
                            <div class="card">
                                <div class="card-body">  
                                    <h4 class="header-title mt-0">Audience Overview</h4>                                 
                                    <div class="">
                                        <div id="ana_dash_1" class="apex-charts"></div>
                                    </div>  
                                </div><!--end card-body--> 
                                <div class="card-body bg-light-alt chart-report-card">
                                    <div class="row d-flex justify-content-between">
                                        <div class="col-lg-4">
                                            <div class="media">
                                                <div class="report-main-icon bg-card mr-2">
                                                    <i data-feather="users" class="align-self-center icon-dual-2"></i>  
                                                </div>                                                                 
                                                <div class="media-body align-self-center text-truncate">
                                                    <h4 class="mt-0 mb-0 font-weight-semibold text-dark font-24">140k 
                                                        <span class="text-success  font-12 font-weight-normal"><i class="mdi mdi-arrow-up mr-1"></i>21%</span>
                                                    </h4> 
                                                    <p class="text-dark font-weight-semibold mb-0 font-14">Users</p>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </div><!--end col-->
                                        <div class="col-lg-4">
                                            <div class="media">
                                                <div class="report-main-icon bg-card mr-2">
                                                    <i data-feather="eye" class="align-self-center icon-dual-2"></i>  
                                                </div>                                     
                                                <div class="media-body align-self-center text-truncate">
                                                    <h4 class="mt-0 mb-0 font-weight-semibold text-dark font-24">2154 
                                                        <span class="text-success  font-12 font-weight-normal"><i class="mdi mdi-arrow-up mr-1"></i>21%</span>
                                                    </h4> 
                                                    <p class="text-dark font-weight-semibold mb-0 font-14">Page views</p>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </div><!--end col-->
                                        <div class="col-lg-4">
                                            <div class="media">
                                                <div class="report-main-icon bg-card mr-2">
                                                    <i data-feather="headphones" class="align-self-center icon-dual-2"></i>  
                                                </div>                                     
                                                <div class="media-body align-self-center text-truncate">
                                                    <h4 class="mt-0 mb-0 font-weight-semibold text-dark font-24">183k 
                                                        <span class="text-success  font-12 font-weight-normal"><i class="mdi mdi-arrow-up mr-1"></i>21%</span>
                                                    </h4> 
                                                    <p class="text-dark font-weight-semibold mb-0 font-14">Impressions</p>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div> <!--end card-body-->                              
                            </div><!--end card-->                            
                        </div><!--end col-->
                        <div class="col-lg-4">                            
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0">Sessions Device</h4>  
                                    <div id="ana_device" class="apex-charts"></div>
                                    <div class="table-responsive mt-4">
                                        <table class="table mb-0">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>Device</th>
                                                <th>Sassions</th>
                                                <th>Day</th>
                                                <th>Week</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">Dasktops</th>
                                                <td>1843</td>
                                                <td>-3</td>
                                                <td>-12</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Tablets</th>
                                                <td>2543</td>
                                                <td>-5</td>
                                                <td>-2</td>                                                 
                                            </tr>
                                            <tr>
                                                <th scope="row">Mobiles</th>
                                                <td>3654</td>
                                                <td>-5</td>
                                                <td>-6</td>
                                            </tr>
                                            
                                            </tbody>
                                        </table><!--end /table-->
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">                                    
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h4 class="header-title mt-0 mb-3">Live Visits Our New Site</h4> 
                                            <div id="circlechart" class="apex-charts"></div>
                                        </div><!--end col-->
                                        <div class="col-lg-6">   
                                            <h4 class="header-title mt-0 mb-3">Traffic Sources</h4>                                         
                                            <div class="traffic-card">                                                
                                                <h3>80</h3>
                                                <h5>Right Now</h5>
                                            </div>
                                            <div class="progress mb-4">                                                    
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">55%</div>
                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100">28%</div>
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 17%" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100">17%</div>
                                            </div>                
                                            <ul class="list-unstyled url-list mb-0">
                                                <li>
                                                    <i class="mdi mdi-circle-medium text-primary"></i>
                                                    <span>Organic</span>                                                                                                      
                                                </li>
                                                <li>
                                                    <i class="mdi mdi-circle-medium text-secondary"></i> 
                                                    <span>Direct</span>                                              
                                                </li>
                                                <li>
                                                    <i class="mdi mdi-circle-medium text-warning"></i>
                                                    <span>Campaign</span>                                                 
                                                </li>                                                
                                            </ul>
                                        </div><!--end col-->
                                    </div><!--end row-->                                   
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col--> 
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">  
                                    <h4 class="header-title mt-0 mb-3">Organic Traffic in USA</h4>                                   
                                    
                                    <div class="row"> 
                                        <div class="col-lg-7">
                                            <div id="usa" class="drop-shadow-map" style="height: 250px"></div> 
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
                            </div>
                        </div> <!--end col--> 
                    </div> <!--end row--> 
                    <div class="row justify-content-center">

                            @component('common-components.mv-analytics-widgets')
                                 @slot('title') Sessions @endslot
                                 @slot('price') 24k @endslot
                                 @slot('percentage') 8.5% @endslot
                                 @slot('desc') New Sessions Today @endslot
                                 @slot('icon') users @endslot
                                 @slot('iconClass') align-self-center icon-dual-pink icon-lg @endslot
                            @endcomponent

                              @component('common-components.mv-analytics-widgets')
                                 @slot('title') Avg.Sessions @endslot
                                 @slot('price') 00:18 @endslot
                                 @slot('percentage') 1.5% @endslot
                                 @slot('desc') Weekly Avg.Sessions @endslot
                                 @slot('icon') clock @endslot
                                 @slot('iconClass') align-self-center icon-dual-secondary icon-lg @endslot
                            @endcomponent

                              @component('common-components.mv-analytics-widgets')
                                 @slot('title') Bounce Rate @endslot
                                 @slot('price') $2400 @endslot
                                 @slot('percentage') 35% @endslot
                                 @slot('desc') Bounce Rate Weekly @endslot
                                 @slot('icon') pie-chart @endslot
                                 @slot('iconClass') align-self-center icon-dual-purple icon-lg @endslot
                            @endcomponent

                             @component('common-components.mv-analytics-widgets')
                                 @slot('title') Goal Completions @endslot
                                 @slot('price') 85000 @endslot
                                 @slot('percentage') 10.5% @endslot
                                 @slot('desc') Completions Weekly @endslot
                                 @slot('icon') pie-chartbriefcase @endslot
                                 @slot('iconClass') align-self-center icon-dual-warning icon-lg @endslot
                            @endcomponent

                                                     
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0 mb-3">Browser Used By Users</h4>
                                    <div class="table-responsive browser_users">
                                        <table class="table mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th class="border-top-0">Browser</th>
                                                    <th class="border-top-0">Sessions</th>
                                                    <th class="border-top-0">Bounce Rate</th>
                                                    <th class="border-top-0">Transactions</th>
                                                </tr><!--end tr-->
                                            </thead>
                                            <tbody>
                                                <tr>                                                        
                                                    <td><i class="fab fa-chrome mr-2 text-danger font-16"></i>Chrome</td>
                                                    <td>10853<small class="text-muted">(52%)</small></td>                                   
                                                    <td> 52.80%</td>
                                                    <td>566<small class="text-muted">(92%)</small></td>
                                                </tr><!--end tr-->     
                                                <tr>                                                        
                                                    <td><i class="fab fa-safari mr-2 text-info font-16"></i>Safari</td>
                                                    <td>2545<small class="text-muted">(47%)</small></td>                                   
                                                    <td> 47.54%</td>
                                                    <td>498<small class="text-muted">(81%)</small></td>
                                                </tr><!--end tr-->    
                                                <tr>                                                        
                                                    <td><i class="fab fa-internet-explorer mr-2 text-warning font-16"></i>Internet-Explorer</td>
                                                    <td>1836<small class="text-muted">(38%)</small></td>                                   
                                                    <td> 41.12%</td>
                                                    <td>455<small class="text-muted">(74%)</small></td>
                                                </tr><!--end tr-->    
                                                <tr>                                                        
                                                    <td><i class="fab fa-opera mr-2 text-danger font-16"></i>Opera</td>
                                                    <td>1958<small class="text-muted">(31%)</small></td>                                   
                                                    <td> 36.82%</td>
                                                    <td>361<small class="text-muted">(61%)</small></td>
                                                </tr><!--end tr-->    
                                                <tr>                                                        
                                                    <td><i class="fab fa-firefox mr-2 text-blue font-16"></i>Firefox</td>
                                                    <td>1566<small class="text-muted">(26%)</small></td>                                   
                                                    <td> 29.33%</td>
                                                    <td>299<small class="text-muted">(49%)</small></td>
                                                </tr><!--end tr-->                                
                                            </tbody>
                                        </table> <!--end table-->                                               
                                    </div><!--end /div-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0 mb-3">Traffic Sources</h4>
                                    <div class="table-responsive browser_users">
                                        <table class="table mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th class="border-top-0">Channel</th>
                                                    <th class="border-top-0">Sessions</th>
                                                    <th class="border-top-0">Prev.Period</th>
                                                    <th class="border-top-0">% Change</th>
                                                </tr><!--end tr-->
                                            </thead>
                                            <tbody>
                                                <tr>                                                        
                                                    <td><a href="" class="text-primary">Organic search</a></td>
                                                    <td>10853<small class="text-muted">(52%)</small></td>
                                                    <td>566<small class="text-muted">(92%)</small></td>
                                                    <td> 52.80% <i class="fas fa-caret-up text-success font-16"></i></td>
                                                </tr><!--end tr-->     
                                                <tr>                                                        
                                                    <td><a href="" class="text-primary">Direct</a></td>
                                                    <td>2545<small class="text-muted">(47%)</small></td>
                                                    <td>498<small class="text-muted">(81%)</small></td>
                                                    <td> -17.20% <i class="fas fa-caret-down text-danger font-16"></i></td>
                                                    
                                                </tr><!--end tr-->    
                                                <tr>                                                        
                                                    <td><a href="" class="text-primary">Referal</a></td>
                                                    <td>1836<small class="text-muted">(38%)</small></td> 
                                                    <td>455<small class="text-muted">(74%)</small></td>
                                                    <td> 41.12% <i class="fas fa-caret-up text-success font-16"></i></td>
                                                    
                                                </tr><!--end tr-->    
                                                <tr>                                                        
                                                    <td><a href="" class="text-primary">Email</a></td>
                                                    <td>1958<small class="text-muted">(31%)</small></td> 
                                                    <td>361<small class="text-muted">(61%)</small></td>
                                                    <td> -8.24% <i class="fas fa-caret-down text-danger font-16"></i></td>
                                                </tr><!--end tr-->    
                                                <tr>                                                        
                                                    <td><a href="" class="text-primary">Social</a></td>
                                                    <td>1566<small class="text-muted">(26%)</small></td> 
                                                    <td>299<small class="text-muted">(49%)</small></td>
                                                    <td> 29.33% <i class="fas fa-caret-up text-success"></i></td>
                                                </tr><!--end tr-->                                
                                            </tbody>
                                        </table>                                               
                                    </div><!--end /div-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!-- container -->
@stop

@section('footerScript')
<script src="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-us-aea-en.js')}}"></script>    
<script src="{{ URL::asset('assets/pages-material/jquery.analytics_dashboard.init.js')}}"></script>
@stop