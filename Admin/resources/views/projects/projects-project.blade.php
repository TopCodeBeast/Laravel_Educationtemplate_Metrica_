@extends('layouts.project-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
   <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                             @component('common-components.breadcrumb')
                                 @slot('title')  Projects @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Project @endslot
                                 @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h5 class="mt-0">Here the list of all continu projects. <span class="badge badge-pink">6</span></h5>
                                </li>
                            </ul>
                        </div><!--end col-->

                        <div class="col-lg-6 text-right">
                            <div class="text-right">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <div class="input-group">                               
                                            <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Search">
                                            <span class="input-group-append">
                                                <button type="button" class="btn btn-gradient-primary"><i class="fas fa-search"></i></button>
                                            </span>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <button type="button" class="btn btn-gradient-primary"><i class="fas fa-cog"></i></button>
                                    </li>
                                    <li class="list-inline-item">
                                        <button type="button" class="btn btn-gradient-primary">Add New Project</button>
                                    </li>
                                </ul>
                            </div>                            
                        </div><!--end col-->
                    </div><!--end row-->
                    
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">                                        
                                    <div class=" d-flex justify-content-end">                                        
                                        <div class="dropdown d-inline-block">
                                            <a class="nav-link dropdown-toggle arrow-none" id="dLabel1" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel1">
                                                <a class="dropdown-item" href="#">Create Project</a> 
                                                <a class="dropdown-item" href="#">Open Project</a> 
                                                <a class="dropdown-item" href="#">Tasks Details</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="text-center project-card">
                                        <img src="{{ URL::asset('assets/images/widgets/p-1.svg')}}" alt="" height="80" class="mx-auto d-block mb-3"> 
                                        <span class="badge badge-soft-success font-11">Marketing</span>
                                        <h3 class="project-title ">Marketech World</h3>
                                        <p class="text-muted"><span class="text-secondary font-14"><b>Description :</b></span>There are many variations of passages of 
                                            Lorem Ipsum available, but the majority have suffered alteration in some form.
                                        </p>
                                        <a href="" class="text-info">www.xyz.marketechworld.com</a>
                                        <h4>52/90</h4>
                                        <p class="text-muted">Task Complete</p>
                                        <div class="img-group">
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
        
                                        </div><!--end img-group-->        
                                    </div>                                                                      
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">                                        
                                    <div class=" d-flex justify-content-end">                                        
                                        <div class="dropdown d-inline-block">
                                            <a class="nav-link dropdown-toggle arrow-none" id="dLabel2" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel2">
                                                <a class="dropdown-item" href="#">Create Project</a> 
                                                <a class="dropdown-item" href="#">Open Project</a> 
                                                <a class="dropdown-item" href="#">Tasks Details</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="text-center project-card">
                                        <img src="{{ URL::asset('assets/images/widgets/p-4.svg')}}" alt="" height="80" class="mx-auto d-block mb-3"> 
                                        <span class="badge badge-soft-danger font-11">Transactions</span>
                                        <h3 class="project-title ">Transfer money</h3>
                                        <p class="text-muted"><span class="text-secondary font-14"><b>Description :</b></span>There are many variations of passages of 
                                            Lorem Ipsum available, but the majority have suffered alteration in some form.
                                        </p>
                                        <a href="" class="text-info">www.xyz.transactions.com</a>
                                        <h4>88/120</h4>
                                        <p class="text-muted">Task Complete</p>
                                        <div class="img-group">
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/user-8.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/user-9.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/user-10.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/user-2.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a href="" class="avatar-box thumb-xs align-self-center">
                                                <span class="avatar-title bg-soft-info rounded-circle font-13 font-weight-normal">+10</span>
                                            </a>
        
                                        </div><!--end img-group-->        
                                    </div>                                                                      
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->                        

                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">                                        
                                    <div class=" d-flex justify-content-end">                                        
                                        <div class="dropdown d-inline-block">
                                            <a class="nav-link dropdown-toggle arrow-none" id="dLabel3" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel3">
                                                <a class="dropdown-item" href="#">Create Project</a> 
                                                <a class="dropdown-item" href="#">Open Project</a> 
                                                <a class="dropdown-item" href="#">Tasks Details</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="text-center project-card">
                                        <img src="{{ URL::asset('assets/images/widgets/p-3.svg')}}" alt="" height="80" class="mx-auto d-block mb-3"> 
                                        <span class="badge badge-soft-purple font-11">Organic</span>
                                        <h3 class="project-title ">Organic Farming</h3>
                                        <p class="text-muted"><span class="text-secondary font-14"><b>Description :</b></span>There are many variations of passages of 
                                            Lorem Ipsum available, but the majority have suffered alteration in some form.
                                        </p>
                                        <a href="" class="text-info">www.marketechworld.com</a>
                                        <h4>52/90</h4>
                                        <p class="text-muted">Task Complete</p>
                                        <div class="img-group">
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/user-4.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/user-3.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/user-1.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/user-2.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a href="" class="avatar-box thumb-xs align-self-center">
                                                <span class="avatar-title bg-soft-info rounded-circle font-13 font-weight-normal">+5</span>
                                            </a>
        
                                        </div><!--end img-group-->        
                                    </div>                                                                      
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">                                        
                                    <div class=" d-flex justify-content-end">                                        
                                        <div class="dropdown d-inline-block">
                                            <a class="nav-link dropdown-toggle arrow-none" id="dLabel4" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel4">
                                                <a class="dropdown-item" href="#">Create Project</a> 
                                                <a class="dropdown-item" href="#">Open Project</a> 
                                                <a class="dropdown-item" href="#">Tasks Details</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="text-center project-card">
                                        <img src="{{ URL::asset('assets/images/widgets/p-2.svg')}}" alt="" height="80" class="mx-auto d-block mb-3"> 
                                        <span class="badge badge-soft-info font-11">Booking</span>
                                        <h3 class="project-title ">Book My World</h3>
                                        <p class="text-muted"><span class="text-secondary font-14"><b>Description :</b></span>There are many variations of passages of 
                                            Lorem Ipsum available, but the majority have suffered alteration in some form.
                                        </p>
                                        <a href="" class="text-info">www.xyz.bookmyworld.com</a>
                                        <h4>32/60</h4>
                                        <p class="text-muted">Task Complete</p>
                                        <div class="img-group">
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/user-3.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/user-4.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/user-6.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/user-7.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a href="" class="avatar-box thumb-xs align-self-center">
                                                <span class="avatar-title bg-soft-info rounded-circle font-13 font-weight-normal">+8</span>
                                            </a>
        
                                        </div><!--end img-group-->        
                                    </div>                                                                      
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->


                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">                                        
                                    <div class=" d-flex justify-content-end">                                        
                                        <div class="dropdown d-inline-block">
                                            <a class="nav-link dropdown-toggle arrow-none" id="dLabel5" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel5">
                                                <a class="dropdown-item" href="#">Create Project</a> 
                                                <a class="dropdown-item" href="#">Open Project</a> 
                                                <a class="dropdown-item" href="#">Tasks Details</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="text-center project-card">
                                        <img src="{{ URL::asset('assets/images/widgets/p-5.svg')}}" alt="" height="80" class="mx-auto d-block mb-3"> 
                                        <span class="badge badge-soft-success font-11">GPS</span>
                                        <h3 class="project-title ">New GPS System</h3>
                                        <p class="text-muted"><span class="text-secondary font-14"><b>Description :</b></span>There are many variations of passages of 
                                            Lorem Ipsum available, but the majority have suffered alteration in some form.
                                        </p>
                                        <a href="" class="text-info">www.xyz.gpssystem.com</a>
                                        <h4>52/90</h4>
                                        <p class="text-muted">Task Complete</p>
                                        <div class="img-group">
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/user-10.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/user-8.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/user-6.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/user-4.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a href="" class="avatar-box thumb-xs align-self-center">
                                                <span class="avatar-title bg-soft-info rounded-circle font-13 font-weight-normal">+14</span>
                                            </a>
        
                                        </div><!--end img-group-->        
                                    </div>                                                                      
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">                                        
                                    <div class=" d-flex justify-content-end">                                        
                                        <div class="dropdown d-inline-block">
                                            <a class="nav-link dropdown-toggle arrow-none" id="dLabel6" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel6">
                                                <a class="dropdown-item" href="#">Create Project</a> 
                                                <a class="dropdown-item" href="#">Open Project</a> 
                                                <a class="dropdown-item" href="#">Tasks Details</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="text-center project-card">
                                        <img src="{{ URL::asset('assets/images/widgets/p-6.svg')}}" alt="" height="80" class="mx-auto d-block mb-3"> 
                                        <span class="badge badge-soft-danger font-11">Healthy</span>
                                        <h3 class="project-title ">Body Care</h3>
                                        <p class="text-muted"><span class="text-secondary font-14"><b>Description :</b></span>There are many variations of passages of 
                                            Lorem Ipsum available, but the majority have suffered alteration in some form.
                                        </p>
                                        <a href="" class="text-info">www.xyz.bodycare.com</a>
                                        <h4>26/36</h4>
                                        <p class="text-muted">Task Complete</p>
                                        <div class="img-group">
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/user-3.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/user-5.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/user-7.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/user-9.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a href="" class="avatar-box thumb-xs align-self-center">
                                                <span class="avatar-title bg-soft-info rounded-circle font-13 font-weight-normal">+4</span>
                                            </a>
        
                                        </div><!--end img-group-->        
                                    </div>                                                                      
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col--> 
                    </div><!--end row-->

                </div><!-- container -->

@stop
