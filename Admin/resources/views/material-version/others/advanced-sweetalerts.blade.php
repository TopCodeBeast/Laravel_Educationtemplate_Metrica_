@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('headerStyle')
<!-- Sweet Alert -->
<link href="{{ URL::asset('plugins/sweet-alert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('plugins/animate/animate.css')}}" rel="stylesheet" type="text/css">

@stop

@section('content')
 <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                             @component('common-components.breadcrumb')
                                 @slot('title') Sweet Alert @endslot
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
                                    <h4 class="mt-0 header-title">Examples</h4>
                                    <p class="text-muted mb-4">A beautiful, responsive, customizable
                                        and accessible (WAI-ARIA) replacement for JavaScript's popup boxes. Zero
                                        dependencies.
                                    </p>
                                    <div class="table-responsive">
                                        <table class="table mb-0">                                                        
                                            <tbody>
                                                <tr class="border-0">
                                                    <td class="border-0"><i class="mdi mdi-circle-outline mr-1 text-pink"></i>A basic message</td>
                                                    <td class="border-0"><button type="button" class="btn btn-gradient-primary waves-effect waves-light" id="sa-basic">Click me</button></td>
                                                </tr>
                                                <tr class="border-0">
                                                    <td class="border-0"><i class="mdi mdi-circle-outline mr-1 text-success"></i>A title with a text under</td>
                                                    <td class="border-0"><button type="button" class="btn btn-gradient-primary waves-effect waves-light" id="sa-title">Click me</button></td>
                                                </tr>
                                                <tr class="border-0">
                                                    <td class="border-0"><i class="mdi mdi-circle-outline mr-1 text-warning"></i>A success message!</td>
                                                    <td class="border-0"><button type="button" class="btn btn-gradient-primary waves-effect waves-light" id="sa-success">Click me</button></td>
                                                </tr>
                                                <tr class="border-0">
                                                    <td class="border-0"><i class="mdi mdi-circle-outline mr-1 text-dark"></i>A custom positioned dialog</td>
                                                    <td class="border-0"><button type="button" class="btn btn-gradient-primary waves-effect waves-light" id="sa-topright-success">Click me</button></td>
                                                </tr>
                                                <tr class="border-0">
                                                    <td class="border-0"><i class="mdi mdi-circle-outline mr-1 text-pink"></i>Custom animation </td>
                                                    <td class="border-0"><button type="button" class="btn btn-gradient-primary waves-effect waves-light" id="sa-custom-animation">Click me</button></td>
                                                </tr>
                                                <tr class="border-0">
                                                    <td class="border-0"><i class="mdi mdi-circle-outline mr-1 text-info"></i>A message with custom Image Header</td>
                                                    <td class="border-0"><button type="button" class="btn btn-gradient-primary waves-effect waves-light" id="sa-image">Click me</button></td>
                                                </tr>
                                                <tr class="border-0">
                                                    <td class="border-0"><i class="mdi mdi-circle-outline mr-1 text-primary"></i>Ajax request example</td>
                                                    <td class="border-0"><button type="button" class="btn btn-gradient-primary waves-effect waves-light" id="ajax-alert">Click me</button></td>
                                                </tr>
                                                <tr class="border-0">
                                                    <td class="border-0"><i class="mdi mdi-circle-outline mr-1 text-secondary"></i>Chaining modals (queue) example</td>
                                                    <td class="border-0"><button type="button" class="btn btn-gradient-primary waves-effect waves-light" id="chaining-alert">Click me</button></td>
                                                </tr>
                                                <tr class="border-0">
                                                    <td class="border-0"><i class="mdi mdi-circle-outline mr-1 text-danger"></i>A message with auto close timer</td>
                                                    <td class="border-0"><button type="button" class="btn btn-gradient-primary waves-effect waves-light" id="sa-auto-close">Click me</button></td>
                                                </tr>
                                                <tr class="border-0">
                                                    <td class="border-0"><i class="mdi mdi-circle-outline mr-1 text-purple"></i>Custom HTML description and buttons</td>
                                                    <td class="border-0"><button type="button" class="btn btn-gradient-primary waves-effect waves-light" id="custom-html-alert">Click me</button></td>
                                                </tr>
                                                <tr class="border-0">
                                                    <td class="border-0"><i class="mdi mdi-circle-outline mr-1 text-success"></i>By passing a parameter, you can execute something else for "Cancel".</td>
                                                    <td class="border-0"><button type="button" class="btn btn-gradient-primary waves-effect waves-light" id="sa-params">Click me</button></td>
                                                </tr>
                                                <tr class="border-0">
                                                    <td class="border-0"><i class="mdi mdi-circle-outline mr-1 text-warning"></i>A warning message, with a function attached to the "Confirm"-button...</td>
                                                    <td class="border-0"><button type="button" class="btn btn-gradient-primary waves-effect waves-light" id="sa-warning">Click me</button></td>
                                                </tr>
                                                <tr class="border-0">
                                                    <td class="border-0"><i class="mdi mdi-circle-outline mr-1 text-info"></i>A message with custom width, padding and background</td>
                                                    <td class="border-0"><button type="button" class="btn btn-gradient-primary waves-effect waves-light" id="custom-padding-width-alert">Click me</button></td>
                                                </tr>
                                                <tr class="border-0">
                                                    <td class="border-0"><i class="mdi mdi-circle-outline mr-1 text-pink"></i>Dynamic queue example</td>
                                                    <td class="border-0"><button type="button" class="btn btn-gradient-primary waves-effect waves-light" id="dynamic-alert">Click me</button></td>
                                                </tr>  
                                                <tr class="border-0">
                                                    <td class="border-0"><i class="mdi mdi-circle-outline mr-1 text-pink"></i>A modal with a title, an error icon, a text, and a footer</td>
                                                    <td class="border-0"><button type="button" class="btn btn-gradient-primary waves-effect waves-light" id="sa-footer">Click me</button></td>
                                                </tr>   
                                                <tr class="border-0">
                                                    <td class="border-0"><i class="mdi mdi-circle-outline mr-1 text-warning"></i>Mixin example</td>
                                                    <td class="border-0"><button type="button" class="btn btn-gradient-primary waves-effect waves-light" id="sa-mixin">Click me</button></td>
                                                </tr>                                            
                                            </tbody>
                                        </table>
                                    </div><!--table responsive-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div> <!-- end row --> 

                </div><!-- container -->
@stop

@section('footerScript')
<!-- Sweet-Alert  -->
<script src="{{ URL::asset('plugins/sweet-alert2/sweetalert2.min.js')}}"></script>
<script src="{{ URL::asset('assets/pages/jquery.sweet-alert.init.js')}}"></script>   
@stop