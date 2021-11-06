@extends('layouts.master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('headerStyle')
<!-- jvectormap -->
<link href="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet">
@stop

@section('content')
    <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                             @component('common-components.breadcrumb')
                                 @slot('title') Vector Maps @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') UI Kit @endslot
                                 @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">World Map</h4>
                                    <p class="text-muted mb-3">Example of vector map.</p>        
                                    <div id="world-map-markers" class="drop-shadow-map" style="height: 400px"></div>        
                                </div><!--end card-body-->
                            </div> <!--end card-->
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">USA Map</h4>
                                    <p class="text-muted mb-3">Example of vector map.</p>        
                                    <div id="usa" class="drop-shadow-map" style="height: 400px"></div>        
                                </div><!--end card-body-->
                            </div> <!--end card-->
                        </div> <!-- end col -->
    
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Canada Map</h4>
                                    <p class="text-muted mb-3">Example of vector map.</p>        
                                    <div id="canada" class="drop-shadow-map" style="height: 400px"></div>        
                                </div><!--end card-body-->
                            </div> <!--end card-->
                        </div> <!-- end col -->
                    </div> <!-- end row -->        
    
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">UK Map</h4>
                                    <p class="text-muted  mb-3">Example of vector map.</p>        
                                    <div id="uk" class="drop-shadow-map" style="height: 400px"></div>        
                                </div><!--end card-body-->
                            </div> <!--end card-->
                        </div> <!-- end col -->
    
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Chicago Map</h4>
                                    <p class="text-muted mb-3">Example of vector map.</p>        
                                    <div id="chicago" class="drop-shadow-map" style="height: 400px"></div>        
                                </div><!--end card-body-->
                            </div> <!--end card-->
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                </div><!-- container -->
@stop

@section('footerScript')
        <script src="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
        <script src="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
        <script src="{{ URL::asset('plugins/jvectormap/gdp-data.js')}}"></script>
        <script src="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-ca-lcc.js')}}"></script>
        <script src="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-us-aea-en.js')}}"></script>
        <script src="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-uk-mill-en.js')}}"></script>     
        <script src="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-us-il-chicago-mill-en.js')}}"></script>
        <script src="{{ URL::asset('assets/pages/jquery.jvectormap.init.js')}}"></script>
@stop