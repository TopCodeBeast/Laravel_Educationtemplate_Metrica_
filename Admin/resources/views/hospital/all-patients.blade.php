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
                                 @slot('title') All Patients @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Patients @endslot
                                 @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <button type="button" class="btn btn-gradient-primary px-4 mt-0 mb-3" onclick="location.href='/hospital/add-patient'"><i class="mdi mdi-plus-circle-outline mr-2"></i>Add New Patient</button>
                                    <div class="table-responsive">
                                        <table id="datatable" class="table">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>Patient Name</th>
                                                <th>Age</th>
                                                <th>ID</th>
                                                <th>Address</th>
                                                <th>Mobile No</th>
                                                <th>Last Visit</th>
                                                <th>Status</th>                                                
                                                <th class="text-right">Action</th>
                                            </tr><!--end tr-->
                                            </thead>
        
                                            <tbody>
                                            <tr>
                                                <td><a href="/hospital/patient-profile"><img src="{{ URL::asset('assets/images/users/user-10.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Donald Gardner</a></td>
                                                <td>36</td>
                                                <td>#1236</td>
                                                <td>B28 University Street US</td>
                                                <td>+123456789</td> 
                                                <td>18/07/2019</td>
                                                <td><span class="badge badge-soft-success">Approved</span></td>                                                                                               
                                                <td class="text-right">                                                       
                                                    <a href="/hospital/patient-edit" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><a href="/hospital/patient-profile"><img src="{{ URL::asset('assets/images/users/user-9.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Keith Jacobson</a></td>
                                                <td>48</td>
                                                <td>#1236</td>
                                                <td>B28 University Street US</td>
                                                <td>+123456789</td> 
                                                <td>18/07/2019</td>   
                                                <td><span class="badge badge-soft-success">Approved</span></td>                                             
                                                <td class="text-right">                                                       
                                                    <a href="/hospital/patient-edit" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><a href="/hospital/patient-profile"><img src="{{ URL::asset('assets/images/users/user-9.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Greg Crosby</a></td>
                                                <td>27</td>
                                                <td>#1236</td>
                                                <td>B28 University Street US</td>
                                                <td>+123456789</td> 
                                                <td>18/07/2019</td>    
                                                <td><span class="badge badge-soft-success">Approved</span></td>                                           
                                                <td class="text-right">                                                       
                                                    <a href="/hospital/patient-edit" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><a href="/hospital/patient-profile"><img src="{{ URL::asset('assets/images/users/user-8.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Fred Godina</a></td>
                                                <td>22</td>
                                                <td>#1236</td>
                                                <td>B28 University Street US</td>
                                                <td>+123456789</td> 
                                                <td>18/07/2019</td>   
                                                <td><span class="badge badge-soft-success">Approved</span></td>                                           
                                                <td class="text-right">                                                       
                                                    <a href="/hospital/patient-edit" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><a href="/hospital/patient-profile"><img src="{{ URL::asset('assets/images/users/user-7.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Peggy Doe</a></td>
                                                <td>51</td>
                                                <td>#7851</td>
                                                <td>B28 University Street US</td>
                                                <td>+123456789</td> 
                                                <td>20/07/2019</td> 
                                                <td><span class="badge badge-soft-warning">Panding</span></td>                                               
                                                <td class="text-right">                                                       
                                                    <a href="/hospital/patient-edit" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><a href="/hospital/patient-profile"><img src="{{ URL::asset('assets/images/users/user-8.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Jennifer Doss</a></td>
                                                <td>18</td>
                                                <td>#3654</td>
                                                <td>B28 University Street US</td>
                                                <td>+123456789</td> 
                                                <td>19/07/2019</td>   
                                                <td><span class="badge badge-soft-warning">Panding</span></td>                                             
                                                <td class="text-right">                                                       
                                                    <a href="/hospital/patient-edit" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
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
@stop

@section('footerScript')
        <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../plugins/datatables/dataTables.bootstrap4.min.js"></script>
 <script>
            // Datatable
            $('#datatable').DataTable();
        </script>

@stop