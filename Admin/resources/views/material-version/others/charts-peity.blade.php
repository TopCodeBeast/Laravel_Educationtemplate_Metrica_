@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                             @component('common-components.breadcrumb')
                                 @slot('title') Peity Charts @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') UI Kit @endslot
                                 @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-md-12 col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Pie Chart</h4>    
                                    <div class="row text-center">
                                        <div class="col-lg-2 col-md-6">
                                            <span class="peity-pie drop-shadow" data-peity='{ "fill": ["#4ac7ec", "#eff2f9"]}' data-width="60" data-height="60">2/8</span>
                                        </div><!--end col-->
                                        <div class="col-lg-2 col-md-6">
                                            <span class="peity-pie drop-shadow" data-peity='{ "fill": ["#ff5da0", "#eff2f9"]}' data-width="60" data-height="60">120/360</span>
                                        </div><!--end col-->
                                        <div class="col-lg-2 col-md-6">
                                            <span class="peity-pie drop-shadow" data-peity='{ "fill": ["#f3c74d", "#eff2f9"]}' data-width="60" data-height="60">1.52/1.561</span>
                                        </div><!--end col-->
                                        <div class="col-lg-2 col-md-6">
                                            <span class="peity-pie drop-shadow" data-peity='{ "fill": ["#4d79f6", "#eff2f9"]}' data-width="60" data-height="60">1,4</span>
                                        </div><!--end col-->
                                        <div class="col-lg-2 col-md-6">
                                            <span class="peity-pie drop-shadow" data-peity='{ "fill": ["#1ecab8", "#eff2f9"]}' data-width="60" data-height="60">226,134</span>
                                        </div><!--end col-->
                                        <div class="col-lg-2 col-md-6">
                                            <span class="peity-pie drop-shadow" data-peity='{ "fill": ["#7551e9", "#eff2f9"]}' data-width="60" data-height="60">0.52,1.041</span>
                                        </div><!--end col-->
                                    </div> <!--end row-->   
                                </div><!--end card-body-->
                            </div><!--end card-->                                
                        </div> <!-- end col -->

                        <div class="col-md-12 col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Donut Chart</h4>
                                    <div class="row text-center">
                                        <div class="col-lg-2 col-md-6">
                                            <span class="peity-donut drop-shadow" data-peity='{ "fill": ["#4ac7ec", "#eff2f9"]}' data-width="60" data-height="60">1/5</span>
                                        </div><!--end col-->
                                        <div class="col-lg-2 col-md-6">
                                            <span class="peity-donut drop-shadow" data-peity='{ "fill": ["#ff5da0", "#eff2f9"]}' data-width="60" data-height="60">226/360</span>
                                        </div><!--end col-->
                                        <div class="col-lg-2 col-md-6">
                                            <span class="peity-donut drop-shadow" data-peity='{ "fill": ["#f3c74d", "#eff2f9"], "innerRadius": 16, "radius": 32 }' data-width="60" data-height="60">0.52/1.561</span>
                                        </div><!--end col-->
                                        <div class="col-lg-2 col-md-6">
                                            <span class="peity-donut drop-shadow" data-peity='{ "fill": ["#4d79f6", "#eff2f9"], "innerRadius": 20, "radius": 32 }' data-width="60" data-height="60">1,4</span>
                                        </div><!--end col-->
                                        <div class="col-lg-2 col-md-6">
                                            <span class="peity-donut drop-shadow" data-peity='{ "fill": ["#1ecab8", "#eff2f9"], "innerRadius": 23, "radius": 32 }' data-width="60" data-height="60">226,134</span>
                                        </div><!--end col-->
                                        <div class="col-lg-2 col-md-6">
                                            <span class="peity-donut drop-shadow" data-peity='{ "fill": ["#7551e9", "#eff2f9"], "innerRadius": 8, "radius": 32 }' data-width="60" data-height="60">0.52,1.041</span>
                                        </div><!--end col-->
                                    </div>  <!--end row-->  
                                </div><!--end card-body-->
                            </div> <!--end card-->                           
                        </div><!-- end col -->
                    </div> <!-- end row -->

                    <div class="row">
                        <div class="col-md-12 col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Line Chart</h4>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="p-4">
                                                <span class="peity-line drop-shadow" data-width="100%" data-peity='{ "fill": ["#a3e2f5"],"stroke": ["#4ac7ec"]}' data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-3">
                                            <div class="p-4">
                                                <span class="peity-line drop-shadow" data-width="100%" data-peity='{ "fill": ["#ffa4ca"],"stroke": ["#ff5da0"]}' data-height="60">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-3">
                                            <div class="p-4">
                                                <span class="peity-line drop-shadow" data-width="100%" data-peity='{ "fill": ["#f7db8d"],"stroke": ["#f3c74d"]}' data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-3">
                                            <div class="p-4">
                                                <span class="peity-line drop-shadow" data-width="100%" data-peity='{ "fill": ["#86a4f9"],"stroke": ["#4d79f6"]}' data-height="60">3,5,5,2,8,2,5,3,8,9,4,2,5,6,4,5,3,7,6,1</span>
                                            </div>
                                        </div><!--end col-->
                                    </div> <!--end row-->   
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!-- end col -->

                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Bar Chart</h4>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="p-4">
                                                <span class="peity-bar drop-shadow" data-peity='{ "fill": ["#4d79f6", "#eff2f9"]}' data-width="100%" data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-3">
                                            <div class="p-4">
                                                <span class="peity-bar drop-shadow" data-peity='{ "fill": ["#1ecab8", "#bceee1"]}' data-width="100%" data-height="60">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-3">
                                            <div class="p-4">
                                                <span class="peity-bar drop-shadow" data-peity='{ "fill": ["#4ac7ec", "#d0f1fa"]}' data-width="100%" data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-3">
                                            <div class="p-4">
                                                <span class="peity-bar drop-shadow" data-peity='{ "fill": ["#ff5da0", "#ffddeb"]}' data-width="100%" data-height="60">3,5,5,2,8,2,5,3,8,9,4,2,5,6,4,5,3,7,6,1</span>
                                            </div>
                                        </div><!--end col-->
                                    </div> <!--end row-->   
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!-- end col -->
                    </div> <!-- end row --> 

                </div><!-- container -->

@stop

@section('footerScript')

        <!-- Peity Chart JS -->
        <script src="{{ URL::asset('plugins/peity-chart/jquery.peity.min.js')}}"></script>
        <script src="{{ URL::asset('assets/pages/jquery.peity.init.js')}}"></script> 
@stop