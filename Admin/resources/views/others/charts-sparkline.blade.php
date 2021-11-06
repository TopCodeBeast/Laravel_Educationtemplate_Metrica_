@extends('layouts.master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
    <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                              @component('common-components.breadcrumb')
                                 @slot('title') Sparkline Charts @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') UI Kit @endslot
                                 @endcomponent


                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body row justify-content-center">
                                    <div class="col  align-self-center">                                        
                                        <h3>$775</h3>
                                        <h5 class="mt-0 text-muted font-weight-normal">Pie Chart</h5>
                                    </div>
                                    <div class="col align-self-center">
                                        <div id="sparkline1" class="text-center drop-shadow"></div>
                                    </div>                                    
                                </div><!--end card-body-->
                            </div><!--end crad-->
                        </div><!--end col-->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body row justify-content-center">
                                    <div class="col align-self-center">
                                        <h3>$301</h3>
                                        <h5 class="mt-0 text-muted font-weight-normal">Bar Chart</h5>
                                    </div>
                                    <div class="col align-self-center">
                                        <div id="sparkline2" class="text-center drop-shadow"></div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end crad-->
                        </div><!--end col-->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body analytics-info row justify-content-center">
                                    <div class="col align-self-center">
                                        <h3>$81</h3>
                                        <h5 class="mt-0 text-muted font-weight-normal">Line Chart</h5>
                                    </div>
                                    <div class="col align-self-center">
                                        <div id="sparkline4" class="drop-shadow"></div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end crad-->
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body row justify-content-center">
                                    <div class="col align-self-center">
                                        <h3>$211</h3>
                                        <h5 class="mt-0 text-muted font-weight-normal">Composite Bar Chart</h5>
                                    </div>
                                    <div class="col align-self-center">
                                        <div id="sparkline3" class="text-center drop-shadow"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body row justify-content-center">
                                    <div class="col align-self-center">
                                        <h3>$412</h3>
                                        <h5 class="mt-0 text-muted font-weight-normal">Line Charts</h5>
                                    </div>
                                    <div class="col align-self-center">
                                        <div id="sparkline5" class="text-center drop-shadow"></div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end crad-->
                        </div><!--end col-->
                        
                        <div class="col-lg-4">
                            <div class="card card-inverse bg-primary">
                                <div class="card-body row justify-content-center">
                                    <div class="col align-self-center">
                                        <h3 class="text-white">$41</h3>
                                        <h5 class="mt-0 text-white font-weight-normal">Discrete Chart</h5>
                                    </div>
                                    <div class="col align-self-center">
                                        <div id="sparkline6" class="text-center drop-shadow"></div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end crad-->
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body row justify-content-center">
                                    <div class="col align-self-center">
                                        <h3>$20</h3>
                                        <h5 class="mt-0 text-muted font-weight-normal">Bullet Chart</h5>
                                    </div>
                                    <div class="col align-self-center">
                                        <div id="sparkline7" class="drop-shadow"></div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end crad-->
                        </div><!--end col-->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body row justify-content-center">
                                    <div class="col align-self-center">
                                        <h3>$685</h3>
                                        <h5 class="mt-0 text-muted font-weight-normal">Box Plot Chart</h5>
                                    </div>
                                    <div class="col align-self-center">
                                        <div id="sparkline8" class="text-center drop-shadow"></div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end crad-->
                        </div><!--end col-->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body row justify-content-center">
                                    <div class="col align-self-center">
                                        <h3>$150</h3>
                                        <h5 class="mt-0 text-muted font-weight-normal">Tristate Charts</h5>
                                    </div>
                                    <div class="col align-self-center">
                                        <div id="sparkline9" class="text-center drop-shadow"></div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end crad-->
                        </div><!--end col-->
                    </div><!--end row-->

                </div><!-- container -->
@stop

@section('footerScript')
        <script src="{{ URL::asset('plugins/sparklines-chart/jquery.sparkline.min.js')}}"></script>
        <script src="{{ URL::asset('assets/pages/jquery.charts-sparkline.js')}}"></script>
@stop