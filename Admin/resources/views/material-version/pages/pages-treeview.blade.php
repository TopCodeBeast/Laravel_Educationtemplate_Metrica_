@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('headerStyle')
        <link href="{{ URL::asset('plugins/treeview/themes/default/style.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('plugins/treeview/file-explore.css')}}" rel="stylesheet">

@stop

@section('content')
  <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
 
                             @component('common-components.breadcrumb')
                                 @slot('title') Treeview @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Pages @endslot
                                 @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class=" col-sm-6">
                            <div class="card">
                                
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Default Tree</h4>
                                    <div id="jstree">
                                        <!-- in this example the tree is populated from inline HTML -->
                                        <ul>
                                            <li class="jstree-open"  data-jstree='{"icon":"fa fa-folder text-warning font-18"}'>Root node 1
                                                <ul>
                                                    <li data-jstree='{"icon":"fa fa-folder text-primary font-18"}'>Child node 1</li>
                                                    <li data-jstree='{"icon":"fa fa-folder text-warning font-18"}'>Child node 2</li>
                                                    <li data-jstree='{"icon":"fa fa-folder text-warning font-18"}'>Child node 3</li>
                                                    <li  data-jstree='{"icon":"fa fa-folder text-warning font-18"}' class="jstree-open">Child node 3
                                                        <ul>
                                                            <li data-jstree='{"icon":"fa fa-folder text-warning font-18"}'>Child node 1</li>
                                                            <li data-jstree='{"icon":"fa fa-folder text-warning font-18"}'>Child node 2
                                                                <ul>
                                                                    <li data-jstree='{"icon":"fa fa-folder text-warning font-18"}'>Child node 1</li>
                                                                    <li data-jstree='{"icon":"fa fa-folder text-warning font-18"}'>Child node 2</li>
                                                                </ul>
                                                            </li>
                                                            <li data-jstree='{"icon":"fa fa-folder text-warning font-18"}'>Child node 3</li>
                                                            <li data-jstree='{"icon":"fa fa-folder text-warning font-18"}'>Child node 4</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li data-jstree='{"icon":"fa fa-folder text-warning font-18"}'>Root node 2
                                                <ul>
                                                    <li data-jstree='{"icon":"fa fa-folder text-warning font-18"}'>Child</li>
                                                    <li data-jstree='{"icon":"fa fa-folder text-warning font-18", "disabled":true}'>
                                                        Child
                                                    </li>                                                           
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class=" col-sm-6">
                            <div class="card">                                        
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Checkable Tree</h4>
                                    <div id="jstree-checkbox">
                                        <!-- in this example the tree is populated from inline HTML -->
                                        <ul>
                                            <li data-jstree='{"icon":"fa fa-folder text-warning font-18"}' class="jstree-open">Root node 1
                                                <ul>
                                                    <li data-jstree='{"icon":"fa fa-folder text-warning font-18"}'>Child node 1</li>
                                                    <li data-jstree='{"icon":"fa fa-folder text-warning font-18"}'>Child node 2</li>
                                                    <li data-jstree='{"icon":"fa fa-folder text-warning font-18"}' class="jstree-open">Child node 3
                                                        <ul>
                                                            <li data-jstree='{"icon":"fa fa-folder text-warning font-18"}'>Child node 1</li>
                                                            <li data-jstree='{"icon":"fa fa-folder text-warning font-18"}'>Child node 2</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li data-jstree='{"icon":"fa fa-folder text-warning font-18"}'>Root node 2</li>
                                        </ul>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!-- end col -->              
                    </div><!-- end row -->

                </div><!-- container -->
@stop

@section('footerScript')

        <script src="{{ URL::asset('plugins/treeview/jstree.min.js')}}"></script>
        <script src="{{ URL::asset('assets/pages/jquery.treeview.init.js')}}"></script>
@stop