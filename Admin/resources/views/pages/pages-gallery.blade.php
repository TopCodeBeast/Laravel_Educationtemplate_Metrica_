@extends('layouts.master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('headerStyle')
 <link href="{{ URL::asset('plugins/filter/magnific-popup.css')}}" rel="stylesheet" type="text/css" />
@stop

@section('content')
 <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                                 @component('common-components.breadcrumb')
                                 @slot('title') Gallery @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Pages @endslot
                                 @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <ul class="col container-filter categories-filter mb-0" id="filter">
                                            <li><a class="categories active" data-filter="*">All</a></li>
                                            <li><a class="categories" data-filter=".branding">Branding</a></li>
                                            <li><a class="categories" data-filter=".design">Design</a></li>
                                            <li><a class="categories" data-filter=".photo">Photo</a></li>
                                            <li><a class="categories" data-filter=".coffee">coffee</a></li>
                                        </ul>
                                    </div><!-- End portfolio  -->
                                </div><!--end card-body-->
                            </div><!--end card-->
                            
                            <div class="card">
                                <div class="card-body">
                                    <div class="row container-grid nf-col-3  projects-wrapper">
                                        <div class="col-lg-4 col-md-6 p-0 nf-item branding design coffee spacing">
                                            <div class="item-box">
                                                <a class="cbox-gallary1 mfp-image" href="{{ URL::asset('assets/images/small/img-1.jpg')}}" title="Consequat massa quis">
                                                    <img class="item-container " src="{{ URL::asset('assets/images/small/img-1.jpg')}}" alt="7" />
                                                    <div class="item-mask">
                                                        <div class="item-caption">
                                                            <h5 class="text-white">Consequat massa quis</h5>
                                                            <p class="text-white">Branding, Design, Coffee</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div><!--end item-box-->
                                        </div><!--end col-->
                        
                                        <div class="col-lg-4 col-md-6 p-0 nf-item photo spacing">
                                            <div class="item-box">
                                                <a class="cbox-gallary1 mfp-image" href="{{ URL::asset('assets/images/small/img-2.jpg')}}" title="Vivamus elementum semper">
                                                    <img class="item-container mfp-fade" src="{{ URL::asset('assets/images/small/img-2.jpg')}}" alt="2" />
                                                    <div class="item-mask">
                                                        <div class="item-caption">
                                                            <h5 class="text-light">Vivamus elementum semper</h5>
                                                            <p class="text-light">Photo</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div><!--end item-box-->
                                        </div><!--end col-->
                        
                                        <div class="col-lg-4 col-md-6 p-0 nf-item branding coffee spacing">
                                            <div class="item-box">
                                                <a class="cbox-gallary1 mfp-image" href="{{ URL::asset('assets/images/small/img-3.jpg')}}" title="Quisque rutrum">
                                                    <img class="item-container" src="{{ URL::asset('assets/images/small/img-3.jpg')}}" alt="4" />
                                                    <div class="item-mask">
                                                        <div class="item-caption">
                                                            <h5 class="text-light">Quisque rutrum</h5>
                                                            <p class="text-light">Branding, Design, Coffee</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div><!--end item-box-->
                                        </div><!--end col-->
                        
                                        <div class="col-lg-4 col-md-6 p-0 nf-item branding design spacing">
                                            <div class="item-box">
                                                <a class="cbox-gallary1 mfp-image" href="{{ URL::asset('assets/images/small/img-4.jpg')}}" title="Tellus eget condimentum">
                                                    <img class="item-container" src="{{ URL::asset('assets/images/small/img-4.jpg')}}" alt="5" />
                                                    <div class="item-mask">
                                                        <div class="item-caption">
                                                            <h5 class="text-light">Tellus eget condimentum</h5>
                                                            <p class="text-light">Design</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div><!--end item-box-->
                                        </div><!--end col-->
                        
                                        <div class="col-lg-4 col-md-6 p-0 nf-item branding design spacing">
                                            <div class="item-box">
                                                <a class="cbox-gallary1 mfp-image" href="{{ URL::asset('assets/images/small/img-5.jpg')}}" title="Nullam quis ant">
                                                    <img class="item-container" src="{{ URL::asset('assets/images/small/img-5.jpg')}}" alt="6" />
                                                    <div class="item-mask">
                                                        <div class="item-caption">
                                                            <h5 class="text-light">Nullam quis ant</h5>
                                                            <p class="text-light">Branding, Design</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div><!--end item-box-->
                                        </div><!--end col-->
                        
                                        <div class="col-lg-4 col-md-6 p-0 nf-item photo spacing">
                                            <div class="item-box">
                                                <a class="cbox-gallary1 mfp-image" href="{{ URL::asset('assets/images/small/img-6.jpg')}}" title="Sed fringilla mauris">
                                                    <img class="item-container" src="{{ URL::asset('assets/images/small/img-6.jpg')}}" alt="1" />
                                                    <div class="item-mask">
                                                        <div class="item-caption">
                                                            <h5 class="text-light">Sed fringilla mauris</h5>
                                                            <p class="text-light">Photo</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div><!--end item-box-->
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row--> 

                </div><!-- container -->

@stop

@section('footerScript')
        <script src="{{ URL::asset('plugins/filter/isotope.pkgd.min.js')}}"></script>
        <script src="{{ URL::asset('plugins/filter/masonry.pkgd.min.js')}}"></script>
        <script src="{{ URL::asset('plugins/filter/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{ URL::asset('assets/pages/jquery.gallery.init.js')}}"></script>
@stop