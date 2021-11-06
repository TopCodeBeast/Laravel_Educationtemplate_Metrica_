@extends('layouts.helpdesk-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                             @component('common-components.breadcrumb')
                                 @slot('title') Agents @endslot
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
                                    <div class="media mb-3">
                                        <img src="{{ URL::asset('assets/images/users/user-4.jpg')}}" class="mr-3 thumb-xl align-self-center rounded-circle" alt="...">
                                        <div class="media-body align-self-center"> 
                                            <h4 class="mt-0 mb-1">Donald Gardner</h4>
                                            <p class="text-muted mb-0 font-12">ID : #12456, Washington </p> 
                                            <ul class="list-inline mb-0 align-self-center">
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star-half text-warning font-18"></i></li>
                                            </ul>                                                                                          
                                        </div><!--end media body-->                                            
                                    </div> <!--end media-->           
                                    
                                    <h4 class="header-title">Agent Performance This Week</h4>
                                    <div class="mb-3">
                                        <div id="Agent_1" class="apex-charts"></div>
                                    </div> 
                                    <ul class="list-inline d-flex justify-content-between mb-4">
                                        <li class="list-inline-item">
                                            <div class="media">
                                                <i data-feather="thumbs-up" class="align-self-center icon-lg icon-dual-success"></i> 
                                                <div class="media-body align-self-center ml-2">
                                                    <p class="mb-0"> <span class="font-24 font-weight-semibold">87%</span> Satisfied</p>                                                                                                                                              
                                                </div><!--end media body-->                                            
                                            </div> <!--end media--> 
                                        </li>
                                        <li class="list-inline-item">
                                            <div class="media">
                                                <i data-feather="thumbs-down" class="align-self-center icon-lg icon-dual-danger"></i> 
                                                <div class="media-body align-self-center ml-2">
                                                    <p class="mb-0"> <span class="font-24 font-weight-semibold">13%</span> Unsatisfied</p>                                                                                                                                              
                                                </div><!--end media body-->                                            
                                            </div> <!--end media--> 
                                        </li>                                      
                                    </ul>   
                                    <p class="text-muted mb-4"><span class="text-dark font-weight-semibold">Last Message :</span> popular belief, 
                                        Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.
                                    </p> 
                                    <div>
                                        <button type="button" class="btn btn-sm btn-soft-secondary">Send SMS</button>
                                        <button type="button" class="btn btn-sm btn-soft-primary">Send Email</button>
                                    </div>
                                </div><!--end card-body-->                                                                     
                            </div>  <!--end card-->                          
                        </div><!--end col-->
                        <div class="col-lg-4">                            
                            <div class="card">                               
                                <div class="card-body"> 
                                    <div class="media mb-3">
                                        <img src="{{ URL::asset('assets/images/users/user-5.jpg')}}" class="mr-3 thumb-xl align-self-center rounded-circle" alt="...">
                                        <div class="media-body align-self-center"> 
                                            <h4 class="mt-0 mb-1">Nicholas Smith</h4>
                                            <p class="text-muted mb-0 font-12">ID : #65894, California </p> 
                                            <ul class="list-inline mb-0 align-self-center">
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star-half text-warning font-18"></i></li>
                                            </ul>                                                                                          
                                        </div><!--end media body-->                                            
                                    </div> <!--end media-->           
                                    
                                    <h4 class="header-title">Agent Performance This Week</h4>
                                    <div class="mb-3">
                                        <div id="Agent_2" class="apex-charts"></div>
                                    </div> 
                                    <ul class="list-inline d-flex justify-content-between mb-4">
                                        <li class="list-inline-item">
                                            <div class="media">
                                                <i data-feather="thumbs-up" class="align-self-center icon-lg icon-dual-success"></i> 
                                                <div class="media-body align-self-center ml-2">
                                                    <p class="mb-0"> <span class="font-24 font-weight-semibold">79%</span> Satisfied</p>                                                                                                                                              
                                                </div><!--end media body-->                                            
                                            </div> <!--end media--> 
                                        </li>
                                        <li class="list-inline-item">
                                            <div class="media">
                                                <i data-feather="thumbs-down" class="align-self-center icon-lg icon-dual-danger"></i> 
                                                <div class="media-body align-self-center ml-2">
                                                    <p class="mb-0"> <span class="font-24 font-weight-semibold">21%</span> Unsatisfied</p>                                                                                                                                              
                                                </div><!--end media body-->                                            
                                            </div> <!--end media--> 
                                        </li>                                      
                                    </ul>   
                                    <p class="text-muted  mb-4"><span class="text-dark font-weight-semibold">Last Message :</span> popular belief, 
                                        Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.
                                    </p> 
                                    <div>
                                        <button type="button" class="btn btn-sm btn-soft-secondary">Send SMS</button>
                                        <button type="button" class="btn btn-sm btn-soft-primary">Send Email</button>
                                    </div>
                                </div><!--end card-body-->                                                                     
                            </div>  <!--end card-->                          
                        </div><!--end col-->
                        <div class="col-lg-4">                            
                            <div class="card">                               
                                <div class="card-body"> 
                                    <div class="media mb-3">
                                        <img src="{{ URL::asset('assets/images/users/user-1.jpg')}}" class="mr-3 thumb-xl align-self-center rounded-circle" alt="...">
                                        <div class="media-body align-self-center"> 
                                            <h4 class="mt-0 mb-1">Joseph Rust</h4>
                                            <p class="text-muted mb-0 font-12">ID : #78459, New Jersey </p> 
                                            <ul class="list-inline mb-0 align-self-center">
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star-half text-warning font-18"></i></li>
                                            </ul>                                                                                          
                                        </div><!--end media body-->                                            
                                    </div> <!--end media-->           
                                    
                                    <h4 class="header-title">Agent Performance This Week</h4>
                                    <div class="mb-3">
                                        <div id="Agent_3" class="apex-charts"></div>
                                    </div> 
                                    <ul class="list-inline d-flex justify-content-between mb-4">
                                        <li class="list-inline-item">
                                            <div class="media">
                                                <i data-feather="thumbs-up" class="align-self-center icon-lg icon-dual-success"></i> 
                                                <div class="media-body align-self-center ml-2">
                                                    <p class="mb-0"> <span class="font-24 font-weight-semibold">91%</span> Satisfied</p>                                                                                                                                              
                                                </div><!--end media body-->                                            
                                            </div> <!--end media--> 
                                        </li>
                                        <li class="list-inline-item">
                                            <div class="media">
                                                <i data-feather="thumbs-down" class="align-self-center icon-lg icon-dual-danger"></i> 
                                                <div class="media-body align-self-center ml-2">
                                                    <p class="mb-0"> <span class="font-24 font-weight-semibold">09%</span> Unsatisfied</p>                                                                                                                                              
                                                </div><!--end media body-->                                            
                                            </div> <!--end media--> 
                                        </li>                                      
                                    </ul>   
                                    <p class="text-muted  mb-4"><span class="text-dark font-weight-semibold">Last Message :</span> popular belief, 
                                        Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.
                                    </p> 
                                    <div>
                                        <button type="button" class="btn btn-sm btn-soft-secondary">Send SMS</button>
                                        <button type="button" class="btn btn-sm btn-soft-primary">Send Email</button>
                                    </div>
                                </div><!--end card-body-->                                                                     
                            </div>  <!--end card-->                          
                        </div><!--end col-->
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <p class="badge badge-soft-pink font-11 p-1 mb-1 float-lg-right float-md-none">Last updated 15 minutes ago</p>
                                    <h4 class="header-title mt-0 mb-3">Agent Performance</h4>                                    
                                    <div class="table-responsive browser_users">
                                        <table class="table mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th class="border-top-0">Agent</th>
                                                    <th class="border-top-0">Total Calls</th>
                                                    <th class="border-top-0">Calls Answered</th>
                                                    <th class="border-top-0">Avg.Speed of answer</th>
                                                    <th class="border-top-0">Adherence %</th>
                                                    <th class="border-top-0">Action</th>
                                                </tr><!--end tr-->
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img src="{{ URL::asset('assets/images/users/user-1.png')}}" alt="" class="thumb-sm rounded-circle mr-2">                                       
                                                            <div class="media-body align-self-center text-truncate">
                                                                <h6 class="mt-0 mb-1 text-dark">Donald Gardner</h6>
                                                                <p class="text-muted mb-0">Dummy text of the printing.</p>
                                                            </div><!--end media-body-->
                                                        </div>
                                                    </td>
                                                    <td>38</td>
                                                    <td>32</td>
                                                    <td>3:12s</td>
                                                    <td>80%</td>
                                                    <td>                                                                                                       
                                                        <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                    </td>
                                                </tr><!--end tr--> 
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <div class="avatar-box thumb-sm align-self-center mr-2">
                                                                <span class="avatar-title bg-soft-pink rounded-circle">NS</span>
                                                            </div>                                    
                                                            <div class="media-body align-self-center text-truncate">
                                                                <h6 class="mt-0 mb-1 text-dark">Nicholas Smith</h6>
                                                                <p class="text-muted mb-0">Dummy text of the printing.</p>
                                                            </div><!--end media-body-->
                                                        </div>
                                                    </td>
                                                    <td>50</td>
                                                    <td>45</td>
                                                    <td>2:45s</td>
                                                    <td>84%</td>
                                                    <td>                                                                                                       
                                                        <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                    </td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img src="{{ URL::asset('assets/images/users/user-4.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">                                       
                                                            <div class="media-body align-self-center text-truncate">
                                                                <h6 class="mt-0 mb-1 text-dark">Paula Anderson</h6>
                                                                <p class="text-muted mb-0">Dummy text of the printing.</p>
                                                            </div><!--end media-body-->
                                                        </div>
                                                    </td>
                                                    <td>32</td>
                                                    <td>24</td>
                                                    <td>4:15s</td>
                                                    <td>73%</td>
                                                    <td>                                                                                                       
                                                        <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                    </td>
                                                </tr><!--end tr-->
                                                
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img src="{{ URL::asset('assets/images/users/user-3.png')}}" alt="" class="thumb-sm rounded-circle mr-2">                                       
                                                            <div class="media-body align-self-center text-truncate">
                                                                <h6 class="mt-0 mb-1 text-dark">Lucy Peterson</h6>
                                                                <p class="text-muted mb-0">Dummy text of the printing.</p>
                                                            </div><!--end media-body-->
                                                        </div>
                                                    </td>
                                                    <td>25</td>
                                                    <td>21</td>
                                                    <td>5:42s</td>
                                                    <td>93%</td>
                                                    <td>                                                                                                       
                                                        <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                    </td>
                                                </tr><!--end tr-->  
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <div class="avatar-box thumb-sm align-self-center mr-2">
                                                                <span class="avatar-title bg-soft-primary rounded-circle">JR</span>
                                                            </div>                                    
                                                            <div class="media-body align-self-center text-truncate">
                                                                <h6 class="mt-0 mb-1 text-dark">Joseph Rust</h6>
                                                                <p class="text-muted mb-0">Dummy text of the printing.</p>
                                                            </div><!--end media-body-->
                                                        </div>
                                                    </td>
                                                    <td>50</td>
                                                    <td>45</td>
                                                    <td>2:45s</td>
                                                    <td>84%</td>
                                                    <td>                                                                                                       
                                                        <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                    </td>
                                                </tr><!--end tr-->
                                            </tbody>
                                        </table> <!--end table-->                                               
                                    </div><!--end /div-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                </div><!-- container -->
@stop

@section('footerScript')
<script src="{{ URL::asset('assets/pages/jquery.agents.init.js')}}"></script> 
@stop