@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
  <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                              @component('common-components.breadcrumb')
                                 @slot('title')  Teams @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Project @endslot
                                 @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card team-card">
                                <div class="card-body">
                                    <div class=" d-flex justify-content-between">
                                        <h4 class="header-title mt-0 d-inline-block">UI/UX Design Team</h4>
                                        <div class="dropdown d-inline-block">
                                            <a class="nav-link dropdown-toggle arrow-none" id="dLabel1" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel1">
                                                <a class="dropdown-item" href="#">Create Project</a> 
                                                <a class="dropdown-item" href="#">Open Project</a> 
                                                <a class="dropdown-item" href="#">Tasks Details</a>
                                            </div>
                                        </div>
                                    </div>                                    
                                    
                                    <div class="text-center">
                                        <img src="{{ URL::asset('assets/images/users/user-4.jpg')}}" alt="" class="rounded-circle user-img img-thumbnail">
                                        <div class="online-circle">
                                            <i class="fa fa-circle text-success"></i>
                                        </div>                                        
                                        <h4 class="team-leader">Marnie Flowers</h4>
                                        <p class="text-muted font-12">Team Leader</p>
                                        <ul class="list-inline language-skill mb-4">
                                            <li class="list-inline-item">Tag : </li>
                                            <li class="list-inline-item"><span>android</span></li>
                                            <li class="list-inline-item"><span>jango</span></li>
                                            <li class="list-inline-item"><span>python</span></li>
                                            <li class="list-inline-item">
                                                <button type="button" class="btn btn-soft-secondary btn-xs btn-round font-12">+</button>
                                            </li>
                                        </ul>
                                    </div> 
                                    <small class="float-right font-13 pt-2 text-muted">1 Lead , 7 Employees</small>
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
                                        <a href="" class="avatar-box thumb-xs align-self-center">
                                            <span class="avatar-title bg-soft-info rounded-circle font-13 font-weight-normal">+2</span>
                                        </a>    
                                    </div> <!--end img-group-->                   
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card team-card">
                                <div class="card-body">                                    
                                    <div class=" d-flex justify-content-between">
                                        <h4 class="header-title mt-0 d-inline-block">Web Design Team</h4>
                                        <div class="dropdown d-inline-block">
                                            <a class="nav-link dropdown-toggle arrow-none" id="dLabel2" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel2">
                                                <a class="dropdown-item" href="#">Create Project</a> 
                                                <a class="dropdown-item" href="#">Open Project</a> 
                                                <a class="dropdown-item" href="#">Tasks Details</a>
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="text-center">
                                        <img src="{{ URL::asset('assets/images/users/user-5.jpg')}}" alt="" class="rounded-circle user-img img-thumbnail">
                                        <div class="online-circle">
                                            <i class="fa fa-circle text-success"></i>
                                        </div>                                        
                                        <h4 class="team-leader">Willie Miller</h4>
                                        <p class="text-muted font-12">Team Leader</p>
                                        <ul class="list-inline language-skill mb-4">
                                            <li class="list-inline-item">Tag : </li>
                                            <li class="list-inline-item"><span>android</span></li>
                                            <li class="list-inline-item"><span>jango</span></li>
                                            <li class="list-inline-item"><span>python</span></li>
                                            <li class="list-inline-item">
                                                <button type="button" class="btn btn-soft-secondary btn-xs btn-round font-12">+</button>
                                            </li>
                                        </ul>
                                    </div> 
                                    <small class="float-right font-13 pt-2 text-muted">1 Lead , 7 Employees</small>
                                    <div class="img-group">
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-10.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                        </a>
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-9.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                        </a>
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-8.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                        </a>
                                        <a href="" class="avatar-box thumb-xs align-self-center">
                                            <span class="avatar-title bg-soft-info rounded-circle font-13 font-weight-normal">+4</span>
                                        </a>    
                                    </div> <!--end img-group-->                       
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card team-card">
                                <div class="card-body">                                    
                                    <div class=" d-flex justify-content-between">
                                        <h4 class="header-title mt-0 d-inline-block">Frontend Developer Team</h4>
                                        <div class="dropdown d-inline-block">
                                            <a class="nav-link dropdown-toggle arrow-none" id="dLabel3" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel3">
                                                <a class="dropdown-item" href="#">Create Project</a> 
                                                <a class="dropdown-item" href="#">Open Project</a> 
                                                <a class="dropdown-item" href="#">Tasks Details</a>
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="text-center">
                                        <img src="{{ URL::asset('assets/images/users/user-9.jpg')}}" alt="" class="rounded-circle user-img img-thumbnail">
                                        <div class="online-circle">
                                            <i class="fa fa-circle text-success"></i>
                                        </div>                                        
                                        <h4 class="team-leader">Jason Haston</h4>
                                        <p class="text-muted font-12">Team Leader</p>
                                        <ul class="list-inline language-skill mb-4">
                                            <li class="list-inline-item">Tag : </li>
                                            <li class="list-inline-item"><span>android</span></li>
                                            <li class="list-inline-item"><span>jango</span></li>
                                            <li class="list-inline-item"><span>python</span></li>
                                            <li class="list-inline-item">
                                                <button type="button" class="btn btn-soft-secondary btn-xs btn-round font-12">+</button>
                                            </li>
                                        </ul>
                                    </div> 
                                    <small class="float-right font-13 pt-2 text-muted">1 Lead , 7 Employees</small>
                                    <div class="img-group">
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-4.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                        </a>
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-3.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                        </a>
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-2.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                        </a>
                                        <a href="" class="avatar-box thumb-xs align-self-center">
                                            <span class="avatar-title bg-soft-info rounded-circle font-13 font-weight-normal">+2</span>
                                        </a>    
                                    </div> <!--end img-group-->                                   
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card team-card">
                                <div class="card-body">                                    
                                    <div class=" d-flex justify-content-between">
                                        <h4 class="header-title mt-0 d-inline-block">Backend Developer Team</h4>
                                        <div class="dropdown d-inline-block">
                                            <a class="nav-link dropdown-toggle arrow-none" id="dLabel4" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel4">
                                                <a class="dropdown-item" href="#">Create Project</a> 
                                                <a class="dropdown-item" href="#">Open Project</a> 
                                                <a class="dropdown-item" href="#">Tasks Details</a>
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="text-center">
                                        <img src="{{ URL::asset('assets/images/users/user-8.jpg')}}" alt="" class="rounded-circle user-img img-thumbnail">
                                        <div class="online-circle">
                                            <i class="fa fa-circle text-success"></i>
                                        </div>                                        
                                        <h4 class="team-leader">Steven Hilliard</h4>
                                        <p class="text-muted font-12">Team Leader</p>
                                        <ul class="list-inline language-skill mb-4">
                                            <li class="list-inline-item">Tag : </li>
                                            <li class="list-inline-item"><span>android</span></li>
                                            <li class="list-inline-item"><span>jango</span></li>
                                            <li class="list-inline-item"><span>python</span></li>
                                            <li class="list-inline-item">
                                                <button type="button" class="btn btn-soft-secondary btn-xs btn-round font-12">+</button>
                                            </li>
                                        </ul>
                                    </div> 
                                    <small class="float-right font-13 pt-2 text-muted">1 Lead , 7 Employees</small>
                                    <div class="img-group">
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-7.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                        </a>
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-8.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                        </a>
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-9.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                        </a>
                                        <a href="" class="avatar-box thumb-xs align-self-center">
                                            <span class="avatar-title bg-soft-info rounded-circle font-13 font-weight-normal">+5</span>
                                        </a>    
                                    </div> <!--end img-group-->                        
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card team-card">
                                <div class="card-body">
                                    <div class=" d-flex justify-content-between">
                                        <h4 class="header-title mt-0 d-inline-block">UI/UX Design Team</h4>
                                        <div class="dropdown d-inline-block">
                                            <a class="nav-link dropdown-toggle arrow-none" id="dLabel5" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel5">
                                                <a class="dropdown-item" href="#">Create Project</a> 
                                                <a class="dropdown-item" href="#">Open Project</a> 
                                                <a class="dropdown-item" href="#">Tasks Details</a>
                                            </div>
                                        </div>
                                    </div>                                    
                                    
                                    <div class="text-center">
                                        <img src="{{ URL::asset('assets/images/users/user-10.jpg')}}" alt="" class="rounded-circle user-img img-thumbnail">
                                        <div class="online-circle">
                                            <i class="fa fa-circle text-success"></i>
                                        </div>                                        
                                        <h4 class="team-leader">Marnie Flowers</h4>
                                        <p class="text-muted font-12">Team Leader</p>
                                        <ul class="list-inline language-skill mb-4">
                                            <li class="list-inline-item">Tag : </li>
                                            <li class="list-inline-item"><span>android</span></li>
                                            <li class="list-inline-item"><span>jango</span></li>
                                            <li class="list-inline-item"><span>python</span></li>
                                            <li class="list-inline-item">
                                                <button type="button" class="btn btn-soft-secondary btn-xs btn-round font-12">+</button>
                                            </li>
                                        </ul>
                                    </div> 
                                    <small class="float-right font-13 pt-2 text-muted">1 Lead , 7 Employees</small>
                                    <div class="img-group">
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-10.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                        </a>
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-7.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                        </a>
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-1.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                        </a>
                                        <a href="" class="avatar-box thumb-xs align-self-center">
                                            <span class="avatar-title bg-soft-info rounded-circle font-13 font-weight-normal">+3</span>
                                        </a>    
                                    </div> <!--end img-group-->                      
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card team-card">
                                <div class="card-body">                                    
                                    <div class=" d-flex justify-content-between">
                                        <h4 class="header-title mt-0 d-inline-block">Web Design Team</h4>
                                        <div class="dropdown d-inline-block">
                                            <a class="nav-link dropdown-toggle arrow-none" id="dLabel6" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel6">
                                                <a class="dropdown-item" href="#">Create Project</a> 
                                                <a class="dropdown-item" href="#">Open Project</a> 
                                                <a class="dropdown-item" href="#">Tasks Details</a>
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="text-center">
                                        <img src="{{ URL::asset('assets/images/users/user-3.jpg')}}" alt="" class="rounded-circle user-img img-thumbnail">
                                        <div class="online-circle">
                                            <i class="fa fa-circle text-success"></i>
                                        </div>                                        
                                        <h4 class="team-leader">Willie Miller</h4>
                                        <p class="text-muted font-12">Team Leader</p>
                                        <ul class="list-inline language-skill mb-4">
                                            <li class="list-inline-item">Tag : </li>
                                            <li class="list-inline-item"><span>android</span></li>
                                            <li class="list-inline-item"><span>jango</span></li>
                                            <li class="list-inline-item"><span>python</span></li>
                                            <li class="list-inline-item">
                                                <button type="button" class="btn btn-soft-secondary btn-xs btn-round font-12">+</button>
                                            </li>
                                        </ul>
                                    </div> 
                                    <small class="float-right font-13 pt-2 text-muted">1 Lead , 7 Employees</small>
                                    <div class="img-group">
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
                                            <span class="avatar-title bg-soft-info rounded-circle font-13 font-weight-normal">+2</span>
                                        </a>    
                                    </div> <!--end img-group-->                                  
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card team-card">
                                <div class="card-body">                                    
                                    <div class=" d-flex justify-content-between">
                                        <h4 class="header-title mt-0 d-inline-block">Frontend Developer Team</h4>
                                        <div class="dropdown d-inline-block">
                                            <a class="nav-link dropdown-toggle arrow-none" id="dLabel7" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel7">
                                                <a class="dropdown-item" href="#">Create Project</a> 
                                                <a class="dropdown-item" href="#">Open Project</a> 
                                                <a class="dropdown-item" href="#">Tasks Details</a>
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="text-center">
                                        <img src="{{ URL::asset('assets/images/users/user-2.jpg')}}" alt="" class="rounded-circle user-img img-thumbnail">
                                        <div class="online-circle">
                                            <i class="fa fa-circle text-success"></i>
                                        </div>                                        
                                        <h4 class="team-leader">Jason Haston</h4>
                                        <p class="text-muted font-12">Team Leader</p>
                                        <ul class="list-inline language-skill mb-4">
                                            <li class="list-inline-item">Tag : </li>
                                            <li class="list-inline-item"><span>android</span></li>
                                            <li class="list-inline-item"><span>jango</span></li>
                                            <li class="list-inline-item"><span>python</span></li>
                                            <li class="list-inline-item">
                                                <button type="button" class="btn btn-soft-secondary btn-xs btn-round font-12">+</button>
                                            </li>
                                        </ul>
                                    </div> 
                                    <small class="float-right font-13 pt-2 text-muted">1 Lead , 7 Employees</small>
                                    <div class="img-group">
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-5.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                        </a>
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-7.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                        </a>
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-2.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                        </a>
                                        <a href="" class="avatar-box thumb-xs align-self-center">
                                            <span class="avatar-title bg-soft-info rounded-circle font-13 font-weight-normal">+2</span>
                                        </a>    
                                    </div> <!--end img-group-->                     
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card team-card">
                                <div class="card-body">                                    
                                    <div class=" d-flex justify-content-between">
                                        <h4 class="header-title mt-0 d-inline-block">Backend Developer Team</h4>
                                        <div class="dropdown d-inline-block">
                                            <a class="nav-link dropdown-toggle arrow-none" id="dLabel8" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel8">
                                                <a class="dropdown-item" href="#">Create Project</a> 
                                                <a class="dropdown-item" href="#">Open Project</a> 
                                                <a class="dropdown-item" href="#">Tasks Details</a>
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="text-center">
                                        <img src="{{ URL::asset('assets/images/users/user-1.jpg')}}" alt="" class="rounded-circle user-img img-thumbnail">
                                        <div class="online-circle">
                                            <i class="fa fa-circle text-success"></i>
                                        </div>                                        
                                        <h4 class="team-leader">Steven Hilliard</h4>
                                        <p class="text-muted font-12">Team Leader</p>
                                        <ul class="list-inline language-skill mb-4">
                                            <li class="list-inline-item">Tag : </li>
                                            <li class="list-inline-item"><span>android</span></li>
                                            <li class="list-inline-item"><span>jango</span></li>
                                            <li class="list-inline-item"><span>python</span></li>
                                            <li class="list-inline-item">
                                                <button type="button" class="btn btn-soft-secondary btn-xs btn-round font-12">+</button>
                                            </li>
                                        </ul>
                                    </div> 
                                    <small class="float-right font-13 pt-2 text-muted">1 Lead , 7 Employees</small>
                                    <div class="img-group">
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-5.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                        </a>
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-1.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                        </a>
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-10.jpg')}}" alt="user" class="rounded-circle thumb-xs">
                                        </a>
                                        <a href="" class="avatar-box thumb-xs align-self-center">
                                            <span class="avatar-title bg-soft-info rounded-circle font-13 font-weight-normal">+1</span>
                                        </a>    
                                    </div> <!--end img-group-->                       
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                </div><!-- container -->
@stop
