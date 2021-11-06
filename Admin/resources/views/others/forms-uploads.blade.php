@extends('layouts.master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('headerStyle')
<link href="{{ URL::asset('plugins/dropify/css/dropify.min.css')}}" rel="stylesheet">
@stop

@section('content')
 <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                             @component('common-components.breadcrumb')
                                 @slot('title') File Uploads @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') UI Kit @endslot
                                 @endcomponent
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">File Upload 1</h4>
                                    <p class="text-muted mb-3">Your so fresh input file — Default version</p>
                                    <input type="file" id="input-file-now" class="dropify" />                                                   
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">File Upload 2</h4>
                                    <p class="text-muted mb-3">You can add a default value</p>
                                    <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="{{ URL::asset('plugins/dropify/images/1.jpg')}}" />
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">File Upload 3</h4>
                                    <p class="text-muted mb-3">You can set the height</p>
                                    <input type="file" id="input-file-now-custom-2" class="dropify" data-height="500" />
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">File Upload 4</h4>
                                    <p class="text-muted mb-3">You can combine options</p>
                                    <input type="file" id="input-file-now-custom-3" class="dropify" data-height="500" data-default-file="{{ URL::asset('plugins/dropify/images/2.jpg')}}" />
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                </div><!-- container -->
@stop

@section('footerScript')

        <script src="{{ URL::asset('assets/pages/jquery.form-upload.init.js')}}"></script>
        <script src="{{ URL::asset('plugins/dropify/js/dropify.min.js')}}"></script>
        
@stop