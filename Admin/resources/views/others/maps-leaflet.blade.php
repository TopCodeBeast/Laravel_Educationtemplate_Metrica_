@extends('layouts.master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('headerStyle')
<!-- <link href="../plugins/leaflet/leaflet.css" rel="stylesheet"> -->
<link href="{{ URL::asset('plugins/leaflet/leaflet.css')}}" rel="stylesheet" type="text/css" />
@stop

@section('content')

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            
                             @component('common-components.breadcrumb')
                                 @slot('title') Leaflet @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') UI Kit @endslot
                                 @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Leaflet Quick Start Guide</h4>
                                    <p class="text-muted mb-3">Example of Leaflet map.</p>        
                                    <div id="Leaf_default" class="" style="height: 400px"></div>        
                                </div><!--end card-body-->
                            </div> <!--end card-->
                        </div> <!-- end col -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Bounds Extend</h4>
                                    <p class="text-muted mb-3">Example of Leaflet map.</p>        
                                    <div id="Bounds_Extend" class="" style="height: 400px"></div>        
                                </div><!--end card-body-->
                            </div> <!--end card-->
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Vector Bounds</h4>
                                    <p class="text-muted mb-3">Example of Leaflet map.</p>        
                                    <div id="Vector_bounds" class="" style="height: 400px"></div>        
                                </div><!--end card-body-->
                            </div> <!--end card-->
                        </div> <!-- end col -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Moov Canvas</h4>
                                    <p class="text-muted mb-3">Example of Leaflet map.</p>        
                                    <div id="Moov_Canvas" class="" style="height: 400px"></div>        
                                </div><!--end card-body-->
                            </div> <!--end card-->
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Array Map</h4>
                                    <p class="text-muted mb-3">Example of Leaflet map.</p>        
                                    <div id="Array_Map" class="" style="height: 400px"></div>        
                                </div><!--end card-body-->
                            </div> <!--end card-->
                        </div> <!-- end col -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Simple Vector Map</h4>
                                    <p class="text-muted mb-3">Example of Leaflet map.</p>        
                                    <div id="V_Simple" class="" style="height: 400px"></div>        
                                </div><!--end card-body-->
                            </div> <!--end card-->
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                </div><!-- container -->
@stop

@section('footerScript')

        <script src="{{ URL::asset('plugins/leaflet/leaflet.js')}}"></script> 
        <script src="{{ URL::asset('assets/pages/jquery.leaflet-map.init.js')}}"></script> 
@stop