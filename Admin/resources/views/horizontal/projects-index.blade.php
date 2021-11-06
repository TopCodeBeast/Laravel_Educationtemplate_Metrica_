@extends('layouts.horizontal-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
     <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-right">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Metrica</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Project</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Dashboard</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4 align-self-center">
                                                    <div class="icon-info">
                                                        <i data-feather="layers" class="align-self-center icon-lg icon-dual-warning"></i>
                                                    </div> 
                                                </div>
                                                <div class="col-8 align-self-center text-right">
                                                    <div class="ml-2">
                                                        <p class="mb-1 text-muted">Projects</p>
                                                        <h3 class="mt-0 mb-1 font-weight-semibold">65</h3>                                                                                                                                           
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
                                                        <i data-feather="check-square" class="align-self-center icon-lg icon-dual-success"></i>
                                                    </div> 
                                                </div>
                                                <div class="col-8 align-self-center text-right">
                                                    <div class="ml-2">
                                                        <p class="mb-1 text-muted">Tasks</p>
                                                        <h3 class="mt-0 mb-1 font-weight-semibold d-inline-block">48</h3>
                                                        <span class="badge badge-soft-success mt-1 shadow-none">Active</span>                                                                                                                                     
                                                    </div>
                                                </div>                    
                                            </div>
                                            <div class="progress mt-2" style="height:3px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 48%;" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
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
                                                        <i data-feather="dollar-sign" class="align-self-center icon-lg icon-dual-purple"></i>
                                                    </div> 
                                                </div>
                                                <div class="col-8 align-self-center text-right">
                                                    <div class="ml-2">
                                                        <p class="mb-1 text-muted">Budget</p>
                                                        <h3 class="mt-0 mb-1 font-weight-semibold">$120k</h3>                                                                                                                                           
                                                    </div>
                                                </div>                    
                                            </div>
                                            <div class="progress mt-2" style="height:3px;">
                                                <div class="progress-bar bg-purple" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->
                            </div><!--end row-->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Project Budget</h4>
                                    <div class="apexchart-wrapper">
                                        <div id="budgets_chart" class="apex-charts"></div>
                                    </div>
                                </div><!--end card-body-->                                                                                             
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
    
                                    <!-- Nav tabs -->
                                    <ul class="nav-border nav nav-pills" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link font-weight-semibold" data-toggle="tab" href="#Project1_Tab" role="tab">Project1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active font-weight-semibold" data-toggle="tab" href="#Project2_Tab" role="tab">Project2</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link font-weight-semibold" data-toggle="tab" href="#Project3_Tab" role="tab">Project3</a>
                                        </li>
                                    </ul>
    
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane p-3" id="Project1_Tab" role="tabpanel">  
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="media mb-3">
                                                        <img src="{{ URL::asset('assets/images/widgets/project3.jpg')}}" alt="" class="thumb-lg rounded-circle">                                      
                                                        <div class="media-body align-self-center text-truncate ml-3">                                                            
                                                            <h4 class="mt-0 mb-1 font-weight-semibold text-dark font-18">Payment App</h4>   
                                                            <p class="text-muted  mb-0 font-14"><span class="text-dark">Client : </span>Kevin  J. Heal</p>                                         
                                                        </div><!--end media-body-->
                                                    </div>       
                                                </div><!--end col-->
                                                <div class="col-md-6 text-lg-right">
                                                    <h6 class="font-weight-semibold">Start : <span class="text-muted font-weight-normal"> 02 June 2020</span></h6>
                                                    <h6 class="font-weight-semibold">Deadline : <span class="text-muted font-weight-normal"> 31 Oct 2020</span></h6>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                                                           
                                            <div class="holder mt-3">
                                                <ul class="steppedprogress pt-1">
                                                    <li class="complete"><span>Planing</span></li>
                                                    <li class="complete"><span>Design</span></li>
                                                    <li class="complete continuous"><span>Development</span></li>
                                                    <li class=""><span>Testing</span></li>
                                                </ul>
                                            </div>
                                            <div class="task-box mt-3">
                                                <div class="task-priority-icon"><i class="fas fa-circle text-success"></i></div>                                                
                                                <div class="mt-5 d-flex justify-content-between">
                                                    <h6 class="font-weight-semibold">All Hours : <span class="text-muted font-weight-normal"> 530 / 281:30</span></h6>
                                                    <h6 class="font-weight-semibold">Today : <span class="text-muted font-weight-normal"> 2:45</span><span class="badge badge-soft-pink font-weight-semibold ml-2"><i class="far fa-fw fa-clock"></i> 35 days left</span></h6>
                                                </div>
                                                <p class="text-muted mt-4 mb-1">There are many variations of passages of Lorem Ipsum available, 
                                                    but the majority have suffered alteration in some form.
                                                </p>
                                                <p class="text-muted text-right mb-1">34% Complete</p>
                                                <div class="progress mb-4" style="height: 4px;">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 34%;" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="d-flex justify-content-between">
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
                                                            <span class="avatar-title bg-soft-info rounded-circle font-13 font-weight-normal">+6</span>
                                                        </a>                    
                                                    </div><!--end img-group--> 
                                                    <ul class="list-inline mb-0 align-self-center">                                                                    
                                                        <li class="list-item d-inline-block mr-2">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                                <span class="text-muted font-weight-bold">34/100</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-item d-inline-block">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                                <span class="text-muted font-weight-bold">3</span>
                                                            </a>                                                                               
                                                        </li>
                                                        <li class="list-item d-inline-block">
                                                            <a class="ml-2" href="#">
                                                                <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                                            </a>                                                                               
                                                        </li>
                                                        <li class="list-item d-inline-block">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                                            </a>                                                                               
                                                        </li>
                                                    </ul>
                                                </div>                                        
                                            </div><!--end task-box-->                                           
                                        </div><!--end tab-pane-->

                                        <div class="tab-pane active p-3" id="Project2_Tab" role="tabpanel">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="media mb-3">
                                                        <img src="{{ URL::asset('assets/images/widgets/project2.jpg')}}" alt="" class="thumb-lg rounded-circle">                                      
                                                        <div class="media-body align-self-center text-truncate ml-3">
                                                            
                                                            <h4 class="mt-0 mb-1 font-weight-semibold text-dark font-18">Banking</h4>   
                                                            <p class="text-muted  mb-0 font-14"><span class="text-dark">Client : </span>Hyman M. Cross</p>                                         
                                                        </div><!--end media-body-->
                                                    </div>       
                                                </div><!--end col-->
                                                <div class="col-md-6 text-lg-right">
                                                    <h6 class="font-weight-semibold">Start : <span class="text-muted font-weight-normal"> 15 Nov 2020</span></h6>
                                                    <h6 class="font-weight-semibold">Deadline : <span class="text-muted font-weight-normal"> 28 Fab 2021</span></h6>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                                                           
                                            <div class="holder mt-3">
                                                <ul class="steppedprogress pt-1">
                                                    <li class="complete"><span>Planing</span></li>
                                                    <li class="complete continuous"><span>Design</span></li>
                                                    <li class=""><span>Development</span></li>
                                                    <li class=""><span>Testing</span></li>
                                                </ul>
                                            </div>
                                            <div class="task-box mt-3">
                                                <div class="task-priority-icon"><i class="fas fa-circle text-success"></i></div>                                                
                                                <div class="mt-5 d-flex justify-content-between">
                                                    <h6 class="font-weight-semibold">All Hours : <span class="text-muted font-weight-normal"> 530 / 281:30</span></h6>
                                                    <h6 class="font-weight-semibold">Today : <span class="text-muted font-weight-normal"> 2:45</span><span class="badge badge-soft-pink font-weight-semibold ml-2"><i class="far fa-fw fa-clock"></i> 35 days left</span></h6>
                                                </div>
                                                <p class="text-muted mt-4 mb-1">There are many variations of passages of Lorem Ipsum available, 
                                                    but the majority have suffered alteration in some form.
                                                </p>
                                                <p class="text-muted text-right mb-1">15% Complete</p>
                                                <div class="progress mb-4" style="height: 4px;">
                                                    <div class="progress-bar bg-purple" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="d-flex justify-content-between">
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
                                                            <span class="avatar-title bg-soft-info rounded-circle font-13 font-weight-normal">+6</span>
                                                        </a>                    
                                                    </div><!--end img-group--> 
                                                    <ul class="list-inline mb-0 align-self-center">                                                                    
                                                        <li class="list-item d-inline-block mr-2">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                                <span class="text-muted font-weight-bold">15/100</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-item d-inline-block">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                                <span class="text-muted font-weight-bold">3</span>
                                                            </a>                                                                               
                                                        </li>
                                                        <li class="list-item d-inline-block">
                                                            <a class="ml-2" href="#">
                                                                <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                                            </a>                                                                               
                                                        </li>
                                                        <li class="list-item d-inline-block">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                                            </a>                                                                               
                                                        </li>
                                                    </ul>
                                                </div>                                        
                                            </div><!--end task-box-->
                                        </div><!--end tab-pane-->

                                        <div class="tab-pane p-3" id="Project3_Tab" role="tabpanel">  
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="media mb-3">
                                                        <img src="{{ URL::asset('assets/images/widgets/project1.jpg')}}" alt="" class="thumb-lg rounded-circle">                                      
                                                        <div class="media-body align-self-center text-truncate ml-3">
                                                            
                                                            <h4 class="mt-0 mb-1 font-weight-semibold text-dark font-18">Transfer Money</h4>   
                                                            <p class="text-muted  mb-0 font-14"><span class="text-dark">Client : </span>Kevin  J. Heal</p>                                         
                                                        </div><!--end media-body-->
                                                    </div>       
                                                </div><!--end col-->
                                                <div class="col-md-6 text-lg-right">
                                                    <h6 class="font-weight-semibold">Start : <span class="text-muted font-weight-normal"> 01 Jan 2020</span></h6>
                                                    <h6 class="font-weight-semibold">Deadline : <span class="text-muted font-weight-normal"> 15 Mar 2020</span></h6>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                                                           
                                            <div class="holder mt-3">
                                                <ul class="steppedprogress pt-1">
                                                    <li class="complete"><span>Planing</span></li>
                                                    <li class="complete"><span>Design</span></li>
                                                    <li class="complete"><span>Development</span></li>
                                                    <li class="complete finish"><span>Testing</span></li>
                                                </ul>
                                            </div>
                                            <div class="task-box mt-3">
                                                <div class="task-priority-icon"><i class="fas fa-check text-danger"></i></div>                                                
                                                <div class="mt-5 d-flex justify-content-between">
                                                    <h6 class="font-weight-semibold">All Hours : <span class="text-muted font-weight-normal"> 530 / 481:30</span></h6>
                                                    <h6 class="font-weight-semibold">Today : <span class="text-muted font-weight-normal"> 2:45</span><span class="badge badge-soft-pink font-weight-semibold ml-2"><i class="far fa-fw fa-clock"></i> 2 days left</span></h6>
                                                </div>
                                                <p class="text-muted mt-4 mb-1">There are many variations of passages of Lorem Ipsum available, 
                                                    but the majority have suffered alteration in some form.
                                                </p>
                                                <p class="text-muted text-right mb-1">100% Complete</p>
                                                <div class="progress mb-4" style="height: 4px;">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="d-flex justify-content-between">
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
                                                            <span class="avatar-title bg-soft-info rounded-circle font-13 font-weight-normal">+6</span>
                                                        </a>                    
                                                    </div><!--end img-group--> 
                                                    <ul class="list-inline mb-0 align-self-center">                                                                    
                                                        <li class="list-item d-inline-block mr-2">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                                <span class="text-muted font-weight-bold">100/100</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-item d-inline-block">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                                <span class="text-muted font-weight-bold">3</span>
                                                            </a>                                                                               
                                                        </li>
                                                        <li class="list-item d-inline-block">
                                                            <a class="ml-2" href="#">
                                                                <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                                            </a>                                                                               
                                                        </li>
                                                        <li class="list-item d-inline-block">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                                            </a>                                                                               
                                                        </li>
                                                    </ul>
                                                </div>                                        
                                            </div><!--end task-box-->                                           
                                        </div><!--end tab-pane-->
                                    </div>        
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">                                    
                                    <h4 class="header-title mt-0 mb-3">Today's Tasks</h4>  
                                    <div class="todo-list slimscroll">                                        
                                        <div class="todo-box">
                                            <i class="remove far fa-trash-alt"></i> 
                                            <div class="todo-task">
                                                <label class="ckbox">
                                                    <input type="checkbox"><span>All materialdesign icon change in Payment App.</span>
                                                </label>
                                            </div> 
                                        </div>
                                        <div class="todo-box">
                                            <i class="remove far fa-trash-alt"></i> 
                                            <div class="todo-task">
                                                <label class="ckbox">
                                                    <input type="checkbox" checked=""><span>Add search button and dropdown market research.</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="todo-box">
                                            <i class="remove far fa-trash-alt"></i> 
                                            <div class="todo-task">
                                                <label class="ckbox">
                                                    <input type="checkbox"><span>Test new features in tablets with check responsive all devices.</span>
                                                </label>
                                            </div> 
                                        </div>
                                        <div class="todo-box">
                                            <i class="remove far fa-trash-alt"></i> 
                                            <div class="todo-task">
                                                <label class="ckbox">
                                                    <input type="checkbox" checked=""><span>Send IOS App documents and all pages detailes.</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="todo-box">
                                            <i class="remove far fa-trash-alt"></i> 
                                            <div class="todo-task">
                                                <label class="ckbox">
                                                    <input type="checkbox"><span>Connect API to pages and check all app pages.</span>
                                                </label>
                                            </div> 
                                        </div>                                                                                               
                                    </div>

                                    <div class="input-group custom-input">   
                                        <input type="text" class="form-control todo-list-input" placeholder="Add task">
                                        <span class="input-group-append"></span>
                                        <button class="btn btn-gradient-primary add-new-todo-btn">Add</button>                                          
                                    </div>                                       
                                </div><!--end card-body--> 
                            </div><!--end card-->
                        </div><!--end col-->        
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">                                    
                                    <h4 class="header-title mt-0 mb-3">Tasks Performance</h4>
                                    <div class="apexchart-wrapper">
                                        <div id="task_status" class="apex-charts"></div>
                                    </div>
                                </div><!--end card-body--> 
                            </div><!--end card-->
                        </div><!--end col-->                        
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">                                       
                                <div class="card-body"> 
                                    <h4 class="header-title mt-0 mb-4">Activity</h4>
                                    <div class="slimscroll crm-dash-activity">
                                        <div class="activity">
                                            <div class="activity-info">
                                                <div class="icon-info-activity">
                                                    <i class="mdi mdi-checkbox-marked-circle-outline bg-soft-success"></i>
                                                </div>
                                                <div class="activity-info-text">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6 class="m-0 w-75">Task finished</h6>
                                                        <span class="text-muted d-block font-12">10 Min ago</span>
                                                    </div>
                                                    <p class="text-muted mt-3">There are many variations majority have suffered alteration.
                                                        <a href="#" class="text-info">[more info]</a>
                                                    </p> 
                                                </div>
                                            </div> 

                                            <div class="activity-info">
                                                <div class="icon-info-activity">
                                                    <i class="mdi mdi-timer-off bg-soft-pink"></i>
                                                </div>
                                                <div class="activity-info-text">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6 class="m-0  w-75">Task Overdue</h6>
                                                        <span class="text-muted font-12">50 Min ago</span>
                                                    </div>
                                                    <p class="text-muted mt-3">There are many variations majority have suffered alteration.
                                                        <a href="#" class="text-info">[more info]</a>
                                                    </p> 
                                                    <span class="badge badge-soft-secondary">Design</span>
                                                    <span class="badge badge-soft-secondary">HTML</span>  
                                                </div>
                                            </div>
                                            <div class="activity-info">
                                                <div class="icon-info-activity">
                                                    <i class="mdi mdi-alert-decagram bg-soft-purple"></i>
                                                </div>
                                                <div class="activity-info-text">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6 class="m-0  w-75">New Task</h6>
                                                        <span class="text-muted font-12">10 hours ago</span>
                                                    </div> 
                                                    <p class="text-muted mt-3">There are many variations majority have suffered alteration.
                                                        <a href="#" class="text-info">[more info]</a>
                                                    </p> 
                                                </div>
                                            </div>   

                                            <div class="activity-info">
                                                <div class="icon-info-activity">
                                                    <i class="mdi mdi-clipboard-alert bg-soft-warning"></i>
                                                </div>
                                                <div class="activity-info-text">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6 class="m-0">New Comment</h6>
                                                        <span class="text-muted font-12">Yesterday</span>
                                                    </div>
                                                    <p class="text-muted mt-3">There are many variations majority have suffered alteration.
                                                        <a href="#" class="text-info">[more info]</a>
                                                    </p>   
                                                </div>
                                            </div>  
                                            <div class="activity-info">
                                                <div class="icon-info-activity">
                                                    <i class="mdi mdi-clipboard-alert bg-soft-secondary"></i>
                                                </div>
                                                <div class="activity-info-text">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6 class="m-0">New Lead Miting</h6>
                                                        <span class="text-muted font-12">14 Nov 2019</span>
                                                    </div>
                                                    <p class="text-muted mt-3">There are many variations majority have suffered alteration.
                                                        <a href="#" class="text-info">[more info]</a>
                                                    </p> 
                                                </div>
                                            </div>                                                                                                              
                                        </div><!--end activity-->
                                    </div><!--end crm-dash-activity-->
                                </div>  <!--end card-body-->                                     
                            </div><!--end card--> 
                        </div><!--end col--> 
                        <div class="col-lg-8">
                            <div class="card">                                
                                <div class="card-body">
                                    <h4 class="mt-0 mb-3 header-title">All Projects</h4>           
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Project Name</th>
                                                    <th>Client Name</th>
                                                    <th>Start Date</th>
                                                    <th>Deadline</th>
                                                    <th>Status</th>
                                                    <th>Progress</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Product Devlopment</td>
                                                    <td>
                                                        <img src="{{ URL::asset('assets/images/users/user-2.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">
                                                        Kevin J. Heal
                                                    </td>
                                                    <td>20/3/2018</td>
                                                    <td>5/5/2018</td>
                                                    <td><span class="badge badge-md badge-boxed  badge-soft-success">Active</span></td>
                                                    <td>
                                                        <small class="float-right ml-2 pt-1 font-10">92%</small>
                                                        <div class="progress mt-2" style="height:5px;">
                                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 92%;" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>New Office Building</td>
                                                    <td>
                                                        <img src="{{ URL::asset('assets/images/users/user-3.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">
                                                        Frank M. Lyons
                                                    </td>
                                                    <td>11/6/2018</td>
                                                    <td>15/7/2018</td>
                                                    <td><span class="badge badge-md badge-boxed  badge-soft-warning">Panding</span></td>
                                                    <td>
                                                        <small class="float-right ml-2 pt-1 font-10">0%</small>
                                                        <div class="progress mt-2" style="height:5px;">
                                                            <div class="progress-bar  bg-secondary" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Website &amp; Blog</td>
                                                    <td>
                                                        <img src="{{ URL::asset('assets/images/users/user-4.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">
                                                        Hyman M. Cross
                                                    </td>
                                                    <td>21/6/2018</td>
                                                    <td>3/7/2018</td>
                                                    <td><span class="badge badge-md badge-boxed  badge-soft-warning">Panding</span></td>
                                                    <td>
                                                        <small class="float-right ml-2 pt-1 font-10">0%</small>
                                                        <div class="progress mt-2" style="height:5px;">
                                                            <div class="progress-bar  bg-secondary" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Market Research</td>
                                                    <td>
                                                        <img src="{{ URL::asset('assets/images/users/user-5.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">
                                                        Angelo E. Butler
                                                    </td>
                                                    <td>30/4/2018</td>
                                                    <td>1/6/2018</td>
                                                    <td><span class="badge badge-md badge-boxed  badge-soft-success">Active</span></td>
                                                    <td>
                                                        <small class="float-right ml-2 pt-1 font-10">78%</small>
                                                        <div class="progress mt-2" style="height:5px;">
                                                            <div class="progress-bar  bg-secondary" role="progressbar" style="width: 78%;" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Export Marketing</td>
                                                    <td>
                                                        <img src="{{ URL::asset('assets/images/users/user-6.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">
                                                        Robert C. Golding
                                                    </td>
                                                    <td>20/3/2018</td>
                                                    <td>5/5/2018</td>
                                                    <td><span class="badge badge-md badge-boxed  badge-soft-success">Active</span></td>
                                                    <td>
                                                        <small class="float-right ml-2 pt-1 font-10">45%</small>
                                                        <div class="progress mt-2" style="height:5px;">
                                                            <div class="progress-bar  bg-secondary" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>Website &amp; Blog</td>
                                                    <td>
                                                        <img src="{{ URL::asset('assets/images/users/user-8.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">
                                                        Phillip T. Morse
                                                    </td>
                                                    <td>8/4/2018</td>
                                                    <td>2/6/2018</td>
                                                    <td><span class="badge badge-md badge-boxed  badge-soft-danger">Complete</span></td>
                                                    <td>
                                                        <small class="float-right ml-2 pt-1 font-10">100%</small>
                                                        <div class="progress mt-2" style="height:5px;">
                                                            <div class="progress-bar  bg-pink" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>                                                                                                  
                                            </tbody>
                                        </table>
                                        <div class="text-right">
                                            <a href="#" class="">View All<i class="dripicons-arrow-thin-right ml-2"></i></a>
                                        </div>                                                
                                    </div><!--end table-responsive--> 
                                </div><!--end card-body-->                                                                                                        
                            </div><!--end card-->
                        </div><!--end col-->     
                    </div><!--end row-->

                </div><!-- container -->
@stop

@section('footerScript')
        <script src="{{ URL::asset('assets/pages/jquery.projects-index.init.js')}}"></script>
@stop