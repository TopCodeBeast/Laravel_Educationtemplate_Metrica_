@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                                @component('common-components.breadcrumb')
                                 @slot('title') Dragger Table @endslot
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
                                    <h4 class="mt-0 header-title">Default</h4>
                                    <p class="text-muted mb-3">Default With no options, sort columns, handler was the first row.</p>    
                                    <div class="table-responsive">
                                        <table id="default-table" class="table sindu-table">
                                            <thead class="thead-light">
                                                <tr>
                                                <th>Movie Title<i class="mdi mdi-cursor-move ml-2 text-primary"></i></th>
                                                <th>Genre<i class="mdi mdi-cursor-move ml-2 text-primary"></i></th>
                                                <th>Year<i class="mdi mdi-cursor-move ml-2 text-primary"></i></th>
                                                <th>Gross<i class="mdi mdi-cursor-move ml-2 text-primary"></i></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Star Wars</td>
                                                    <td>Adventure, Sci-fi</td>
                                                    <td>1977</td>
                                                    <td>$460,935,665</td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <td>Howard The Duck</td>
                                                    <td>"Comedy"</td>
                                                    <td>1986</td>
                                                    <td>$16,295,774</td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <td>American Graffiti</td>
                                                    <td>Comedy, Drama</td>
                                                    <td>1973</td>
                                                    <td>$115,000,000</td>
                                                </tr><!--end tr-->
                                            </tbody><!--end tbody-->
                                          </table><!--end table-->
                                    </div><!--end /tableresponsive-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">    
                                    <h4 class="mt-0 header-title">Sort Rows</h4>
                                    <p class="text-muted mb-3">Sort Rows Sort rows, handler was the first column.</p>    
                                    <div class="table-responsive">
                                        <table id="row-table" class="table sindu-table">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Movie Title<i class="mdi mdi-cursor-move ml-2 text-primary"></i></th>
                                                    <th>Genre<i class="handle"></i></th>
                                                    <th>Year<i class="handle"></i></th>
                                                    <th>Gross<i class="handle"></i></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Star Wars<i class="mdi mdi-cursor-move ml-2 text-primary"></i></td>
                                                    <td>Adventure, Sci-fi</td>
                                                    <td>1977</td>
                                                    <td>$460,935,665</td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <td>Howard The Duck<i class="mdi mdi-cursor-move ml-2 text-primary"></i></td>
                                                    <td>"Comedy"</td>
                                                    <td>1986</td>
                                                    <td>$16,295,774</td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <td>American Graffiti<i class="mdi mdi-cursor-move ml-2 text-primary"></i></td>
                                                    <td>Comedy, Drama</td>
                                                    <td>1973</td>
                                                    <td>$115,000,000</td>
                                                </tr><!--end tr-->
                                            </tbody><!--end tbody-->
                                          </table><!--end table-->
                                    </div><!--end /tableresponsive-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">    
                                    <h4 class="mt-0 header-title">Only Body</h4>
                                    <p class="text-muted mb-3">Only Body Setting onlyBody to true in row mode, user can only lift rows in tBody.</p>    
                                    <div class="table-responsive">
                                        <table id="only-body-table" class="table sindu-table">
                                            <thead class="thead-light">
                                                <tr>
                                                <th>Movie Title<i class="handle"></i></th>
                                                <th>Genre<i class="handle"></i></th>
                                                <th>Year<i class="handle"></i></th>
                                                <th>Gross<i class="handle"></i></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Star Wars<i class="mdi mdi-cursor-move ml-2 text-primary"></i></td>
                                                    <td>Adventure, Sci-fi</td>
                                                    <td>1977</td>
                                                    <td>$460,935,665</td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <td>Howard The Duck<i class="mdi mdi-cursor-move ml-2 text-primary"></i></td>
                                                    <td>"Comedy"</td>
                                                    <td>1986</td>
                                                    <td>$16,295,774</td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <td>American Graffiti<i class="mdi mdi-cursor-move ml-2 text-primary"></i></td>
                                                    <td>Comedy, Drama</td>
                                                    <td>1973</td>
                                                    <td>$115,000,000</td>
                                                </tr><!--end tr-->
                                            </tbody><!--end tbody-->
                                          </table><!--end table-->
                                    </div><!--end /tableresponsive-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">    
                                    <h4 class="mt-0 header-title">Handler</h4>
                                    <p class="text-muted mb-3">Handler Specify drag handler wherever within the table.</p>    
                                    <div class="table-responsive">
                                        <table id="handle-table" class="table sindu-table">
                                            <thead class="thead-light">
                                                <tr>
                                                <th>Movie Title <i class="mdi mdi-cursor-move ml-2 text-primary"></i></th>
                                                <th>Genre<i class="handle"></i></th>
                                                <th>Year<i class="handle"></i></th>
                                                <th>Gross<i class="handle"></i></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Star Wars</td>
                                                    <td>Adventure, Sci-fi</td>
                                                    <td>1977</td>
                                                    <td>$460,935,665</td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <td>Howard The Duck</td>
                                                    <td>"Comedy"</td>
                                                    <td>1986</td>
                                                    <td>$16,295,774</td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <td>American Graffiti</td>
                                                    <td>Comedy, Drama</td>
                                                    <td>1973</td>
                                                    <td>$115,000,000</td>
                                                </tr><!--end tr-->
                                            </tbody><!--end tbody-->
                                          </table><!--end table-->
                                    </div><!--end /tableresponsive-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">    
                                    <h4 class="mt-0 header-title">Free</h4>
                                    <p class="text-muted mb-3">Free After mousedown, move mouse horizontally or vertically, see what happens. Don't forget to specify drag handler.</p>    
                                    <div class="table-responsive">
                                        <table id="free-table" class="table sindu-table">
                                            <thead class="thead-light">
                                                <tr>
                                                <th>Movie Title<i class="handle"></i></th>
                                                <th>Genre<i class="handle"></i></th>
                                                <th>Year<i class="handle"></i></th>
                                                <th>Gross<i class="handle"></i></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Star Wars <i class="mdi mdi-cursor-move ml-2 text-primary"></i></td>
                                                    <td>Adventure, Sci-fi</td>
                                                    <td>1977</td>
                                                    <td>$460,935,665</td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <td>Howard The Duck</td>
                                                    <td>"Comedy"</td>
                                                    <td>1986</td>
                                                    <td>$16,295,774</td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <td>American Graffiti</td>
                                                    <td>Comedy, Drama</td>
                                                    <td>1973</td>
                                                    <td>$115,000,000</td>
                                                </tr><!--end tr-->
                                            </tbody><!--end tbody-->
                                          </table><!--end table-->
                                    </div><!--end /tableresponsive-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">    
                                    <h4 class="mt-0 header-title">Event</h4>
                                    <p class="text-muted mb-3">Event Add callback when event trigger, open devtool see what happens.</p>    
                                    <div class="table-responsive">
                                        <table id="event-table" class="table sindu-table">
                                            <thead class="thead-light">
                                                <tr>
                                                <th>Movie Title <i class="handle"></i></th>
                                                <th>Genre<i class="handle"></i></th>
                                                <th>Year<i class="handle"></i></th>
                                                <th>Gross<i class="handle"></i></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Star Wars<i class="mdi mdi-cursor-move ml-2 text-primary"></i></td>
                                                    <td>Adventure, Sci-fi</td>
                                                    <td>1977</td>
                                                    <td>$460,935,665</td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <td>Howard The Duck</td>
                                                    <td>"Comedy"</td>
                                                    <td>1986</td>
                                                    <td>$16,295,774</td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <td>American Graffiti</td>
                                                    <td>Comedy, Drama</td>
                                                    <td>1973</td>
                                                    <td>$115,000,000</td>
                                                </tr><!--end tr-->
                                            </tbody><!--end tbody-->
                                          </table><!--end table-->
                                    </div><!--end /tableresponsive-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div><!--end row-->
                </div><!-- container -->
@stop

@section('footerScript')
<script src="{{ URL::asset('plugins/dragger/table-dragger.min.js')}}"></script>
<script src="{{ URL::asset('assets/pages/jquery.dragger.init.js')}}"></script>        
@stop