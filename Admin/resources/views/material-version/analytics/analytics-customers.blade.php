@extends('layouts.material-version-master')

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
                   


                    <div class="row">
                        <div class="col-sm-12">

                             <!-- Page-Title -->
                             @component('common-components.breadcrumb')
                                 @slot('title') Customers @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Analytics @endslot
                              @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0 mb-4">Customers Growth</h4>
                                    <div class="chart-demo">
                                        <div id="apex_line1" class="apex-charts"></div>
                                    </div>                                        
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <div class="row">
                        @component('common-components.analytics-widgets')
                                 @slot('title') Returning Customers @endslot
                                 @slot('description') Last Month : 150 @endslot
                                 @slot('chartclass') peity-bar @endslot
                                 @slot('dataPeity') '{ "fill": ["#4d79f62b", "#4d79f6"]}' @endslot
                                 @slot('points') 6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1 @endslot
                         @endcomponent

                         @component('common-components.analytics-widgets')
                                 @slot('title') New Customers @endslot
                                 @slot('description') Last Month : 10 @endslot
                                 @slot('chartclass') peity-line @endslot
                                 @slot('dataPeity') '{ "fill": ["#0dc8de24"],"stroke": ["#0dc8de"]}' @endslot
                                 @slot('points') 6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1 @endslot
                         @endcomponent

                              @component('common-components.analytics-widgets')
                                 @slot('title') Bounce Rate @endslot
                                 @slot('description') Last Month : 30% @endslot
                                 @slot('chartclass') peity-donut @endslot
                                 @slot('dataPeity') '{ "fill": ["#4d79f6", "#4d79f62b"], "innerRadius": 23, "radius": 32 }' @endslot
                                 @slot('points') 226,134 @endslot
                         @endcomponent                                    
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <button class="btn btn-gradient-primary px-4 float-right mt-0 mb-3"><i class="mdi mdi-plus-circle-outline mr-2"></i>Add New Customer</button>
                                    <h4 class="header-title mt-0">Customers Details</h4> 
                                    <div class="table-responsive dash-social">
                                        <table id="datatable" class="table">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>Customer Name</th>
                                                <th>Email</th>
                                                <th>Phone No</th>                                                    
                                                <th>Country</th>
                                                <th>Action</th>
                                            </tr><!--end tr-->
                                            </thead>
        
                                            <tbody>
                                            <tr>
                                                <td><img src="{{ URL::asset('assets/images/users/user-10.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Donald Gardner<small class="badge badge-soft-pink ml-1">New</small></td>
                                                <td>xyx@gmail.com</td>
                                                <td>+123456789</td>
                                                <td>Tokyo, JAP</td>
                                                <td>                                                       
                                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><img src="{{ URL::asset('assets/images/users/user-9.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Matt Rosales</td>
                                                <td>xyx@gmail.com</td>
                                                <td>+123456789</td>
                                                <td>San Francisco USA</td>
                                                <td>                                                       
                                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><img src="{{ URL::asset('assets/images/users/user-8.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Michael Hill<small class="badge badge-soft-blue ml-1">New</small></td>
                                                <td>xyx@gmail.com</td>
                                                <td>+123456789</td>
                                                <td>Sydeny AUS</td>
                                                <td>                                                       
                                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><img src="{{ URL::asset('assets/images/users/user-7.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Nancy Flanary</td>
                                                <td>xyx@gmail.com</td>
                                                <td>+123456789</td>
                                                <td>Berlin GER</td>
                                                <td>                                                       
                                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><img src="{{ URL::asset('assets/images/users/user-6.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Dorothy Key</td>
                                                <td>xyx@gmail.com</td>
                                                <td>+123456789</td>
                                                <td>New York USA</td>
                                                <td>                                                       
                                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><img src="{{ URL::asset('assets/images/users/user-5.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Joseph Cross</td>
                                                <td>xyx@gmail.com</td>
                                                <td>+123456789</td>
                                                <td>Tokyo JAP</td>
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
                        </div> <!--end col-->                               
                    </div><!--end row-->

                </div><!-- container -->  
@stop

@section('footerScript')

        <!-- Required datatable js -->
        <script src="{{ URL::asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{ URL::asset('plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{ URL::asset('plugins/peity-chart/jquery.peity.min.js')}}"></script>

        <script src="{{ URL::asset('assets/pages-material/jquery.analytics_customers.init.js')}}"></script>
@stop