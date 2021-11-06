@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('headerStyle')

        <!-- DataTables -->
        <link href="{{ URL::asset('plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ URL::asset('plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" /> 
@stop

@section('content')
<div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                              @component('common-components.breadcrumb')
                                 @slot('title') Salary @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Hospital @endslot
                              @endcomponent
                            
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <button type="button" class="btn btn-gradient-primary px-4 mt-0 mb-3" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg"><i class="mdi mdi-plus-circle-outline mr-2"></i>Add New Leaves</button>
                                    <div class="table-responsive">
                                        <table id="datatable" class="table">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>Member Name</th>
                                                <th>ID</th>
                                                <th>Post</th> 
                                                <th>Join Date</th>
                                                <th>Salary</th>                                                    
                                                <th>TDS</th>
                                                <th>Net Pay</th>                                        
                                                <th class="text-right">Action</th>
                                            </tr><!--end tr-->
                                            </thead>
        
                                            <tbody>
                                            <tr>
                                                <td><a href="/material-version/hospital/member-profile"><img src="{{ URL::asset('assets/images/users/user-10.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Donald Gardner</a></td>
                                                <td>#1254</td>
                                                <td>Doctor</td>
                                                <td>8/7/2019</td>
                                                <td>$5000</td>
                                                <td>$50</td>
                                                <td>$4950</td>                                                                  
                                                <td class="text-right">   
                                                    <a href="#" class="mr-2" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg2"><i class="fas fa-edit text-info font-16"></i></a>  
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><a href="/hospital/member-profile"><img src="{{ URL::asset('assets/images/users/user-9.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Keith Jacobson</a></td>
                                                <td>#1254</td>
                                                <td>Doctor</td>
                                                <td>8/7/2019</td>
                                                <td>$5000</td>
                                                <td>$50</td>
                                                <td>$4950</td>                                          
                                                <td class="text-right">   
                                                    <a href="#" class="mr-2" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg2"><i class="fas fa-edit text-info font-16"></i></a>  
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><a href="/hospital/member-profile"><img src="{{ URL::asset('assets/images/users/user-9.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Greg Crosby</a></td>
                                                <td>#1254</td>
                                                <td>Doctor</td>
                                                <td>8/7/2019</td>
                                                <td>$5000</td>
                                                <td>$50</td>
                                                <td>$4950</td>                                   
                                                <td class="text-right">   
                                                    <a href="#" class="mr-2" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg2"><i class="fas fa-edit text-info font-16"></i></a>  
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><a href="/hospital/member-profile"><img src="{{ URL::asset('assets/images/users/user-8.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Fred Godina</a></td>
                                                <td>#1254</td>
                                                <td>Doctor</td>
                                                <td>8/7/2019</td>
                                                <td>$5000</td>
                                                <td>$50</td>
                                                <td>$4950</td>                                          
                                                <td class="text-right">   
                                                    <a href="#" class="mr-2" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg2"><i class="fas fa-edit text-info font-16"></i></a>  
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><a href="/hospital/member-profile"><img src="{{ URL::asset('assets/images/users/user-7.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Peggy Doe</a></td>
                                                <td>#1254</td>
                                                <td>Doctor</td>
                                                <td>8/7/2019</td>
                                                <td>$5000</td>
                                                <td>$50</td>
                                                <td>$4950</td>                                           
                                                <td class="text-right">   
                                                    <a href="#" class="mr-2" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg2"><i class="fas fa-edit text-info font-16"></i></a>  
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><a href="/hospital/member-profile"><img src="{{ URL::asset('assets/images/users/user-8.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Jennifer Doss</a></td>
                                                <td>#1254</td>
                                                <td>Doctor</td>
                                                <td>8/7/2019</td>
                                                <td>$5000</td>
                                                <td>$50</td>
                                                <td>$4950</td>                                            
                                                <td class="text-right">   
                                                    <a href="#" class="mr-2" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg2"><i class="fas fa-edit text-info font-16"></i></a>  
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->                              
                                            </tbody>
                                        </table>                    
                                    </div>                                         
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->                               
                    </div><!--end row-->

                </div><!-- container -->

                <!--  Modal content for the above example -->
                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Add New Member</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="MemberName">Member Name</label>
                                                <input type="text" class="form-control" id="MemberName" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="ID">ID</label>
                                                <input type="text" class="form-control" id="ID" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="Salary">Salary</label>
                                                <input type="text" class="form-control" id="Salary" required="">
                                            </div>
                                        </div>                                                                    
                                    </div>
                                    <div class="row">  
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="Post">Post</label>
                                                <input type="text" class="form-control" id="Post" required="">
                                            </div>
                                        </div>                                 
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="JoinDate">Join Date</label>
                                                <input type="text" class="form-control" id="JoinDate" required="">
                                            </div>
                                        </div>      
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="TDS">TDS</label>
                                                <input type="text" class="form-control" id="TDS" required="">
                                            </div>
                                        </div>  
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="NetPay">Net Pay</label>
                                                <input type="text" class="form-control" id="NetPay" required="">
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
                <!--  Modal content for the above example -->
                <div class="modal fade bs-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel2" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0" id="myLargeModalLabel2">Edit Salary</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="MemberNameEdit">Member Name</label>
                                                <input type="text" class="form-control" value="Donald Gardner" id="MemberNameEdit" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="IDEdit">ID</label>
                                                <input type="text" class="form-control" value="#2365" id="IDEdit" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="SalaryEdit">Salary</label>
                                                <input type="text" class="form-control" value="$5000" id="SalaryEdit" required="">
                                            </div>
                                        </div>                                                                    
                                    </div>
                                    <div class="row">  
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="PostEdit">Post</label>
                                                <input type="text" class="form-control" value="Nurse" id="PostEdit" required="">
                                            </div>
                                        </div>                                 
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="JoinDateEdit">Join Date</label>
                                                <input type="text" class="form-control" value="8/7/2019" id="JoinDateEdit" required="">
                                            </div>
                                        </div>      
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="TDSEdit">TDS</label>
                                                <input type="text" class="form-control" value="$50" id="TDSEdit" required="">
                                            </div>
                                        </div>  
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="NetPayEdit">Net Pay</label>
                                                <input type="text" class="form-control" value="$4950" id="NetPayEdit" required="">
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
@stop

@section('footerScript')
<script src="{{ URL::asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ URL::asset('plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script>
            // Datatable
            $('#datatable').DataTable();
        </script>
@stop