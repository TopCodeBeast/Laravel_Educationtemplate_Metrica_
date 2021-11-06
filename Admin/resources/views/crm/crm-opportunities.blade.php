@extends('layouts.crm-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
  <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                              @component('common-components.breadcrumb')
                                 @slot('title') Opportunities @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') CRM @endslot
                              @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6 ">
                                            <h4 class="mt-0 header-title">All Opportunities by Owner</h4>
                                            <p class="text-muted mb-4">Contrary to popular
                                                 belief, Lorem Ipsum is not simply random text.
                                            </p>
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <form class="form-inline">
                                                        <div class="form-group">
                                                            <label for="inputPassword2" class="sr-only">Search</label>
                                                            <input type="search" class="form-control" id="inputPassword2" placeholder="Search...">
                                                        </div>
                                                        <div class="form-group mx-sm-3">
                                                            <label for="status-select" class="mr-2">Sort By</label>
                                                            <select class="custom-select" id="status-select">
                                                                <option selected="">All</option>
                                                                <option value="1">Hot</option>
                                                                <option value="2">Cold</option>
                                                                <option value="3">In Progress</option>
                                                                <option value="4">Lost</option>
                                                                <option value="5">Won</option>
                                                            </select>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="text-lg-right mt-3 mt-lg-0">
                                                        <button type="button" class="btn btn-info waves-effect waves-light mr-1"><i class="mdi mdi-filter-variant"></i></button>
                                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">+ Add New</button>
                                                    </div>
                                                     <!--  Modal content for the above example -->
                                                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Add New Opportunities</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="Location">Location</label>
                                                                                    <input type="text" class="form-control" id="Location" required="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="PhoneNo">Phone No</label>
                                                                                    <input type="text" class="form-control" id="PhoneNo" required="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-8">
                                                                                <div class="form-group">
                                                                                    <label for="NewOppEmail">Email</label>
                                                                                    <input type="email" class="form-control" id="NewOppEmail" required="">
                                                                                </div>
                                                                            </div>  
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                    <label for="modal-status-select" class="mr-2">Category</label>
                                                                                    <select class="custom-select" id="modal-status-select">
                                                                                        <option selected="">Select</option>
                                                                                        <option value="1">Hot</option>
                                                                                        <option value="2">Cold</option>
                                                                                        <option value="3">In Progress</option>
                                                                                        <option value="4">Lost</option>
                                                                                        <option value="5">Won</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>                                     
                                                                        </div> 
                                                                        <button type="button" class="btn btn-sm btn-primary">Save</button>  
                                                                        <button type="button" class="btn btn-sm btn-danger">Delete</button>             
                                                                    </form>  
                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div><!-- /.modal -->    
                                                </div><!-- end col-->
                                            </div> <!-- end row -->
                                        </div><!--end col-->
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <div class="media">
                                                        <div id="apex_radialbar4" class="apex-charts mb-n4"></div>
                                                        <div class="media-body align-self-center">
                                                            <h4 class="mt-0 mb-2 font-16">Leads Won by Owner</h4>
                                                           <p class="text-muted mb-0">There are many variations of passages
                                                                of Lorem Ipsum available, but the majority have suffered
                                                                 alteration in some form.
                                                            </p>                                                 
                                                        </div><!--end media-body-->
                                                    </div><!--end media-->                                                    
                                                </div><!-- end col-->
                                                <div class="col-lg-3 align-self-center">
                                                    <ul class="list-unstyled mb-0">
                                                        <li><i class="mdi mdi-circle mr-2 text-success"></i>Won</li>
                                                        <li><i class="mdi mdi-circle mr-2 text-warning"></i>In Progress</li>
                                                        <li><i class="mdi mdi-circle mr-2 text-purple"></i>Hot</li>
                                                        <li><i class="mdi mdi-circle mr-2 text-secondary"></i>Cold</li>
                                                        <li><i class="mdi mdi-circle mr-2 text-danger"></i>Lost</li>
                                                    </ul>
                                                </div><!-- end col-->
                                            </div><!-- end row -->
                                        </div><!-- end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <div class="media">
                                                <img class="d-flex align-self-center mr-3 rounded-circle" src="{{ URL::asset('assets/images/widgets/opp-1.png')}}" alt="" height="50">
                                                <div class="media-body align-self-center">
                                                    <h4 class="mt-0 mb-2 font-16">Starbucks coffee</h4>
                                                    <ul class="list-inline mb-0 text-muted">
                                                        <li class="list-inline-item mr-2"><span><i class="fas fa-map-marker-alt mr-2 text-info font-14"></i></span>Seattle, Washington</li>
                                                        <li class="list-inline-item mr-2"><span><i class="far fa-envelope mr-2 text-info font-14"></i></span>Ernest@Webster.com</li>
                                                        <li class="list-inline-item"><span><i class="fas fa-mobile-alt mr-2 text-info font-14"></i></span>+1 234 567 890</li>
                                                    </ul>                                                    
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </div><!--end col-->
                                        <div class="col-sm-2 align-self-center">
                                            <div class="text-right">
                                                <span><i class="mdi mdi-circle text-success mr-2"></i></span>
                                                <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->

                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <div class="media">
                                                <img class="d-flex align-self-center mr-3 rounded-circle" src="{{ URL::asset('assets/images/widgets/opp-2.png')}}" alt="" height="50">
                                                <div class="media-body align-self-center">
                                                    <h4 class="mt-0 mb-2 font-16">Mac Donald</h4>
                                                    <ul class="list-inline mb-0 text-muted">
                                                        <li class="list-inline-item mr-2"><span><i class="fas fa-map-marker-alt mr-2 text-info font-14"></i></span>Seattle, Washington</li>
                                                        <li class="list-inline-item mr-2"><span><i class="far fa-envelope mr-2 text-info font-14"></i></span>Ernest@Webster.com</li>
                                                        <li class="list-inline-item"><span><i class="fas fa-mobile-alt mr-2 text-info font-14"></i></span>+1 234 567 890</li>
                                                    </ul>                                                    
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </div><!--end col-->
                                        <div class="col-sm-2 align-self-center">
                                            <div class="text-right">
                                                <span><i class="mdi mdi-circle text-secondary mr-2"></i></span>
                                                <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->

                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <div class="media">
                                                <img class="d-flex align-self-center mr-3 rounded-circle" src="{{ URL::asset('assets/images/widgets/opp-3.png')}}" alt="" height="50">
                                                <div class="media-body align-self-center">
                                                    <h4 class="mt-0 mb-2 font-16">Life Good</h4>
                                                    <ul class="list-inline mb-0 text-muted">
                                                        <li class="list-inline-item mr-2"><span><i class="fas fa-map-marker-alt mr-2 text-info font-14"></i></span>Seattle, Washington</li>
                                                        <li class="list-inline-item mr-2"><span><i class="far fa-envelope mr-2 text-info font-14"></i></span>Ernest@Webster.com</li>
                                                        <li class="list-inline-item"><span><i class="fas fa-mobile-alt mr-2 text-info font-14"></i></span>+1 234 567 890</li>
                                                    </ul>                                                    
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </div><!--end col-->
                                        <div class="col-sm-2 align-self-center">
                                            <div class="text-right">
                                                <span><i class="mdi mdi-circle text-purple mr-2"></i></span>
                                                <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <div class="media">
                                                <img class="d-flex align-self-center mr-3 rounded-circle" src="{{ URL::asset('assets/images/widgets/opp-1.png')}}" alt="" height="50">
                                                <div class="media-body align-self-center">
                                                    <h4 class="mt-0 mb-2 font-16">Starbucks coffee</h4>
                                                    <ul class="list-inline mb-0 text-muted">
                                                        <li class="list-inline-item mr-2"><span><i class="fas fa-map-marker-alt mr-2 text-info font-14"></i></span>Seattle, Washington</li>
                                                        <li class="list-inline-item mr-2"><span><i class="far fa-envelope mr-2 text-info font-14"></i></span>Ernest@Webster.com</li>
                                                        <li class="list-inline-item"><span><i class="fas fa-mobile-alt mr-2 text-info font-14"></i></span>+1 234 567 890</li>
                                                    </ul>                                                    
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </div><!--end col-->
                                        <div class="col-sm-2 align-self-center">
                                            <div class="text-right">
                                                <span><i class="mdi mdi-circle text-success mr-2"></i></span>
                                                <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->

                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <div class="media">
                                                <img class="d-flex align-self-center mr-3 rounded-circle" src="{{ URL::asset('assets/images/widgets/opp-2.png')}}" alt="" height="50">
                                                <div class="media-body align-self-center">
                                                    <h4 class="mt-0 mb-2 font-16">Mac Donald</h4>
                                                    <ul class="list-inline mb-0 text-muted">
                                                        <li class="list-inline-item mr-2"><span><i class="fas fa-map-marker-alt mr-2 text-info font-14"></i></span>Seattle, Washington</li>
                                                        <li class="list-inline-item mr-2"><span><i class="far fa-envelope mr-2 text-info font-14"></i></span>Ernest@Webster.com</li>
                                                        <li class="list-inline-item"><span><i class="fas fa-mobile-alt mr-2 text-info font-14"></i></span>+1 234 567 890</li>
                                                    </ul>                                                    
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </div><!--end col-->
                                        <div class="col-sm-2 align-self-center">
                                            <div class="text-right">
                                                <span><i class="mdi mdi-circle text-secondary mr-2"></i></span>
                                                <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->

                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <div class="media">
                                                <img class="d-flex align-self-center mr-3 rounded-circle" src="{{ URL::asset('assets/images/widgets/opp-3.png')}}" alt="" height="50">
                                                <div class="media-body align-self-center">
                                                    <h4 class="mt-0 mb-2 font-16">Life Good</h4>
                                                    <ul class="list-inline mb-0 text-muted">
                                                        <li class="list-inline-item mr-2"><span><i class="fas fa-map-marker-alt mr-2 text-info font-14"></i></span>Seattle, Washington</li>
                                                        <li class="list-inline-item mr-2"><span><i class="far fa-envelope mr-2 text-info font-14"></i></span>Ernest@Webster.com</li>
                                                        <li class="list-inline-item"><span><i class="fas fa-mobile-alt mr-2 text-info font-14"></i></span>+1 234 567 890</li>
                                                    </ul>                                                    
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </div><!--end col-->
                                        <div class="col-sm-2 align-self-center">
                                            <div class="text-right">
                                                <span><i class="mdi mdi-circle text-purple mr-2"></i></span>
                                                <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!-- container -->
@stop

@section('footerScript')

        <script src="../assets/pages/jquery.crm_opportunities.init.js"></script>
@stop