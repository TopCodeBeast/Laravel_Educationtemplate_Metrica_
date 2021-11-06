@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('headerStyle')
<!-- ION Slider -->
<link href="{{ URL::asset('plugins/ion-rangeslider/ion.rangeSlider.css')}}" rel="stylesheet" type="text/css"/>
@stop

@section('content')
 <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                             @component('common-components.breadcrumb')
                                 @slot('title') Rangeslider @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') UI Kit @endslot
                                 @endcomponent


                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
    
                                    <h4 class="mt-0 header-title">ION Range slider</h4>
                                    <p class="text-muted mb-4">Cool, comfortable, responsive and easily customizable range slider</p>
    
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="p-3">
                                                <h6 class="mb-3 mt-0">Default With Mark</h6>
                                                <input type="text" id="range_01">
                                            </div>
                                        </div><!--end col-->
    
                                        <div class="col-lg-6">
                                            <div class="p-3">
                                                <h6 class="mb-3 mt-0">Min-Max</h6>
                                                <input type="text" id="range_02">
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
    
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="p-3">
                                                <h6 class="mb-3 mt-0">Prefix</h6>
                                                <input type="text" id="range_03">
                                            </div>
                                        </div><!--end col-->
    
                                        <div class="col-lg-6">
                                            <div class="p-3">
                                                <h6 class="mb-3 mt-0">Range</h6>
                                                <input type="text" id="range_04">
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
    
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="p-3">
                                                <h6 class="mb-3 mt-0">Step</h6>
                                                <input type="text" id="range_05">
                                            </div>
                                        </div><!--end col-->
    
                                        <div class="col-lg-6">
                                            <div class="p-3">
                                                <h6 class="mb-3 mt-0">Custom Values</h6>
                                                <input type="text" id="range_06">
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
    
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="p-3">
                                                <h6 class="mb-3 mt-0">Prettify Numbers</h6>
                                                <input type="text" id="range_07">
                                            </div>
                                        </div><!--end col-->
    
                                        <div class="col-lg-6">
                                            <div class="p-3">
                                                <h6 class="mb-3 mt-0">Disabled</h6>
                                                <input type="text" id="range_08">
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
    
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="p-3">
                                                <h6 class="mb-3 mt-0">Extra Example</h6>
                                                <input type="text" id="range_09">
                                            </div>
                                        </div><!--end col-->
    
                                        <div class="col-lg-6">
                                            <div class="p-3">
                                                <h6 class="mb-3 mt-0">Use decorate_both option</h6>
                                                <input type="text" id="range_10">
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
    
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="p-3">
                                                <h6 class="mb-3 mt-0">Postfixes</h6>
                                                <input type="text" id="range_11">
                                            </div>
                                        </div><!--end col-->
    
                                        <div class="col-lg-6">
                                            <div class="p-3">
                                                <h6 class="mb-3 mt-0">Hide</h6>
                                                <input type="text" id="range_12">
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->        
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!-- end col -->
                    </div><!-- end row --> 

                </div><!-- container -->
@stop

@section('footerScript')
        <!-- Range slider js -->
        <script src="{{ URL::asset('plugins/ion-rangeslider/ion.rangeSlider.min.js')}}"></script>
        <script src="{{ URL::asset('assets/pages/jquery.rangeslider.init.js')}}"></script> 
@stop