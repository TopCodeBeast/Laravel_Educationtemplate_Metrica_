@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('headerStyle')
<!--Chartist Chart CSS -->
<link rel="stylesheet" href="{{ URL::asset('plugins/chartist/css/chartist.min.css')}}">
@stop

@section('content')
 <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                              @component('common-components.breadcrumb')
                                 @slot('title') Chartist Charts @endslot
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
                                    <h4 class="mt-0 header-title">Overlapping bars on mobile</h4>
                                    <p class="text-muted  mb-3 d-inline-block text-truncate w-100">This example makes use of label
                                        interpolation and the seriesBarDistance property that allows you to make
                                        bars overlap over each other.
                                    </p>
                                    <div id="overlapping-bars" class="ct-chart ct-golden-section drop-shadow"></div>
                                </div><!--end card-body-->
                            </div><!--end-card-->
                        </div> <!-- end col -->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">    
                                    <h4 class="mt-0 header-title">Animating a Donut with Svg.animate</h4>
                                    <p class="text-muted  mb-3 d-inline-block text-truncate w-100">Although it'd be also possible to
                                        achieve this animation with CSS, with some minor suboptimal things,
                                        here's an example of how to animate donut charts using
                                        Chartist.Svg.animate and SMIL.</p>    
                                    <div id="animating-donut" class="ct-chart ct-golden-section drop-shadow"></div>    
                                </div><!--end card-body-->
                            </div><!--end-card-->
                        </div> <!-- end col -->                        
                    </div> <!-- end row -->
    
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">    
                                    <h4 class="mt-0 header-title">Stacked bar chart</h4>
                                    <p class="text-muted  mb-3 d-inline-block text-truncate w-100">You can also set your bar chart to
                                        stack the series bars on top of each other easily by using the stackBars
                                        property in your configuration.</p>    
                                    <div id="stacked-bar-chart" class="ct-chart ct-golden-section drop-shadow"></div>
                                </div><!--end card-body-->
                            </div><!--end-card-->
                        </div> <!-- end col -->
                        
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">    
                                    <h4 class="mt-0 header-title">Simple pie chart</h4>
                                    <p class="text-muted  mb-3 d-inline-block text-truncate w-100">A very simple pie chart with label
                                        interpolation to show percentage instead of the actual data series
                                        value.
                                    </p>    
                                    <div id="simple-pie" class="ct-chart ct-golden-section simple-pie-chart-chartist drop-shadow"></div>    
                                </div><!--end card-body-->
                            </div><!--end-card-->
                        </div> <!-- end col -->
                    </div> <!-- end row -->
    
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">    
                                    <h4 class="mt-0 header-title">Advanced Smil Animations</h4>
                                    <p class="text-muted  mb-3 d-inline-block text-truncate w-100">Chartist provides a simple API to animate the elements on the Chart using SMIL.</p>
    
                                    <div id="smil-animations" class="ct-chart ct-golden-section drop-shadow"></div>    
                                </div><!--end card-body-->
                            </div><!--end-card-->
                        </div> <!-- end col -->
    
                        <div class="col-lg-6">
                            <div class="card ">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Simple line chart</h4>
                                    <p class="text-muted mb-3 d-inline-block text-truncate w-100">An example of a simple line chart with three series. You can edit this example in realtime.</p>        
                                    <div id="simple-line-chart" class="ct-chart ct-golden-section drop-shadow"></div>        
                                </div><!--end card-body-->
                            </div><!--end-card-->
                        </div> <!-- end col -->
                    </div> <!-- end row -->
    
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Line Scatter Diagram</h4>
                                    <p class="text-muted  mb-3 d-inline-block text-truncate w-100">This advanced example uses a line chart
                                        to draw a scatter diagram. The data object is created with a functional
                                        style random mechanism.
                                    </p>
                                    <div id="scatter-diagram" class="ct-chart ct-golden-section drop-shadow"></div>        
                                </div><!--end card-body-->
                            </div><!--end-card-->
                        </div> <!-- end col -->
    
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Line chart with area</h4>
                                    <p class="text-muted mb-3 d-inline-block text-truncate w-100">This chart uses the showArea option to
                                        draw line, dots but also an area shape. Use the low option to specify a
                                        fixed lower bound that will make the area expand.
                                    </p>        
                                    <div id="chart-with-area" class="ct-chart ct-golden-section drop-shadow"></div>        
                                </div><!--end card-body-->
                            </div><!--end-card-->
                        </div> <!-- end col -->
                    </div> <!-- end row --> 

                </div><!-- container -->
@stop

@section('footerScript')
<!--Chartist Chart-->
<script src="{{ URL::asset('plugins/chartist/js/chartist.min.js')}}"></script>
<script src="{{ URL::asset('plugins/chartist/js/chartist-plugin-tooltip.min.js')}}"></script>
<script src="{{ URL::asset('assets/pages/jquery.chartist.init.js')}}"></script>
@stop