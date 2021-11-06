@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('headerStyle')

@stop

@section('content')
   <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                              @component('common-components.breadcrumb')
                                 @slot('title') Departments @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Hospital @endslot
                              @endcomponent
                           
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h5 class="mt-0">Here the list of all  Departments. <span class="badge badge-pink">6</span></h5>
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
                                        <button type="button" class="btn btn-gradient-primary"><i class="dripicons-gear"></i></button>
                                    </li>
                                    <li class="list-inline-item">
                                        <button type="button" class="btn btn-gradient-primary">Add New Department</button>
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
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="text-center project-card">
                                        <img src="{{ URL::asset('assets/images/widgets/p-1.svg')}}" alt="" height="80" class="mx-auto d-block mb-3"> 
                                        <span class="badge badge-soft-success font-11">Active</span>
                                        <h3 class="project-title ">Dentists</h3>
                                        <p class="text-muted"><span class="text-secondary font-14"><b>Description :</b></span>There are many variations of passages of 
                                            Lorem Ipsum available, but the majority have suffered alteration in some form.
                                        </p>
                                        <h4>3/4</h4>
                                        <p class="text-muted">Today Available</p>
                                        <div class="img-group">
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/dr-6.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/dr-2.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/dr-3.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/dr-4.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a href="" class="avatar-box thumb-xs align-self-center">
                                                <span class="avatar-title bg-soft-info rounded-circle font-13">+2</span>
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
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="text-center project-card">
                                        <img src="{{ URL::asset('assets/images/widgets/p-4.svg')}}" alt="" height="80" class="mx-auto d-block mb-3"> 
                                        <span class="badge badge-soft-success font-11">Active</span>
                                        <h3 class="project-title ">Neurology</h3>
                                        <p class="text-muted"><span class="text-secondary font-14"><b>Description :</b></span>There are many variations of passages of 
                                            Lorem Ipsum available, but the majority have suffered alteration in some form.
                                        </p>
                                        <h4>3/3</h4>
                                        <p class="text-muted">Today Available</p>
                                        <div class="img-group">
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/dr-1.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/dr-6.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/dr-5.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/dr-4.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a href="" class="avatar-box thumb-xs align-self-center">
                                                <span class="avatar-title bg-soft-info rounded-circle font-13">+10</span>
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
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="text-center project-card">
                                        <img src="{{ URL::asset('assets/images/widgets/p-3.svg')}}" alt="" height="80" class="mx-auto d-block mb-3"> 
                                        <span class="badge badge-soft-danger font-11">Inactive</span>
                                        <h3 class="project-title ">Orthopedics</h3>
                                        <p class="text-muted"><span class="text-secondary font-14"><b>Description :</b></span>There are many variations of passages of 
                                            Lorem Ipsum available, but the majority have suffered alteration in some form.
                                        </p>
                                        <h4>3/4</h4>
                                        <p class="text-muted">Today Available</p>
                                        <div class="img-group">
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/dr-4.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/dr-3.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/dr-1.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/dr-2.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a href="" class="avatar-box thumb-xs align-self-center">
                                                <span class="avatar-title bg-soft-info rounded-circle font-13">+5</span>
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
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="text-center project-card">
                                        <img src="{{ URL::asset('assets/images/widgets/p-2.svg')}}" alt="" height="80" class="mx-auto d-block mb-3"> 
                                        <span class="badge badge-soft-success font-11">Active</span>
                                        <h3 class="project-title ">Psychology</h3>
                                        <p class="text-muted"><span class="text-secondary font-14"><b>Description :</b></span>There are many variations of passages of 
                                            Lorem Ipsum available, but the majority have suffered alteration in some form.
                                        </p>
                                        <h4>3/4</h4>
                                        <p class="text-muted">Today Available</p>
                                        <div class="img-group">
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/dr-3.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/dr-4.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/dr-6.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/dr-1.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a href="" class="avatar-box thumb-xs align-self-center">
                                                <span class="avatar-title bg-soft-info rounded-circle font-13">+1</span>
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
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="text-center project-card">
                                        <img src="{{ URL::asset('assets/images/widgets/p-5.svg')}}" alt="" height="80" class="mx-auto d-block mb-3"> 
                                        <span class="badge badge-soft-success font-11">Active</span>
                                        <h3 class="project-title ">Neurology</h3>
                                        <p class="text-muted"><span class="text-secondary font-14"><b>Description :</b></span>There are many variations of passages of 
                                            Lorem Ipsum available, but the majority have suffered alteration in some form.
                                        </p>
                                        <h4>5/5</h4>
                                        <p class="text-muted">Today Available</p>
                                        <div class="img-group">
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/dr-5.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/dr-2.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/dr-6.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/dr-4.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a href="" class="avatar-box thumb-xs align-self-center">
                                                <span class="avatar-title bg-soft-info rounded-circle font-13">+1</span>
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
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="text-center project-card">
                                        <img src="{{ URL::asset('assets/images/widgets/p-6.svg')}}" alt="" height="80" class="mx-auto d-block mb-3"> 
                                        <span class="badge badge-soft-danger font-11">Inactive</span>
                                        <h3 class="project-title ">Cardiology</h3>
                                        <p class="text-muted"><span class="text-secondary font-14"><b>Description :</b></span>There are many variations of passages of 
                                            Lorem Ipsum available, but the majority have suffered alteration in some form.
                                        </p>
                                        <h4>0/3</h4>
                                        <p class="text-muted">Today Available</p>
                                        <div class="img-group">
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/dr-3.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/dr-5.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/dr-6.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/dr-1.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a href="" class="avatar-box thumb-xs align-self-center">
                                                <span class="avatar-title bg-soft-info rounded-circle font-13">+2</span>
                                            </a>
        
                                        </div><!--end img-group-->        
                                    </div>                                                                      
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col--> 
                    </div><!--end row-->

                </div><!-- container -->

@stop
