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
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                              @component('common-components.breadcrumb')
                                 @slot('title') Teckets @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Helpdesk @endslot
                              @endcomponent

                            
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0">Tickets By Status</h4>
                                    <div class="">
                                        <div id="Tickets_Data" class="apex-charts"></div>
                                    </div>                                        
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0">Tickets By Request Type</h4>
                                    <div id="apex_bar1" class="apex-charts"></div>                                    
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <i data-feather="tag" class="align-self-center icon-lg icon-dual-warning mr-3"></i>                                     
                                        <div class="media-body align-self-center">
                                            <h3 class="mt-0 mb-1 font-weight-semibold">380</h3>
                                            <p class="mb-0 font-12 text-muted text-uppercase font-weight-semibold-alt">Tickets Worked</p> 
                                        </div><!--end media-body-->
                                    </div><!--end media--> 
                                    <div class="progress mt-2" style="height:3px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end  card-->
                            <div class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <i data-feather="check-square" class="align-self-center icon-lg icon-dual-pink mr-3"></i>                                     
                                        <div class="media-body align-self-center">
                                            <h3 class="mt-0 mb-1 font-weight-semibold">92</h3>
                                            <p class="mb-0 font-12 text-muted text-uppercase font-weight-semibold-alt">Tickets Completed</p> 
                                        </div><!--end media-body-->
                                    </div><!--end media--> 
                                    <div class="progress mt-2" style="height:3px;">
                                        <div class="progress-bar bg-pink" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div> 
                                </div><!--end card-body-->
                            </div><!--end  card-->
                            <div class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <i data-feather="clock" class="align-self-center icon-lg icon-dual-purple mr-3"></i>                                     
                                        <div class="media-body align-self-center">
                                            <h3 class="mt-0 mb-1 font-weight-semibold">420:30<span class="ml-1 font-12">min</span></h3>
                                            <p class="mb-0 font-12 text-muted text-uppercase font-weight-semibold-alt">Hours Worked</p> 
                                        </div><!--end media-body-->
                                    </div><!--end media--> 
                                    <div class="progress mt-2" style="height:3px;">
                                        <div class="progress-bar bg-purple" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end  card-->
                        </div> <!--end col--> 
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">  
                                    <button class="btn btn-sm btn-gradient-primary float-right mb-2">Create Ticket</button>  
                                    <h4 class="header-title mt-0 mb-3">All Tickets</h4>                                
                                    <div class="table-responsive">
                                        <table id="datatable" class="table">
                                            <thead class="thead-light">
                                            <tr>
                                                <th style="max-width: 95px;">
                                                    <div class="checkbox checkbox-single checkbox-primary">
                                                        <input type="checkbox" class="custom-control-input" id="action-checkbox">
                                                        <label class="custom-control-label" for="action-checkbox">&nbsp;</label>
                                                    </div>
                                                </th>
                                                <th>ID</th>
                                                <th>Customers</th>
                                                <th>Subject</th> 
                                                <th>Priority</th>
                                                <th>Status</th>
                                                <th>Respose Time</th>
                                            </tr><!--end tr-->
                                            </thead>
        
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="checkbox checkbox-primary mr-2 float-left">
                                                        <input id="checkbox1" type="checkbox">
                                                        <label for="checkbox1"></label>
                                                    </div>                                                    
                                                </td>                                                
                                                <td>#1236</td>
                                                <td><img src="{{ URL::asset('assets/images/users/user-10.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">
                                                    Donald Gardner</td>
                                                <td>Bug-report simply dummy text of the printing and typesetting</td>
                                                <td>Medium</td>                                                
                                                <td><span class="badge badge-soft-warning p-2">New</span></td> 
                                                <td>14 min</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>
                                                    <div class="checkbox checkbox-primary mr-2 float-left">
                                                        <input id="checkbox2" type="checkbox" checked="">
                                                        <label for="checkbox2"></label>
                                                    </div>                                                    
                                                </td>                                                
                                                <td>#3569</td>
                                                <td><img src="{{ URL::asset('assets/images/users/user-9.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">
                                                    Kevin J. Heal</td>
                                                <td>The application continuous is a long established fact that a reader.</td>
                                                <td class="text-danger">Critical</td>                                                
                                                <td><span class="badge badge-soft-success p-2">Solved</span></td> 
                                                <td>45 min</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>
                                                    <div class="checkbox checkbox-primary mr-2 float-left">
                                                        <input id="checkbox3" type="checkbox">
                                                        <label for="checkbox3"></label>
                                                    </div>                                                    
                                                </td>                                                
                                                <td>#9874</td>
                                                <td><img src="{{ URL::asset('assets/images/users/user-8.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">
                                                    Frank M. Lyons</td>
                                                <td>See how it work start are many variations of passages of Lorem Ipsum available.</td>
                                                <td>Low</td>                                                
                                                <td><span class="badge badge-soft-primary p-2">Open</span></td> 
                                                <td>1 houur</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>
                                                    <div class="checkbox checkbox-primary mr-2 float-left">
                                                        <input id="checkbox4" type="checkbox">
                                                        <label for="checkbox4"></label>
                                                    </div>                                                    
                                                </td>                                                
                                                <td>#5412</td>
                                                <td><img src="{{ URL::asset('assets/images/users/user-7.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">
                                                    Robert C. Golding</td>
                                                <td>I can't upload file first line of Ipsum lorem ipsum dolor sit amet.</td>
                                                <td>Medium</td>                                                
                                                <td><span class="badge badge-soft-warning p-2">New</span></td> 
                                                <td>2 houur</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>
                                                    <div class="checkbox checkbox-primary mr-2 float-left" >
                                                        <input id="checkbox5" type="checkbox" checked="">
                                                        <label for="checkbox5"></label>
                                                    </div>                                                    
                                                </td>                                                
                                                <td>#3258</td>
                                                <td><img src="{{ URL::asset('assets/images/users/user-6.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">
                                                    Hyman M. Cross</td>
                                                <td>How do i upgrade my profile?</td>
                                                <td>Low</td>                                                
                                                <td><span class="badge badge-soft-success p-2">Solved</span></td> 
                                                <td>4 houur</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>
                                                    <div class="checkbox checkbox-primary mr-2 float-left">
                                                        <input id="checkbox6" type="checkbox">
                                                        <label for="checkbox6"></label>
                                                    </div>                                                    
                                                </td>                                                
                                                <td>#6636</td>
                                                <td><img src="{{ URL::asset('assets/images/users/user-5.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">
                                                    Phillip T. Morse</td>
                                                <td>Can i help you in this project?</td>
                                                <td class="text-danger">Critical</td>                                                
                                                <td><span class="badge badge-soft-primary p-2">Opan</span></td> 
                                                <td>4 houur</td>
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
        
        <script src="{{ URL::asset('assets/pages-material/jquery.tickets.init.js')}}"></script>
@stop