@extends('layouts.crypto-master')

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
                                 @slot('title') Exchange @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Cripto @endslot
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
                        <div class="col-lg-9">
                            <div class="card">
                                <div class="card-body btc-price">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <span class="text-muted">BTC Price</span>
                                            <h3 class="mt-0">$7896.25</h3>
                                        </div>
                                        <div class="col-lg-4">
                                            <span class="text-muted">Market Cap</span>
                                            <h3 class="mt-0">$139,803,345,623</h3>
                                        </div>
                                        <div class="col-lg-4">
                                            <span class="text-muted">Volume (24h)</span>
                                            <h3 class="mt-0">$32,967,078,142    </h3>
                                        </div>
                                    </div>
                                    <div id="exchange_chart" class="apex-charts"></div>
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card">                                
                                <div class="card-body">
                                    <h4 class="header-title mt-0 mb-3">Coin Market</h4>
                                    <div class="coin-market-nav">
                                        <ul class="nav nav-pills justify-content-center text-center mb-3" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link balence-nav-crypto active" id="pills-credit-card-tab" data-toggle="pill" href="#pills-credit-card">
                                                    <img src="{{ URL::asset('assets/images/coins/dollar.png')}}" alt="" class="" height="40">
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link balence-nav-crypto" id="pills-paypal-tab" data-toggle="pill" href="#pills-paypal">
                                                    <img src="{{ URL::asset('assets/images/coins/btc.png')}}" alt="" class="" height="40">
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link balence-nav-crypto" id="pills-bitcoin-tab" data-toggle="pill" href="#pills-bitcoin">
                                                    <img src="{{ URL::asset('assets/images/coins/eth.png')}}" alt="" class="" height="40">
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content slimscroll coin-market-h" id="pills-tabContent">
                                            <div class="tab-pane fade active show" id="pills-credit-card">                                                
                                                <ul class="list-unsyled m-0 pl-0">
                                                    <li class="align-items-center d-flex justify-content-between py-1">
                                                        <a href="#" class="my-1"><img src="{{ URL::asset('assets/images/coins/btc.png')}}" alt="" class="mr-1" height="20">BTC-USD</a>
                                                        <span class="text-muted">$1420.00</span>
                                                        <span class="text-danger">-0.2%</span>
                                                    </li>
                                                    <li class="align-items-center d-flex justify-content-between py-1">
                                                        <a href="#" class="my-1"><img src="{{ URL::asset('assets/images/coins/eth.png')}}" alt="" class="mr-1" height="20">ETH-USD</a>
                                                        <span class="text-muted">$233.00</span>
                                                        <span class="text-success">0.28%</span>
                                                    </li>
                                                    <li class="align-items-center d-flex justify-content-between py-1">
                                                        <a href="#" class="my-1"><img src="{{ URL::asset('assets/images/coins/dash.png')}}" alt="" class="mr-1" height="20">BCH-USD</a>
                                                        <span class="text-muted">$12.00</span>
                                                        <span class="text-success">0.12%</span>
                                                    </li>
                                                    <li class="align-items-center d-flex justify-content-between py-1">
                                                        <a href="#" class="my-1"><img src="{{ URL::asset('assets/images/coins/mon.png')}}" alt="" class="mr-1" height="20">BSV-USD</a>
                                                        <span class="text-muted">$95.00</span>
                                                        <span class="text-danger">-0.22%</span>
                                                    </li>
                                                    <li class="align-items-center d-flex justify-content-between py-1">
                                                        <a href="#" class="my-1"><img src="{{ URL::asset('assets/images/coins/lite.png')}}" alt="" class="mr-1" height="20">LTC-USD</a>
                                                        <span class="text-muted">$32.00</span>
                                                        <span class="text-danger">-0.09%</span>
                                                    </li>
                                                    <li class="align-items-center d-flex justify-content-between py-1">
                                                        <a href="#" class="my-1"><img src="{{ URL::asset('assets/images/coins/qub.png')}}" alt="" class="mr-1" height="20">BNB-USD</a>
                                                        <span class="text-muted">$51.00</span>
                                                        <span class="text-success">0.27%</span>
                                                    </li>
                                                    <li class="align-items-center d-flex justify-content-between py-1">
                                                        <a href="#" class="my-1"><img src="{{ URL::asset('assets/images/coins/dollar.png')}}" alt="" class="mr-1" height="20">ADA-USD</a>
                                                        <span class="text-muted">$88.00</span>
                                                        <span class="text-danger">-0.2%</span>
                                                    </li>
                                                </ul>
                                            </div><!--end tab-pane-->
                                            <div class="tab-pane fade" id="pills-paypal">
                                                <ul class="list-unsyled m-0 pl-0">
                                                    <li class="align-items-center d-flex justify-content-between py-1">
                                                        <a href="#" class="my-1"><img src="{{ URL::asset('assets/images/coins/btc.png')}}" alt="" class="mr-1" height="20">BTC-BTC</a>
                                                        <span class="text-muted">0.000041</span>
                                                        <span class="text-danger">-0.2%</span>
                                                    </li>
                                                    <li class="align-items-center d-flex justify-content-between py-1">
                                                        <a href="#" class="my-1"><img src="{{ URL::asset('assets/images/coins/eth.png')}}" alt="" class="mr-1" height="20">ETH-BTC</a>
                                                        <span class="text-muted">0.0000411</span>
                                                        <span class="text-success">0.28%</span>
                                                    </li>
                                                    <li class="align-items-center d-flex justify-content-between py-1">
                                                        <a href="#" class="my-1"><img src="{{ URL::asset('assets/images/coins/dash.png')}}" alt="" class="mr-1" height="20">BCH-BTC</a>
                                                        <span class="text-muted">0.0000652</span>
                                                        <span class="text-success">0.12%</span>
                                                    </li>
                                                    <li class="align-items-center d-flex justify-content-between py-1">
                                                        <a href="#" class="my-1"><img src="{{ URL::asset('assets/images/coins/mon.png')}}" alt="" class="mr-1" height="20">BSV-BTC</a>
                                                        <span class="text-muted">0.0000120</span>
                                                        <span class="text-danger">-0.22%</span>
                                                    </li>
                                                    <li class="align-items-center d-flex justify-content-between py-1">
                                                        <a href="#" class="my-1"><img src="{{ URL::asset('assets/images/coins/lite.png')}}" alt="" class="mr-1" height="20">LTC-BTC</a>
                                                        <span class="text-muted">0.00001141</span>
                                                        <span class="text-danger">-0.09%</span>
                                                    </li>
                                                    <li class="align-items-center d-flex justify-content-between py-1">
                                                        <a href="#" class="my-1"><img src="{{ URL::asset('assets/images/coins/qub.png')}}" alt="" class="mr-1" height="20">BNB-BTC</a>
                                                        <span class="text-muted">0.000096</span>
                                                        <span class="text-success">0.27%</span>
                                                    </li>
                                                    <li class="align-items-center d-flex justify-content-between py-1">
                                                        <a href="#" class="my-1"><img src="{{ URL::asset('assets/images/coins/dollar.png')}}" alt="" class="mr-1" height="20">ADA-BTC</a>
                                                        <span class="text-muted">0.0000321</span>
                                                        <span class="text-danger">-0.2%</span>
                                                    </li>
                                                </ul>                                        
                                            </div><!--end tab-pane--> 
                                            <div class="tab-pane fade" id="pills-bitcoin">
                                                <ul class="list-unsyled m-0 pl-0">
                                                    <li class="align-items-center d-flex justify-content-between py-1">
                                                        <a href="#" class="my-1"><img src="{{ URL::asset('assets/images/coins/btc.png')}}" alt="" class="mr-1" height="20">BTC-ETH</a>
                                                        <span class="text-muted">0.000096</span>
                                                        <span class="text-danger">-0.2%</span>
                                                    </li>
                                                    <li class="align-items-center d-flex justify-content-between py-1">
                                                        <a href="#" class="my-1"><img src="{{ URL::asset('assets/images/coins/eth.png')}}" alt="" class="mr-1" height="20">ETH-ETH</a>
                                                        <span class="text-muted">0.000016</span>
                                                        <span class="text-success">0.28%</span>
                                                    </li>
                                                    <li class="align-items-center d-flex justify-content-between py-1">
                                                        <a href="#" class="my-1"><img src="{{ URL::asset('assets/images/coins/dash.png')}}" alt="" class="mr-1" height="20">BCH-ETH</a>
                                                        <span class="text-muted">0.000044</span>
                                                        <span class="text-success">0.12%</span>
                                                    </li>
                                                    <li class="align-items-center d-flex justify-content-between py-1">
                                                        <a href="#" class="my-1"><img src="{{ URL::asset('assets/images/coins/mon.png')}}" alt="" class="mr-1" height="20">BSV-ETH</a>
                                                        <span class="text-muted">0.0003254</span>
                                                        <span class="text-danger">-0.22%</span>
                                                    </li>
                                                    <li class="align-items-center d-flex justify-content-between py-1">
                                                        <a href="#" class="my-1"><img src="{{ URL::asset('assets/images/coins/lite.png')}}" alt="" class="mr-1" height="20">LTC-ETH</a>
                                                        <span class="text-muted">0.00009621</span>
                                                        <span class="text-danger">-0.09%</span>
                                                    </li>
                                                    <li class="align-items-center d-flex justify-content-between py-1">
                                                        <a href="#" class="my-1"><img src="{{ URL::asset('assets/images/coins/qub.png')}}" alt="" class="mr-1" height="20">BNB-ETH</a>
                                                        <span class="text-muted">0.00009965</span>
                                                        <span class="text-success">0.27%</span>
                                                    </li>
                                                    <li class="align-items-center d-flex justify-content-between py-1">
                                                        <a href="#" class="my-1"><img src="{{ URL::asset('assets/images/coins/dollar.png')}}" alt="" class="mr-1" height="20">ADA-ETH</a>
                                                        <span class="text-muted">0.0065496</span>
                                                        <span class="text-danger">-0.2%</span>
                                                    </li>
                                                </ul>
                                            </div><!--end tab-pane--> 
                                        </div><!--end tab-content--> 
                                        <ul class="pagination pagination-sm justify-content-end mt-2 mb-0">
                                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </div> <!--end balence-nav-->                                       
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Buy Coins</h4>                                            
                                    <form class="form-horizontal">
                                        <div class="form-group mb-0">
                                            <div class="input-group mt-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-light" id="basic-addon1">Amount</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="123" aria-label="123" aria-describedby="basic-addon1">
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-light" id="basic-addon2">BTC</span>
                                                </div>
                                            </div>
                                            <div class="input-group mt-3">
                                                <div class="input-group-prepend">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Price <i class="mdi mdi-chevron-down ml-1"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Last Trade Price</a>
                                                        <a class="dropdown-item" href="#">Last Buy Price</a>
                                                        <a class="dropdown-item" href="#">Last Sell Price</a>
                                                    </div>
                                                </div>
                                                <input type="email" id="example-input2-group3" name="example-input2-group3" class="form-control" placeholder="$ 24,00">
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-light" id="basic-addon4">$ Dollor</span>
                                                </div>                                                    
                                            </div>
                                            <div class="input-group mt-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-light" id="basic-addon5">Total</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="123" aria-label="123" aria-describedby="basic-addon1">
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-light" id="basic-addon6">$ Dollor</span>
                                                </div>
                                            </div>        
                                            <div class=" mt-3 ml-auto">
                                                <a href="#" class="btn btn-success btn-sm">Buy Coins</a>
                                            </div>
                                        </div> <!--end form-group-->           
                                    </form> <!--end form-->    
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div><!--end col--> 

                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Sell Coins</h4>                                            
                                    <form class="form-horizontal">
                                        <div class="form-group mb-0">
                                            <div class="input-group mt-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-light" id="basic-addon7">Amount</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="123" aria-label="123" aria-describedby="basic-addon1">
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-light" id="basic-addon8">BTC</span>
                                                </div>
                                            </div>
                                            <div class="input-group mt-3">
                                                <div class="input-group-prepend">
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Price <i class="mdi mdi-chevron-down ml-1"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Last Trade Price</a>
                                                        <a class="dropdown-item" href="#">Last Buy Price</a>
                                                        <a class="dropdown-item" href="#">Last Sell Price</a>
                                                    </div>
                                                </div>
                                                <input type="email" id="example-input2-group4" name="example-input2-group4" class="form-control" placeholder="$ 24,00">
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-light" id="basic-addon9">$ Dollor</span>
                                                </div>
                                                    
                                            </div>
                                            <div class="input-group mt-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-light" id="basic-addon10">Total</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="123" aria-label="123" aria-describedby="basic-addon1">
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-light" id="basic-addon11">$ Dollor</span>
                                                </div>
                                            </div>    
                                            <div class="mt-3 ml-auto">
                                                <a href="#" class="btn btn-danger btn-sm">Sell Coins</a>
                                            </div>
                                        </div> <!--end form-group-->           
                                    </form> <!--end form-->    
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div><!--end col--> 
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="table-responsive slimscroll trade-history">
                                                <table class="table table-sm mb-0">
                                                    <thead class="thead-light">
                                                      <tr>
                                                        <th scope="col">Price(USD)</th>
                                                        <th scope="col">Amount(BTC)</th>
                                                        <th scope="col">Total(USD)</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                      <tr class="bg-soft-success">
                                                        <td class="text-success">1235.12</td>
                                                        <td class="text-muted">1.2154300</td>
                                                        <td class="text-muted">1235.21</td>
                                                      </tr>
                                                      <tr class="bg-soft-success">
                                                        <td class="text-success">1235.12</td>
                                                        <td class="text-muted">1.2154300</td>
                                                        <td class="text-muted">1235.21</td>
                                                      </tr>
                                                      <tr class="bg-soft-success">
                                                        <td class="text-success">1235.12</td>
                                                        <td class="text-muted">1.2154300</td>
                                                        <td class="text-muted">1235.21</td>
                                                      </tr>
                                                      <tr class="bg-soft-success">
                                                        <td class="text-success">1235.12</td>
                                                        <td class="text-muted">1.2154300</td>
                                                        <td class="text-muted">1235.21</td>
                                                      </tr>
                                                      <tr class="bg-soft-success">
                                                        <td class="text-success">1235.12</td>
                                                        <td class="text-muted">1.2154300</td>
                                                        <td class="text-muted">1235.21</td>
                                                      </tr>
                                                      <tr class="bg-soft-success">
                                                        <td class="text-success">1235.12</td>
                                                        <td class="text-muted">1.2154300</td>
                                                        <td class="text-muted">1235.21</td>
                                                      </tr>
                                                      <tr class="bg-soft-success">
                                                        <td class="text-success">1235.12</td>
                                                        <td class="text-muted">1.2154300</td>
                                                        <td class="text-muted">1235.21</td>
                                                      </tr>
                                                      <tr class="bg-soft-success">
                                                        <td class="text-success">1235.12</td>
                                                        <td class="text-muted">1.2154300</td>
                                                        <td class="text-muted">1235.21</td>
                                                      </tr>
                                                      <tr class="bg-soft-success">
                                                        <td class="text-success">1235.12</td>
                                                        <td class="text-muted">1.2154300</td>
                                                        <td class="text-muted">1235.21</td>
                                                      </tr>
                                                      
                                                    </tbody>
                                                  </table>
                                            </div>
                                        </div><!--end col--> 
                                        <div class="col-6">
                                            <div class="table-responsive slimscroll trade-history">
                                                <table class="table table-sm mb-0">
                                                    <thead class="thead-light">
                                                      <tr>
                                                        <th scope="col">Price(USD)</th>
                                                        <th scope="col">Amount(BTC)</th>
                                                        <th scope="col">Total(USD)</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                      <tr class="bg-soft-danger">
                                                        <td class="text-danger">1235.12</td>
                                                        <td class="text-muted">1.2154300</td>
                                                        <td class="text-muted">1235.21</td>
                                                      </tr>
                                                      <tr class="bg-soft-danger">
                                                        <td class="text-danger">1235.12</td>
                                                        <td class="text-muted">1.2154300</td>
                                                        <td class="text-muted">1235.21</td>
                                                      </tr>
                                                      <tr class="bg-soft-danger">
                                                        <td class="text-danger">1235.12</td>
                                                        <td class="text-muted">1.2154300</td>
                                                        <td class="text-muted">1235.21</td>
                                                      </tr>
                                                      <tr class="bg-soft-danger">
                                                        <td class="text-danger">1235.12</td>
                                                        <td class="text-muted">1.2154300</td>
                                                        <td class="text-muted">1235.21</td>
                                                      </tr>
                                                      <tr class="bg-soft-danger">
                                                        <td class="text-danger">1235.12</td>
                                                        <td class="text-muted">1.2154300</td>
                                                        <td class="text-muted">1235.21</td>
                                                      </tr>
                                                      <tr class="bg-soft-danger">
                                                        <td class="text-danger">1235.12</td>
                                                        <td class="text-muted">1.2154300</td>
                                                        <td class="text-muted">1235.21</td>
                                                      </tr>
                                                      <tr class="bg-soft-danger">
                                                        <td class="text-danger">1235.12</td>
                                                        <td class="text-muted">1.2154300</td>
                                                        <td class="text-muted">1235.21</td>
                                                      </tr>
                                                      <tr class="bg-soft-danger">
                                                        <td class="text-danger">1235.12</td>
                                                        <td class="text-muted">1.2154300</td>
                                                        <td class="text-muted">1235.21</td>
                                                      </tr>
                                                      <tr class="bg-soft-danger">
                                                        <td class="text-danger">1235.12</td>
                                                        <td class="text-muted">1.2154300</td>
                                                        <td class="text-muted">1235.21</td>
                                                      </tr>
                                                      
                                                    </tbody>
                                                  </table>
                                            </div>
                                        </div><!--end col--> 
                                    </div><!--end row--> 
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div><!--end col-->                       
                    </div> <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0 mb-3">Transaction History</h4> 
                                    <div class="table-responsive dash-social">
                                        <table id="datatable" class="table table-bordered">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>No</th>
                                                <th>Date</th>
                                                <th>Time</th>                                                    
                                                <th>Transaction ID</th>
                                                <th>Type</th>
                                                <th>Value</th>
                                            </tr><!--end tr-->
                                            </thead>
        
                                            <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td>14 Jan 2019</td>
                                                <td>12:05PM</td>
                                                <td>c12b001a15f9bd46ef1c6551386c6a2bcda1ab3eae5091fba</td>
                                                <td><span class="badge badge-soft-danger">Sent</span></td>
                                                <td>$521.36</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>02</td>
                                                <td>13 Jan 2019</td>
                                                <td>10:15AM</td>
                                                <td>c12b001a15f9bd46ef1c6551386c6a2bcda1ab3eae5091fba</td>
                                                <td><span class="badge badge-soft-success">Received</span></td>
                                                <td>$990.00</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>03</td>
                                                <td>11 Jan 2019</td>
                                                <td>09:14PM</td>
                                                <td>c12b001a15f9bd46ef1c6551386c6a2bcda1ab3eae5091fba</td>
                                                <td><span class="badge badge-soft-danger">Sent</span></td>
                                                <td>$321.21</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>04</td>
                                                <td>08 Jan 2019</td>
                                                <td>12:05PM</td>
                                                <td>c12b001a15f9bd46ef1c6551386c6a2bcda1ab3eae5091fba</td>
                                                <td><span class="badge badge-soft-success">Received</span></td>
                                                <td>$321.21</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>05</td>
                                                <td>06 Jan 2019</td>
                                                <td>11:30AM</td>
                                                <td>c12b001a15f9bd46ef1c6551386c6a2bcda1ab3eae5091fba</td>
                                                <td><span class="badge badge-soft-danger">Sent</span></td>
                                                <td>$458.80</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>06</td>
                                                <td>05 Jan 2019</td>
                                                <td>05:50PM</td>
                                                <td>c12b001a15f9bd46ef1c6551386c6a2bcda1ab3eae5091fba</td>
                                                <td><span class="badge badge-soft-success">Received</span></td>
                                                <td>125.50</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>07</td>
                                                <td>04 Jan 2019</td>
                                                <td>08:10PM</td>
                                                <td>c12b001a15f9bd46ef1c6551386c6a2bcda1ab3eae5091fba</td>
                                                <td><span class="badge badge-soft-danger">Sent</span></td>
                                                <td>$365.21</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>08</td>
                                                <td>03 Jan 2019</td>
                                                <td>01:30PM</td>
                                                <td>c12b001a15f9bd46ef1c6551386c6a2bcda1ab3eae5091fba</td>
                                                <td><span class="badge badge-soft-success">Received</span></td>
                                                <td>$843.21</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>09</td>
                                                <td>03 Jan 2019</td>
                                                <td>12:05PM</td>
                                                <td>c12b001a15f9bd46ef1c6551386c6a2bcda1ab3eae5091fba</td>
                                                <td><span class="badge badge-soft-danger">Sent</span></td>
                                                <td>$335.15</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>10</td>
                                                <td>02 Jan 2019</td>
                                                <td>03:15PM</td>
                                                <td>c12b001a15f9bd46ef1c6551386c6a2bcda1ab3eae5091fba</td>
                                                <td><span class="badge badge-soft-success">Received</span></td>
                                                <td>$554.50</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>11</td>
                                                <td>01 Jan 2019</td>
                                                <td>10:05AM</td>
                                                <td>c12b001a15f9bd46ef1c6551386c6a2bcda1ab3eae5091fba</td>
                                                <td><span class="badge badge-soft-danger">Sent</span></td>
                                                <td>$225.25</td>
                                            </tr><!--end tr-->
                                                                                            
                                            </tbody>
                                        </table>                    
                                    </div>                                         
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div><!--end col-->
                    </div><!--end row-->     

                </div><!-- container -->
@stop

@section('footerScript')
<script src="{{ URL::asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ URL::asset('plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ URL::asset('assets/pages/jquery.crypto-exchange.init.js')}}"></script>
@stop