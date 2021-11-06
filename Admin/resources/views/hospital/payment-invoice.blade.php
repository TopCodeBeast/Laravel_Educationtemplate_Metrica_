@extends('layouts.hospital-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
<div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                             @component('common-components.breadcrumb')
                                 @slot('title') Invoice @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Payments @endslot
                                 @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="card">
                                <div class="card-body invoice-head"> 
                                    <div class="row">
                                        <div class="col-md-4 align-self-center">  
                                            <div class="media">
                                                <img src="{{ URL::asset('assets/images/logo-sm.png')}}" alt="logo-small" class="logo-sm mr-2" height="30">
                                                <div class="media-body align-self-center">
                                                    <h3 class="m-0">Metrica Hospital</h3>  
                                                </div>
                                            </div>    
                                             
                                            <p class="mt-2 mb-0 text-muted">If account is not paid within 7 days the credits details supplied as confirmation.</p>                                             
                                        </div><!--end col-->    
                                        <div class="col-md-8">
                                                
                                            <ul class="list-inline mb-0 contact-detail float-right">                                                   
                                                <li class="list-inline-item">
                                                    <div class="pl-3">
                                                        <i class="mdi mdi-web"></i>
                                                        <p class="text-muted mb-0">www.abcdefghijklmno.com</p>
                                                        <p class="text-muted mb-0">www.qrstuvwxyz.com</p>
                                                    </div>                                                
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="pl-3">
                                                        <i class="mdi mdi-phone"></i>
                                                        <p class="text-muted mb-0">+123 123456789</p>
                                                        <p class="text-muted mb-0">+123 123456789</p>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="pl-3">
                                                        <i class="mdi mdi-map-marker"></i>
                                                        <p class="text-muted mb-0">2821 Kensington Road,</p>
                                                        <p class="text-muted mb-0">Avondale Estates, GA 30002 USA.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div><!--end col-->    
                                    </div><!--end row-->     
                                </div><!--end card-body-->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3 mb-4">   
                                            <h6 class="mt-0"><b>Patient Name :</b> Donald Gardner</h6>
                                            <h6 class="mt-0"><b>Address :</b> B28 University Street US</h6>                                         
                                            <h6 class="m-0"><b>Phone No :</b> +123 456 7890</h6> 
                                        </div><!--end col--> 
                                        <div class="col-md-3 mb-3 ml-auto align-self-center">   
                                            <h6 class="m-0"><b>Doctor Name :</b> Dr.Helen White</h6>
                                            <h6 class="mb-0"><b>Department :</b> Orthopedic</h6>                                         
                                           
                                        </div><!--end col--> 
                                        <div class="col-md-3 ml-auto mb-4">
                                            <h6 class="m-0"><b>Invoice No :</b> #1240</h6> 
                                            <h6 class="mb-0"><b>Admit Date :</b> 11/07/2020</h6>
                                            <h6 class="mb-0"><b>Discharge Date :</b> 17/07/2020</h6>
                                        </div><!--end col-->
                                                                                                                        
                                    </div><!--end row-->

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="table-responsive project-invoice">
                                                <table class="table table-bordered mb-0">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Description</th>
                                                            <th>Qty</th>
                                                            <th>Amount</th>
                                                        </tr><!--end tr-->
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>
                                                                <h5 class="mt-0 mb-1">Pharmacy</h5>                                                                
                                                            </td>
                                                            <td>7</td>
                                                            <td>$300.00</td>
                                                        </tr><!--end tr-->
                                                        <tr>
                                                            <td>2</td>
                                                            <td>
                                                                <h5 class="mt-0 mb-1">CT Scan</h5>                                                                
                                                            </td>
                                                            <td>1</td>
                                                            <td>$200.00</td>
                                                        </tr><!--end tr-->
                                                        <tr>
                                                            <td>3</td>
                                                            <td>
                                                                <h5 class="mt-0 mb-1">laboratory</h5>                                                                
                                                            </td>
                                                            <td>3</td>
                                                            <td>$300.00</td>
                                                        </tr><!--end tr-->
                                                        <tr>
                                                            <td>4</td>
                                                            <td>
                                                                <h5 class="mt-0 mb-1">Medical/Surgical Supplies and Devices</h5>                                                                
                                                            </td>
                                                            <td> - </td>
                                                            <td>$5000.00</td>
                                                        </tr><!--end tr-->
                                                        
                                                        <tr>                                                        
                                                            <td colspan="2" class="border-0"></td>
                                                            <td class="border-0 font-14"><b>Sub Total</b></td>
                                                            <td class="border-0 font-14"><b>$5800.00</b></td>
                                                        </tr><!--end tr-->
                                                        <tr>
                                                            <th colspan="2" class="border-0"></th>                                                        
                                                            <td class="border-0 font-14"><b>Tax Rate</b></td>
                                                            <td class="border-0 font-14"><b>$0.00%</b></td>
                                                        </tr><!--end tr-->
                                                        <tr class="bg-black total-amount">
                                                            <th colspan="2" class="border-0"></th>                                                        
                                                            <td class="border-0 font-14 text-white"><b>Total</b></td>
                                                            <td class="border-0 font-14 text-white"><b>$5800.00</b></td>
                                                        </tr><!--end tr-->
                                                    </tbody>
                                                </table><!--end table-->
                                            </div>  <!--end /div-->                                          
                                        </div>  <!--end col-->                                      
                                    </div><!--end row-->

                                    <div class="row justify-content-center">
                                        <div class="col-lg-6">
                                            <h5 class="mt-4">Terms And Condition :</h5>
                                            <ul class="pl-3">
                                                <li><small>All accounts are to be paid within 7 days from receipt of invoice. </small></li>
                                                <li><small>To be paid by cheque or credit card or direct payment online.</small></li>
                                                <li><small> If account is not paid within 7 days the credits details supplied as confirmation<br> of work undertaken will be charged the agreed quoted fee noted above.</small></li>                                            
                                            </ul>
                                        </div> <!--end col-->                                       
                                        <div class="col-lg-6 align-self-end">
                                            <div class="w-25 float-right">
                                                <small>Account Manager</small>
                                                <img src="{{ URL::asset('assets/images/signature.png')}}" alt="" class="" height="48">
                                                <p class="border-top">Signature</p>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                    <hr>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-12 col-xl-6 ml-auto align-self-center">
                                            <div class="text-center text-muted"><small>Thank you very much for doing business with us. Thanks !</small></div>
                                        </div><!--end col-->
                                        <div class="col-lg-12 col-xl-4">
                                            <div class="float-right d-print-none">
                                                <a href="javascript:window.print()" class="btn btn-gradient-info"><i class="fa fa-print"></i></a>
                                                <a href="#" class="btn btn-gradient-primary">Submit</a>
                                                <a href="#" class="btn btn-gradient-danger">Cancel</a>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->  
                </div><!-- container -->
@stop
