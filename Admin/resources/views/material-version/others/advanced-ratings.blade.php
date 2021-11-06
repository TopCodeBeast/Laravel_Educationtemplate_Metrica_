@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('headerStyle')
<link rel="stylesheet" href="{{ URL::asset('plugins/rating/themes/rating.css')}}">
@stop

@section('content')
  <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                              @component('common-components.breadcrumb')
                                 @slot('title') Rating @endslot
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
                                    <h4 class="mt-0 header-title">Ratings</h4>
                                    <p class="text-muted mb-4">jQuery Bar Rating Plugin works by transforming a standard select field into a rating widget. 
                                        The rating widget can be flexibly styled with CSS. 
                                        Take a look at a few examples.
                                    </p>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="p-4">
                                                <h5 class="mt-0 mb-4">Default rating</h5>
                                                <select id="example-fontawesome">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>                                                              
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-4">
                                            <div class="p-4">
                                                <h5 class="mt-0 mb-4">CSS Stars</h5>
                                                <select id="example-css" name="rating" autocomplete="off">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div><!--end col-->
                                        
                                        <div class="col-lg-4">
                                            <div class="p-4">
                                                <h5 class="mt-0 mb-4">Current rating: <span class="value"></span></h5>
                                                <select id="example-fontawesome-o" name="rating" data-current-rating="5.6" autocomplete="off">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                </select>
                                            </div>
                                        </div><!--end col-->
    
                                        <div class="col-lg-4">
                                            <div class="p-4">
                                                <h5 class="mt-0 mb-4">Square Rating</h5>
                                                <select id="example-square" name="rating" autocomplete="off">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div><!--end col-->
    
                                        <div class="col-lg-4">
                                            <div class="p-4">
                                                <h5 class="mt-0 mb-4">Pill Rating</h5>
                                                <select id="example-pill" name="rating" autocomplete="off">
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                </select>
                                            </div>
                                        </div><!--end col-->
    
                                        <div class="col-lg-4">
                                            <div class="p-4">
                                                <h5 class="mt-0 mb-4">Reversed Rating</h5>
                                                <select id="example-reversed" name="rating" autocomplete="off">
                                                    <option value="Strongly Agree">Strongly Agree</option>
                                                    <option value="Agree">Agree</option>
                                                    <option value="Neither Agree or Disagree" selected="selected">Neither Agree or Disagree</option>
                                                    <option value="Disagree">Disagree</option>
                                                    <option value="Strongly Disagree">Strongly Disagree</option>
                                                </select>
                                            </div>
                                        </div><!--end col-->
    
                                        <div class="col-lg-4">
                                            <div class="p-4">
                                                <h5 class="mt-0 mb-4">Horizontal Rating</h5>
                                                <select id="example-horizontal" name="rating" autocomplete="off">
                                                    <option value="10">10</option>
                                                    <option value="9">9</option>
                                                    <option value="8">8</option>
                                                    <option value="7">7</option>
                                                    <option value="6">6</option>
                                                    <option value="5">5</option>
                                                    <option value="4">4</option>
                                                    <option value="3">3</option>
                                                    <option value="2">2</option>
                                                    <option value="1" selected="selected">1</option>
                                                </select>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-4">
                                            <div class="p-4">
                                                <h5 class="mt-0 mb-4">1/10 Rating</h5>
                                                <select id="example-1to10" name="rating" autocomplete="off">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7" selected="selected">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                </select>
                                            </div>
                                        </div> <!--end col-->   

                                        <div class="col-lg-4">
                                            <div class="p-4">
                                                <h5 class="mt-0 mb-4">Movie Rating</h5>
                                                <select id="example-movie" name="rating" autocomplete="off">
                                                    <option value="Bad">Bad</option>
                                                    <option value="Mediocre">Mediocre</option>
                                                    <option value="Good" selected="selected">Good</option>
                                                    <option value="Awesome">Awesome</option>
                                                </select>
                                            </div>
                                        </div> <!--end col-->                                               
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div> <!-- end row --> 

                </div><!-- container -->
@stop

@section('footerScript')
        <!-- Bootstrap rating js -->
        <script src="{{ URL::asset('plugins/rating/jquery.barrating.min.js')}}"></script>
        <script src="{{ URL::asset('assets/pages/jquery.rating.init.js')}}"></script> 
@stop   