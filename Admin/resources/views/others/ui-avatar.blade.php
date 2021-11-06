@extends('layouts.master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
 <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                             @component('common-components.breadcrumb')
                                 @slot('title') Avatar @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') UI Kit @endslot
                                 @endcomponent
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Avatar</h4>
                                    <div class="media">
                                        <a class="" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-1.jpg')}}" alt="user" class="rounded-circle thumb-md">
                                        </a>                                                
                                        <div class="media-body align-self-center ml-3">
                                            <p class="font-14 font-weight-bold mb-0">John Tamez</p>
                                            <p class="mb-0 font-12 text-muted">Johntamez@gmail.com</p>
                                        </div>
                                    </div><!--end media-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Group Avatar</h4>
                                    <div class="img-group">
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-3.jpg')}}" alt="user" class="thumb-md rounded-circle">
                                        </a>
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-5.jpg')}}" alt="user" class="thumb-md rounded-circle">
                                        </a>
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-10.jpg')}}" alt="user" class="thumb-md rounded-circle">
                                        </a>
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-4.jpg')}}" alt="user" class="thumb-md rounded-circle">
                                        </a>
                                    </div><!--end img-group-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Avatar With Badge</h4>
                                    <div class="img-group">
                                        <a class="user-avatar mr-2" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-10.jpg')}}" alt="user" class="rounded-circle thumb-md">
                                            <span class="avatar-badge online"></span>
                                        </a>
                                        <a class="user-avatar mr-2" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-3.jpg')}}" alt="user" class="rounded-circle thumb-md">
                                            <span class="avatar-badge offline"></span>
                                        </a>
                                        <a class="user-avatar mr-2" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-4.jpg')}}" alt="user" class="rounded-circle thumb-md">
                                            <span class="avatar-badge offline"></span>
                                        </a>
                                        <a class="user-avatar mr-2" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-1.png')}}" alt="user" class="rounded-circle thumb-md">
                                            <span class="avatar-badge online"></span>
                                        </a>
                                    </div><!--end img-group-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->                            
                    </div><!--end row-->   
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Avatar With Tooltip</h4>
                                    <div class="media">
                                        <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Russell Jones">
                                            <img src="{{ URL::asset('assets/images/users/user-4.jpg')}}" alt="user" class="rounded-circle thumb-md">
                                        </a>
                                        <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Otis Gomez">
                                            <img src="{{ URL::asset('assets/images/users/user-4.jpg')}}" alt="user" class="rounded-circle thumb-md">
                                        </a>
                                        <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Frank Osborn">
                                            <img src="{{ URL::asset('assets/images/users/user-4.jpg')}}" alt="user" class="rounded-circle thumb-md">
                                        </a>
                                        <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Dorothy Key">
                                            <img src="{{ URL::asset('assets/images/users/user-2.png')}}" alt="user" class="rounded-circle thumb-md">
                                        </a>
                                        <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Joseph Cross">
                                            <img src="{{ URL::asset('assets/images/users/user-2.png')}}" alt="user" class="rounded-circle thumb-md">
                                        </a>
                                        <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Shari Krieger">
                                            <img src="{{ URL::asset('assets/images/users/user-2.png')}}" alt="user" class="rounded-circle thumb-md">
                                        </a>
                                    </div><!--end media-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Square Shape Avatar</h4>
                                    <div class="media">
                                        <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Russell Jones">
                                            <img src="{{ URL::asset('assets/images/users/user-9.jpg')}}" alt="user" class="rounded thumb-md">
                                        </a>
                                        <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Otis Gomez">
                                            <img src="{{ URL::asset('assets/images/users/user-9.jpg')}}" alt="user" class="rounded thumb-md">
                                        </a>
                                        <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Frank Osborn">
                                            <img src="{{ URL::asset('assets/images/users/user-9.jpg')}}" alt="user" class="rounded thumb-md">
                                        </a>
                                        <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Dorothy Key">
                                            <img src="{{ URL::asset('assets/images/users/user-1.png')}}" alt="user" class="rounded thumb-md">
                                        </a>
                                        <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Joseph Cross">
                                            <img src="{{ URL::asset('assets/images/users/user-1.png')}}" alt="user" class="rounded thumb-md">
                                        </a>
                                        <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Shari Krieger">
                                            <img src="{{ URL::asset('assets/images/users/user-1.png')}}" alt="user" class="rounded thumb-md">
                                        </a>
                                    </div><!--end media-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->


                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Avatar Size</h4>
                                    <a class="user-avatar mr-2" href="#">
                                        <img src="{{ URL::asset('assets/images/users/user-10.jpg')}}" alt="user" class="thumb-xl rounded-circle">
                                    </a>
                                    <a class="user-avatar mr-2" href="#">
                                        <img src="{{ URL::asset('assets/images/users/user-10.jpg')}}" alt="user" class="thumb-lg rounded-circle">
                                    </a>
                                    <a class="user-avatar mr-2" href="#">
                                        <img src="{{ URL::asset('assets/images/users/user-10.jpg')}}" alt="user" class="thumb-md rounded-circle">
                                    </a>
                                    <a class="user-avatar mr-2" href="#">
                                        <img src="{{ URL::asset('assets/images/users/user-10.jpg')}}" alt="user" class="thumb-sm rounded-circle">
                                    </a>
                                    <a class="user-avatar mr-2" href="#">
                                        <img src="{{ URL::asset('assets/images/users/user-10.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                    </a>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Avatar Size</h4>
                                    <a class="user-avatar mr-2" href="#">
                                        <img src="{{ URL::asset('assets/images/users/user-5.jpg')}}" alt="user" class="thumb-xl rounded">
                                    </a>
                                    <a class="user-avatar mr-2" href="#">
                                        <img src="{{ URL::asset('assets/images/users/user-5.jpg')}}" alt="user" class="thumb-lg rounded">
                                    </a>
                                    <a class="user-avatar mr-2" href="#">
                                        <img src="{{ URL::asset('assets/images/users/user-5.jpg')}}" alt="user" class="thumb-md rounded">
                                    </a>
                                    <a class="user-avatar mr-2" href="#">
                                        <img src="{{ URL::asset('assets/images/users/user-5.jpg')}}" alt="user" class="thumb-sm rounded">
                                    </a>
                                    <a class="user-avatar mr-2" href="#">
                                        <img src="{{ URL::asset('assets/images/users/user-5.jpg')}}" alt="user" class="thumb-xs rounded">
                                    </a>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Round Shape Avatar In Text</h4>
                                    <div class="media">
                                        <div class="avatar-box thumb-xl align-self-center mr-2">
                                            <span class="avatar-title bg-soft-success rounded-circle">MT</span>
                                        </div>
                                        <div class="avatar-box thumb-lg align-self-center mr-2">
                                            <span class="avatar-title bg-soft-pink rounded-circle">MT</span>
                                        </div>
                                        <div class="avatar-box thumb-md align-self-center mr-2">
                                            <span class="avatar-title bg-soft-purple rounded-circle">MT</span>
                                        </div>
                                        <div class="avatar-box thumb-sm align-self-center mr-2">
                                            <span class="avatar-title bg-soft-warning rounded-circle">MT</span>
                                        </div>
                                        <div class="avatar-box thumb-xs align-self-center">
                                            <span class="avatar-title bg-soft-info rounded-circle">MT</span>
                                        </div>
                                    </div><!--end media-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Square Shape Avatar In Text</h4>
                                    <div class="media">
                                        <div class="avatar-box thumb-xl align-self-center mr-2">
                                            <span class="avatar-title bg-soft-success rounded">MT</span>
                                        </div>
                                        <div class="avatar-box thumb-lg align-self-center mr-2">
                                            <span class="avatar-title bg-soft-pink rounded">MT</span>
                                        </div>
                                        <div class="avatar-box thumb-md align-self-center mr-2">
                                            <span class="avatar-title bg-soft-purple rounded">MT</span>
                                        </div>
                                        <div class="avatar-box thumb-sm align-self-center mr-2">
                                            <span class="avatar-title bg-soft-warning rounded">MT</span>
                                        </div>
                                        <div class="avatar-box thumb-xs align-self-center">
                                            <span class="avatar-title bg-soft-info rounded">MT</span>
                                        </div>
                                    </div><!--end media-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Round Shape Avatar In Icon</h4>
                                    <div class="media">
                                        <div class="avatar-box thumb-xl align-self-center mr-2">
                                            <span class="avatar-title bg-secondary rounded-circle"><i class="far fa-grin-alt"></i></span>
                                        </div>
                                        <div class="avatar-box thumb-lg align-self-center mr-2">
                                            <span class="avatar-title bg-warning rounded-circle"><i class="far fa-user"></i></span>
                                        </div>
                                        <div class="avatar-box thumb-md align-self-center mr-2">
                                            <span class="avatar-title bg-danger rounded-circle"><i class="fab fa-mailchimp"></i></span>
                                        </div>
                                        <div class="avatar-box thumb-sm align-self-center mr-2">
                                            <span class="avatar-title bg-purple rounded-circle"><i class="fas fa-user"></i></span>
                                        </div>
                                        <div class="avatar-box thumb-xs align-self-center">
                                            <span class="avatar-title bg-dark rounded-circle"><i class="fas fa-smile"></i></span>
                                        </div>
                                    </div><!--end media-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Square Shape Avatar In Icon</h4>
                                    <div class="media">
                                        <div class="avatar-box thumb-xl align-self-center mr-2">
                                            <span class="avatar-title bg-secondary rounded"><i class="far fa-grin-alt"></i></span>
                                        </div>
                                        <div class="avatar-box thumb-lg align-self-center mr-2">
                                            <span class="avatar-title bg-warning rounded"><i class="far fa-user"></i></span>
                                        </div>
                                        <div class="avatar-box thumb-md align-self-center mr-2">
                                            <span class="avatar-title bg-danger rounded"><i class="fab fa-mailchimp"></i></span>
                                        </div>
                                        <div class="avatar-box thumb-sm align-self-center mr-2">
                                            <span class="avatar-title bg-purple rounded"><i class="fas fa-user"></i></span>
                                        </div>
                                        <div class="avatar-box thumb-xs align-self-center">
                                            <span class="avatar-title bg-dark rounded"><i class="fas fa-smile"></i></span>
                                        </div>
                                    </div><!--end media-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                </div><!-- container -->
@stop
