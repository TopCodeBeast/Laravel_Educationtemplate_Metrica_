@extends('layouts.hospital-master')

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
                                 @slot('title') Leaves @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Staff @endslot
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
                                                <th>Post</th> 
                                                <th>From</th>
                                                <th>To</th>                                                    
                                                <th>Total Day</th>
                                                <th>Reason</th>
                                                <th>Permission</th>                                         
                                                <th class="text-right">Action</th>
                                            </tr><!--end tr-->
                                            </thead>
        
                                            <tbody>
                                            <tr>
                                                <td><a href="hospital/member-profile"><img src="{{ URL::asset('assets/images/users/user-10.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Donald Gardner</a></td>
                                                <td>Doctor</td>
                                                <td>8/7/2019</td>
                                                <td>9/7/2019</td>
                                                <td>2</td>
                                                <td>Going to Family Function</td> 
                                                <td><span class="badge badge-soft-success">Approved</span></td>                                                                   
                                                <td class="text-right">   
                                                    <a href="#" class="mr-2" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg2"><i class="fas fa-edit text-info font-16"></i></a>  
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><a href="hospital/member-profile"><img src="{{ URL::asset('assets/images/users/user-9.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Keith Jacobson</a></td>
                                                <td>Security</td>
                                                <td>1/7/2019</td>
                                                <td>3/7/2019</td>
                                                <td>3</td>
                                                <td>Going to Family Function</td> 
                                                <td><span class="badge badge-soft-success">Approved</span></td>                                           
                                                <td class="text-right">   
                                                    <a href="#" class="mr-2" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg2"><i class="fas fa-edit text-info font-16"></i></a>  
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><a href="hospital/member-profile"><img src="{{ URL::asset('assets/images/users/user-9.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Greg Crosby</a></td>
                                                <td>Pharmacist</td>
                                                <td>24/6/2019</td>
                                                <td>24/6/2019</td>
                                                <td>1</td>
                                                <td>Going to Family Function</td> 
                                                <td><span class="badge badge-soft-success">Approved</span></td>                                     
                                                <td class="text-right">   
                                                    <a href="#" class="mr-2" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg2"><i class="fas fa-edit text-info font-16"></i></a>  
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><a href="hospital/member-profile"><img src="{{ URL::asset('assets/images/users/user-8.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Fred Godina</a></td>
                                                <td>Accountant</td>
                                                <td>11/6/2019</td>
                                                <td>14/6/2019</td>
                                                <td>4</td>
                                                <td>Going to Family Function</td> 
                                                <td><span class="badge badge-soft-danger">Declined</span></td>                                         
                                                <td class="text-right">   
                                                    <a href="#" class="mr-2" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg2"><i class="fas fa-edit text-info font-16"></i></a>  
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><a href="hospital/member-profile"><img src="{{ URL::asset('assets/images/users/user-7.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Peggy Doe</a></td>
                                                <td>Nurse</td>
                                                <td>10/7/2019</td>
                                                <td>12/7/2019</td>
                                                <td>3</td>
                                                <td>Going to Family Function</td> 
                                                <td><span class="badge badge-soft-warning">New</span></td>                                             
                                                <td class="text-right">   
                                                    <a href="#" class="mr-2" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg2"><i class="fas fa-edit text-info font-16"></i></a>  
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><a href="hospital/member-profile"><img src="{{ URL::asset('assets/images/users/user-8.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Jennifer Doss</a></td>
                                                <td>Doctor</td>
                                                <td>8/7/2019</td>
                                                <td>9/7/2019</td>
                                                <td>2</td>
                                                <td>Going to Family Function</td> 
                                                <td><span class="badge badge-soft-success">Approved</span></td>                                              
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
                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Add New Leaves</h5>
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
                                                <label for="FromTo">From</label>
                                                <input type="text" class="form-control" id="FromTo" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="To">To</label>
                                                <input type="text" class="form-control" id="To" required="">
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
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="TotalDay">Total Day</label>
                                                <input type="text" class="form-control" id="TotalDay" required="">
                                            </div>
                                        </div>      
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="Permission">Permission</label>
                                                <input type="text" class="form-control" id="Permission" required="">
                                            </div>
                                        </div>  
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="Reason">Reason</label>
                                                <input type="text" class="form-control" id="Reason" required="">
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
                                <h5 class="modal-title mt-0" id="myLargeModalLabel2">Edit Leaves</h5>
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
                                                <label for="FromToEdit">From</label>
                                                <input type="text" class="form-control" value="8/7/2019" id="FromToEdit" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="ToEdit">To</label>
                                                <input type="text" class="form-control" value="9/7/2019" id="ToEdit" required="">
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
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="TotalDayEdit">Total Day</label>
                                                <input type="text" class="form-control" value="2" id="TotalDayEdit" required="">
                                            </div>
                                        </div>      
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="PermissionEdit">Permission</label>
                                                <input type="text" class="form-control" value="Approved" id="PermissionEdit" required="">
                                            </div>
                                        </div>  
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="ReasonEdit">Reason</label>
                                                <input type="text" class="form-control" value="Going to Family Function" id="ReasonEdit" required="">
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