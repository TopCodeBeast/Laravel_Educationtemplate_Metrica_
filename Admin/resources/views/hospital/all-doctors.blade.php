@extends('layouts.hospital-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
<div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                             @component('common-components.breadcrumb')
                                 @slot('title') All Doctors @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Doctors @endslot
                                 @slot('item3') Doctors @endslot
                                 @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">                                                            
                                <div class="card-body text-center">  
                                    <div class="text-right">                                                       
                                        <a href="#" class="mr-2" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg"><i class="fas fa-edit text-info font-16"></i></a>
                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                    </div>                                    
                                    <img src="{{ URL::asset('assets/images/users/dr-2.jpg') }}" alt="user" class="rounded-circle mt-n3">
                                    <h5 class="mb-1 client-name">Dr.Wendy Keen</h5> 
                                    <p class="text-muted">MD Orthopedic</p>                                    
                                    <p class="text-center font-14">4 years experience in Apollo Hospital</p>
                                    <button type="button" class="btn btn-sm btn-outline-primary" onclick="location.href='../hospital/doctor-profile'">View Profile</button>
                                </div><!--end card-body-->                                                                     
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card">                               
                                <div class="card-body text-center"> 
                                    <div class="text-right">                                                       
                                        <a href="#" class="mr-2" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg"><i class="fas fa-edit text-info font-16"></i></a>
                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                    </div>                                    
                                    <img src="{{ URL::asset('assets/images/users/dr-4.jpg')}}" alt="user" class="rounded-circle mt-n3">
                                    <h5 class="mb-1 client-name">Dr.Helen White</h5> 
                                    <p class="text-muted">MS Cardiology</p>                                    
                                    <p class="text-center font-14">3 years experience in Apollo Hospital</p>
                                    <button type="button" class="btn btn-sm btn-outline-primary" onclick="location.href='../hospital/doctor-profile'">View Profile</button>
                                </div><!--end card-body-->                                                                     
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card">                               
                                <div class="card-body text-center"> 
                                    <div class="text-right">                                                       
                                        <a href="#" class="mr-2" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg"><i class="fas fa-edit text-info font-16"></i></a>
                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                    </div>                                    
                                    <img src="{{ URL::asset('assets/images/users/dr-5.jpg')}}" alt="user" class="rounded-circle mt-n3">
                                    <h5 class="mb-1 client-name">Dr.Thomas Fant</h5> 
                                    <p class="text-muted">MD Neurology</p>                                    
                                    <p class="text-center font-14">10 years experience in Apollo Hospital</p>
                                    <button type="button" class="btn btn-sm btn-outline-primary" onclick="location.href='../hospital/doctor-profile'">View Profile</button>
                                </div><!--end card-body-->                                                                     
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card">                               
                                <div class="card-body text-center"> 
                                    <div class="text-right">                                                       
                                        <a href="#" class="mr-2" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg"><i class="fas fa-edit text-info font-16"></i></a>
                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                    </div>                                    
                                    <img src="{{ URL::asset('assets/images/users/dr-6.jpg')}}" alt="user" class="rounded-circle mt-n3">
                                    <h5 class="mb-1 client-name">Dr.Justin Williams</h5> 
                                    <p class="text-muted">MS Psychology</p>                                    
                                    <p class="text-center font-14">4 years experience in Apollo Hospital</p>
                                    <button type="button" class="btn btn-sm btn-outline-primary" onclick="location.href='../hospital/doctor-profile'">View Profile</button>
                                </div><!--end card-body-->                                                                     
                            </div><!--end card-->
                        </div><!--end col-->         
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">                                                            
                                <div class="card-body text-center">  
                                    <div class="text-right">                                                       
                                        <a href="#" class="mr-2" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg"><i class="fas fa-edit text-info font-16"></i></a>
                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                    </div>                                    
                                    <img src="{{ URL::asset('assets/images/users/dr-6.jpg')}}" alt="user" class="rounded-circle mt-n3">
                                    <h5 class="mb-1 client-name">Dr.Wendy Keen</h5> 
                                    <p class="text-muted">MD Orthopedic</p>                                    
                                    <p class="text-center font-14">4 years experience in Apollo Hospital</p>
                                    <button type="button" class="btn btn-sm btn-outline-primary" onclick="location.href='../hospital/doctor-profile'">View Profile</button>
                                </div><!--end card-body-->                                                                     
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card">                               
                                <div class="card-body text-center"> 
                                    <div class="text-right">                                                       
                                        <a href="#" class="mr-2" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg"><i class="fas fa-edit text-info font-16"></i></a>
                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                    </div>                                    
                                    <img src="{{ URL::asset('assets/images/users/dr-1.jpg')}}" alt="user" class="rounded-circle mt-n3">
                                    <h5 class="mb-1 client-name">Dr.Helen White</h5> 
                                    <p class="text-muted">MS Cardiology</p>                                    
                                    <p class="text-center font-14">3 years experience in Apollo Hospital</p>
                                    <button type="button" class="btn btn-sm btn-outline-primary" onclick="location.href='../hospital/doctor-profile'">View Profile</button>
                                </div><!--end card-body-->                                                                     
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card">                               
                                <div class="card-body text-center"> 
                                    <div class="text-right">                                                       
                                        <a href="#" class="mr-2" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg"><i class="fas fa-edit text-info font-16"></i></a>
                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                    </div>                                    
                                    <img src="{{ URL::asset('assets/images/users/dr-2.jpg')}}" alt="user" class="rounded-circle mt-n3">
                                    <h5 class="mb-1 client-name">Dr.Thomas Fant</h5> 
                                    <p class="text-muted">MD Neurology</p>                                    
                                    <p class="text-center font-14">10 years experience in Apollo Hospital</p>
                                    <button type="button" class="btn btn-sm btn-outline-primary" onclick="location.href='../hospital/doctor-profile'">View Profile</button>
                                </div><!--end card-body-->                                                                     
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card">                               
                                <div class="card-body text-center"> 
                                    <div class="text-right">                                                       
                                        <a href="#" class="mr-2" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg"><i class="fas fa-edit text-info font-16"></i></a>
                                        <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                    </div>                                    
                                    <img src="{{ URL::asset('assets/images/users/dr-5.jpg')}}" alt="user" class="rounded-circle mt-n3">
                                    <h5 class="mb-1 client-name">Dr.Justin Williams</h5> 
                                    <p class="text-muted">MS Psychology</p>                                    
                                    <p class="text-center font-14">4 years experience in Apollo Hospital</p>
                                    <button type="button" class="btn btn-sm btn-outline-primary" onclick="location.href='../hospital/doctor-profile'">View Profile</button>
                                </div><!--end card-body-->                                                                     
                            </div><!--end card-->
                        </div><!--end col-->         
                    </div><!--end row-->

                </div><!-- container -->
@stop
