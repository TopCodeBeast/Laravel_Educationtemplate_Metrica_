@extends('layouts.master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                              @component('common-components.breadcrumb')
                                 @slot('title') Flot Charts @endslot
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
                                    <h4 class="mt-0 header-title">Multiple Statistics</h4>
                                    <p class="text-muted mb-3 d-inline-block text-truncate w-100">Stacked chart not only shows the trends
                                        over time, you can also see the cumulative sum of all data.
                                    </p>  
                                    <div id="website-stats" style="height: 320px" class="flot-chart drop-shadow"></div>        
                                         
                                </div><!--end card-body-->
                            </div><!--end card-->
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Realtime Statistics</h4>
                                    <p class="text-muted mb-3 d-inline-block text-truncate w-100">You can update a chart periodically to
                                        get a real-time effect by using a timer to insert the new data in the
                                        plot and redraw it.
                                    </p>
                                    <div id="flotRealTime" style="height: 320px" class="flot-chart drop-shadow"></div>        
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Donut Pie</h4>
                                    <p class="text-muted mb-3 d-inline-block text-truncate w-100">Pie chart is used to see the proprotion
                                        of each data groups, making Flot pie chart is pretty simple, in order to
                                        make pie chart you have to incldue jquery.flot.pie.js plugin.
                                    </p>
                                    <div id="donut-chart">
                                        <div id="placeholder" class="flot-chart drop-shadow" style="height: 320px"></div>
                                    </div>
                                    <div id="menu" class="button-items mt-5">
                                        <button type="button" class="btn btn-sm btn-gradient-primary" id="example-1">Default Options</button>
                                        <button type="button" class="btn btn-sm btn-gradient-primary" id="example-2">Without Legend</button type="button" class="btn btn-sm btn-gradient-primary">
                                        <button type="button" class="btn btn-sm btn-gradient-primary" id="example-3">Label Formatter</button type="button" class="btn btn-sm btn-gradient-primary">
                                        <button type="button" class="btn btn-sm btn-gradient-primary" id="example-4">Label Radius</button type="button" class="btn btn-sm btn-gradient-primary">
                                        <button type="button" class="btn btn-sm btn-gradient-primary" id="example-5">Label Styles #1</button type="button" class="btn btn-sm btn-gradient-primary">
                                        <button type="button" class="btn btn-sm btn-gradient-primary" id="example-6">Label Styles #2</button type="button" class="btn btn-sm btn-gradient-primary">
                                        <button type="button" class="btn btn-sm btn-gradient-primary" id="example-7">Hidden Labels</button type="button" class="btn btn-sm btn-gradient-primary">
                                        <button type="button" class="btn btn-sm btn-gradient-primary" id="example-8">Combined Slice</button type="button" class="btn btn-sm btn-gradient-primary">
                                        <button type="button" class="btn btn-sm btn-gradient-primary" id="example-9">Rectangular Pie</button type="button" class="btn btn-sm btn-gradient-primary">
                                        <button type="button" class="btn btn-sm btn-gradient-primary" id="example-10">Tilted Pie</button type="button" class="btn btn-sm btn-gradient-primary">
                                        <button type="button" class="btn btn-sm btn-gradient-primary" id="example-11">Donut Hole</button type="button" class="btn btn-sm btn-gradient-primary">
                                        <button type="button" class="btn btn-sm btn-gradient-primary" id="example-12">Interactivity</button type="button" class="btn btn-sm btn-gradient-primary">
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                </div><!-- container -->
@stop

@section('footerScript')
        <script src="{{ URL::asset('plugins/flot-chart/jquery.canvaswrapper.js')}}"></script>
        <script src="{{ URL::asset('plugins/flot-chart/jquery.colorhelpers.js')}}"></script>
        <script src="{{ URL::asset('plugins/flot-chart/jquery.flot.js')}}"></script>        
        <script src="{{ URL::asset('plugins/flot-chart/jquery.flot.saturated.js')}}"></script>
        <script src="{{ URL::asset('plugins/flot-chart/jquery.flot.browser.js')}}"></script>
        <script src="{{ URL::asset('plugins/flot-chart/jquery.flot.drawSeries.js')}}"></script> 
        <script src="{{ URL::asset('plugins/flot-chart/jquery.flot.uiConstants.js')}}"></script>          
        <script src="{{ URL::asset('plugins/flot-chart/jquery.flot.stack.js')}}"></script>        
        <script src="{{ URL::asset('plugins/flot-chart/jquery.flot.legend.js')}}"></script>
        <script src="{{ URL::asset('plugins/flot-chart/jquery.flot.pie.js')}}"></script>
        <script src="{{ URL::asset('plugins/flot-chart/jquery.flot.axislabels.js')}}"></script>
        <script src="{{ URL::asset('plugins/flot-chart/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{ URL::asset('assets/pages/jquery.flot.init.js')}}"></script>        
@stop