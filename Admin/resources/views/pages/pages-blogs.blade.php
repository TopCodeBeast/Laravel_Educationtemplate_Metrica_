@extends('layouts.master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
   <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                             @component('common-components.breadcrumb')
                                 @slot('title') Blogs @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Pages @endslot
                                 @endcomponent
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="blog-card">
                                        <img src="{{ URL::asset('assets/images/small/img-9.jpg')}}" alt="" class="img-fluid"/>
                                        <span class="badge badge-purple px-3 py-2 bg-soft-secondary font-weight-semibold mt-3">Photography</span>   
                                        <h4 class="my-3">
                                            <a href="" class="">There are many variations of passages of Lorem</a>
                                        </h4>
                                        <p class="text-muted">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Cum sociis natoque penatibus et magnis.</p>
                                        <hr class="hr-dashed">
                                        <div class="d-flex justify-content-between">
                                            <div class="meta-box">
                                                <div class="media">
                                                    <img src="{{ URL::asset('assets/images/users/user-1.png')}}" alt="" class="thumb-sm rounded-circle mr-2">                                       
                                                    <div class="media-body align-self-center text-truncate">
                                                        <h6 class="mt-0 mb-1 text-dark">Donald Gardner</h6>
                                                        <ul class="p-0 list-inline mb-0">
                                                            <li class="list-inline-item">26 mars 2020</li>
                                                            <li class="list-inline-item">by <a href="">admin</a></li>
                                                        </ul>
                                                    </div><!--end media-body-->
                                                </div>                                            
                                            </div><!--end meta-box-->
                                            <div class="align-self-center">
                                                <a href="#" class="text-primary">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                                            </div>
                                        </div>                                        
                                    </div><!--end blog-card--> 
                                                               
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="blog-card">
                                        <img src="{{ URL::asset('assets/images/small/img-10.jpg')}}" alt="" class="img-fluid"/>
                                        <span class="badge badge-purple px-3 py-2 bg-soft-pink font-weight-semibold mt-3">Fruit</span>   
                                        <h4 class="my-3">
                                            <a href="" class="">The standard chunk of Lorem Ipsum used since</a>
                                        </h4>
                                        <p class="text-muted">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Cum sociis natoque penatibus et magnis.</p>
                                        <hr class="hr-dashed">
                                        <div class="d-flex justify-content-between">
                                            <div class="meta-box">
                                                <div class="media">
                                                    <img src="{{ URL::asset('assets/images/users/user-4.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">                                       
                                                    <div class="media-body align-self-center text-truncate">
                                                        <h6 class="mt-0 mb-1 text-dark">Susan Brady</h6>
                                                        <ul class="p-0 list-inline mb-0">
                                                            <li class="list-inline-item">01 Feb 2020</li>
                                                            <li class="list-inline-item">by <a href="">admin</a></li>
                                                        </ul>
                                                    </div><!--end media-body-->
                                                </div>                                            
                                            </div><!--end meta-box-->
                                            <div class="align-self-center">
                                                <a href="#" class="text-primary">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                                            </div>
                                        </div>                                        
                                    </div><!--end blog-card--> 
                                                               
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="blog-card">
                                        <img src="{{ URL::asset('assets/images/small/img-11.jpg')}}" alt="" class="img-fluid"/>
                                        <span class="badge badge-purple px-3 py-2 bg-soft-purple font-weight-semibold mt-3">Safari</span>   
                                        <h4 class="my-3">
                                            <a href="" class="">Contrary to popular belief, Lorem Ipsum is</a>
                                        </h4>
                                        <p class="text-muted">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Cum sociis natoque penatibus et magnis.</p>
                                        <hr class="hr-dashed">
                                        <div class="d-flex justify-content-between">
                                            <div class="meta-box">
                                                <div class="media">
                                                    <img src="{{ URL::asset('assets/images/users/user-3.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">                                       
                                                    <div class="media-body align-self-center text-truncate">
                                                        <h6 class="mt-0 mb-1 text-dark">Brandon Perez</h6>
                                                        <ul class="p-0 list-inline mb-0">
                                                            <li class="list-inline-item">15 March 2020</li>
                                                            <li class="list-inline-item">by <a href="">admin</a></li>
                                                        </ul>
                                                    </div><!--end media-body-->
                                                </div>                                            
                                            </div><!--end meta-box-->
                                            <div class="align-self-center">
                                                <a href="#" class="text-primary">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                                            </div>
                                        </div>                                        
                                    </div><!--end blog-card--> 
                                                               
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->                          
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="blog-card">
                                        <img src="{{ URL::asset('assets/images/small/img-12.jpg')}}" alt="" class="img-fluid"/>
                                        <span class="badge badge-purple px-3 py-2 bg-soft-success font-weight-semibold mt-3">Food</span>   
                                        <h4 class="my-3">
                                            <a href="" class="">Many desktop publishing packages web</a>
                                        </h4>
                                        <p class="text-muted">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Cum sociis natoque penatibus et magnis.</p>
                                        <hr class="hr-dashed">
                                        <div class="d-flex justify-content-between">
                                            <div class="meta-box">
                                                <div class="media">
                                                    <img src="{{ URL::asset('assets/images/users/user-7.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">                                       
                                                    <div class="media-body align-self-center text-truncate">
                                                        <h6 class="mt-0 mb-1 text-dark">Jen Harting</h6>
                                                        <ul class="p-0 list-inline mb-0">
                                                            <li class="list-inline-item">12 Dec 2020</li>
                                                            <li class="list-inline-item">by <a href="">admin</a></li>
                                                        </ul>
                                                    </div><!--end media-body-->
                                                </div>                                            
                                            </div><!--end meta-box-->
                                            <div class="align-self-center">
                                                <a href="#" class="text-primary">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                                            </div>
                                        </div>                                        
                                    </div><!--end blog-card--> 
                                                               
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="blog-card">
                                        <img src="{{ URL::asset('assets/images/small/img-13.jpg')}}" alt="" class="img-fluid"/>
                                        <span class="badge badge-purple px-3 py-2 bg-soft-warning font-weight-semibold mt-3">Drink</span>   
                                        <h4 class="my-3">
                                            <a href="" class="">words which don't look even slightly</a>
                                        </h4>
                                        <p class="text-muted">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Cum sociis natoque penatibus et magnis.</p>
                                        <hr class="hr-dashed">
                                        <div class="d-flex justify-content-between">
                                            <div class="meta-box">
                                                <div class="media">
                                                    <img src="{{ URL::asset('assets/images/users/user-5.png')}}" alt="" class="thumb-sm rounded-circle mr-2">                                       
                                                    <div class="media-body align-self-center text-truncate">
                                                        <h6 class="mt-0 mb-1 text-dark">Charles Woodall</h6>
                                                        <ul class="p-0 list-inline mb-0">
                                                            <li class="list-inline-item">26 June 2020</li>
                                                            <li class="list-inline-item">by <a href="">admin</a></li>
                                                        </ul>
                                                    </div><!--end media-body-->
                                                </div>                                            
                                            </div><!--end meta-box-->
                                            <div class="align-self-center">
                                                <a href="#" class="text-primary">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                                            </div>
                                        </div>                                        
                                    </div><!--end blog-card--> 
                                                               
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="blog-card">
                                        <img src="{{ URL::asset('assets/images/small/img-14.jpg')}}" alt="" class="img-fluid"/>
                                        <span class="badge badge-purple px-3 py-2 bg-soft-primary font-weight-semibold mt-3">Fashion</span>   
                                        <h4 class="my-3">
                                            <a href="" class="">It is a long established fact that a reader will be</a>
                                        </h4>
                                        <p class="text-muted">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Cum sociis natoque penatibus et magnis.</p>
                                        <hr class="hr-dashed">
                                        <div class="d-flex justify-content-between">
                                            <div class="meta-box">
                                                <div class="media">
                                                    <img src="{{ URL::asset('assets/images/users/user-8.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">                                       
                                                    <div class="media-body align-self-center text-truncate">
                                                        <h6 class="mt-0 mb-1 text-dark">Donald Gardner</h6>
                                                        <ul class="p-0 list-inline mb-0">
                                                            <li class="list-inline-item">26 mars 2020</li>
                                                            <li class="list-inline-item">by <a href="">admin</a></li>
                                                        </ul>
                                                    </div><!--end media-body-->
                                                </div>                                            
                                            </div><!--end meta-box-->
                                            <div class="align-self-center">
                                                <a href="#" class="text-primary">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                                            </div>
                                        </div>                                        
                                    </div><!--end blog-card--> 
                                                               
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->                          
                    </div><!--end row-->

                </div><!-- container -->
@stop
