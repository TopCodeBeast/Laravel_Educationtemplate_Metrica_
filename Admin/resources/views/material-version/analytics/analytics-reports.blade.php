@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('headerStyle')
<!-- DataTables -->
<link href="{{ URL::asset('plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" /> 
 <link href="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet">
        
@stop

@section('content')
 <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                              <!-- Page-Title -->
                             @component('common-components.breadcrumb')
                                 @slot('title') Reports @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Reports @endslot
                              @endcomponent

                            
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0 mb-3">Visitors By country</h4> 
                                    <div id="world-map-markers" class="rep-map drop-shadow-map"></div>
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->   
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
                    </div><!--end row--> 
                    
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0">Social Report</h4> 
                                    <div class="table-responsive dash-social">
                                        <table id="datatable" class="table table-bordered">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>Network</th>
                                                <th>Sessions</th>
                                                <th>Con.Rate</th>                                                    
                                                <th>Avg.Time</th>
                                                <th>Bounce Rate</th>
                                                <th>%Change</th>
                                            </tr><!--end tr-->
                                            </thead>
        
                                            <tbody>
                                            <tr>
                                                <td><i class="mdi mdi-google text-danger mr-1 font-18"></i>Google</td>
                                                <td>4541</td>
                                                <td>3.2%</td>
                                                <td>3:20</td>
                                                <td>57.8%</td>
                                                <td>17.8% <i class="mdi mdi-arrow-up-drop-circle-outline text-success ml-1"></i></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><i class="mdi mdi-yahoo text-info mr-1 font-18"></i>Yahoo</td>
                                                <td>1522</td>
                                                <td>4.2%</td>
                                                <td>4:20</td>
                                                <td>62.8%</td>
                                                <td>-12.8% <i class="mdi mdi-arrow-down-drop-circle-outline text-danger ml-1"></i></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><i class="mdi mdi-web text-info mr-1 font-18"></i>UC Browser</td>
                                                <td>1292</td>
                                                <td>3.2%</td>
                                                <td>5:20</td>
                                                <td>33.8%</td>
                                                <td>17.8% <i class="mdi mdi-arrow-up-drop-circle-outline text-success ml-1"></i></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><i class="mdi mdi-facebook text-primary mr-1 font-18"></i>Facebook</td>
                                                <td>2241</td>
                                                <td>4.9%</td>
                                                <td>2:20</td>
                                                <td>48.8%</td>
                                                <td>17.8% <i class="mdi mdi-arrow-up-drop-circle-outline text-success ml-1"></i></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><i class="mdi mdi-twitter text-primary mr-1 font-18"></i>Twitter</td>
                                                <td>6806</td>
                                                <td>3.2%</td>
                                                <td>3:20</td>
                                                <td>57.8%</td>
                                                <td>-11.8% <i class="mdi mdi-arrow-down-drop-circle-outline text-danger ml-1"></i></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><i class="mdi mdi-linkedin text-info mr-1 font-18"></i>LinkedIn</td>
                                                <td>4541</td>
                                                <td>3.2%</td>
                                                <td>3:20</td>
                                                <td>52.8%</td>
                                                <td>17.8% <i class="mdi mdi-arrow-up-drop-circle-outline text-success ml-1"></i></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><i class="mdi mdi-pinterest text-pink mr-1 font-18"></i>Pinterest</td>
                                                <td>3542</td>
                                                <td>8.2%</td>
                                                <td>6:20</td>
                                                <td>61.8%</td>
                                                <td>23.8% <i class="mdi mdi-arrow-up-drop-circle-outline text-success ml-1"></i></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><i class="mdi mdi-google-plus text-danger mr-1 font-18"></i>Google+</td>
                                                <td>1124</td>
                                                <td>9.2%</td>
                                                <td>4:10</td>
                                                <td>20.8%</td>
                                                <td>-9.8% <i class="mdi mdi-arrow-down-drop-circle-outline text-danger ml-1"></i></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><i class="mdi mdi-instagram text-success mr-1 font-18"></i>Instagram</td>
                                                <td>3521</td>
                                                <td>1.2%</td>
                                                <td>6:45</td>
                                                <td>66.2%</td>
                                                <td>34.8% <i class="mdi mdi-arrow-up-drop-circle-outline text-success ml-1"></i></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><i class="mdi mdi-whatsapp text-success mr-1 font-18"></i>WhatsApp</td>
                                                <td>96547</td>
                                                <td>9.2%</td>
                                                <td>1:20</td>
                                                <td>57.8%</td>
                                                <td>48.8% <i class="mdi mdi-arrow-up-drop-circle-outline text-success ml-1"></i></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><i class="mdi mdi-google-play text-warning mr-1 font-18"></i>Other</td>
                                                <td>3214</td>
                                                <td>6.2%</td>
                                                <td>4:40</td>
                                                <td>36.8%</td>
                                                <td>11.8% <i class="mdi mdi-arrow-up-drop-circle-outline text-success ml-1"></i></td>
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

        <script src="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
        <script src="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

        <script src="{{ URL::asset('assets/pages-material/jquery.analytics_report.init.js')}}"></script>
@stop