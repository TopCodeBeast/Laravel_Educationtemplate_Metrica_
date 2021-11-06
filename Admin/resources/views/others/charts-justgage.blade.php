@extends('layouts.master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            
                             @component('common-components.breadcrumb')
                                 @slot('title') Justgage Charts @endslot
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
                                    <h4 class="mt-0 header-title">Defaults</h4>
                                    <p class="text-muted mb-3"></p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div id="gg1" class="gauge drop-shadow"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div id="gg2" class="gauge drop-shadow" data-value="25"></div>
                                        </div>
                                    </div>                                                                                             
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">   
                                    <button type="button" class="btn btn-gradient-primary float-right" id="Counter_2_refresh">Random Refresh</button>                                            
                                    <h4 class="mt-0 header-title">Counter</h4> 
                                    <p class="text-muted mb-3"></p>
                                    <div id="Counter_2" class="gauge drop-shadow"></div>                                                                         
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body"> 
                                    <button type="button" class="btn btn-gradient-primary float-right" id="Animation_Events_refresh">Refresh Gauge</button>           
                                    <h4 class="mt-0 header-title">Animation Events</h4>
                                    <p class="text-muted mb-3"></p>
                                    <div id="Animation_Events" class="gauge drop-shadow"></div>   
                                    <p class="text-muted">After every animation end, function will log it below.</p>
                                    <p id="log"></p>                                                                                          
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">   
                                    <a href="#" class="btn btn-gradient-primary float-right" id="Counter_refresh">Random Refresh</a>          
                                    <h4 class="mt-0 header-title">Custom Counter</h4>
                                    <p class="text-muted mb-3"></p>
                                    <div id="Counter" class="gauge drop-shadow"></div>                                                                                                                                             
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->                            
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body"> 
                                    <button type="button" class="btn btn-gradient-primary float-right" id="Custom_wether_refresh">Refresh Gauge</button>           
                                    <h4 class="mt-0 header-title">Animation Events</h4>
                                    <p class="text-muted mb-3"></p>
                                    <div id="Custom_wether" class="gauge drop-shadow"></div>                                                                                        
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">   
                                    <a href="#" class="btn btn-gradient-primary float-right" id="font_option_refresh">Random Refresh</a>          
                                    <h4 class="mt-0 header-title">Font Option</h4>
                                    <p class="text-muted mb-4"></p>
                                    <div id="font_option" class="gauge drop-shadow"></div>                                                                                                                                            
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->                            
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">           
                                    <h4 class="mt-0 header-title">Justgage Half Size</h4>
                                    <p class="text-muted mb-3"></p>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="size-3">
                                                <div id="jg1" class="gauge drop-shadow"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="size-2">
                                                <div id="jg2" class="gauge drop-shadow"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="size-1">
                                                <div id="jg3" class="gauge drop-shadow"></div>
                                            </div>
                                        </div>
                                    </div>                                                                                     
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">           
                                    <h4 class="mt-0 header-title">Justgage Full Size</h4>
                                    <p class="text-muted mb-3"></p>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="size-1">
                                                <div id="jg4" class="gauge drop-shadow"></div>
                                            </div>                                               
                                        </div>
                                        <div class="col-md-4">
                                            <div class="size-2">
                                                <div id="jg5" class="gauge drop-shadow"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="size-3">
                                                <div id="jg6" class="gauge drop-shadow"></div>
                                            </div>
                                        </div>
                                    </div>                                                                                     
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!-- container -->
@stop

@section('footerScript')
<script src="{{ URL::asset('plugins/justgage/justgage.js')}}"></script>
<script src="{{ URL::asset('plugins/justgage/raphael-2.1.4.min.js')}}"></script>
<script src="{{ URL::asset('assets/pages/jquery.justgage.init.js')}}"></script>     
@stop