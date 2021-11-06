@extends('layouts.crypto-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
  <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                              @component('common-components.breadcrumb')
                                 @slot('title') ICO List @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Crypto @endslot
                              @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <button type="button" class="btn btn-outline-danger crypto-modal-btn" data-toggle="modal" data-target="#exampleModalSend"><i data-feather="navigation" class="align-self-center icon-md mr-2"></i>Send</button>
                                    <div class="modal fade" id="exampleModalSend" tabindex="-1" role="dialog" aria-labelledby="exampleModalDefaultSend" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h6 class="modal-title m-0" id="exampleModalDefaultSend">Send Coin</h6>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true"><i class="la la-times"></i></span>
                                                    </button>
                                                </div><!--end modal-header-->
                                                <div class="modal-body">
                                                    <div class="auth-page">
                                                        <div class=" auth-card">
                                                            <div class="">
                                                                <div class="p-3">
                                                                    <form class="form-horizontal" action="/index">
                                                                        
                                                                        <div class="form-group">                                                                            
                                                                            <label for="cryptocurrency">Crypto Currency</label>
                                                                            <select class="form-control">
                                                                                <option>-- Currency --</option>
                                                                                <option>BTC</option>
                                                                                <option>ETH</option>
                                                                            </select>                                  
                                                                        </div><!--end form-group--> 
                                                                        <div class="form-group">                                                                            
                                                                            <label for="currencyfrom">Currency From</label>
                                                                            <select class="form-control">
                                                                                <option>-- My wallet --</option>
                                                                                <option>BTC</option>
                                                                                <option>ETH</option>
                                                                            </select>                                  
                                                                        </div><!--end form-group--> 
                                                                        
                                            
                                                                        <div class="form-group">
                                                                            <label for="toaddress">To</label>                                            
                                                                            <div class="input-group mb-3">  
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" id="QUCode"><i class="fas fa-qrcode"></i></span>
                                                                                </div>                               
                                                                                <input type="text" class="form-control" id="Scancode" placeholder="Can you scan">
                                                                            </div>                               
                                                                        </div><!--end form-group--> 
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group row">
                                                                                    <label for="example-text-input" class="col-sm-2 col-form-label text-right">USD</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input class="form-control" type="text" placeholder="USD"" id="USDCO">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group row">
                                                                                    <label for="example-text-input" class="col-sm-2 col-form-label text-right">BTC</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input class="form-control" type="text" placeholder="BTC" id="BTCCO">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="form-group">
                                                                            <label for="message">Description</label>
                                                                            <textarea class="form-control" rows="3" id="Description"></textarea>
                                                                        </div><!--end form-group--> 

                                                                        <div class="form-group mb-1">
                                                                            <div>
                                                                                <label for="NetworkFree">Network Free</label>
                                                                            </div>
                                                                            <div class="form-check-inline my-1">
                                                                                <div class="custom-control custom-radio">
                                                                                    <input type="radio" id="Regular" name="Networkfree" class="custom-control-input" checked>
                                                                                    <label class="custom-control-label" for="Regular">Regular</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-check-inline my-1">
                                                                                <div class="custom-control custom-radio">
                                                                                    <input type="radio" id="Priority" name="Networkfree" class="custom-control-input">
                                                                                    <label class="custom-control-label" for="Priority">Priority</label>
                                                                                </div>
                                                                            </div>       
                                                                        </div><!--end form-group--> 
                                                                                                                                         
                                                                        <div class="form-group mb-0 row">
                                                                            <div class="col-12 mt-2">
                                                                                <button class="btn btn-primary btn-rounded btn-block waves-effect waves-light py-2" type="text">Continue <i class="fas fa-sign-in-alt ml-1"></i></button>
                                                                            </div><!--end col--> 
                                                                        </div> <!--end form-group-->                           
                                                                    </form><!--end form-->
                                                                </div><!--end /div-->
                                                                
                                                            </div><!--end card-body-->
                                                        </div><!--end card-->
                                                        
                                                    </div><!--end auth-page-->                                                    
                                                </div><!--end modal-body-->
                                                
                                            </div><!--end modal-content-->
                                        </div><!--end modal-dialog-->
                                    </div><!--end modal-->

                                    <button type="button" class="btn btn-outline-success crypto-modal-btn" data-toggle="modal" data-target="#exampleModalRequest"><i data-feather="download" class="align-self-center icon-md mr-2"></i>Request</button>
                                    <div class="modal fade" id="exampleModalRequest" tabindex="-1" role="dialog" aria-labelledby="exampleModalDefaultRequest" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h6 class="modal-title m-0" id="exampleModalDefaultRequest">Request Coin</h6>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true"><i class="la la-times"></i></span>
                                                    </button>
                                                </div><!--end modal-header-->
                                                <div class="modal-body">
                                                    <div class="auth-page">
                                                        <div class=" auth-card">
                                                            <div class="">
                                                                <div class="p-3">
                                                                    <form class="form-horizontal" action="/index">
                                                                        
                                                                        <div class="form-group">                                                                            
                                                                            <label for="cryptocurrency">Crypto Currency</label>
                                                                            <select class="form-control">
                                                                                <option>-- Currency --</option>
                                                                                <option>BTC</option>
                                                                                <option>ETH</option>
                                                                            </select>                                  
                                                                        </div><!--end form-group--> 
                                                                        <div class="form-group">                                                                            
                                                                            <label for="currencyReceive">Receive To</label>
                                                                            <select class="form-control">
                                                                                <option>-- My wallet --</option>
                                                                                <option>BTC</option>
                                                                                <option>ETH</option>
                                                                            </select>                                  
                                                                        </div><!--end form-group--> 
                                                                        
                                            
                                                                        <div class="form-group">
                                                                            <label for="toaddress">Address</label>                                            
                                                                            <div class="input-group mb-3">                                                                                                              
                                                                                <input type="text" class="form-control" id="W-Address" value="c12b001a15f9bd46ef1c6551386c">
                                                                                <div class="input-group-append">
                                                                                    <button class="btn btn-light shadow-none"><i class="fas fa-copy"></i></button>
                                                                                </div>   
                                                                            </div>                               
                                                                        </div><!--end form-group--> 
                                                                        
                                                                                                                                         
                                                                        <div class="form-group mb-0 row">
                                                                            <div class="col-12 mt-2">
                                                                                <button class="btn btn-primary btn-rounded btn-block waves-effect waves-light py-2" type="text">Done <i class="fas fa-check ml-1"></i></button>
                                                                            </div><!--end col--> 
                                                                        </div> <!--end form-group-->                           
                                                                    </form><!--end form-->
                                                                </div><!--end /div-->
                                                                
                                                            </div><!--end card-body-->
                                                        </div><!--end card-->
                                                        
                                                    </div><!--end auth-page-->                                                    
                                                </div><!--end modal-body-->
                                                
                                            </div><!--end modal-content-->
                                        </div><!--end modal-dialog-->
                                    </div><!--end modal-->
                                </div>
                                <div class="media">
                                    <img src="{{ URL::asset('assets/images/coins/btc.png')}}" class="mr-2 thumb-sm align-self-center rounded-circle" alt="...">
                                    <div class="media-body align-self-center">     
                                        <p class="mb-1 text-muted">Total Balance</p>                                                       
                                        <h5 class="mt-0 text-dark mb-1">122.00125503 BTC</h5>                                                                                                      
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card ico-card">                                
                                <div class="card-body">
                                    <span class="badge badge-soft-success float-right">ICO Active</span>
                                    <div class="media">
                                        <img src="{{ URL::asset('assets/images/coins/btc.png')}}" class="mr-3 thumb-sm rounded-circle" alt="...">
                                        <div class="media-body align-self-center">                                                                                                                       
                                            <h5 class="mb-4 font-16">Bitcoin</h5>
                                            <p class="text-muted mb-4">It is a long established fact that a reader will be 
                                                distracted by the readable <a href="" class="text-primary">www.xyzcoin.com</a> content of a page. 
                                            </p>
                                            <div class="row">
                                                <div class="col-md-6">                                                    
                                                    <p class="text-muted mb-4">Start Date : <span>20/05/2019</span></p>
                                                </div><!--end col-->
                                                <div class="col-md-6 text-right">                                                    
                                                    <p class="text-muted mb-4">End Date : <span>20/05/2019</span></p>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                            <ul class="list-inline mb-4">
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star-half-alt text-warning"></i>
                                                </li>
                                            </ul>
                                            <ul class="list-inline ico-socials float-right mb-0">
                                                <li class="list-inline-item">
                                                    <a href="#" class=""><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class=""><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class=""><i class="fab fa-medium-m"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class=""><i class="fab fa-telegram"></i></a>
                                                </li>                                                                                                                
                                            </ul>
                                            <a href="" class="btn btn-sm btn-outline-primary d-sm-inline-block">Buy Now</a>                                            
                                        </div><!--end media body-->
                                    </div><!--end media-->                                   
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-4">
                            <div class="card ico-card">                                
                                <div class="card-body">
                                    <span class="badge badge-soft-success float-right">ICO Active</span>
                                    <div class="media">
                                        <img src="{{ URL::asset('assets/images/coins/qub.png')}}" class="mr-3 thumb-sm rounded-circle" alt="...">
                                        <div class="media-body align-self-center">                                                                                                                       
                                            <h5 class="mb-4 font-16">Qubitica</h5>
                                            <p class="text-muted mb-4">It is a long established fact that a reader will be 
                                                distracted by the readable <a href="" class="text-primary">www.xyzcoin.com</a> content of a page. 
                                            </p>
                                            <div class="row">
                                                <div class="col-md-6">                                                    
                                                    <p class="text-muted mb-4">Start Date : <span>20/05/2019</span></p>
                                                </div><!--end col-->
                                                <div class="col-md-6 text-right">                                                    
                                                    <p class="text-muted mb-4">End Date : <span>20/05/2019</span></p>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                            <ul class="list-inline mb-4">
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star-half-alt text-warning"></i>
                                                </li>
                                            </ul>
                                            <ul class="list-inline ico-socials float-right mb-0">
                                                <li class="list-inline-item">
                                                    <a href="#" class=""><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class=""><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class=""><i class="fab fa-medium-m"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class=""><i class="fab fa-btc"></i></a>
                                                </li>                                                                                                                
                                            </ul>
                                            <a href="" class="btn btn-sm btn-outline-primary d-sm-inline-block">Buy Now</a>                                            
                                        </div><!--end media body-->
                                    </div><!--end media-->                                   
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-4">
                            <div class="card ico-card">                                
                                <div class="card-body">
                                    <span class="badge badge-soft-danger float-right">ICO Ended</span>
                                    <div class="media">
                                        <img src="{{ URL::asset('assets/images/coins/lite.png')}}" class="mr-3 thumb-sm rounded-circle" alt="...">
                                        <div class="media-body align-self-center">                                                                                                                       
                                            <h5 class="mb-4 font-16">Litecoin</h5>
                                            <p class="text-muted mb-4">It is a long established fact that a reader will be 
                                                distracted by the readable <a href="" class="text-primary">www.xyzcoin.com</a> content of a page. 
                                            </p>
                                            <div class="row">
                                                <div class="col-md-6">                                                    
                                                    <p class="text-muted mb-4">Start Date : <span>20/05/2019</span></p>
                                                </div><!--end col-->
                                                <div class="col-md-6 text-right">                                                    
                                                    <p class="text-muted mb-4">End Date : <span>20/05/2019</span></p>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                            <ul class="list-inline mb-4">
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star-half-alt text-warning"></i>
                                                </li>
                                            </ul>
                                            <ul class="list-inline ico-socials float-right mb-0">
                                                <li class="list-inline-item">
                                                    <a href="#" class=""><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class=""><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class=""><i class="fab fa-medium-m"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class=""><i class="fab fa-telegram"></i></a>
                                                </li>                                                                                                                
                                            </ul>
                                            <a href="" class="btn btn-sm btn-outline-primary d-sm-inline-block disabled">Buy Now</a>                                            
                                        </div><!--end media body-->
                                    </div><!--end media-->                                   
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        
                    </div>  <!--end row-->

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card ico-card">                                
                                <div class="card-body">
                                    <span class="badge badge-soft-danger float-right">ICO Ended</span>
                                    <div class="media">
                                        <img src="{{ URL::asset('assets/images/coins/eth.png')}}" class="mr-3 thumb-sm rounded-circle" alt="...">
                                        <div class="media-body align-self-center">                                                                                                                       
                                            <h5 class="mb-4 font-16">Ethereum</h5>
                                            <p class="text-muted mb-4">It is a long established fact that a reader will be 
                                                distracted by the readable <a href="" class="text-primary">www.xyzcoin.com</a> content of a page. 
                                            </p>
                                            <div class="row">
                                                <div class="col-md-6">                                                    
                                                    <p class="text-muted mb-4">Start Date : <span>20/05/2019</span></p>
                                                </div><!--end col-->
                                                <div class="col-md-6 text-right">                                                    
                                                    <p class="text-muted mb-4">End Date : <span>20/05/2019</span></p>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                            <ul class="list-inline mb-4">
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star-half-alt text-warning"></i>
                                                </li>
                                            </ul>
                                            <ul class="list-inline ico-socials float-right mb-0">
                                                <li class="list-inline-item">
                                                    <a href="#" class=""><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class=""><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class=""><i class="fab fa-medium-m"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class=""><i class="fab fa-telegram"></i></a>
                                                </li>                                                                                                                
                                            </ul>
                                            <a href="" class="btn btn-sm btn-outline-primary d-sm-inline-block disabled">Buy Now</a>                                            
                                        </div><!--end media body-->
                                    </div><!--end media-->                                   
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-4">
                            <div class="card ico-card">                                
                                <div class="card-body">
                                    <span class="badge badge-soft-success float-right">ICO Active</span>
                                    <div class="media">
                                        <img src="{{ URL::asset('assets/images/coins/mon.png')}}" class="mr-3 thumb-sm rounded-circle" alt="...">
                                        <div class="media-body align-self-center">                                                                                                                       
                                            <h5 class="mb-4 font-16">Monero</h5>
                                            <p class="text-muted mb-4">It is a long established fact that a reader will be 
                                                distracted by the readable <a href="" class="text-primary">www.xyzcoin.com</a> content of a page. 
                                            </p>
                                            <div class="row">
                                                <div class="col-md-6">                                                    
                                                    <p class="text-muted mb-4">Start Date : <span>20/05/2019</span></p>
                                                </div><!--end col-->
                                                <div class="col-md-6 text-right">                                                    
                                                    <p class="text-muted mb-4">End Date : <span>20/05/2019</span></p>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                            <ul class="list-inline mb-4">
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star-half-alt text-warning"></i>
                                                </li>
                                            </ul>
                                            <ul class="list-inline ico-socials float-right mb-0">
                                                <li class="list-inline-item">
                                                    <a href="#" class=""><i class="fab fa-btc"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class=""><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class=""><i class="fab fa-medium-m"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class=""><i class="fab fa-telegram"></i></a>
                                                </li>                                                                                                                
                                            </ul>
                                            <a href="" class="btn btn-sm btn-outline-primary d-sm-inline-block">Buy Now</a>                                            
                                        </div><!--end media body-->
                                    </div><!--end media-->                                   
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-4">
                            <div class="card ico-card">                                
                                <div class="card-body">
                                    <span class="badge badge-soft-success float-right">ICO Active</span>
                                    <div class="media">
                                        <img src="{{ URL::asset('assets/images/coins/dash.png')}}" class="mr-3 thumb-sm rounded-circle" alt="...">
                                        <div class="media-body align-self-center">                                                                                                                       
                                            <h5 class="mb-4 font-16">Dashcoin</h5>
                                            <p class="text-muted mb-4">It is a long established fact that a reader will be 
                                                distracted by the readable <a href="" class="text-primary">www.xyzcoin.com</a> content of a page. 
                                            </p>
                                            <div class="row">
                                                <div class="col-md-6">                                                    
                                                    <p class="text-muted mb-4">Start Date : <span>20/05/2019</span></p>
                                                </div><!--end col-->
                                                <div class="col-md-6 text-right">                                                    
                                                    <p class="text-muted mb-4">End Date : <span>20/05/2019</span></p>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                            <ul class="list-inline mb-4">
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star-half-alt text-warning"></i>
                                                </li>
                                            </ul>
                                            <ul class="list-inline ico-socials float-right mb-0">
                                                <li class="list-inline-item">
                                                    <a href="#" class=""><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class=""><i class="fab fa-btc"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class=""><i class="fab fa-medium-m"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class=""><i class="fab fa-telegram"></i></a>
                                                </li>                                                                                                                
                                            </ul>
                                            <a href="" class="btn btn-sm btn-outline-primary d-sm-inline-block">Buy Now</a>                
                                        </div><!--end media body-->
                                    </div><!--end media-->                                   
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div>  <!--end row-->
                </div><!-- container -->
@stop
