@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('headerStyle')
<link href="{{ URL::asset('plugins/jsgrid/jsgrid.min.css')}}" rel="stylesheet">
<link href="{{ URL::asset('plugins/jsgrid/jsgrid-theme.min.css')}}" rel="stylesheet">
@stop

@section('content')
     <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                              @component('common-components.breadcrumb')
                                 @slot('title') jsGrid @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') UI Kit @endslot
                                 @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div id="jsGrid"></div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!-- container -->
@stop

@section('footerScript')
<script src="{{ URL::asset('plugins/jsgrid/jsgrid.min.js')}}"></script>
<script src="{{ URL::asset('plugins/jsgrid/db.js')}}"></script>
<script src="{{ URL::asset('assets/pages/jquery.jsgrid.init.js')}}"></script>
@stop