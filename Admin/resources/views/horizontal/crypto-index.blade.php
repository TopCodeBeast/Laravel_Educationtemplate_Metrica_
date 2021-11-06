@extends('layouts.horizontal-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
      <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-right">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Metrica</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Crypto</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Dashboard</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModalSend"><i data-feather="navigation" class="align-self-center icon-md mr-2"></i>Send</button>
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

                                    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModalRequest"><i data-feather="download" class="align-self-center icon-md mr-2"></i>Request</button>
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
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="crypto-report-history d-flex justify-content-end">
                                        <ul class="nav">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Hour</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#">Day</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Week</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Month</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Order Book</a>
                                            </li>                                        
                                        </ul>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="media">
                                                <img src="{{ URL::asset('assets/images/coins/btc.png')}}" class="mr-3 thumb-sm align-self-center rounded-circle" alt="...">
                                                <div class="media-body align-self-center"> 
                                                    <div class="coin-bal">                                                        
                                                        <h4 class="m-0">$7289.45</h4>
                                                        <p class="text-muted mb-0">Bitcoin 
                                                            <span class="text-muted font-12">(BTC)</span>
                                                            <span class="text-success">2.5% <i class="mdi mdi-arrow-up"></i></span>
                                                        </p>
                                                    </div>                                                                                              
                                                </div><!--end media body-->
                                            </div><!--end col--> 
                                        </div><!--end col--> 
                                        <div class="col-md-3">
                                            <p class="mb-0 p-2 bg-soft-dark rounded"><b>Last: </b>0.25436584</p>
                                        </div><!--end col--> 
                                        <div class="col-md-3">
                                            <p class="mb-0 p-2 bg-soft-success rounded"><b>24High: </b>0.25436584</p>
                                        </div><!--end col--> 
                                        <div class="col-md-3">
                                            <p class="mb-0 p-2 bg-soft-danger rounded"><b>24Low: </b>0.25436584</p>
                                        </div><!--end col--> 
                                    </div><!-- end row -->                                            
                                    <div id="crypto_dash_main" class="apex-charts"></div>
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div><!--end col--> 

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="wallet-bal-usd">
                                                <h4 class="wallet-title m-0">Total Balance</h4>
                                                <span class="text-muted font-12">30 june 2019</span>
                                                <h3 class="text-center">$85692.00</h3>
                                            </div> 
                                            <p class="font-15 text-success text-center mb-4"> + $455.00 <span class="font-12 text-muted">(6.2% <i class="mdi mdi-trending-up text-success"></i>)</span></p>
                                            <div class="text-right">
                                                <button class="btn btn-gradient-success btn-sm px-3">Receive</button>
                                                <button class="btn btn-gradient-danger btn-sm px-3">Send</button>
                                                <button class="btn btn-gradient-primary btn-sm px-3">+ Invest</button>
                                            </div>
                                        </div>                                        
                                    </div>                                               
                                </div><!--end card-body-->
                                <div class="card-body pt-0">
                                    <ul class="list-group wallet-bal-crypto">
                                        <li class="list-group-item align-items-center d-flex justify-content-between">
                                            <div class="media">
                                                <img src="{{ URL::asset('assets/images/coins/btc.png')}}" class="mr-3 thumb-sm align-self-center rounded-circle" alt="...">
                                                <div class="media-body align-self-center"> 
                                                    <div class="coin-bal">                                                        
                                                        <h3 class="m-0">6.18424000</h3>
                                                        <p class="text-muted mb-0">$ 33277.3660</p>
                                                    </div>                                                                                              
                                                </div><!--end media body-->
                                            </div>
                                            <span class="badge badge-soft-purple">Bitcoin</span>
                                        </li>
                                        <li class="list-group-item align-items-center d-flex justify-content-between">
                                            <div class="media">
                                                <img src="{{ URL::asset('assets/images/coins/mon.png')}}" class="mr-3 thumb-sm align-self-center rounded-circle" alt="...">
                                                <div class="media-body align-self-center"> 
                                                    <div class="coin-bal">                                                        
                                                        <h3 class="m-0">60.1842</h3>
                                                        <p class="text-muted mb-0">$ 18564.3660</p>
                                                    </div>                                                                                              
                                                </div><!--end media body-->
                                            </div>
                                            <span class="badge badge-soft-info">Monero</span>
                                        </li>
                                        <li class="list-group-item align-items-center d-flex justify-content-between">
                                            <div class="media">
                                                <img src="../assets/images/coins/eth.png" class="mr-3 thumb-sm align-self-center rounded-circle" alt="...">
                                                <div class="media-body align-self-center"> 
                                                    <div class="coin-bal">                                                        
                                                        <h3 class="m-0">32.65849212</h3>
                                                        <p class="text-muted mb-0">$ 33277.3660</p>
                                                    </div>                                                                                              
                                                </div><!--end media body-->
                                            </div>
                                            <span class="badge badge-soft-success">Ethereum</span>
                                        </li>
                                    </ul> 
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div><!--end col-->
                    </div> <!-- end row -->

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title mb-2">Currency Calculator</h4> 
                                    <div class="row">
                                        <div class="col-md-4 align-self-center">
                                            <div class="card-body">
                                                <img src="{{ URL::asset('assets/images/small/btc.png')}}" alt="" class="img-fluid d-block mx-auto">
                                            </div>
                                        </div>
                                        <div class="col-md-8 align-self-center">
                                            <div class="card-body">
                                                <button type="button" class="btn btn-primary btn-icon-circle float-right">
                                                    <i class="fas fa-sync-alt"></i>
                                                </button>
                                                <span class="badge font-12 font-weight-bold bg-soft-secondary p-2 ">Balance</span>
                                                <h2 class="font-24 font-weight-semibold">8.5692.00 <small class="font-14">BTC</small></h2>                                            
                                                <p class="mb-1 text-muted">
                                                    <span class="text-success"><i class="mdi mdi-arrow-up"></i>11.1%</span> Up from yesterday
                                                </p>                                                                                                                    
                                            </div><!--end card-body-->
                                        </div><!--end col-->
                                    </div><!--end row-->
                                                                                
                                    <div class="calculator-block mt-4">                        
                                        <div class="calculator-body">                                                      
                                            <script src="https://www.cryptonator.com/ui/js/widget/calc_widget.js"></script>
                                        </div>
                                    </div>
                                </div><!--end card-body--> 
                            </div><!--end card-->
                        </div><!--end col-->
                        
                        
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0 mb-3">Market cap</h4>
                                    <div class="table-responsive market-cap-table">
                                        <table class="table mb-0">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>Name</th>
                                                <th class="text-right">Market cap</th>
                                                <th class="text-right">Volume(24h)</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="media">
                                                        <img src="{{ URL::asset('assets/images/coins/btc.png')}}" class="mr-3 thumb-sm align-self-center rounded-circle" alt="...">
                                                        <div class="media-body align-self-center"> 
                                                            <div class="coin-bal">                                                        
                                                                <h5 class="m-0">$7289.45</h5>
                                                                <p class="text-muted mb-0">Bitcoin 
                                                                    <span class="text-muted font-12">(BTC)</span>
                                                                    <span class="text-success">2.5% <i class="mdi mdi-arrow-up"></i></span>
                                                                </p>
                                                            </div>                                                                                              
                                                        </div><!--end media body-->
                                                    </div> <!--end media-->               
                                                </td>
                                                <td class="text-right">$129,820,932</td>
                                                <td class="text-right">$25,111,773</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>
                                                    <div class="media">
                                                        <img src="{{ URL::asset('assets/images/coins/eth.png')}}" class="mr-3 thumb-sm align-self-center rounded-circle" alt="...">
                                                        <div class="media-body align-self-center"> 
                                                            <div class="coin-bal">                                                        
                                                                <h5 class="m-0">$234.45</h5>
                                                                <p class="text-muted mb-0">Ethereum 
                                                                    <span class="text-muted font-12">(ETH)</span>
                                                                    <span class="text-success">0.45% <i class="mdi mdi-arrow-up"></i></span>
                                                                </p>
                                                            </div>                                                                                              
                                                        </div><!--end media body-->
                                                    </div> <!--end media-->               
                                                </td>
                                                <td class="text-right">$24,909,743</td>
                                                <td class="text-right">$12,856,403</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>
                                                    <div class="media">
                                                        <img src="{{ URL::asset('assets/images/coins/lite.png')}}" class="mr-3 thumb-sm align-self-center rounded-circle" alt="...">
                                                        <div class="media-body align-self-center"> 
                                                            <div class="coin-bal">                                                        
                                                                <h5 class="m-0">$7289.45</h5>
                                                                <p class="text-muted mb-0">Litecoin 
                                                                    <span class="text-muted font-12">(LTC)</span>
                                                                    <span class="text-success">3.51% <i class="mdi mdi-arrow-up"></i></span>
                                                                </p>
                                                            </div>                                                                                              
                                                        </div><!--end media body-->
                                                    </div> <!--end media-->               
                                                </td>
                                                <td class="text-right">$5,399,795,666</td>
                                                <td class="text-right">$4,394,304,674</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>
                                                    <div class="media">
                                                        <img src="{{ URL::asset('assets/images/coins/mon.png')}}" class="mr-3 thumb-sm align-self-center rounded-circle" alt="...">
                                                        <div class="media-body align-self-center"> 
                                                            <div class="coin-bal">                                                        
                                                                <h5 class="m-0">$7289.45</h5>
                                                                <p class="text-muted mb-0">Monero 
                                                                    <span class="text-muted font-12">(XMR)</span>
                                                                    <span class="text-success">0.95% <i class="mdi mdi-arrow-up"></i></span>
                                                                </p>
                                                            </div>                                                                                              
                                                        </div><!--end media body-->
                                                    </div> <!--end media-->               
                                                </td>
                                                <td class="text-right">$1,375,808,437</td>
                                                <td class="text-right">$58,791,421  </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>
                                                    <div class="media">
                                                        <img src="{{ URL::asset('assets/images/coins/dash.png')}}" class="mr-3 thumb-sm align-self-center rounded-circle" alt="...">
                                                        <div class="media-body align-self-center"> 
                                                            <div class="coin-bal">                                                        
                                                                <h5 class="m-0">$7289.45</h5>
                                                                <p class="text-muted mb-0">Dashcoin 
                                                                    <span class="text-muted font-12">(DASH)</span>
                                                                    <span class="text-success">4.3% <i class="mdi mdi-arrow-up"></i></span>
                                                                </p>
                                                            </div>                                                                                              
                                                        </div><!--end media body-->
                                                    </div> <!--end media-->               
                                                </td>
                                                <td class="text-right">$1,205,400,168</td>
                                                <td class="text-right">$368,553,228</td>
                                            </tr><!--end tr-->
                                            </tbody>
                                        </table><!--end /table-->
                                    </div><!--end /tableresponsive-->                                    
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div><!--end col-->                                       
                    </div><!--end row--> 
                    
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body ">
                                    <a href="" class="float-right text-info">View All</a>
                                    <h4 class="header-title mt-0 mb-3">Transaction History</h4>
                                    <ul class="list-unsyled m-0 pl-0 transaction-history">
                                        <li class="align-items-center d-flex justify-content-between">
                                            <div class="media">
                                                <div class="transaction-icon">
                                                    <i class="mdi mdi-arrow-top-right-thick"></i>
                                                </div>                                                
                                                <div class="media-body align-self-center"> 
                                                    <div class="transaction-data">                                                        
                                                        <h3 class="m-0">Send BTC</h3>
                                                        <p class="text-muted mb-0">6 June 2019 10:25 AM</p>
                                                    </div>                                                                                              
                                                </div><!--end media body-->
                                            </div>
                                            <span class="text-danger">0.000245684 BTC</span>
                                        </li>
                                        <li class="align-items-center d-flex justify-content-between">
                                            <div class="media">
                                                <div class="transaction-icon">
                                                    <i class="mdi mdi-arrow-down-thick"></i>
                                                </div>                                                
                                                <div class="media-body align-self-center"> 
                                                    <div class="transaction-data">                                                        
                                                        <h3 class="m-0">Receive BTC</h3>
                                                        <p class="text-muted mb-0">4 June 2019 7:05 PM</p>
                                                    </div>                                                                                              
                                                </div><!--end media body-->
                                            </div>
                                            <span class="text-success">0.012458632 BTC</span>
                                        </li>
                                        <li class="align-items-center d-flex justify-content-between">
                                            <div class="media">
                                                <div class="transaction-icon">
                                                    <i class="mdi mdi-arrow-top-right-thick"></i>
                                                </div>                                                
                                                <div class="media-body align-self-center"> 
                                                    <div class="transaction-data">                                                        
                                                        <h3 class="m-0">Send BTC</h3>
                                                        <p class="text-muted mb-0">1 June 2019 11:30 PM</p>
                                                    </div>                                                                                              
                                                </div><!--end media body-->
                                            </div>
                                            <span class="text-danger">0.000245684 BTC</span>
                                        </li>
                                        <li class="align-items-center d-flex justify-content-between">
                                            <div class="media">
                                                <div class="transaction-icon">
                                                    <i class="mdi mdi-arrow-top-right-thick"></i>
                                                </div>                                                
                                                <div class="media-body align-self-center"> 
                                                    <div class="transaction-data">                                                        
                                                        <h3 class="m-0">Send BTC</h3>
                                                        <p class="text-muted mb-0">28 May 2019 08:45 AM</p>
                                                    </div>                                                                                              
                                                </div><!--end media body-->
                                            </div>
                                            <span class="text-danger">0.000245684 BTC</span>
                                        </li>
                                        <li class="align-items-center d-flex justify-content-between">
                                            <div class="media">
                                                <div class="transaction-icon">
                                                    <i class="mdi mdi-arrow-down-thick"></i>
                                                </div>                                                
                                                <div class="media-body align-self-center"> 
                                                    <div class="transaction-data">                                                        
                                                        <h3 class="m-0">Receive BTC</h3>
                                                        <p class="text-muted mb-0">25 May 2019 01:25 PM</p>
                                                    </div>                                                                                              
                                                </div><!--end media body-->
                                            </div>
                                            <span class="text-success">0.012458632 BTC</span>
                                        </li>
                                    </ul>                                    
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-6">
                            <div class="card">                                       
                                <div class="card-body"> 
                                    <h4 class="header-title mt-0 mb-3">Timeline</h4>
                                    <div class="slimscroll crypto-dash-activity">
                                        <div class="activity">
                                            <div class="activity-info">
                                                <div class="icon-info-activity">
                                                    <i class="mdi mdi-checkbox-marked-circle-outline bg-soft-success"></i>
                                                </div>
                                                <div class="activity-info-text">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6 class="m-0 w-75">Task finished</h6>
                                                        <span class="text-muted d-block">10 Min ago</span>
                                                    </div>
                                                    <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                                        <a href="#" class="text-info">[more info]</a>
                                                    </p>
                                                </div>
                                            </div> 

                                            <div class="activity-info">
                                                <div class="icon-info-activity">
                                                    <i class="mdi mdi-timer-off bg-soft-pink"></i>
                                                </div>
                                                <div class="activity-info-text">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6 class="m-0  w-75">Task Overdue</h6>
                                                        <span class="text-muted">50 Min ago</span>
                                                    </div>
                                                    <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                                        <a href="#" class="text-info">[more info]</a>
                                                    </p>
                                                    <span class="badge badge-soft-secondary">Design</span>
                                                    <span class="badge badge-soft-secondary">HTML</span>  
                                                </div>
                                            </div>
                                            <div class="activity-info">
                                                <div class="icon-info-activity">
                                                    <i class="mdi mdi-alert-decagram bg-soft-purple"></i>
                                                </div>
                                                <div class="activity-info-text">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6 class="m-0  w-75">New Task</h6>
                                                        <span class="text-muted">10 hours ago</span>
                                                    </div> 
                                                    <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                                        <a href="#" class="text-info">[more info]</a>
                                                    </p>
                                                </div>
                                            </div>   

                                            <div class="activity-info">
                                                <div class="icon-info-activity">
                                                    <i class="mdi mdi-clipboard-alert bg-soft-warning"></i>
                                                </div>
                                                <div class="activity-info-text">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6 class="m-0">New Comment</h6>
                                                        <span class="text-muted">Yesterday</span>
                                                    </div>
                                                    <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                                        <a href="#" class="text-info">[more info]</a>
                                                    </p>     
                                                </div>
                                            </div>  
                                            <div class="activity-info">
                                                <div class="icon-info-activity">
                                                    <i class="mdi mdi-clipboard-alert bg-soft-secondary"></i>
                                                </div>
                                                <div class="activity-info-text">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6 class="m-0">New Lead Miting</h6>
                                                        <span class="text-muted">14 Nov 2019</span>
                                                    </div>
                                                    <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                                        <a href="#" class="text-info">[more info]</a>
                                                    </p> 
                                                </div>
                                            </div>                                                                                                              
                                        </div><!--end activity-->
                                    </div><!--end crm-dash-activity-->
                                </div>  <!--end card-body-->                                     
                            </div><!--end card--> 
                        </div><!--end col-->
                    </div><!--end row-->
                   
                    <div class="row">                            
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 mb-3 header-title">Historical Bitcoin Price and Volume</h4>
                                    <script type="text/javascript" src="https://widgets.cryptocompare.com/serve/v1/coin/histo_week?fsym=BTC&amp;tsym=USD&amp;app=www.cryptocompare.com"></script>
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div><!--end col-->     
                    </div><!--end row--> 

                </div><!-- container -->
@stop

@section('footerScript')
        <script src="{{ URL::asset('plugins/apexcharts/irregular-data-series.js')}}"></script> 
        <script src="{{ URL::asset('assets/pages/jquery.crypto-dashboard.init.js')}}"></script>
@stop