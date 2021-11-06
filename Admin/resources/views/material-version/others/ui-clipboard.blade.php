@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
   <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                             @component('common-components.breadcrumb')
                                 @slot('title') Clip Board @endslot
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
                                    <h4 class="mt-0 header-title">Clipboard Examples</h4>
                                    <p class="text-muted mb-4">Inpu example of clipboard</p>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="clipboardInput" value="Welcome to Crovex !">
                                        <div class="input-group-append">
                                            <button type="button" class="btn btn-gradient-secondary btn-clipboard" data-clipboard-action="copy" data-clipboard-target="#clipboardInput"><i class="far fa-copy mr-2"></i>Copy</button>
                                            <button type="button" class="btn btn-gradient-primary btn-clipboard" data-clipboard-action="cut" data-clipboard-target="#clipboardInput"><i class="fas fa-cut mr-2"></i>Cut</button>
                                        </div>
                                    </div>                                        
                                </div><!--end card-body-->
                            </div><!--end card-->

                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Clipboard Examples of Paragraph</h4>
                                    <p class="text-muted mb-4">Paragraph example of clipboard</p>
                                    <p id="clipboardParagraph" class="border p-3">Contrary to popular belief, Lorem Ipsum is not simply random text. 
                                        It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, 
                                        a Latin professor at Hampden-Sydney College in Virginia, looked 
                                    </p>
                                    <div class="mt-3">
                                            <button type="button" class="btn btn-gradient-secondary btn-clipboard" data-clipboard-action="copy" data-clipboard-target="#clipboardParagraph"><i class="far fa-copy mr-2"></i>Copy</button>
                                    </div>
                                </div>
                            </div>
                            
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Clipboard Examples of Textarea</h4>
                                    <p class="text-muted mb-4">Textarea example of clipboard</p>
                                    <textarea  class="form-control" rows="3" id="clipboardTextarea">Welcome to Crovex !</textarea>
                                    <div class="mt-3">
                                        <button type="button" class="btn btn-gradient-secondary btn-clipboard" data-clipboard-action="copy" data-clipboard-target="#clipboardTextarea"><i class="far fa-copy mr-2"></i>Copy</button>
                                        <button type="button" class="btn btn-gradient-primary btn-clipboard" data-clipboard-action="cut" data-clipboard-target="#clipboardTextarea"><i class="fas fa-cut mr-2"></i>Cut</button>
                                    </div>                                       
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                </div><!-- container -->
@stop

@section('footerScript')

        <script src="{{ URL::asset('plugins/clipboard/clipboard.min.js')}}"></script>
        <script src="{{ URL::asset('assets/pages/jquery.clipboard.init.js')}}"></script>
        
@stop