@extends('layouts.master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('headerStyle')
<link href="{{ URL::asset('plugins/animate/animate.css')}}" rel="stylesheet" type="text/css">
@stop

@section('content')
 <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                              @component('common-components.breadcrumb')
                                 @slot('title') Animation @endslot
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
                                    <div class="text-center">
                                        <h4 class="page-title">Animation</h4>
                                        <h6 class="mb-3 font-weight-normal text-muted">Just-add-water CSS animations.</h6>
                                        <div id="animationSandbox">
                                            <div class="shadow-sm p-4 d-inline-block rounded-circle">
                                                <img src="{{ URL::asset('assets/images/logo-sm.png')}}" alt="" class="center-block">
                                            </div>                                                
                                        </div>
                                    </div>

                                    <form class="my-4">
                                        <div class="row">
                                            <div class="col-sm-5 mx-auto">
                                                <div class="input-group">
                                                    <select class="form-control js--animations" style="width:auto">
                                                        <optgroup label="Attention Seekers">
                                                            <option value="bounce">bounce</option>
                                                            <option value="flash">flash</option>
                                                            <option value="pulse">pulse</option>
                                                            <option value="rubberBand">rubberBand</option>
                                                            <option value="shake">shake</option>
                                                            <option value="swing">swing</option>
                                                            <option value="tada">tada</option>
                                                            <option value="wobble">wobble</option>
                                                            <option value="jello">jello</option>
                                                        </optgroup>
                                                
                                                        <optgroup label="Bouncing Entrances">
                                                            <option value="bounceIn">bounceIn</option>
                                                            <option value="bounceInDown">bounceInDown</option>
                                                            <option value="bounceInLeft">bounceInLeft</option>
                                                            <option value="bounceInRight">bounceInRight</option>
                                                            <option value="bounceInUp">bounceInUp</option>
                                                        </optgroup>
                                                
                                                        <optgroup label="Bouncing Exits">
                                                            <option value="bounceOut">bounceOut</option>
                                                            <option value="bounceOutDown">bounceOutDown</option>
                                                            <option value="bounceOutLeft">bounceOutLeft</option>
                                                            <option value="bounceOutRight">bounceOutRight</option>
                                                            <option value="bounceOutUp">bounceOutUp</option>
                                                        </optgroup>
                                                
                                                        <optgroup label="Fading Entrances">
                                                            <option value="fadeIn">fadeIn</option>
                                                            <option value="fadeInDown">fadeInDown</option>
                                                            <option value="fadeInDownBig">fadeInDownBig</option>
                                                            <option value="fadeInLeft">fadeInLeft</option>
                                                            <option value="fadeInLeftBig">fadeInLeftBig</option>
                                                            <option value="fadeInRight">fadeInRight</option>
                                                            <option value="fadeInRightBig">fadeInRightBig</option>
                                                            <option value="fadeInUp">fadeInUp</option>
                                                            <option value="fadeInUpBig">fadeInUpBig</option>
                                                        </optgroup>
                                                
                                                        <optgroup label="Fading Exits">
                                                            <option value="fadeOut">fadeOut</option>
                                                            <option value="fadeOutDown">fadeOutDown</option>
                                                            <option value="fadeOutDownBig">fadeOutDownBig</option>
                                                            <option value="fadeOutLeft">fadeOutLeft</option>
                                                            <option value="fadeOutLeftBig">fadeOutLeftBig</option>
                                                            <option value="fadeOutRight">fadeOutRight</option>
                                                            <option value="fadeOutRightBig">fadeOutRightBig</option>
                                                            <option value="fadeOutUp">fadeOutUp</option>
                                                            <option value="fadeOutUpBig">fadeOutUpBig</option>
                                                        </optgroup>
                                                
                                                        <optgroup label="Flippers">
                                                            <option value="flip">flip</option>
                                                            <option value="flipInX">flipInX</option>
                                                            <option value="flipInY">flipInY</option>
                                                            <option value="flipOutX">flipOutX</option>
                                                            <option value="flipOutY">flipOutY</option>
                                                        </optgroup>
                                                
                                                        <optgroup label="Lightspeed">
                                                            <option value="lightSpeedIn">lightSpeedIn</option>
                                                            <option value="lightSpeedOut">lightSpeedOut</option>
                                                        </optgroup>
                                                
                                                        <optgroup label="Rotating Entrances">
                                                            <option value="rotateIn">rotateIn</option>
                                                            <option value="rotateInDownLeft">rotateInDownLeft</option>
                                                            <option value="rotateInDownRight">rotateInDownRight</option>
                                                            <option value="rotateInUpLeft">rotateInUpLeft</option>
                                                            <option value="rotateInUpRight">rotateInUpRight</option>
                                                        </optgroup>
                                                
                                                        <optgroup label="Rotating Exits">
                                                            <option value="rotateOut">rotateOut</option>
                                                            <option value="rotateOutDownLeft">rotateOutDownLeft</option>
                                                            <option value="rotateOutDownRight">rotateOutDownRight</option>
                                                            <option value="rotateOutUpLeft">rotateOutUpLeft</option>
                                                            <option value="rotateOutUpRight">rotateOutUpRight</option>
                                                        </optgroup>
                                                
                                                        <optgroup label="Sliding Entrances">
                                                            <option value="slideInUp">slideInUp</option>
                                                            <option value="slideInDown">slideInDown</option>
                                                            <option value="slideInLeft">slideInLeft</option>
                                                            <option value="slideInRight">slideInRight</option>                                                        
                                                        </optgroup>

                                                        <optgroup label="Sliding Exits">
                                                            <option value="slideOutUp">slideOutUp</option>
                                                            <option value="slideOutDown">slideOutDown</option>
                                                            <option value="slideOutLeft">slideOutLeft</option>
                                                            <option value="slideOutRight">slideOutRight</option>                                                                
                                                        </optgroup>
                                                        
                                                        <optgroup label="Zoom Entrances">
                                                            <option value="zoomIn">zoomIn</option>
                                                            <option value="zoomInDown">zoomInDown</option>
                                                            <option value="zoomInLeft">zoomInLeft</option>
                                                            <option value="zoomInRight">zoomInRight</option>
                                                            <option value="zoomInUp">zoomInUp</option>
                                                        </optgroup>
                                                        
                                                        <optgroup label="Zoom Exits">
                                                            <option value="zoomOut">zoomOut</option>
                                                            <option value="zoomOutDown">zoomOutDown</option>
                                                            <option value="zoomOutLeft">zoomOutLeft</option>
                                                            <option value="zoomOutRight">zoomOutRight</option>
                                                            <option value="zoomOutUp">zoomOutUp</option>
                                                        </optgroup>
                                                
                                                        <optgroup label="Specials">
                                                            <option value="hinge">hinge</option>
                                                            <option value="jackInTheBox">jackInTheBox</option>
                                                            <option value="rollIn">rollIn</option>
                                                            <option value="rollOut">rollOut</option>
                                                        </optgroup>
                                                    </select><!--end form-control-->
                                                
                                                    <span class="input-group-append ml-2">
                                                        <button class="btn btn-gradient-primary js--triggerAnimation"
                                                                type="button">Animate Me !
                                                        </button>
                                                    </span>
                                                </div><!--end input group-->
                                            </div><!--emd col-->
                                        </div><!--end row-->
                                    </form><!--end form-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-md-12">        
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <h4 class="page-title">Animation</h4>
                                        <h6 class="mb-3 font-weight-normal text-muted">Just-add-water CSS animations.</h6>
                                        <div class="animationSandbox">
                                            <div class="shadow-sm p-4 d-inline-block rounded-circle">
                                                <img src="{{ URL::asset('assets/images/logo-sm.png')}}" alt="" class="center-block">
                                            </div>                                                
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <div class="row">
                                            <div class="col-lg-6 mx-auto text-center button-list">
                                                <button type="button" class="btn btn-gradient-primary btn-animation" data-animation="bounce">bounce</button>
                                    
                                                <button type="button" class="btn btn-gradient-primary btn-animation" data-animation="flash">flash</button>
                                            
                                                <button type="button" class="btn btn-gradient-primary btn-animation" data-animation="pulse">pulse</button>
                                            
                                                <button type="button" class="btn btn-gradient-primary btn-animation" data-animation="rubberBand">rubberBand</button>

                                                <button type="button" class="btn btn-gradient-primary btn-animation" data-animation="shake">shake</button>
                                            
                                                <button type="button" class="btn btn-gradient-primary btn-animation" data-animation="swing">swing</button>
                                            
                                                <button type="button" class="btn btn-gradient-primary btn-animation" data-animation="tada">tada</button>
                                            
                                                <button type="button" class="btn btn-gradient-primary btn-animation" data-animation="wobble">wobble</button>
                                                
                                                <button type="button" class="btn btn-gradient-primary btn-animation" data-animation="flipInY">FlipInY</button>
                                                
                                                <button type="button" class="btn btn-gradient-primary btn-animation" data-animation="jello">Jello</button>

                                                <button type="button" class="btn btn-gradient-primary btn-animation" data-animation="flipInX">FlipInX</button>

                                                <button type="button" class="btn btn-gradient-primary btn-animation" data-animation="slideInUp">SlideInUp</button>

                                                <button type="button" class="btn btn-gradient-primary btn-animation" data-animation="slideInDown">SlideInDown</button>

                                                <button type="button" class="btn btn-gradient-primary btn-animation" data-animation="slideInLeft">SlideInLeft</button>

                                                <button type="button" class="btn btn-gradient-primary btn-animation" data-animation="slideInRight">SlideInRight</button>

                                                <button type="button" class="btn btn-gradient-primary btn-animation" data-animation="zoomIn">ZoomIn</button>

                                                <button type="button" class="btn btn-gradient-primary btn-animation" data-animation="zoomInUp">ZoomInUp</button>  

                                                <button type="button" class="btn btn-gradient-primary btn-animation" data-animation="zoomInLeft">ZoomInLeft</button>

                                                <button type="button" class="btn btn-gradient-primary btn-animation" data-animation="zoomInRight">ZoomInRight</button>

                                                <button type="button" class="btn btn-gradient-primary btn-animation" data-animation="rollIn">RollIn</button>
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
<script src="{{ URL::asset('assets/pages/jquery.animate.init.js')}}"></script>   
@stop