@extends('layouts.master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('headerStyle')
<link href="{{ URL::asset('plugins/hopscotch/hopscotch.min.css')}}" rel="stylesheet" type="text/css" />
@stop

@section('content')
 <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                             @component('common-components.breadcrumb')
                                 @slot('title') Tour @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Pages @endslot
                                 @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card" id="tourJumbotron">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Jumbotron</h4>
                                    <p class="text-muted mb-4">ads via Carbon
                                        A lightweight, flexible component that can optionally extend the entire viewport to showcase key marketing messages on your site.
                                    </p>
                                    <div class="jumbotron bg-light mb-0">
                                        <h1 class="display-5 font-weight-normal">Hello, world!</h1>
                                        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                                        <hr class="my-4">
                                        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                                        <a class="btn btn-gradient-primary btn-lg" href="#" role="button">Learn more</a>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row--> 

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card text-white bg-primary">
                                <div class="card-body">
                                    <blockquote class="card-bodyquote mb-0">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur. Integer posuere
                                            erat a ante.</p>
                                        <footer class="blockquote-footer text-white font-14">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                        </footer>
                                    </blockquote>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                                
                        <div class="col-lg-4">
                            <div class="card text-white bg-warning">
                                <div class="card-body">
                                    <blockquote class="card-bodyquote mb-0">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur. Integer posuere
                                            erat a ante.</p>
                                        <footer class="blockquote-footer text-white font-14">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                        </footer>
                                    </blockquote>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-4">
                            <div class="card bg-pink text-white" id="bg_colorCard">
                                <div class="card-body">
                                    <blockquote class="card-bodyquote mb-0">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur. Integer posuere
                                            erat a ante.</p>
                                        <footer class="blockquote-footer text-white font-14">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                        </footer>
                                    </blockquote>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
    
                                    <h4 class="mt-0 header-title">Bordered table</h4>
                                    <p class="text-muted mb-4">Add <code>.table-bordered</code> for
                                        borders on all sides of the table and cells.
                                    </p>
    
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0 table-centered">
                                            <thead>
                                            <tr>
                                                <th>Transaction ID</th>
                                                <th>Date</th>
                                                <th>Price</th>
                                                <th>Order Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>#124781</td>
                                                <td>25/11/2018</td>
                                                <td>$321</td>
                                                <td><span class="badge badge-success">Approved</span></td>
                                                <td>
                                                    <div class="dropdown d-inline-block float-right">
                                                        <a class="nav-link dropdown-toggle arrow-none" id="dLabel8" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel8">
                                                            <a class="dropdown-item" href="#">Creat Project</a>
                                                            <a class="dropdown-item" href="#">Open Project</a>
                                                            <a class="dropdown-item" href="#">Tasks Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#542136</td>
                                                <td>19/11/2018</td>
                                                <td>$227</td>
                                                <td><span class="badge badge-success">Approved</span></td>
                                                <td>
                                                    <div class="dropdown d-inline-block float-right">
                                                        <a class="nav-link dropdown-toggle arrow-none" id="dLabel9" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel9">
                                                            <a class="dropdown-item" href="#">Creat Project</a>
                                                            <a class="dropdown-item" href="#">Open Project</a>
                                                            <a class="dropdown-item" href="#">Tasks Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#234578</td>
                                                <td>11/10/2018</td>
                                                <td>$442</td>
                                                <td><span class="badge badge-danger">Rejected</span></td>
                                                <td>
                                                    <div class="dropdown d-inline-block float-right">
                                                        <a class="nav-link dropdown-toggle arrow-none" id="dLabel10" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel10">
                                                            <a class="dropdown-item" href="#">Creat Project</a>
                                                            <a class="dropdown-item" href="#">Open Project</a>
                                                            <a class="dropdown-item" href="#">Tasks Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#951357</td>
                                                <td>03/12/2018</td>
                                                <td>$625</td>
                                                <td><span class="badge badge-success">Approved</span></td>
                                                <td>
                                                    <div class="dropdown d-inline-block float-right">
                                                        <a class="nav-link dropdown-toggle arrow-none" id="dLabel11" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel11">
                                                            <a class="dropdown-item" href="#">Creat Project</a>
                                                            <a class="dropdown-item" href="#">Open Project</a>
                                                            <a class="dropdown-item" href="#">Tasks Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table><!--end /table-->
                                    </div><!--end /tableresponsive-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!-- container -->

@stop

@section('footerScript')
<script src="{{ URL::asset('plugins/hopscotch/hopscotch.js')}}"></script> 
<script src="{{ URL::asset('assets/pages/jquery.tour.init.js')}}"></script>         
@stop