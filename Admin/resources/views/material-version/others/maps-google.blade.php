@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
   <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                                 @component('common-components.breadcrumb')
                                 @slot('title') Google Map @endslot
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
                                    <h4 class="mt-0 header-title">Markers</h4>
                                    <p class="text-muted mb-3">Example of google maps.</p>        
                                    <div id="gmaps-markers" class="gmaps"></div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
    
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Overlays</h4>
                                    <p class="text-muted mb-3">Example of google maps.</p>        
                                    <div id="gmaps-overlay" class="gmaps"></div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div> <!-- end row -->
    
    
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Street View Panoramas</h4>
                                    <p class="text-muted mb-3">Example of google maps.</p>        
                                    <div id="panorama" class="gmaps-panaroma"></div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
    
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Map Types</h4>
                                    <p class="text-muted mb-3">Example of google maps.</p>        
                                    <div id="gmaps-types" class="gmaps"></div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div> <!-- end row -->
   

                </div><!-- container -->

@stop

@section('footerScript')
   <!-- google maps api -->
        <script src="https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>
        <!-- Gmaps file -->
        <script src="{{ URL::asset('plugins/gmaps/gmaps.min.js')}}"></script>
        <!-- demo codes -->
        <script src="{{ URL::asset('assets/pages/jquery.gmaps.init.js')}}"></script> 
@stop