

@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
<div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                             @component('common-components.breadcrumb')
                                 @slot('title') Repeater @endslot
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
                                    <h4 class="mt-0 header-title">Default Repeater</h4>
                                    <p class="text-muted mb-3">An interface to add and remove a repeatable group of input elements.</p>

                                    <form method="POST" class="form-horizontal well">
                                        <fieldset>
                                            <div class="repeater-default">
                                                <div data-repeater-list="car">
                                                    <div data-repeater-item="">
                                                        <div class="form-group row d-flex align-items-end">
                                                            
                                                            <div class="col-sm-4">
                                                                <label class="control-label">Make</label>
                                                                <select name="car[0][make]" class="form-control">
                                                                    <option value="volkswagon" selected="">Volkswagon</option>
                                                                    <option value="honda">Honda</option>
                                                                    <option value="ford">Ford</option>
                                                                </select>
                                                            </div><!--end col-->
                                                            
                                                            <div class="col-sm-4">
                                                                <label class="control-label">Model</label>
                                                                <input type="text" name="car[0][model]" value="Beetle" class="form-control">
                                                            </div><!--end col-->
                                                
                                                            <div class="col-sm-3">
                                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck1"  name="car[0][features][]" value="ac">
                                                                    <label class="custom-control-label" for="customCheck1">Air Conditioning</label>
                                                                </div>

                                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck2" name="car[0][features][]" value="abs">
                                                                    <label class="custom-control-label" for="customCheck2">Anti-Lock Brakes</label>
                                                                </div>
                                                            </div><!--end col-->
                                                
                                                            <div class="col-sm-1">
                                                                <span data-repeater-delete="" class="btn btn-gradient-danger btn-sm">
                                                                    <span class="far fa-trash-alt mr-1"></span> Delete
                                                                </span>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end /div-->
                                            
                                                    <div data-repeater-item="">
                                                        <div class="form-group row d-flex align-items-end">
                                                            
                                                            <div class="col-sm-4">
                                                                <label class="control-label">Make</label>
                                                                <select name="car[1][make]" class="form-control">
                                                                    <option value="volkswagon">Volkswagon</option>
                                                                    <option value="honda" selected="">Honda</option>
                                                                    <option value="ford">Ford</option>
                                                                </select>
                                                            </div><!--end col-->                                                    
                                                            
                                                            <div class="col-sm-4">
                                                                <label class="control-label">Model</label>
                                                                <input type="text" name="car[1][model]" value="Accord" class="form-control">
                                                            </div><!--end col-->
                                                
                                                            <div class="col-sm-3">
                                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck3"  name="car[0][features][]" value="ac">
                                                                    <label class="custom-control-label" for="customCheck3">Air Conditioning</label>
                                                                </div>

                                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck4" name="car[0][features][]" value="abs">
                                                                    <label class="custom-control-label" for="customCheck4">Anti-Lock Brakes</label>
                                                                </div>
                                                            </div><!--end col-->
                                                
                                                            <div class="col-sm-1">
                                                                <span data-repeater-delete="" class="btn btn-gradient-danger btn-sm">
                                                                    <span class="far fa-trash-alt mr-1"></span> Delete
                                                                </span>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end /div-->
                                                </div><!--end repet-list-->
                                                <div class="form-group mb-0 row">
                                                    <div class="col-sm-12">
                                                        <span data-repeater-create="" class="btn btn-gradient-secondary">
                                                            <span class="fas fa-plus"></span> Add
                                                        </span>
                                                        <input type="submit" value="Submit" class="btn btn-gradient-primary">
                                                    </div><!--end col-->
                                                </div><!--end row-->                                         
                                            </div> <!--end repeter-->                                           
                                        </fieldset><!--end fieldset-->
                                    </form><!--end form-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->

                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Custom Show/Hide Repeater</h4>
                                    <p class="text-muted mb-3">An interface to add and remove a repeatable group of input elements.</p>

                                    <form method="POST" class="form-horizontal well">
                                        <fieldset>
                                            <div class="repeater-custom-show-hide">
                                                <div data-repeater-list="car">
                                                    <div data-repeater-item="">
                                                        <div class="form-group row  d-flex align-items-end">
                                                            
                                                            <div class="col-sm-4">
                                                                <label class="control-label">Make</label>
                                                                <select name="car[0][make]" class="form-control">
                                                                    <option value="volkswagon" selected="">Volkswagon</option>
                                                                    <option value="honda">Honda</option>
                                                                    <option value="ford">Ford</option>
                                                                </select>
                                                            </div><!--end col-->                                                   
                                                            
                                                            <div class="col-sm-4">
                                                                <label class="control-label">Model</label>
                                                                <input type="text" name="car[0][model]" value="Beetle" class="form-control">
                                                            </div><!--end col-->
                                                
                                                            <div class="col-sm-3">
                                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck5"  name="car[0][features][]" value="ac">
                                                                    <label class="custom-control-label" for="customCheck5">Air Conditioning</label>
                                                                </div>

                                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck6" name="car[0][features][]" value="abs">
                                                                    <label class="custom-control-label" for="customCheck6">Anti-Lock Brakes</label>
                                                                </div>
                                                            </div><!--end col-->
                                                
                                                            <div class="col-sm-1">
                                                                <span data-repeater-delete="" class="btn btn-gradient-danger btn-sm">
                                                                    <span class="far fa-trash-alt mr-1"></span> Delete
                                                                </span>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end /div-->
                                            
                                                    <div data-repeater-item="">
                                                        <div class="form-group row  d-flex align-items-end">                                                            
                                                            <div class="col-sm-4">
                                                                <label class="control-label">Make</label>
                                                                <select name="car[1][make]" class="form-control">
                                                                    <option value="volkswagon">Volkswagon</option>
                                                                    <option value="honda" selected="">Honda</option>
                                                                    <option value="ford">Ford</option>
                                                                </select>
                                                            </div><!--end col-->                                                    
                                                            
                                                            <div class="col-sm-4">
                                                                <label class="control-label">Model</label>
                                                                <input type="text" name="car[1][model]" value="Accord" class="form-control">
                                                            </div><!--end col-->
                                                
                                                            <div class="col-sm-3">
                                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck7"  name="car[0][features][]" value="ac">
                                                                    <label class="custom-control-label" for="customCheck7">Air Conditioning</label>
                                                                </div>

                                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck8" name="car[0][features][]" value="abs">
                                                                    <label class="custom-control-label" for="customCheck8">Anti-Lock Brakes</label>
                                                                </div>
                                                            </div><!--end col-->
                                                
                                                            <div class="col-sm-1">
                                                                <span data-repeater-delete="" class="btn btn-gradient-danger btn-sm">
                                                                    <span class="far fa-trash-alt mr-1"></span> Delete
                                                                </span>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end /div-->
                                                </div><!--end repet-list-->

                                                <div class="form-group row mb-0">
                                                    <div class="col-sm-12">
                                                        <span data-repeater-create="" class="btn btn-gradient-secondary btn-md">
                                                            <span class="fa fa-plus"></span> Add
                                                        </span>
                                                        <input type="submit" value="Submit" class="btn btn-gradient-primary">
                                                    </div><!--end col-->
                                                </div><!--end row-->
                                            </div> <!--end repeter-->                                           
                                        </fieldset><!--end fieldset-->
                                    </form><!--end form-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div> <!-- end row --> 

                </div><!-- container -->
@stop

@section('footerScript')
<script src="{{ URL::asset('plugins/repeater/jquery.repeater.min.js')}}"></script>
<script src="{{ URL::asset('assets/pages/jquery.form-repeater.js')}}"></script>        
@stop