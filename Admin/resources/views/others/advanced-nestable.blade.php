@extends('layouts.master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('headerStyle')
<!-- Nestable css -->
<link href="{{ URL::asset('plugins/nestable/jquery.nestable.min.css')}}" rel="stylesheet" />
@stop

@section('content')
 <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                              @component('common-components.breadcrumb')
                                 @slot('title') Nestable @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') UI Kit @endslot
                                 @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title">List 1</h4>
                                    <p class="text-muted mb-4">Drag & drop hierarchical list with
                                        mouse and touch compatibility (jQuery plugin).</p>

                                    <div class="custom-dd dd" id="nestable_list_1">
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="1">
                                                <div class="dd-handle">
                                                    Item 1
                                                </div>
                                            </li>
                                            <li class="dd-item" data-id="2">
                                                <div class="dd-handle">
                                                    Item 2
                                                </div>
                                                <ol class="dd-list">
                                                    <li class="dd-item" data-id="3">
                                                        <div class="dd-handle">
                                                            Item 3
                                                        </div>
                                                    </li>
                                                    <li class="dd-item" data-id="4">
                                                        <div class="dd-handle">
                                                            Item 4
                                                        </div>
                                                    </li>
                                                    <li class="dd-item" data-id="5">
                                                        <div class="dd-handle">
                                                            Item 5
                                                        </div>
                                                        <ol class="dd-list">
                                                            <li class="dd-item" data-id="6">
                                                                <div class="dd-handle">
                                                                    Item 6
                                                                </div>
                                                            </li>
                                                            <li class="dd-item" data-id="7">
                                                                <div class="dd-handle">
                                                                    Item 7
                                                                </div>
                                                            </li>
                                                            <li class="dd-item" data-id="8">
                                                                <div class="dd-handle">
                                                                    Item 8
                                                                </div>
                                                            </li>
                                                        </ol>
                                                    </li>
                                                    <li class="dd-item" data-id="9">
                                                        <div class="dd-handle">
                                                            Item 9
                                                        </div>
                                                    </li>
                                                    <li class="dd-item" data-id="10">
                                                        <div class="dd-handle">
                                                            Item 10
                                                        </div>
                                                    </li>
                                                </ol>
                                            </li>    
                                        </ol>
                                    </div><!--nastable-list-1-->    
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title">List 2</h4>
                                    <p class="text-muted mb-4">Drag & drop hierarchical list with
                                        mouse and touch compatibility (jQuery plugin).</p>

                                    <div class="custom-dd dd" id="nestable_list_2">
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="11">
                                                <div class="dd-handle">
                                                    Item 11
                                                </div>
                                            </li>
                                            <li class="dd-item" data-id="12">
                                                <div class="dd-handle">
                                                    Item 12
                                                </div>
                                            </li>
                                            <li class="dd-item" data-id="13">
                                                <div class="dd-handle">
                                                    Item 13
                                                </div>
                                            </li>
                                            <li class="dd-item" data-id="14">
                                                <div class="dd-handle">
                                                    Item 14
                                                </div>
                                            </li>
                                            <li class="dd-item" data-id="15">
                                                <div class="dd-handle">
                                                    Item 15
                                                </div>
                                                <ol class="dd-list">
                                                    <li class="dd-item" data-id="16">
                                                        <div class="dd-handle">
                                                            Item 16
                                                        </div>
                                                    </li>
                                                    <li class="dd-item" data-id="17">
                                                        <div class="dd-handle">
                                                            Item 17
                                                        </div>
                                                    </li>
                                                    <li class="dd-item" data-id="18">
                                                        <div class="dd-handle">
                                                            Item 18
                                                        </div>
                                                    </li>
                                                </ol>
                                            </li>
                                        </ol>
                                    </div><!--nastable-list-2-->    
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div> <!-- end row -->  
                     
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="custom-dd dd" id="nestable_list_3">
                                        <ol class="dd-list">
                                            <li class="dd-item dd3-item" data-id="37">
                                                <div class="dd-handle dd3-handle"></div>
                                                <div class="dd3-content dd3-content-p">Item 1</div>
                                            </li>
                                            <li class="dd-item dd3-item" data-id="38">
                                                <div class="dd-handle dd3-handle"></div>
                                                <div class="dd3-content dd3-content-p">Item 2</div>
                                            </li>
                                            <li class="dd-item dd3-item" data-id="39">
                                                <div class="dd-handle dd3-handle"></div>
                                                <div class="dd3-content dd3-content-p">Item 3</div>
                                                <ol class="dd-list">
                                                    <li class="dd-item dd3-item" data-id="40">
                                                      <div class="dd-handle dd3-handle"></div>
                                                      <div class="dd3-content dd3-content-p">Item 4</div>
                                                    </li>
                                                    <li class="dd-item dd3-item" data-id="41">
                                                        <div class="dd-handle dd3-handle"></div>
                                                        <div class="dd3-content dd3-content-p">Item 5</div>
                                                    </li>
                                                    <li class="dd-item dd3-item" data-id="42">
                                                        <div class="dd-handle dd3-handle"></div>
                                                        <div class="dd3-content dd3-content-p">Item 6</div>
                                                    </li>
                                                </ol>
                                            </li>
                                        </ol>
                                    </div><!--nastable-list-3-->    
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                </div><!-- container -->
@stop

@section('footerScript')
<!--Nestable-->
        <script src="{{ URL::asset('plugins/nestable/jquery.nestable.min.js')}}"></script>
        <script src="{{ URL::asset('assets/pages/jquery.nastable.init.js')}}"></script>
        
@stop