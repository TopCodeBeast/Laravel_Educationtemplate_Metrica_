@extends('layouts.master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
 <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                             @component('common-components.breadcrumb')
                                 @slot('title') Invoice @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Apps @endslot
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
                                            <img src="{{ URL::asset('assets/images/logo-sm.png')}}" alt="logo-small" class="logo-sm mr-2" height="28">                                            
                                            <img src="{{ URL::asset('assets/images/logo-dark.png')}}" alt="logo-large" class="logo-lg logo-dark" height="16">  
                                            <img src="{{ URL::asset('assets/images/logo.png')}}" alt="logo-large" class="logo-lg logo-light" height="16"> 
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
                                        <div class="col-md-3">
                                            <div class="">
                                                <h6 class="mb-0"><b>Order Date :</b> 11/05/2019</h6>
                                                <h6><b>Order ID :</b> # 23654789</h6>
                                            </div>
                                        </div><!--end col--> 
                                        <div class="col-md-3">                                            
                                            <div class="float-left">
                                                <address class="font-13">
                                                    <strong class="font-14">Billed To :</strong><br>
                                                    Joe Smith<br>
                                                    795 Folsom Ave<br>
                                                    San Francisco, CA 94107<br>
                                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                                </address>
                                            </div>
                                        </div><!--end col--> 
                                        <div class="col-md-3">
                                            <div class="">
                                                <address class="font-13">
                                                    <strong class="font-14">Shipped To:</strong><br>
                                                    Joe Smith<br>
                                                    795 Folsom Ave<br>
                                                    San Francisco, CA 94107<br>
                                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                                </address>
                                            </div>
                                        </div> <!--end col-->                                           
                                        
                                        <div class="col-md-3">
                                            <div class="text-center bg-light p-3 mb-3">
                                                <h5 class="bg-info mt-0 p-2 text-white d-sm-inline-block">Payment Methods</h5>
                                                <h6 class="font-13">Paypal & Cards Payments :</h6>
                                                <p class="mb-0 text-muted">CompanyA/c.paypal@gmai.com</p>
                                                <p class="mb-0 text-muted">Visa, Master Card, Chaque</p>
                                            </div>                                              
                                        </div><!--end col-->                                           
                                    </div><!--end row-->

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="table-responsive project-invoice">
                                                <table class="table table-bordered mb-0">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>Project Breakdown</th>
                                                            <th>Hours</th>
                                                            <th>Rate</th> 
                                                            <th>Subtotal</th>
                                                        </tr><!--end tr-->
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <h5 class="mt-0 mb-1">Project Design</h5>
                                                                <p class="mb-0 text-muted">It is a long established fact that a reader will be distracted.</p>
                                                            </td>
                                                            <td>60</td>
                                                            <td>$50</td>
                                                            <td>$3000.00</td>
                                                        </tr><!--end tr-->
                                                        <tr>
                                                            <td>
                                                                <h5 class="mt-0 mb-1">Development</h5>
                                                                <p class="mb-0 text-muted">It is a long established fact that a reader will be distracted.</p>
                                                            </td>
                                                            <td>100</td>
                                                            <td>$50</td>
                                                            <td>$5000.00</td>
                                                        </tr><!--end tr-->
                                                        <tr>
                                                            <td>
                                                                <h5 class="mt-0 mb-1">Testing & Bug Fixing</h5>
                                                                <p class="mb-0 text-muted">It is a long established fact that a reader will be distracted.</p>
                                                            </td>
                                                            <td>10</td>
                                                            <td>$20</td>
                                                            <td>$200.00</td>
                                                        </tr><!--end tr-->
                                                        
                                                        <tr>                                                        
                                                            <td colspan="2" class="border-0"></td>
                                                            <td class="border-0 font-14 text-dark"><b>Sub Total</b></td>
                                                            <td class="border-0 font-14 text-dark"><b>$82,000.00</b></td>
                                                        </tr><!--end tr-->
                                                        <tr>
                                                            <th colspan="2" class="border-0"></th>                                                        
                                                            <td class="border-0 font-14 text-dark"><b>Tax Rate</b></td>
                                                            <td class="border-0 font-14 text-dark"><b>$0.00%</b></td>
                                                        </tr><!--end tr-->
                                                        <tr class="bg-black text-white">
                                                            <th colspan="2" class="border-0"></th>                                                        
                                                            <td class="border-0 font-14"><b>Total</b></td>
                                                            <td class="border-0 font-14"><b>$82,000.00</b></td>
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
                                                <li><small class="font-12">All accounts are to be paid within 7 days from receipt of invoice. </small></li>
                                                <li><small class="font-12">To be paid by cheque or credit card or direct payment online.</small ></li>
                                                <li><small class="font-12"> If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.</small></li>                                            
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
                                        <div class="col-lg-12 col-xl-4 ml-auto align-self-center">
                                            <div class="text-center"><small class="font-12">Thank you very much for doing business with us.</small></div>
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
                </div>
@stop
