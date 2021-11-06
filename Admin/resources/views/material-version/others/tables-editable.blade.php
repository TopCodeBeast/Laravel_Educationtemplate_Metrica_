@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
   <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                              @component('common-components.breadcrumb')
                                 @slot('title') Edit Table @endslot
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
    
                                    <h4 class="mt-0 header-title">Edit Table With Button</h4>
                                    <p class="text-muted mb-3">Add toolbar column with edit and delete buttons.</p>
    
                                    <button class="btn  btn-primary mb-3" id="submit_data">Submit</button>
                                    <div class="table-responsive">
                                        <table class="table  table-bordered" id="makeEditable">
                                            <thead>
                                            <tr>
                                                <th>Firstname</th>
                                                <th>Lastname</th>
                                                <th>Email </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Default</td>
                                                <td>Defaultson</td>
                                                <td>def@somemail.com</td>
                                            </tr>
                                            <tr class="success">
                                                <td>Success</td>
                                                <td>Doe</td>
                                                <td>john@example.com</td>
                                            </tr>
                                            <tr class="danger">
                                                <td>Danger</td>
                                                <td>Moe</td>
                                                <td>mary@example.com</td>
                                            </tr>
                                            <tr class="info">
                                                <td>Info</td>
                                                <td>Dooley</td>
                                                <td>july@example.com</td>
                                            </tr>
                                            <tr class="warning">
                                                <td>Warning</td>
                                                <td>Refs</td>
                                                <td>bo@example.com</td>
                                            </tr>
                                            <tr class="active">
                                                <td>Active</td>
                                                <td>Activeson</td>
                                                <td>act@example.com</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <span class="float-right">
                                        <button id="but_add" class="btn btn-danger">Add New Row</button>
                                    </span><!--end table-->     
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
    
                                    <h4 class="mt-0 header-title">Examples</h4>
                                    <p class="text-muted mb-3">just start typing to edit, or move around with arrow keys or mouse clicks!</p>
    
                                    <table id="mainTable" class="table table-striped  mb-0">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Cost</th>
                                            <th>Profit</th>
                                            <th>Fun</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Car</td>
                                            <td>100</td>
                                            <td>200</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Bike</td>
                                            <td>330</td>
                                            <td>240</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>Plane</td>
                                            <td>430</td>
                                            <td>540</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>Yacht</td>
                                            <td>100</td>
                                            <td>200</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Segway</td>
                                            <td>330</td>
                                            <td>240</td>
                                            <td>1</td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th><strong>TOTAL</strong></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        </tfoot>
                                    </table>
    
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row --> 

                </div><!-- container -->
@stop

@section('footerScript')
        <script src="{{ URL::asset('plugins/tiny-editable/mindmup-editabletable.js')}}"></script>
        <script src="{{ URL::asset('plugins/tiny-editable/numeric-input-example.js')}}"></script>
        <script src="{{ URL::asset('plugins/bootable/bootstable.js')}}"></script> 
        <script src="{{ URL::asset('assets/pages/jquery.tabledit.init.js')}}"></script> 
@stop