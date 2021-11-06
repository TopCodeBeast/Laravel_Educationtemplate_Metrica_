@extends('layouts.crypto-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('headerStyle')
<link href="{{ URL::asset('plugins/ticker/jquery.jConveyorTicker.css')}}" rel="stylesheet" type="text/css" />
@stop

@section('content')
  <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                               @component('common-components.breadcrumb')
                                 @slot('title') News @endslot
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
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="wrap">
                                        <div class="jctkr-label">
                                            <span><i class="fas fa-exchange-alt mr-2"></i>Change 24 Hours</span>
                                        </div>
                                        <div class="js-conveyor-example">
                                            <ul>
                                                <li>
                                                    <img src="{{ URL::asset('assets/images/coins/btc.png')}}" alt="" class="thumb-xs rounded">
                                                    <span class="usd-rate font-14"><b>USD: 8435.21</b></span>
                                                    <span class="mb-0 font-12 text-success">+7.88%</span>
                                                </li>
                                                <li>
                                                    <img src="{{ URL::asset('assets/images/coins/dash.png')}}" alt="" class="thumb-xs rounded">
                                                    <span class="usd-rate font-14"><b>USD: 1233.54</b></span>
                                                    <span class="mb-0 font-12 text-success">+5.12%</span>
                                                </li>
                                                <li>
                                                    <img src="{{ URL::asset('assets/images/coins/dollar.png')}}" alt="" class="thumb-xs rounded">
                                                    <span class="usd-rate font-14"><b>BTC: 8435.21</b></span>
                                                    <span class="mb-0 font-12 text-danger">-2.62%</span>
                                                </li>
                                                <li>
                                                    <img src="{{ URL::asset('assets/images/coins/btc.png')}}" alt="" class="thumb-xs rounded">
                                                    <span class="usd-rate font-14"><b>USD: 226.64</b></span>
                                                    <span class="mb-0 font-12 text-success">+1.91%</span>
                                                </li>
                                                <li>
                                                    <img src="{{ URL::asset('assets/images/coins/lite.png')}}" alt="" class="thumb-xs rounded">
                                                    <span class="usd-rate font-14"><b>USD: 12.91</b></span>
                                                    <span class="mb-0 font-12 text-danger">-1.55%</span>
                                                </li>
                                                <li>
                                                    <img src="{{ URL::asset('assets/images/coins/eth.png')}}" alt="" class="thumb-xs rounded">
                                                    <span class="usd-rate font-14"><b>USD: 0.50</b></span>
                                                    <span class="mb-0 font-12 text-danger">-0.45%</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>    
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div>  <!--end row-->

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <!-- 16:9 aspect ratio -->
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/AtlvoX5JVuc"></iframe>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->  
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <img src="{{ URL::asset('assets/images/small/news-2.jpg')}}" height="90" class="mr-3" alt="...">
                                        <div class="media-body align-self-center">  
                                            <div class="mb-2">
                                                <span class="badge badge-primary px-3">Crypto</span>
                                                <span class="ml-2 text-muted">26 mars 2019</span>
                                            </div>
                                            <a href="" class="font-16 d-block font-weight-normal">It is a long established fact that a reader will be 
                                                distracted of a page. 
                                            </a>                                             
                                        </div><!--end media body-->
                                    </div><!--end media-->        
                                </div><!--end card-body-->
                            </div><!--end card-->
                            <div class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <img src="{{ URL::asset('assets/images/small/news-1.jpg')}}" height="90" class="mr-3" alt="...">
                                        <div class="media-body align-self-center">  
                                            <div class="mb-2">
                                                <span class="badge badge-secondary px-3">Crypto</span>
                                                <span class="ml-2 text-muted">26 mars 2019</span>
                                            </div>
                                            <a href="" class="font-16 d-block font-weight-normal">It is a long established fact that a reader will be 
                                                distracted of a page. 
                                            </a>                                             
                                        </div><!--end media body-->
                                    </div><!--end media-->        
                                </div><!--end card-body-->
                            </div><!--end card-->
                            <div class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <img src="{{ URL::asset('assets/images/small/news-3.jpg')}}" height="90" class="mr-3" alt="...">
                                        <div class="media-body align-self-center">  
                                            <div class="mb-2">
                                                <span class="badge badge-warning px-3">Crypto</span>
                                                <span class="ml-2 text-muted">26 mars 2019</span>
                                            </div>
                                            <a href="" class="font-16 d-block font-weight-normal">It is a long established fact that a reader will be 
                                                distracted of a page. 
                                            </a>                                             
                                        </div><!--end media body-->
                                    </div><!--end media-->        
                                </div><!--end card-body-->
                            </div><!--end card-->
                            <div class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <img src="{{ URL::asset('assets/images/small/img-3.jpg')}}" height="90" class="mr-3" alt="...">
                                        <div class="media-body align-self-center">  
                                            <div class="mb-2">
                                                <span class="badge badge-pink px-3">Travel</span>
                                                <span class="ml-2 text-muted">26 mars 2019</span>
                                            </div>
                                            <a href="" class="font-16 d-block font-weight-normal">It is a long established fact that a reader will be 
                                                distracted of a page. 
                                            </a>                                             
                                        </div><!--end media body-->
                                    </div><!--end media-->        
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->                          
                    </div><!--end row-->


                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="blog-card">
                                        <img src="{{ URL::asset('assets/images/small/news-1.jpg')}}" alt="" class="img-fluid"/>
                                        <div class="meta-box">
                                            <ul class="p-0 mt-4 list-inline">
                                                <li class="list-inline-item"><span class="badge badge-primary px-3">Crypto</span></li>
                                                <li class="list-inline-item">26 mars 2019</li>
                                                <li class="list-inline-item">by <a href="">admin</a></li>
                                            </ul>
                                        </div><!--end meta-box-->            
                                        <h4 class="mt-2 mb-3">
                                            <a href="">It is a long established fact that a reader will be</a>
                                        </h4>
                                        <p class="text-muted">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Cum sociis natoque penatibus et magnis.</p>
                                        <a href="#" class="text-primary">Continue Reading <i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div><!--end blog-card-->                                   
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="blog-card">
                                        <img src="{{ URL::asset('assets/images/small/news-3.jpg')}}" alt="" class="img-fluid"/>
                                        <div class="meta-box">
                                            <ul class="p-0 mt-4 list-inline">
                                                <li class="list-inline-item"><span class="badge badge-secondary px-3">Crypto</span></li>
                                                <li class="list-inline-item">26 mars 2019</li>
                                                <li class="list-inline-item">by <a href="">admin</a></li>
                                            </ul>
                                        </div><!--end meta-box-->            
                                        <h4 class="mt-2 mb-3">
                                            <a href="">It is a long established fact that a reader will be</a>
                                        </h4>
                                        <p class="text-muted">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Cum sociis natoque penatibus et magnis.</p>
                                        <a href="#" class="text-primary">Continue Reading <i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div><!--end blog-card-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="blog-card">
                                        <img src="{{ URL::asset('assets/images/small/news-2.jpg')}}" alt="" class="img-fluid"/>
                                        <div class="meta-box">
                                            <ul class="p-0 mt-4 list-inline">
                                                <li class="list-inline-item"><span class="badge badge-warning px-3">Crypto</span></li>
                                                <li class="list-inline-item">26 mars 2019</li>
                                                <li class="list-inline-item">by <a href="">admin</a></li>
                                            </ul>
                                        </div><!--end meta-box-->            
                                        <h4 class="mt-2 mb-3">
                                            <a href="">It is a long established fact that a reader will be</a>
                                        </h4>
                                        <p class="text-muted">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Cum sociis natoque penatibus et magnis.</p>
                                        <a href="#" class="text-primary">Continue Reading <i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div><!--end blog-card-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->                           
                    </div><!--end row-->

                </div><!-- container -->
@stop

@section('footerScript')
<script src="{{ URL::asset('plugins/ticker/jquery.jConveyorTicker.min.js')}}"></script>
<script src="{{ URL::asset('assets/pages/jquery.crypto-news.init.js')}}"></script>
@stop