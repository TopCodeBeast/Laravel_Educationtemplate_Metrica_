@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
          <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                              @component('common-components.breadcrumb')
                                 @slot('title') Chartjs Charts @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') UI Kit @endslot
                                 @endcomponent


                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-12 col-xl-8">
                            <div class="card">
                                <div class="card-body">            
                                    <h4 class="mt-0 header-title">Line Chart</h4>
                                    <p class="text-muted mb-3 d-inline-block text-truncate w-100">A line chart is a way of plotting data
                                        points on a line. Often, it is used to show trend data, and the
                                        comparison of two data sets.
                                    </p>            
                                    <canvas id="lineChart" class="drop-shadow" height="300"></canvas>            
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->

                        <div class="col-lg-12 col-xl-4">
                            <div class="card">
                                <div class="card-body">            
                                    <h4 class="mt-0 header-title">Donut Chart</h4>
                                    <p class="text-muted mb-3 d-inline-block text-truncate w-100">Pie and doughnut charts are probably
                                        the most commonly used chart there are. They are divided into segments,
                                        the arc of each segment shows the proportional value of each piece of
                                        data.
                                    </p>            
                                    <canvas id="doughnut" class="drop-shadow" height="300"></canvas>            
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->

                        <div class="col-lg-12 col-xl-8">
                            <div class="card">
                                <div class="card-body">            
                                    <h4 class="mt-0 header-title">Bar Chart</h4>
                                    <p class="text-muted mb-3 d-inline-block text-truncate w-100">A bar chart is a way of showing data as
                                        bars. It is sometimes used to show trend data, and the comparison of
                                        multiple data sets side by side.
                                    </p>            
                                    <canvas id="bar" class="drop-shadow" height="300"></canvas>            
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->

                        <div class="col-lg-12 col-xl-4">
                            <div class="card">
                                <div class="card-body">    
                                    <h4 class="mt-0 header-title">Polar Chart</h4>
                                    <p class="text-muted mb-3 d-inline-block text-truncate w-100">Polar area charts are similar to pie
                                        charts, but each segment has the same angle - the radius of the segment
                                        differs depending on the value.
                                    </p>            
                                    <canvas id="polarArea" class="drop-shadow" height="300"> </canvas>            
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->                                
                    </div> <!-- end row -->        
    
                    <div class="row">
                        <div class="col-lg-12 col-xl-6">
                            <div class="card">
                                <div class="card-body">            
                                    <h4 class="mt-0 header-title">Pie Chart</h4>
                                    <p class="text-muted mb-3 d-inline-block text-truncate w-100">Pie and doughnut charts are probably
                                        the most commonly used chart there are. They are divided into segments,
                                        the arc of each segment shows the proportional value of each piece of
                                        data.
                                    </p>            
                                    <canvas id="pie" class="drop-shadow" height="300"></canvas>            
                                </div><!--end card-body-->
                            </div> <!-- end card -->  
                        </div> <!-- end col -->
                        
                        <div class="col-lg-12 col-xl-6">
                            <div class="card">
                                <div class="card-body">            
                                    <h4 class="mt-0 header-title">Radar Chart</h4>
                                    <p class="text-muted mb-3 d-inline-block text-truncate w-100">A radar chart is a way of showing
                                        multiple data points and the variation between them. They are often
                                        useful for comparing the points of two or more different data sets.
                                    </p>            
                                    <canvas id="radar" class="drop-shadow" height="300"></canvas>            
                                </div><!--end card-body-->
                            </div> <!-- end card -->  
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                </div><!-- container -->
@stop

@section('footerScript')
<!-- Chart JS -->
        <script src="{{ URL::asset('plugins/chartjs/chart.min.js')}}"></script>
        <script src="{{ URL::asset('assets/pages/jquery.chartjs.init.js')}}"></script>
        
@stop