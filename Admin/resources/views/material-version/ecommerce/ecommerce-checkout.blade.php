@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                             @component('common-components.breadcrumb')
                                 @slot('title') Checkout @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Ecommerce @endslot
                              @endcomponent
                            
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0 mb-3">Order Summary</h4>
                                    <div class="table-responsive shopping-cart">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Quantity</th>                                                        
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="{{ URL::asset('assets/images/products/img-5.png')}}" alt="" height="52">
                                                        <p class="d-inline-block align-middle mb-0 product-name">Reebok Shoes</p> 
                                                    </td>
                                                    <td>
                                                        2
                                                    </td>
                                                    <td>$198</td>                                                        
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="{{ URL::asset('assets/images/products/3.png" alt="" height="52">
                                                        <p class="d-inline-block align-middle mb-0 product-name">Red Morden Chair</p> 
                                                    </td>
                                                    <td>
                                                        2
                                                    </td>
                                                    <td>$150</td>                                                       
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="{{ URL::asset('assets/images/products/img-4.png')}}" alt="" height="52">
                                                        <p class="d-inline-block align-middle mb-0 product-name">Lava Purse</p> 
                                                    </td>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td>$49</td>                                                       
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="{{ URL::asset('assets/images/products/1.png')}}" alt="" height="52">
                                                        <p class="d-inline-block align-middle mb-0 product-name">Important Chair</p>
                                                    </td>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td>$99</td>
                                                </tr>  
                                                <tr>
                                                    <td>
                                                        <h6>Total :</h6>
                                                    </td>
                                                    <td></td>
                                                    <td class="text-dark"><strong>$496</strong></td>
                                                </tr>                                                    
                                            </tbody>
                                        </table>
                                    </div><!--end re-table-->
                                    <div class="total-payment">
                                        <table class="table mb-0">
                                            <tbody>
                                                <tr>
                                                    <td class="payment-title">Subtotal</td>
                                                    <td>$496.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="payment-title">Shipping</td>
                                                    <td>
                                                        Shipping Charge : $5.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="payment-title">Promo Code</td>
                                                    <td>-$10.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="payment-title">Total</td>
                                                    <td class="text-dark"><strong>$491.00</strong></td>
                                                </tr>
                                            </tbody>
                                        </table><!--end table-->
                                    </div><!--end total-payment-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0 mb-3">Delivery Address</h4>
                                    <form class="mb-0">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>First Name <small class="text-danger font-13">*</small></label>
                                                    <input type="text" class="form-control" id="firstname" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Last Name <small class="text-danger font-13">*</small></label>
                                                    <input type="email" class="form-control" id="lastname" required="">
                                                </div>
                                            </div><!--end col-->                                                
                                        </div><!--end row-->
                                        <div class="row">
                                            <div class="col-md-6">                            
                                                <div class="form-group">
                                                    <label>Delivery Address <small class="text-danger font-13">*</small></label>
                                                    <input type="text" class="form-control" required="">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-6">                            
                                                <div class="form-group">
                                                    <label>Address <small class="text-danger font-13">*</small></label>
                                                    <input type="text" class="form-control" required="">
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>City <small class="text-danger font-13">*</small></label>
                                                    <input type="text" class="form-control" id="city" required="">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="col-form-label pt-0">State <small class="text-danger font-13">*</small></label>
                                                    <select class="form-control">
                                                        <option>Select</option>
                                                        <option>Gujarat</option>
                                                        <option>New york</option>
                                                        <option>California</option>
                                                    </select>
                                                </div>
                                            </div> <!--end col-->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="col-form-label pt-0">Country <small class="text-danger font-13">*</small></label>
                                                    <select class="form-control">
                                                        <option>Select</option>
                                                        <option>India</option>
                                                        <option>USA</option>
                                                        <option>New Zealand</option>                                                            
                                                    </select>
                                                </div>            
                                            </div> <!--end col-->                                               
                                        </div><!--end row-->
                                        <div class="row">
                                            <div class="col-md-3">                            
                                                <div class="form-group">
                                                    <label>Zip code <small class="text-danger font-13">*</small></label>
                                                    <input type="text" class="form-control" required="">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-6">                            
                                                <div class="form-group">
                                                    <label>Email Address <small class="text-danger font-13">*</small></label>
                                                    <input type="email" class="form-control" required="">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-3">                            
                                                <div class="form-group">
                                                    <label>Mobile No <small class="text-danger font-13">*</small></label>
                                                    <input type="text" class="form-control" required="">
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row--> 
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group mb-0">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="horizontalCheckbox" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                        <label class="custom-control-label" for="horizontalCheckbox">Confirm Shipping Address</label>
                                                    </div>
                                                </div>              
                                            </div><!--end col-->
                                        </div><!--end row-->                                            
                                    </form><!--end form-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title mt-0">Billing Details</h4>
                                            <div class="accordion" id="accordionExample">
                                                <div class="card border mb-1 shadow-none">
                                                    <div class="card-header custom-accordion" id="headingOne">
                                                        <a href="" class="text-dark d-flex justify-content-between" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            <span class="align-self-center">Credit Card</span>
                                                            <img src="{{ URL::asset('assets/images/cards/card-2.png')}}" alt="" height="30">
                                                        </a>
                                                    </div>
                                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <div class="row">  
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="Card_No">Card No :</label>
                                                                        <input type="text" class="form-control" id="Card_No" required="" placeholder="1234-5678-9123-4567">
                                                                    </div>
                                                                </div>  <!--end col-->                               
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="select_month" class="mr-2">Expiry Month</label>
                                                                        <select class="custom-select" id="select_month">
                                                                            <option selected="">-- Select --</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                            <option value="11">11</option>
                                                                            <option value="12">12</option>
                                                                        </select>
                                                                    </div>                                    
                                                                </div><!--end col-->  
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="select_year" class="mr-2">Expiry Year</label>
                                                                        <select class="custom-select" id="select_year">
                                                                            <option selected="">-- Select --</option>
                                                                            <option value="1">2020</option>
                                                                            <option value="2">2021</option>
                                                                            <option value="3">2022</option>
                                                                            <option value="4">2023</option>
                                                                            <option value="5">2024</option>
                                                                            <option value="6">2025</option>
                                                                        </select>
                                                                    </div>
                                                                </div> <!--end col--> 
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="CVV_Code">Security Code</label>
                                                                        <input type="password" class="form-control" id="CVV_Code" required="" placeholder="Enter CVV">
                                                                    </div>
                                                                </div><!--end col-->
                                                            </div><!--end row-->                                                  
                                                        </div><!--end card-body-->
                                                    </div><!--end collapseOne-->
                                                </div><!--end card-->
                                                <div class="card mb-1 border shadow-none">
                                                    <div class="card-header" id="headingTwo">
                                                        <a href="" class="text-dark d-flex justify-content-between collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                            <span class="align-self-center">Paypal</span>
                                                            <img src="{{ URL::asset('assets/images/cards/paypal.png')}}" alt="" height="30">
                                                        </a>
                                                    </div>
                                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <p class="mb-0 text-muted">
                                                                Add Paypal form page
                                                            </p> 
                                                        </div>
                                                    </div>
                                                </div>                                                
                                            </div>   
                                            <button type="button" class="btn btn-block btn-success">PLACE YOUR ORDER</button>                              
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="review-box text-center align-item-center">                                                                    
                                                <h1>4.8</h1> 
                                                <h4 class="header-title">Overall Rating</h4>  
                                                <ul class="list-inline mb-0 product-review">
                                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                                    <li class="list-inline-item"><small class="text-muted">Total Review (700)</small></li>
                                                </ul>                                     
                                            </div> 
                                            <ul class="list-unstyled mt-3">
                                                <li class="mb-2">
                                                    <span class="text-info">5 Star</span>
                                                    <small class="float-right text-muted ml-3 font-14">593</small>
                                                    <div class="progress mt-2" style="height:5px;">
                                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 80%; border-radius:5px;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </li>
                                                <li class="mb-2">
                                                    <span class="text-info">4 Star</span>
                                                    <small class="float-right text-muted ml-3 font-14">99</small>
                                                    <div class="progress mt-2" style="height:5px;">
                                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 18%; border-radius:5px;" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </li>
                                                <li class="mb-2">
                                                    <span class="text-info">3 Star</span>
                                                    <small class="float-right text-muted ml-3 font-14">6</small>
                                                    <div class="progress mt-2" style="height:5px;">
                                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 10%; border-radius:5px;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </li>
                                                <li class="mb-2">
                                                    <span class="text-info">2 Star</span>
                                                    <small class="float-right text-muted ml-3 font-14">2</small>
                                                    <div class="progress mt-2" style="height:5px;">
                                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 1%; border-radius:5px;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="text-info">1 Star</span>
                                                    <small class="float-right text-muted ml-3 font-14">0</small>
                                                    <div class="progress mt-2" style="height:5px;">
                                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 0%; border-radius:5px;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </li>
                                            </ul>                                            
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end col-->
                    </div><!--end row-->

                </div><!-- container -->
@stop
