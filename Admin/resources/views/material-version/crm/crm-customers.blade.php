@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
  <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                              @component('common-components.breadcrumb')
                                 @slot('title') Customers @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') CRM @endslot
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
                                            <p class="text-muted mb-0 font-12">Dealer, Washington </p> 
                                            <ul class="list-inline mb-0 align-self-center">
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star-half text-warning font-18"></i></li>
                                            </ul>                                                                                          
                                        </div><!--end media body-->                                            
                                    </div> <!--end media-->                                    
                                    <ul class="list-unstyled mb-2">
                                        <li class=""><i data-feather="calendar" class="align-self-center icon-sm icon-dual"></i> <b>Date</b> : 20 june 2020</li>
                                        <li class="mt-3"><i data-feather="phone" class="align-self-center icon-sm icon-dual"></i> <b> phone </b> : +91 23456 78910</li>
                                        <li class="mt-3"><i data-feather="mail" class="align-self-center icon-sm icon-dual"></i> <b> Email </b> : mannat.theme@gmail.com</li>                                        
                                    </ul>                                    
                                    <p class="text-muted  mt-3"><span class="text-dark font-weight-semibold">Last Message :</span> popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
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
                                        <img src="{{ URL::asset('assets/images/users/user-1.png')}}" class="mr-3 thumb-xl align-self-center rounded-circle" alt="...">
                                        <div class="media-body align-self-center"> 
                                            <h4 class="mt-0 mb-1">Donald Gardner</h4>
                                            <p class="text-muted mb-0 font-12">Dealer, Washington </p> 
                                            <ul class="list-inline mb-0 align-self-center">
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star-half text-warning font-18"></i></li>
                                            </ul>                                                                                          
                                        </div><!--end media body-->                                            
                                    </div> <!--end media-->                                    
                                    <ul class="list-unstyled mb-2">
                                        <li class=""><i data-feather="calendar" class="align-self-center icon-sm icon-dual"></i> <b>Date</b> : 20 june 2020</li>
                                        <li class="mt-3"><i data-feather="phone" class="align-self-center icon-sm icon-dual"></i> <b> phone </b> : +91 23456 78910</li>
                                        <li class="mt-3"><i data-feather="mail" class="align-self-center icon-sm icon-dual"></i> <b> Email </b> : mannat.theme@gmail.com</li>                                        
                                    </ul>                                    
                                    <p class="text-muted  mt-3"><span class="text-dark font-weight-semibold">Last Message :</span> popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
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
                                            <h4 class="mt-0 mb-1">Donald Gardner</h4>
                                            <p class="text-muted mb-0 font-12">Dealer, Washington </p> 
                                            <ul class="list-inline mb-0 align-self-center">
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star-half text-warning font-18"></i></li>
                                            </ul>                                                                                          
                                        </div><!--end media body-->                                            
                                    </div> <!--end media-->                                    
                                    <ul class="list-unstyled mb-2">
                                        <li class=""><i data-feather="calendar" class="align-self-center icon-sm icon-dual"></i> <b>Date</b> : 20 june 2020</li>
                                        <li class="mt-3"><i data-feather="phone" class="align-self-center icon-sm icon-dual"></i> <b> phone </b> : +91 23456 78910</li>
                                        <li class="mt-3"><i data-feather="mail" class="align-self-center icon-sm icon-dual"></i> <b> Email </b> : mannat.theme@gmail.com</li>                                        
                                    </ul>                                    
                                    <p class="text-muted  mt-3"><span class="text-dark font-weight-semibold">Last Message :</span> popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
                                    <div>
                                        <button type="button" class="btn btn-sm btn-soft-secondary">Send SMS</button>
                                        <button type="button" class="btn btn-sm btn-soft-primary">Send Email</button>
                                    </div>
                                </div><!--end card-body-->                                                                     
                            </div>  <!--end card-->                          
                        </div><!--end col-->
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-lg-4">                            
                            <div class="card">                               
                                <div class="card-body"> 
                                    <div class="media mb-3">
                                        <img src="{{ URL::asset('assets/images/users/user-5.png')}}" class="mr-3 thumb-xl align-self-center rounded-circle" alt="...">
                                        <div class="media-body align-self-center"> 
                                            <h4 class="mt-0 mb-1">Donald Gardner</h4>
                                            <p class="text-muted mb-0 font-12">Dealer, Washington </p> 
                                            <ul class="list-inline mb-0 align-self-center">
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star-half text-warning font-18"></i></li>
                                            </ul>                                                                                          
                                        </div><!--end media body-->                                            
                                    </div> <!--end media-->                                    
                                    <ul class="list-unstyled mb-2">
                                        <li class=""><i data-feather="calendar" class="align-self-center icon-sm icon-dual"></i> <b>Date</b> : 20 june 2020</li>
                                        <li class="mt-3"><i data-feather="phone" class="align-self-center icon-sm icon-dual"></i> <b> phone </b> : +91 23456 78910</li>
                                        <li class="mt-3"><i data-feather="mail" class="align-self-center icon-sm icon-dual"></i> <b> Email </b> : mannat.theme@gmail.com</li>                                        
                                    </ul>                                    
                                    <p class="text-muted  mt-3"><span class="text-dark font-weight-semibold">Last Message :</span> popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
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
                                        <img src="{{ URL::asset('assets/images/users/user-8.jpg')}}" class="mr-3 thumb-xl align-self-center rounded-circle" alt="...">
                                        <div class="media-body align-self-center"> 
                                            <h4 class="mt-0 mb-1">Donald Gardner</h4>
                                            <p class="text-muted mb-0 font-12">Dealer, Washington </p> 
                                            <ul class="list-inline mb-0 align-self-center">
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star-half text-warning font-18"></i></li>
                                            </ul>                                                                                          
                                        </div><!--end media body-->                                            
                                    </div> <!--end media-->                                    
                                    <ul class="list-unstyled mb-2">
                                        <li class=""><i data-feather="calendar" class="align-self-center icon-sm icon-dual"></i> <b>Date</b> : 20 june 2020</li>
                                        <li class="mt-3"><i data-feather="phone" class="align-self-center icon-sm icon-dual"></i> <b> phone </b> : +91 23456 78910</li>
                                        <li class="mt-3"><i data-feather="mail" class="align-self-center icon-sm icon-dual"></i> <b> Email </b> : mannat.theme@gmail.com</li>                                        
                                    </ul>                                    
                                    <p class="text-muted  mt-3"><span class="text-dark font-weight-semibold">Last Message :</span> popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
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
                                        <img src="{{ URL::asset('assets/images/users/user-10.jpg')}}" class="mr-3 thumb-xl align-self-center rounded-circle" alt="...">
                                        <div class="media-body align-self-center"> 
                                            <h4 class="mt-0 mb-1">Donald Gardner</h4>
                                            <p class="text-muted mb-0 font-12">Dealer, Washington </p> 
                                            <ul class="list-inline mb-0 align-self-center">
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star-half text-warning font-18"></i></li>
                                            </ul>                                                                                          
                                        </div><!--end media body-->                                            
                                    </div> <!--end media-->                                    
                                    <ul class="list-unstyled mb-2">
                                        <li class=""><i data-feather="calendar" class="align-self-center icon-sm icon-dual"></i> <b>Date</b> : 20 june 2020</li>
                                        <li class="mt-3"><i data-feather="phone" class="align-self-center icon-sm icon-dual"></i> <b> phone </b> : +91 23456 78910</li>
                                        <li class="mt-3"><i data-feather="mail" class="align-self-center icon-sm icon-dual"></i> <b> Email </b> : mannat.theme@gmail.com</li>                                        
                                    </ul>                                    
                                    <p class="text-muted  mt-3"><span class="text-dark font-weight-semibold">Last Message :</span> popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
                                    <div>
                                        <button type="button" class="btn btn-sm btn-soft-secondary">Send SMS</button>
                                        <button type="button" class="btn btn-sm btn-soft-primary">Send Email</button>
                                    </div>
                                </div><!--end card-body-->                                   
                            </div>  <!--end card-->                          
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!-- container -->

@stop
