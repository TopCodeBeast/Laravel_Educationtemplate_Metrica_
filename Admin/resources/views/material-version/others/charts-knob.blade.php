@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
   <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                             @component('common-components.breadcrumb')
                                 @slot('title') Other Charts @endslot
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
    
                                    <h4 class="mt-0 header-title">Jquery Knob</h4>
                                    <p class="text-muted mb-3">Nice, downward compatible, touchable, jQuery dial</p>
    
                                    <div class="row text-center">
                                        <div class="col-lg-4 text-center">
                                            <h4 class="header-title mb-3">Disable display input</h4>
                                            <input class="knob drop-shadow" data-width="150" data-bgColor="#eff2f9" data-fgcolor="#5851be" data-displayinput="false" value="35">
                                        </div><!--end col-->
                                        <div class="col-lg-4 text-center">
                                            <h4 class="header-title mb-3">Cursor mode</h4>
                                            <input class="knob drop-shadow" data-width="150" data-cursor="true" data-bgColor="#eff2f9" data-fgcolor="#ff5da0" value="29">
                                        </div><!--end col-->
                                        <div class="col-lg-4 text-center">
                                            <h4 class="header-title mb-3">Display previous value</h4>
                                            <input class="knob drop-shadow" data-width="150" data-min="-100" data-bgColor="#eff2f9" data-fgcolor="#f3c74d" data-displayprevious="true" value="44">
                                        </div><!--end col-->
                                    </div><!--end row-->
    
                                    <div class="row">
                                        <div class="col-lg-4 text-center">
                                            <h4 class="header-title mb-3">Angle offset</h4>
                                            <input class="knob drop-shadow" data-width="150" data-angleoffset="90" data-linecap="round" data-bgColor="#eff2f9" data-fgcolor="#4ac7ec" value="35">
                                        </div><!--end col-->
                                        <div class="col-lg-4 text-center">
                                            <h4 class="header-title mb-3"> 5-digit values, step 1000</h4>
                                            <input class="knob drop-shadow" data-width="150" data-min="-15000" data-displayprevious="true" data-max="15000" data-step="1000" value="-11000" data-bgColor="#eff2f9" data-fgcolor="#7551e9">
                                        </div><!--end col-->
                                        <div class="col-lg-4 text-center">
                                            <h4 class="header-title mb-3">Angle offset and arc</h4>
                                            <input class="knob drop-shadow" data-width="150" data-cursor="true" data-bgColor="#eff2f9" data-fgcolor="#1ecab8" value="29">
                                        </div><!--end col-->
                                    </div><!--end row-->  

                                    <div class="row">
                                        <div class="col-lg-4 text-center">
                                            <h4 class="header-title mb-3">Overloaded 'Drow' Method</h4>
                                            <input class="knob drop-shadow" data-width="150" data-displayPrevious=true data-bgColor="#eff2f9" data-fgColor="#9ba7ca" data-skin="tron" data-cursor=true value="75" data-thickness=".2">
                                        </div><!--end col-->
                                        <div class="col-lg-4 text-center">
                                            <h4 class="header-title mb-3">Overloaded 'Drow' Method</h4>
                                            <input class="knob drop-shadow" data-width="150" data-displayPrevious=true data-bgColor="#eff2f9" data-fgColor="#2f4686" data-skin="tron" data-thickness=".2" value="75">
                                        </div><!--end col-->
                                        <div class="col-lg-4 text-center">
                                            <h4 class="header-title mb-3">Overloaded 'Drow' Method</h4>
                                            <input class="knob drop-shadow" data-width="150" data-angleOffset="180" data-bgColor="#eff2f9" data-fgColor="#2b55cc" data-skin="tron" data-thickness=".1" value="35">
                                        </div><!--end col-->
                                    </div><!--end row-->        
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-3">Superpose (clock)</h4>           
                                    <div class="text-center">
                                        <div class="superpose">
                                            <div class="superclock ">
                                                <div class="superclock1 ">
                                                    <input class="knob hour drop-shadow" data-min="0 " data-max="24 " data-bgColor="#eff2f9 " data-fgColor="#5851be " data-displayInput=false data-width="300 " data-height="300 " data-thickness=".3 ">
                                                </div>
                                                <div class="superclock2 ">
                                                    <input class="knob minute drop-shadow" data-min="0 " data-max="60 " data-bgColor="#eff2f9 " data-fgColor="#4ac7ec " data-displayInput=false data-width="200 " data-height="200 " data-thickness=".45 ">
                                                </div>
                                                <div class="superclock3 ">
                                                    <input class="knob second drop-shadow" data-min="0 " data-max="60 " data-bgColor="#eff2f9 " data-fgColor="#f3c74d " data-displayInput=false data-width="100 " data-height="100 " data-thickness=".3 ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                </div><!-- container -->
@stop

@section('footerScript')
         <!-- KNOB JS -->
         <script src="{{ URL::asset('plugins/jquery-knob/excanvas.js')}}"></script>
         <script src="{{ URL::asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script> 
         <script src="{{ URL::asset('assets/pages/jquery.knob.init.js')}}"></script> 
@stop