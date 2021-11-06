@extends('layouts.project-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
   <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                               @component('common-components.breadcrumb')
                                 @slot('title')  Users @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Project @endslot
                                 @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card profile-card">
                                <div class="card-body p-0">
                                    <div class="media p-3  align-items-center">                                                
                                        <img src="{{ URL::asset('assets/images/users/user-1.jpg')}}" alt="user" class="rounded-circle thumb-xl">                                        
                                        <div class="media-body ml-3 align-self-center">
                                            <h5 class="pro-title">Merri Diamond <span class="badge badge-warning font-10">New</span></h5>
                                            <p class="mb-1 text-muted">@SaraHopkins.com</p> 
                                            <p class="mb-0 text-muted"><i class="mdi mdi-checkbox-blank-circle text-success mr-1"></i>Active</p>                                              
                                        </div>
                                        <div class="action-btn">
                                            <button class="mr-1 btn btn-sm btn-soft-info"><i class="fas fa-pen"></i></button>
                                            <button class="btn btn-sm btn-soft-danger"><i class="far fa-trash-alt"></i></button>  
                                        </div>                                                                              
                                    </div>                                    
                                </div><!--end card-body-->                 
                            </div><!--end card--> 
                        </div><!--end col-->
                        <div class="col-lg-4">
                            <div class="card profile-card">
                                <div class="card-body p-0">
                                    <div class="media p-3  align-items-center">                                                
                                        <img src="{{ URL::asset('assets/images/users/user-5.jpg')}}" alt="user" class="rounded-circle thumb-xl">                                        
                                        <div class="media-body ml-3 align-self-center">
                                            <h5 class="pro-title">Paul Schmidt <span class="badge badge-secondary font-10">New</span></h5>
                                            <p class="mb-1 text-muted">@SaraHopkins.com</p> 
                                            <p class="mb-0 text-muted"><i class="mdi mdi-checkbox-blank-circle text-success mr-1"></i>Active</p>                                               
                                        </div>
                                        <div class="action-btn">
                                            <button class="mr-1 btn btn-sm btn-soft-info"><i class="fas fa-pen"></i></button>
                                            <button class="btn btn-sm btn-soft-danger"><i class="far fa-trash-alt"></i></button>  
                                        </div>                                                                              
                                    </div>                                    
                                </div><!--end card-body-->                 
                            </div><!--end card--> 
                        </div><!--end col-->
                        <div class="col-lg-4">
                            <div class="card profile-card">
                                <div class="card-body p-0">
                                    <div class="media p-3  align-items-center">                                                
                                        <img src="{{ URL::asset('assets/images/users/user-8.jpg')}}" alt="user" class="rounded-circle thumb-xl">                                        
                                        <div class="media-body ml-3 align-self-center">
                                            <h5 class="pro-title">Harry McCall</h5>
                                            <p class="mb-1 text-muted">@SaraHopkins.com</p> 
                                            <p class="mb-0 text-muted"><i class="mdi mdi-checkbox-blank-circle text-danger mr-1"></i>Deactivated</p>
                                        </div>
                                        <div class="action-btn">
                                            <button class="mr-1 btn btn-sm btn-soft-info"><i class="fas fa-pen"></i></button>
                                            <button class="btn btn-sm btn-soft-danger"><i class="far fa-trash-alt"></i></button>  
                                        </div>                                                                              
                                    </div>                                    
                                </div><!--end card-body-->                 
                            </div><!--end card--> 
                        </div><!--end col-->
                    </div><!--end row-->    
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
    
                                    <h4 class="mt-0 mb-3 header-title">Our Reguler Users</h4>
    
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>Users</th>
                                                <th>Rols</th>
                                                <th>Email</th>
                                                <th>Contact No</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><img src="{{ URL::asset('assets/images/users/user-3.jpg')}}" alt="" class="rounded-circle thumb-sm mr-1"> Aaron Poulin</td>
                                                <td>Agent</td>
                                                <td>AaronPoulin@example.com</td>
                                                <td>+21 123456789</td>
                                                <td><span class="badge badge-soft-success">Active</span></td>
                                                <td>                                                       
                                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i>
                                                </a></td>
                                            </tr>
                                            <tr>
                                                <td><img src="{{ URL::asset('assets/images/users/user-4.jpg')}}" alt="" class="rounded-circle thumb-sm mr-1"> Richard Ali</td>
                                                <td>Administrator</td>
                                                <td>RichardAli@example.com</td>
                                                <td>+41 123456789</td>
                                                <td><span class="badge badge-soft-success">Active</span></td>
                                                <td>                                                       
                                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i>
                                                </a></td>
                                            </tr>

                                            <tr>
                                                <td><img src="{{ URL::asset('assets/images/users/user-5.jpg')}}" alt="" class="rounded-circle thumb-sm mr-1"> Juan Clark</td>
                                                <td>Contributor</td>
                                                <td>JuanClark@example.com</td>
                                                <td>+65 123456789</td>
                                                <td><span class="badge badge-soft-success">Active</span></td>
                                                <td>                                                       
                                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i>
                                                </a></td>
                                            </tr>

                                            <tr>
                                                <td><img src="{{ URL::asset('assets/images/users/user-6.jpg')}}" alt="" class="rounded-circle thumb-sm mr-1"> Albert Hull</td>
                                                <td>Agent</td>
                                                <td>AlbertHull@example.com</td>
                                                <td>+88 123456789</td>
                                                <td><span class="badge badge-soft-success">Active</span></td>
                                                <td>                                                       
                                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i>
                                                </a></td>
                                            </tr>

                                            <tr>
                                                <td><img src="{{ URL::asset('assets/images/users/user-7.jpg')}}" alt="" class="rounded-circle thumb-sm mr-1"> Crystal Darling</td>
                                                <td>Contributor</td>
                                                <td>CrystalDarling@example.com</td>
                                                <td>+56 123456789</td>
                                                <td><span class="badge badge-soft-danger">Deactivated</span></td>
                                                <td>                                                       
                                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i>
                                                </a></td>
                                            </tr>

                                            <tr>
                                                <td><img src="{{ URL::asset('assets/images/users/user-8.jpg')}}" alt="" class="rounded-circle thumb-sm mr-1"> Thomas Milligan</td>
                                                <td>Administrator</td>
                                                <td>homasMilligan@example.com</td>
                                                <td>+35 123456789</td>
                                                <td><span class="badge badge-soft-danger">Deactivated</span></td>
                                                <td>                                                       
                                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i>
                                                </a></td>
                                            </tr>
                                            </tbody>
                                        </table><!--end /table-->
                                    </div><!--end /tableresponsive-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div><!--end row-->

                </div><!-- container -->
@stop
