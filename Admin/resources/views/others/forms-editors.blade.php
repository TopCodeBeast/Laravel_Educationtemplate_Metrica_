@extends('layouts.master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
    <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                             @component('common-components.breadcrumb')
                                 @slot('title') Form Editors @endslot
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
                                    <h4 class="mt-0 header-title">Tinymce wysihtml5</h4>
                                    <p class="text-muted mb-3">Bootstrap-wysihtml5 is a javascript
                                        plugin that makes it easy to create simple, beautiful wysiwyg editors
                                        with the help of wysihtml5 and Twitter Bootstrap.
                                    </p>        
                                    <form method="post">
                                        <textarea id="elm1" name="area"></textarea>
                                    </form>        
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div> <!-- end row --> 

                </div><!-- container -->
@stop

@section('footerScript')
        <!--Wysiwig js-->
        <script src="{{ URL::asset('plugins/tinymce/tinymce.min.js')}}"></script>
        <script src="{{ URL::asset('assets/pages/jquery.form-editor.init.js')}}"></script>
@stop