@extends('layouts.crm-master')

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
                                 @slot('title') Leads @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') CRM @endslot
                              @endcomponent


                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body profile-card">                                    
                                    <div class="media align-items-center">                                                
                                        <img src="{{ URL::asset('assets/images/users/user-4.jpg')}}" alt="user" class="rounded-circle thumb-lg">                                        
                                        <div class="media-body ml-3 align-self-center">
                                            <h5 class="pro-title">Merri Diamond</h5>
                                            <p class="mb-1 text-muted">Lead Manager</p>                                              
                                        </div>
                                        <div class="action-btn">
                                            <button class="mr-1 btn btn-sm btn-info"><i class="fas fa-pen"></i></button>
                                            <button class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>  
                                        </div>                                                                              
                                    </div>                                    
                                </div><!--end card-body--> 
                            </div><!--end card-->  
                        </div><!-- end col-->
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4 align-self-center">
                                                    <div class="icon-info">
                                                        <i data-feather="users" class="align-self-center icon-lg icon-dual-warning"></i>
                                                    </div> 
                                                </div>
                                                <div class="col-8 align-self-center text-right">
                                                    <div class="ml-2">
                                                        <p class="mb-1 text-muted">Total Leads</p>
                                                        <h4 class="mt-0 mb-1 text-warning font-22">1935</h4>                                                                                                                                           
                                                    </div>
                                                </div>                    
                                            </div>
                                            <div class="progress mt-2" style="height:3px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->
        
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4 align-self-center">
                                                    <div class="icon-info">
                                                        <i data-feather="book-open" class="align-self-center icon-lg icon-dual-purple"></i>
                                                    </div> 
                                                </div>
                                                <div class="col-8 align-self-center text-right">
                                                    <div class="ml-2">
                                                        <div class="ml-2">
                                                            <p class="mb-0 text-muted">Open</p>
                                                            <h4 class="mt-0 mb-1 d-inline-block text-purple font-22">1240</h4>
                                                            <span class="badge badge-soft-success mt-1 shadow-none">Active</span>                                                                                                                                     
                                                        </div>                                                                                                                                        
                                                    </div>
                                                </div>                    
                                            </div>
                                            <div class="progress mt-2" style="height:3px;">
                                                <div class="progress-bar bg-purple" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->
        
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4 align-self-center">
                                                    <div class="icon-info">
                                                        <i data-feather="book" class="align-self-center icon-lg icon-dual-pink"></i>
                                                    </div> 
                                                </div>
                                                <div class="col-8 align-self-center text-right">
                                                    <div class="ml-2">
                                                        <p class="mb-0 text-muted">Close</p>
                                                        <h4 class="mt-0 mb-1 d-inline-block text-pink font-22">240</h4>                                                                                                                                   
                                                    </div>
                                                </div>                    
                                            </div>
                                            <div class="progress mt-2" style="height:3px;">
                                                    <div class="progress-bar bg-pink" role="progressbar" style="width: 48%;" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->
                            </div><!--end row-->                            
                        </div><!--end col-->
                        
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <button type="button" class="btn btn-gradient-primary waves-effect waves-light float-right mb-3" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">+ Add New</button>
                                    <h4 class="header-title mt-0 mb-3">All Leads</h4> 
                                    <div class="table-responsive dash-social">
                                        <table id="datatable" class="table">
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
                    </div><!--end row-->  

                </div><!-- container -->
@stop

@section('footerScript')
<script src="{{ URL::asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ URL::asset('plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ URL::asset('assets/pages/jquery.crm_leads.init.js')}}"></script>
@stop