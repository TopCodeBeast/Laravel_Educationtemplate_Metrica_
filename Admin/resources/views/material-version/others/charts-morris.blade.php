@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('headerStyle')
        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="{{ URL::asset('plugins/morris/morris.css')}}">

@stop

@section('content')
 <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                              @component('common-components.breadcrumb')
                                 @slot('title') Morris Charts @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') UI Kit @endslot
                                 @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Bar Chart</h4>
                                    <p class="text-muted mb-3 d-inline-block text-truncate w-100">Create bar charts using
                                        Morris.Bar(options), where options is an object containing the
                                        configuration options.
                                    </p>        
                                    <div id="morris-bar-example" class="drop-shadow" style="height: 300px"></div>        
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Donut Chart</h4>
                                    <p class="text-muted mb-3 d-inline-block text-truncate w-100">This really couldn't be easier. Create
                                        a Donut chart using Morris.Donut(options).
                                    </p>        
                                    <div id="morris-donut-example" class="drop-shadow" style="height: 300px"></div>        
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div> <!-- end row -->
    
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Area Chart</h4>
                                    <p class="text-muted mb-3 d-inline-block text-truncate w-100">Create an area chart using
                                        Morris.Area(options). Area charts take all the same options as line
                                        charts.
                                    </p>        
                                    <div id="morris-area-example" class="drop-shadow" style="height: 300px"></div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Line Chart</h4>
                                    <p class="text-muted mb-3 d-inline-block text-truncate w-100">The public API is terribly simple. It's
                                        just one function: Morris.Line (options), where options is an object
                                        containing some of the configuration options.
                                    </p>        
                                    <div id="morris-line-example" class="drop-shadow" style="height: 300px"></div>        
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->                            
                    </div> <!-- end row -->

                </div><!-- container -->

@stop

@section('footerScript')
<!--Morris Chart-->
        <script src="{{ URL::asset('plugins/morris/morris.min.js')}}"></script>
        <script src="{{ URL::asset('plugins/raphael/raphael.min.js')}}"></script>
        <script src="{{ URL::asset('assets/pages/jquery.morris.init.js')}}"></script>
        
@stop