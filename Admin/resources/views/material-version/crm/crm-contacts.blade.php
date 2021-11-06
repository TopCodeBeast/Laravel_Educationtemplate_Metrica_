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
                                 @slot('title') Contacts @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') CRM @endslot
                              @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <button class="btn btn-gradient-primary px-4 btn-rounded float-right mt-0 mb-3">+ Add New</button>
                                    <h4 class="header-title mt-0">Contacts Details</h4> 
                                    <div class="table-responsive dash-social">
                                        <table id="datatable" class="table">
                                            <thead>
                                            <tr>
                                                <th>Customer Name</th>
                                                <th>Email</th>
                                                <th>Phone No</th>  
                                                <th>Lead  Score</th>                                                  
                                                <th>Company</th>
                                                <th>Tags</th>
                                                <th>Action</th>
                                            </tr><!--end tr-->
                                            </thead>
        
                                            <tbody>
                                            <tr>
                                                <td><img src="{{ URL::asset('assets/images/users/user-10.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Donald Gardner<small class="badge badge-soft-pink ml-1">New</small></td>
                                                <td>xyx@gmail.com</td>
                                                <td>+123456789</td>
                                                <td>68</td>
                                                <td>Starbucks coffee</td>
                                                <td>
                                                    <span class="badge badge-md badge-soft-success">test</span>
                                                    <span class="badge badge-md badge-soft-success">another</span>
                                                </td>
                                                <td>                                                       
                                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><img src="{{ URL::asset('assets/images/users/user-9.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Matt Rosales</td>
                                                <td>xyx@gmail.com</td>
                                                <td>+123456789</td>
                                                <td>112</td>
                                                <td>Mac Donald</td>
                                                <td>
                                                    <span class="badge badge-md badge-soft-success">test</span>
                                                    <span class="badge badge-md badge-soft-success">another</span>
                                                    <span class="badge badge-md badge-soft-success">something</span>
                                                </td>
                                                <td>                                                       
                                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><img src="{{ URL::asset('assets/images/users/user-8.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Michael Hill<small class="badge badge-soft-blue ml-1">New</small></td>
                                                <td>xyx@gmail.com</td>
                                                <td>+123456789</td>
                                                <td>64</td>
                                                <td>Life Good</td>
                                                <td>
                                                    <span class="badge badge-md badge-soft-success">test</span>
                                                    <span class="badge badge-md badge-soft-success">another</span>
                                                </td>
                                                <td>                                                       
                                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><img src="{{ URL::asset('assets/images/users/user-7.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Nancy Flanary</td>
                                                <td>xyx@gmail.com</td>
                                                <td>+123456789</td>
                                                <td>124</td>
                                                <td>Flipcart</td>
                                                <td>
                                                    <span class="badge badge-md badge-soft-success">test</span>
                                                    <span class="badge badge-md badge-soft-success">another</span>
                                                    <span class="badge badge-md badge-soft-success">something</span>
                                                </td>
                                                <td>                                                       
                                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><img src="{{ URL::asset('assets/images/users/user-6.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Dorothy Key</td>
                                                <td>xyx@gmail.com</td>
                                                <td>+123456789</td>
                                                <td>33</td>
                                                <td>Adidas</td>
                                                <td>
                                                    <span class="badge badge-md badge-soft-success">test</span>
                                                    <span class="badge badge-md badge-soft-success">something</span>
                                                </td>                                               
                                                <td>                                                       
                                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><img src="{{ URL::asset('assets/images/users/user-5.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Joseph Cross</td>
                                                <td>xyx@gmail.com</td>
                                                <td>+123456789</td>
                                                <td>84</td>
                                                <td>Reebok</td>
                                                <td>
                                                    <span class="badge badge-md badge-soft-success">test</span>
                                                    <span class="badge badge-md badge-soft-success">another</span>
                                                    <span class="badge badge-md badge-soft-success">something</span>
                                                </td>
                                                <td>                                                       
                                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
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

        <script src="{{ URL::asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{ URL::asset('plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{ URL::asset('assets/pages/jquery.crm_leads.init.js')}}"></script>
          <script>
            // Datatable
            $('#datatable').DataTable();
        </script>
@stop