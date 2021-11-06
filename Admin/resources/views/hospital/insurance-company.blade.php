@extends('layouts.hospital-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
 <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                             @component('common-components.breadcrumb')
                                 @slot('title') Insurance Co. @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Hospital @endslot
                                 @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card profile-card">
                                <div class="card-body p-0">
                                    <div class="media p-3  align-items-center">                                                
                                        <img src="{{ URL::asset('assets/images/widgets/project3.jpg')}}" alt="user" class="rounded-circle thumb-xl">                                        
                                        <div class="media-body ml-3 align-self-center">
                                            <h5 class="pro-title">Meri Gold Insurance</h5>
                                            <p class="mb-2 text-muted">MeriGoldInsurance@example.com</p> 
                                            <button type="button" class="btn btn-xs btn-gradient-primary ">Message</button>                                                                                    
                                        </div>
                                        <div class="action-btn">
                                            <button class="mr-1 btn btn-sm btn-soft-info"><i class="fas fa-pen"></i></button>
                                            <button class="btn btn-sm btn-soft-danger"><i class="far fa-trash-alt"></i></button>  
                                        </div>                                                                              
                                    </div>                                    
                                </div><!--end card-body-->                 
                            </div><!--end card--> 
                        </div><!--end col-->

                        <div class="col-lg-4">
                            <div class="card profile-card">
                                <div class="card-body p-0">
                                    <div class="media p-3  align-items-center">                                                
                                        <img src="{{ URL::asset('assets/images/widgets/project2.jpg')}}" alt="user" class="rounded-circle thumb-xl">                                        
                                        <div class="media-body ml-3 align-self-center">
                                            <h5 class="pro-title">National Insurance</h5>
                                            <p class="mb-2 text-muted">NationalInsurance@example.com</p> 
                                            <button type="button" class="btn btn-xs btn-gradient-primary">Message</button>                                                                                         
                                        </div>
                                        <div class="action-btn">
                                            <button class="mr-1 btn btn-sm btn-soft-info"><i class="fas fa-pen"></i></button>
                                            <button class="btn btn-sm btn-soft-danger"><i class="far fa-trash-alt"></i></button>  
                                        </div>                                                                              
                                    </div>                                    
                                </div><!--end card-body-->                 
                            </div><!--end card--> 
                        </div><!--end col-->
                        <div class="col-lg-4">
                            <div class="card profile-card">
                                <div class="card-body p-0">
                                    <div class="media p-3  align-items-center">                                                
                                        <img src="{{ URL::asset('assets/images/widgets/project1.jpg')}}" alt="user" class="rounded-circle thumb-xl">                                        
                                        <div class="media-body ml-3 align-self-center">
                                            <h5 class="pro-title">7Star Insurance</h5>
                                            <p class="mb-2 text-muted">7StarInsurance@example.com</p> 
                                            <button type="button" class="btn btn-xs btn-gradient-primary">Message</button>                                                                                             
                                        </div>
                                        <div class="action-btn">
                                            <button class="mr-1 btn btn-sm btn-soft-info"><i class="fas fa-pen"></i></button>
                                            <button class="btn btn-sm btn-soft-danger"><i class="far fa-trash-alt"></i></button>  
                                        </div>                                                                              
                                    </div>                                    
                                </div><!--end card-body-->                 
                            </div><!--end card--> 
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <button type="button" class="btn btn-gradient-primary px-4 mt-0 mb-3" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg"><i class="mdi mdi-plus-circle-outline mr-2"></i>Add New Company</button>
                                    <div class="table-responsive">
                                        <table id="datatable" class="table">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>Insurance Company</th>
                                                <th>Contact No</th>  
                                                <th>Total Payments</th>
                                                <th>Total Amounts</th>
                                                <th>Status</th>                                                
                                                <th class="text-right">Action</th>
                                            </tr><!--end tr-->
                                            </thead>
        
                                            <tbody>
                                            <tr>
                                                <td>Meri Gold Insurance</td>                                                
                                                <td>+1 223 344 556</td>                                                
                                                <td>1320</td>
                                                <td>$1,25,590</td>
                                                <td><span class="badge badge-soft-success">Approved</span></td>                                               
                                                <td class="text-right">                                                       
                                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>National Insurance</td>                                                
                                                <td>+1 778 899 001</td>                                                
                                                <td>1008</td>
                                                <td>$1,12,330</td>
                                                <td><span class="badge badge-soft-success">Approved</span></td>                                               
                                                <td class="text-right">                                                       
                                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>7Star Insurance</td>                                                
                                                <td>+1 234 567 890</td>                                                
                                                <td>982</td>
                                                <td>$95,780</td>
                                                <td><span class="badge badge-soft-success">Approved</span></td>                                               
                                                <td class="text-right">                                                       
                                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->    
                                            <tr>
                                                <td>Lightway Insurance</td>                                                
                                                <td>+1 098 76 5432</td>                                                
                                                <td>482</td>
                                                <td>$65,780</td>
                                                <td><span class="badge badge-soft-success">Approved</span></td>                                               
                                                <td class="text-right">                                                       
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

                <!--  Modal content for the above example -->
                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Add New Shedule</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    
                                    <div class="row">                                                               
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="CompanyName">Company Name</label>
                                                <input type="text" class="form-control" id="CompanyName" required="">
                                            </div>
                                        </div>      
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="ContactNo">Contact No</label>
                                                <input type="text" class="form-control" id="ContactNo" required="">
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
