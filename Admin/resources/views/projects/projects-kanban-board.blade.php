@extends('layouts.project-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('headerStyle')
<link href="{{ URL::asset('plugins/dragula/dragula.min.css')}}" rel="stylesheet" type="text/css" />
@stop

@section('content')
    <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                           
                              @component('common-components.breadcrumb')
                                 @slot('title')  Kanban Board @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Project @endslot
                                 @endcomponent


                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="bg-light p-4">
                                                <div class="dropdown d-inline-block float-right mt-n2">
                                                    <a class="nav-link dropdown-toggle arrow-none" id="drop1" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v font-18 text-muted"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="drop1">
                                                        <a class="dropdown-item" href="#">Create Project</a>
                                                        <a class="dropdown-item" href="#">Open Project</a>
                                                        <a class="dropdown-item" href="#">Tasks Details</a>
                                                    </div>
                                                </div>
                                                <h4 class="header-title pb-1 mb-3 mt-0">To Do</h4>
                                                <div id="project-list-left" class="pb-1">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="dropdown d-inline-block float-right">
                                                                <a class="nav-link dropdown-toggle mr-n2 mt-n2" id="drop2" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="drop2">
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div><!--end dropdown-->
                                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-18 text-warning"></i>
                                                            <h5 class="my-1">Mobile Account Setting</h5>
                                                            <p class="text-muted mb-2">Mobile App</p>
                                                            <div class="row justify-content-center">
                                                                <div class="col-6 align-self-center">
                                                                    <ul class="list-inline mb-0">                                                                    
                                                                        <li class="list-item d-inline-block mr-2">
                                                                            <a class="" href="#">
                                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-item d-inline-block">
                                                                            <a class="" href="#">
                                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                                <span class="text-muted font-weight-bold">3</span>
                                                                            </a>                                                                               
                                                                        </li>
                                                                    </ul>
                                                                </div><!--end col-->
                                                                <div class="col-6 align-self-center">
                                                                    <a class="float-right" href="#">
                                                                        <img src="{{ URL::asset('assets/images/users/user-1.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                                                    </a>
                                                                    <a class="float-right" href="#">
                                                                        <img src="{{ URL::asset('assets/images/users/user-9.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                                                    </a>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->

                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="dropdown d-inline-block float-right">
                                                                <a class="nav-link dropdown-toggle mr-n2 mt-n2" id="drop3" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="drop3">
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div><!--end dropdown-->
                                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-18 text-success"></i>
                                                            <h5 class="my-1">Mobile Account Setting</h5>
                                                            <p class="text-muted mb-2">Mobile App</p>
                                                            <div class="row justify-content-center">
                                                                <div class="col-6 align-self-center">
                                                                    <ul class="list-inline mb-0">                                                                    
                                                                        <li class="list-item d-inline-block mr-2">
                                                                            <a class="" href="#">
                                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-item d-inline-block">
                                                                            <a class="" href="#">
                                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                                <span class="text-muted font-weight-bold">3</span>
                                                                            </a>                                                                               
                                                                        </li>
                                                                    </ul>
                                                                </div><!--end col-->
                                                                <div class="col-6 align-self-center">
                                                                    <a class="float-right" href="#">
                                                                        <img src="{{ URL::asset('assets/images/users/user-2.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                                                    </a>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->

                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="dropdown d-inline-block float-right">
                                                                <a class="nav-link dropdown-toggle mr-n2 mt-n2" id="drop4" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="drop4">
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div><!--end dropdown-->
                                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-18 text-danger"></i>
                                                            <h5 class="my-1">Mobile Account Setting</h5>
                                                            <p class="text-muted mb-2">Mobile App</p>
                                                            <div class="row justify-content-center">
                                                                <div class="col-6 align-self-center">
                                                                    <ul class="list-inline mb-0">                                                                    
                                                                        <li class="list-item d-inline-block mr-2">
                                                                            <a class="" href="#">
                                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-item d-inline-block">
                                                                            <a class="" href="#">
                                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                                <span class="text-muted font-weight-bold">3</span>
                                                                            </a>                                                                               
                                                                        </li>
                                                                    </ul>
                                                                </div><!--end col-->
                                                                <div class="col-6 align-self-center">
                                                                    <a class="float-right" href="#">
                                                                        <img src="{{ URL::asset('assets/images/users/user-3.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                                                    </a>
                                                                    <a class="float-right" href="#">
                                                                        <img src="{{ URL::asset('assets/images/users/user-1.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                                                    </a>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="dropdown d-inline-block float-right">
                                                                <a class="nav-link dropdown-toggle mr-n2 mt-n2" id="drop5" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="drop5">
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div><!--end dropdown-->
                                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-18 text-purple"></i>
                                                            <h5 class="my-1">Mobile Account Setting</h5>
                                                            <p class="text-muted mb-2">Mobile App</p>
                                                            <div class="row justify-content-center">
                                                                <div class="col-6 align-self-center">
                                                                    <ul class="list-inline mb-0">                                                                    
                                                                        <li class="list-item d-inline-block mr-2">
                                                                            <a class="" href="#">
                                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-item d-inline-block">
                                                                            <a class="" href="#">
                                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                                <span class="text-muted font-weight-bold">3</span>
                                                                            </a>                                                                               
                                                                        </li>
                                                                    </ul>
                                                                </div><!--end col-->
                                                                <div class="col-6 align-self-center">
                                                                    <a class="float-right" href="#">
                                                                        <img src="{{ URL::asset('assets/images/users/user-4.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                                                    </a>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="dropdown d-inline-block float-right">
                                                                <a class="nav-link dropdown-toggle mr-n2 mt-n2" id="drop6" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="drop6">
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div><!--end dropdown-->
                                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-18 text-success"></i>
                                                            <h5 class="my-1">Mobile Account Setting</h5>
                                                            <p class="text-muted mb-2">Mobile App</p>
                                                            <div class="row justify-content-center">
                                                                <div class="col-6 align-self-center">
                                                                    <ul class="list-inline mb-0">                                                                    
                                                                        <li class="list-item d-inline-block mr-2">
                                                                            <a class="" href="#">
                                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-item d-inline-block">
                                                                            <a class="" href="#">
                                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                                <span class="text-muted font-weight-bold">3</span>
                                                                            </a>                                                                               
                                                                        </li>
                                                                    </ul>
                                                                </div><!--end col-->
                                                                <div class="col-6 align-self-center">
                                                                    <a class="float-right" href="#">
                                                                        <img src="{{ URL::asset('assets/images/users/user-8.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                                                    </a>
                                                                    <a class="float-right" href="#">
                                                                        <img src="{{ URL::asset('assets/images/users/user-2.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                                                    </a>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                </div><!--end project-list-left-->
                                                <button type="button" class="btn btn-block btn-gradient-primary">Add Task</button>
                                            </div><!--end /div-->
                                        </div><!--end col-->

                                        <div class="col-md-3">
                                            <div class="bg-light p-4">
                                                <div class="dropdown d-inline-block float-right mt-n2">
                                                    <a class="nav-link dropdown-toggle arrow-none" id="drop7" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v font-18 text-muted"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="drop7">
                                                        <a class="dropdown-item" href="#">Create Project</a>
                                                        <a class="dropdown-item" href="#">Open Project</a>
                                                        <a class="dropdown-item" href="#">Tasks Details</a>
                                                    </div>
                                                </div>
                                                <h4 class="header-title pb-1 mb-3 mt-0">In Progress</h4>
                                                <div id="project-list-center-left" class="pb-1">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="dropdown d-inline-block float-right">
                                                                <a class="nav-link dropdown-toggle mr-n2 mt-n2" id="drop08" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="drop08">
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div><!--end dropdown-->
                                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-18 text-warning"></i>
                                                            <h5 class="my-1">Mobile Account Setting</h5>
                                                            <p class="text-muted mb-2">Mobile App</p>
                                                            <div class="row justify-content-center">
                                                                <div class="col-6 align-self-center">
                                                                    <ul class="list-inline mb-0">                                                                    
                                                                        <li class="list-item d-inline-block mr-2">
                                                                            <a class="" href="#">
                                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-item d-inline-block">
                                                                            <a class="" href="#">
                                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                                <span class="text-muted font-weight-bold">3</span>
                                                                            </a>                                                                               
                                                                        </li>
                                                                    </ul>
                                                                </div><!--end col-->
                                                                <div class="col-6 align-self-center">
                                                                    <a class="float-right" href="#">
                                                                        <img src="{{ URL::asset('assets/images/users/user-1.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                                                    </a>
                                                                    <a class="float-right" href="#">
                                                                        <img src="{{ URL::asset('assets/images/users/user-9.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                                                    </a>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->

                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="dropdown d-inline-block float-right">
                                                                <a class="nav-link dropdown-toggle mr-n2 mt-n2" id="drop9" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="drop9">
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div><!--end dropdown-->
                                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-18 text-success"></i>
                                                            <h5 class="my-1">Mobile Account Setting</h5>
                                                            <p class="text-muted mb-2">Mobile App</p>
                                                            <div class="row justify-content-center">
                                                                <div class="col-6 align-self-center">
                                                                    <ul class="list-inline mb-0">                                                                    
                                                                        <li class="list-item d-inline-block mr-2">
                                                                            <a class="" href="#">
                                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-item d-inline-block">
                                                                            <a class="" href="#">
                                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                                <span class="text-muted font-weight-bold">3</span>
                                                                            </a>                                                                               
                                                                        </li>
                                                                    </ul>
                                                                </div><!--end col-->
                                                                <div class="col-6 align-self-center">
                                                                    <a class="float-right" href="#">
                                                                        <img src="{{ URL::asset('assets/images/users/user-2.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                                                    </a>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->

                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="dropdown d-inline-block float-right">
                                                                <a class="nav-link dropdown-toggle mr-n2 mt-n2" id="drop10" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="drop10">
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div><!--end dropdown-->
                                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-18 text-danger"></i>
                                                            <h5 class="my-1">Mobile Account Setting</h5>
                                                            <p class="text-muted mb-2">Mobile App</p>
                                                            <div class="row justify-content-center">
                                                                <div class="col-6 align-self-center">
                                                                    <ul class="list-inline mb-0">                                                                    
                                                                        <li class="list-item d-inline-block mr-2">
                                                                            <a class="" href="#">
                                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-item d-inline-block">
                                                                            <a class="" href="#">
                                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                                <span class="text-muted font-weight-bold">3</span>
                                                                            </a>                                                                               
                                                                        </li>
                                                                    </ul>
                                                                </div><!--end col-->
                                                                <div class="col-6 align-self-center">
                                                                    <a class="float-right" href="#">
                                                                        <img src="{{ URL::asset('assets/images/users/user-3.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                                                    </a>
                                                                    <a class="float-right" href="#">
                                                                        <img src="{{ URL::asset('assets/images/users/user-1.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                                                    </a>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="dropdown d-inline-block float-right">
                                                                <a class="nav-link dropdown-toggle mr-n2 mt-n2" id="drop11" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="drop11">
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div><!--end dropdown-->
                                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-18 text-purple"></i>
                                                            <h5 class="my-1">Mobile Account Setting</h5>
                                                            <p class="text-muted mb-2">Mobile App</p>
                                                            <div class="row justify-content-center">
                                                                <div class="col-6 align-self-center">
                                                                    <ul class="list-inline mb-0">                                                                    
                                                                        <li class="list-item d-inline-block mr-2">
                                                                            <a class="" href="#">
                                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-item d-inline-block">
                                                                            <a class="" href="#">
                                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                                <span class="text-muted font-weight-bold">3</span>
                                                                            </a>                                                                               
                                                                        </li>
                                                                    </ul>
                                                                </div><!--end col-->
                                                                <div class="col-6 align-self-center">
                                                                    <a class="float-right" href="#">
                                                                        <img src="{{ URL::asset('assets/images/users/user-4.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                                                    </a>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                </div><!--end project-list-left-->
                                                <button type="button" class="btn btn-block  btn-gradient-primary">Add Task</button>
                                            </div><!--end /div-->
                                        </div><!--end col-->
                                        
                                        <div class="col-md-3">
                                            <div class="bg-light p-4">
                                                <div class="dropdown d-inline-block float-right mt-n2">
                                                    <a class="nav-link dropdown-toggle arrow-none" id="drop12" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v font-18 text-muted"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="drop12">
                                                        <a class="dropdown-item" href="#">Create Project</a>
                                                        <a class="dropdown-item" href="#">Open Project</a>
                                                        <a class="dropdown-item" href="#">Tasks Details</a>
                                                    </div>
                                                </div>

                                                <h4 class="header-title pb-1 mb-3 mt-0">Code Review</h4>

                                                <div id="project-list-center-right" class="pb-1">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="dropdown d-inline-block float-right">
                                                                <a class="nav-link dropdown-toggle mr-n2 mt-n2" id="drop13" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="drop13">
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div><!--end dropdown-->
                                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-18 text-warning"></i>
                                                            <h5 class="my-1">Mobile Account Setting</h5>
                                                            <p class="text-muted mb-2">Mobile App</p>
                                                            <div class="row justify-content-center">
                                                                <div class="col-6 align-self-center">
                                                                    <ul class="list-inline mb-0">                                                                    
                                                                        <li class="list-item d-inline-block mr-2">
                                                                            <a class="" href="#">
                                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-item d-inline-block">
                                                                            <a class="" href="#">
                                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                                <span class="text-muted font-weight-bold">3</span>
                                                                            </a>                                                                               
                                                                        </li>
                                                                    </ul>
                                                                </div><!--end col-->
                                                                <div class="col-6 align-self-center">
                                                                    <a class="float-right" href="#">
                                                                        <img src="{{ URL::asset('assets/images/users/user-5.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                                                    </a>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->

                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="dropdown d-inline-block float-right">
                                                                <a class="nav-link dropdown-toggle mr-n2 mt-n2" id="drop14" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="drop14">
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div><!--end dropdown-->
                                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-18 text-purple"></i>
                                                            <h5 class="my-1">Mobile Account Setting</h5>
                                                            <p class="text-muted mb-2">Mobile App</p>
                                                            <div class="row justify-content-center">
                                                                <div class="col-6 align-self-center">
                                                                    <ul class="list-inline mb-0">                                                                    
                                                                        <li class="list-item d-inline-block mr-2">
                                                                            <a class="" href="#">
                                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-item d-inline-block">
                                                                            <a class="" href="#">
                                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                                <span class="text-muted font-weight-bold">3</span>
                                                                            </a>                                                                               
                                                                        </li>
                                                                    </ul>
                                                                </div><!--end col-->
                                                                <div class="col-6 align-self-center">
                                                                    <a class="float-right" href="#">
                                                                        <img src="{{ URL::asset('assets/images/users/user-6.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                                                    </a>
                                                                    <a class="float-right" href="#">
                                                                        <img src="{{ URL::asset('assets/images/users/user-9.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                                                    </a>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->

                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="dropdown d-inline-block float-right">
                                                                <a class="nav-link dropdown-toggle mr-n2 mt-n2" id="drop15" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="drop15">
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div><!--end dropdown-->
                                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-18 text-danger"></i>
                                                            <h5 class="my-1">Mobile Account Setting</h5>
                                                            <p class="text-muted mb-2">Mobile App</p>
                                                            <div class="row justify-content-center">
                                                                <div class="col-6 align-self-center">
                                                                    <ul class="list-inline mb-0">                                                                    
                                                                        <li class="list-item d-inline-block mr-2">
                                                                            <a class="" href="#">
                                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-item d-inline-block">
                                                                            <a class="" href="#">
                                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                                <span class="text-muted font-weight-bold">3</span>
                                                                            </a>                                                                               
                                                                        </li>
                                                                    </ul>
                                                                </div><!--end col-->
                                                                <div class="col-6 align-self-center">
                                                                    <a class="float-right" href="#">
                                                                        <img src="{{ URL::asset('assets/images/users/user-7.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                                                    </a>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->                                                    
                                                </div><!--end project-list-right-->
                                                <button type="button" class="btn btn-block  btn-gradient-primary">Add Task</button>
                                            </div><!--end /div-->
                                        </div><!--end col-->

                                        <div class="col-md-3">
                                            <div class="bg-light p-4">
                                                <div class="dropdown d-inline-block float-right mt-n2">
                                                    <a class="nav-link dropdown-toggle arrow-none" id="drop16" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v font-18 text-muted"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="drop16">
                                                        <a class="dropdown-item" href="#">Create Project</a>
                                                        <a class="dropdown-item" href="#">Open Project</a>
                                                        <a class="dropdown-item" href="#">Tasks Details</a>
                                                    </div>
                                                </div>

                                                <h4 class="header-title pb-1 mb-3 mt-0">Done</h4>

                                                <div id="project-list-right" class="pb-1">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="dropdown d-inline-block float-right">
                                                                <a class="nav-link dropdown-toggle mr-n2 mt-n2" id="drop17" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="drop17">
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div><!--end dropdown-->
                                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-18 text-warning"></i>
                                                            <h5 class="my-1">Mobile Account Setting</h5>
                                                            <p class="text-muted mb-2">Mobile App</p>
                                                            <div class="row justify-content-center">
                                                                <div class="col-6 align-self-center">
                                                                    <ul class="list-inline mb-0">                                                                    
                                                                        <li class="list-item d-inline-block mr-2">
                                                                            <a class="" href="#">
                                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-item d-inline-block">
                                                                            <a class="" href="#">
                                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                                <span class="text-muted font-weight-bold">3</span>
                                                                            </a>                                                                               
                                                                        </li>
                                                                    </ul>
                                                                </div><!--end col-->
                                                                <div class="col-6 align-self-center">
                                                                    <a class="float-right" href="#">
                                                                        <img src="{{ URL::asset('assets/images/users/user-5.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                                                    </a>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->

                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="dropdown d-inline-block float-right">
                                                                <a class="nav-link dropdown-toggle mr-n2 mt-n2" id="drop18" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="drop18">
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div><!--end dropdown-->
                                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-18 text-purple"></i>
                                                            <h5 class="my-1">Mobile Account Setting</h5>
                                                            <p class="text-muted mb-2">Mobile App</p>
                                                            <div class="row justify-content-center">
                                                                <div class="col-6 align-self-center">
                                                                    <ul class="list-inline mb-0">                                                                    
                                                                        <li class="list-item d-inline-block mr-2">
                                                                            <a class="" href="#">
                                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-item d-inline-block">
                                                                            <a class="" href="#">
                                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                                <span class="text-muted font-weight-bold">3</span>
                                                                            </a>                                                                               
                                                                        </li>
                                                                    </ul>
                                                                </div><!--end col-->
                                                                <div class="col-6 align-self-center">
                                                                    <a class="float-right" href="#">
                                                                        <img src="{{ URL::asset('assets/images/users/user-6.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                                                    </a>
                                                                    <a class="float-right" href="#">
                                                                        <img src="{{ URL::asset('assets/images/users/user-9.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                                                    </a>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->

                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="dropdown d-inline-block float-right">
                                                                <a class="nav-link dropdown-toggle mr-n2 mt-n2" id="drop19" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="drop19">
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div><!--end dropdown-->
                                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-18 text-danger"></i>
                                                            <h5 class="my-1">Mobile Account Setting</h5>
                                                            <p class="text-muted mb-2">Mobile App</p>
                                                            <div class="row justify-content-center">
                                                                <div class="col-6 align-self-center">
                                                                    <ul class="list-inline mb-0">                                                                    
                                                                        <li class="list-item d-inline-block mr-2">
                                                                            <a class="" href="#">
                                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-item d-inline-block">
                                                                            <a class="" href="#">
                                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                                <span class="text-muted font-weight-bold">3</span>
                                                                            </a>                                                                               
                                                                        </li>
                                                                    </ul>
                                                                </div><!--end col-->
                                                                <div class="col-6 align-self-center">
                                                                    <a class="float-right" href="#">
                                                                        <img src="{{ URL::asset('assets/images/users/user-7.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                                                    </a>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="dropdown d-inline-block float-right">
                                                                <a class="nav-link dropdown-toggle mr-n2 mt-n2" id="drop20" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="drop20">
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div><!--end dropdown-->
                                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-18 text-success"></i>
                                                            <h5 class="my-1">Mobile Account Setting</h5>
                                                            <p class="text-muted mb-2">Mobile App</p>
                                                            <div class="row justify-content-center">
                                                                <div class="col-6 align-self-center">
                                                                    <ul class="list-inline mb-0">                                                                    
                                                                        <li class="list-item d-inline-block mr-2">
                                                                            <a class="" href="#">
                                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-item d-inline-block">
                                                                            <a class="" href="#">
                                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                                <span class="text-muted font-weight-bold">3</span>
                                                                            </a>                                                                               
                                                                        </li>
                                                                    </ul>
                                                                </div><!--end col-->
                                                                <div class="col-6 align-self-center">
                                                                    <a class="float-right" href="#">
                                                                        <img src="{{ URL::asset('assets/images/users/user-8.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                                                    </a>
                                                                    <a class="float-right" href="#">
                                                                        <img src="{{ URL::asset('assets/images/users/user-2.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                                                    </a>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                </div><!--end project-list-right-->
                                                <button type="button" class="btn btn-block  btn-gradient-primary">Add Task</button>
                                            </div><!--end /div-->
                                        </div><!--end col-->
                                    </div><!--end row-->                                
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!-- container -->
@stop

@section('footerScript')
        <script src="{{ URL::asset('plugins/dragula/dragula.min.js')}}"></script>
        <script src="{{ URL::asset('assets/pages/jquery.dragula.init.js')}}"></script>
@stop