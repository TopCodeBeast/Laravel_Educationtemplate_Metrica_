@extends('layouts.hospital-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('headerStyle')
<link href="{{ URL::asset('plugins/dropify/css/dropify.min.css')}}" rel="stylesheet">
@stop

@section('content')
 <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                             @component('common-components.breadcrumb')
                                 @slot('title') Edit Member @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Hospital @endslot
                                 @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="card dr-pro-pic">
                                <div class="card-body">
                                    <form method="post" class="card-box">
                                        <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="{{ URL::asset('assets/images/users/user-4.jpg')}}"/>                                        
                                    </form>

                                    <div class="">
                                        <form class="form-horizontal form-material mb-0">
                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                    <input type="text" placeholder="First Name" value="Donald" class="form-control" name="First_Name" id="First_Name">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" placeholder="Last Name" value="Gardner" class="form-control" name="Last_Name" id="Last_Name">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <div class="col-md-3">
                                                    <input type="text" placeholder="Join Date" value="10/05/2016" class="form-control" name="Join_Date" id="Join_Date">
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" placeholder="Post" value="Nurse" class="form-control" name="Post" id="Post">
                                                </div>
                                                <div class="col-md-3">
                                                    <select class="form-control">
                                                        <option>Male</option>
                                                        <option selected>Female</option>
                                                    </select>
                                                </div>                                                
                                                <div class="col-md-3">
                                                    <input type="text" placeholder="Age" value="26" class="form-control" name="Age" id="Age">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                    <input type="email" placeholder="Email" value="example@example.com" class="form-control" name="Email" id="Email">
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="text" placeholder="Phone No" value="+1 234 567 890" class="form-control" name="Phone_No" id="Phone_No">
                                                </div>   
                                                <div class="col-md-2">
                                                    <input type="text" placeholder="ID0000" value="N-1245" class="form-control" name="ID" id="ID">
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="text" placeholder="Salary" value="$1000" class="form-control" name="Salary" id="Salary">
                                                </div>                                              
                                            </div>
                                            <div class="form-group">
                                                <textarea rows="5" placeholder="Address..." class="form-control">B28 University Street US</textarea>
                                                <button class="btn btn-gradient-danger btn-sm text-light px-4 mt-3 float-right mb-0 ml-2">Cancel</button>
                                                <button class="btn btn-gradient-primary btn-sm text-light px-4 mt-3 float-right mb-0">Save Change</button>                                                
                                            </div>
                                        </form>
                                    </div>
                                </div>                                            
                            </div>
                        </div> <!--end col-->                                          
                    </div><!--end row-->
                </div><!-- container -->
@stop

@section('footerScript')
<script src="{{ URL::asset('plugins/dropify/js/dropify.min.js')}}"></script>
<script>
        $('.dropify').dropify();
</script>        
@stop