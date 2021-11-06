@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
  <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                             @component('common-components.breadcrumb')
                                 @slot('title') Settings @endslot
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
                                                                    <form class="form-horizontal" action="index">
                                                                        
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
                                                                    <form class="form-horizontal" action="index">
                                                                        
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
                                <div class="card-body  met-pro-bg">
                                    <div class="met-profile">
                                        <div class="row">
                                            <div class="col-lg-4 align-self-center">
                                                <div class="met-profile-main">
                                                    <div class="met-profile-main-pic">
                                                        <img src="{{ URL::asset('assets/images/users/user-10.jpg')}}" alt="" class="rounded-circle">
                                                        <span class="fro-profile_main-pic-change">
                                                            <i class="fas fa-camera"></i>
                                                        </span>
                                                    </div>
                                                    <div class="met-profile_user-detail">
                                                        <h5 class="met-user-name">Steven Meyers</h5>                                                        
                                                        <p class="mb-0 met-user-name-post">UI/UX Designer</p>
                                                    </div>
                                                </div>                                                
                                            </div><!--end col-->
                                            <div class="col-lg-4 ml-auto">
                                                <ul class="list-unstyled personal-detail">
                                                    <li class=""><i class="dripicons-phone mr-2 text-info font-18"></i> <b> phone </b> : +91 23456 78910</li>
                                                    <li class="mt-2"><i class="dripicons-mail text-info font-18 mt-2 mr-2"></i> <b> Email </b> : mannat.theme@gmail.com</li>
                                                    <li class="mt-2"><i class="dripicons-location text-info font-18 mt-2 mr-2"></i> <b>Location</b> : USA</li>
                                                </ul>
                                                <div class="button-list btn-social-icon">                                                
                                                    <button type="button" class="btn btn-blue btn-round">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </button>
            
                                                    <button type="button" class="btn btn-secondary btn-round ml-2">
                                                        <i class="fab fa-twitter"></i>
                                                    </button>
            
                                                    <button type="button" class="btn btn-pink btn-round  ml-2">
                                                        <i class="fab fa-dribbble"></i>
                                                    </button>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end f_profile-->                                                                                
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
    
                    <div class="row">                        
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="setFullName">Full Name</label>
                                            <input type="text" class="form-control" id="setFullName" placeholder="Full Name">
                                        </div><!--end form-group-->                                        
                                        <div class="form-group">
                                            <label for="setEmail">Email address</label>
                                            <input type="email" class="form-control" id="setEmail" placeholder="Enter email">
                                        </div><!--end form-group-->
                                        <div class="form-group">
                                            <label for="setPassword">Password</label>
                                            <input type="password" class="form-control" id="setPassword" placeholder="Password">
                                        </div><!--end form-group-->
                                        <button type="submit" class="btn btn-secondary btn-sm">Save Change</button>
                                    </form> <!--end form-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="setLinkAc">Linked Account</label>
                                            <select class="form-control" id="setLinkAc">
                                                <option>PayPal</option>
                                                <option>VISA</option>
                                                <option>ICICI</option>
                                                <option>HDFC</option>
                                            </select>
                                        </div><!--end form-group-->      
                                        <div class="form-group">
                                            <label for="setCurrency">Collect Currency</label>
                                            <select class="form-control" id="setCurrency">
                                                <option>US Dollar</option>
                                                <option>Pounds</option>
                                                <option>Euro</option>
                                                <option>Yen</option>
                                            </select>
                                        </div>  <!--end form-group-->                                                       
                                        <div class="form-group">
                                            <label for="setChangePassword">Change Wallet Password</label>
                                            <input type="password" class="form-control" id="setChangePassword" placeholder="Password">
                                        </div> <!--end form-group-->                                                   
                                        <button type="submit" class="btn btn-secondary btn-sm">Save Change</button>
                                    </form> <!--end form-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 mb-3 header-title">Notification Setting</h4>
                                    <div class="text-center">
                                        <img src="{{ URL::asset('assets/images/widgets/notify.svg')}}" alt="" class="mb-3" height="115">
                                    </div>
                                    <form>
                                        <div class="custom-control custom-switch switch-success mb-2">
                                            <input type="checkbox" class="custom-control-input" id="ICOnotify" checked>
                                            <label class="custom-control-label" for="ICOnotify">Get notification, New coin ICO in crypto market</label>
                                        </div>
                                        <div class="custom-control custom-switch switch-success mb-2">
                                            <input type="checkbox" class="custom-control-input" id="notyfySound">
                                            <label class="custom-control-label" for="notyfySound">Notification with sound</label>
                                        </div>
                                        <div class="custom-control custom-switch switch-success mb-2">
                                            <input type="checkbox" class="custom-control-input" id="notifyF_friends">
                                            <label class="custom-control-label" for="notifyF_friends">Get notification, Only my facebook's friends</label>
                                        </div>
                                        <div class="custom-control custom-switch switch-success">
                                            <input type="checkbox" class="custom-control-input" id="autoLockWallet" checked>
                                            <label class="custom-control-label" for="autoLockWallet">Auto lock my wallet</label>
                                        </div>
                                    </form> <!--end form-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->


                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media setting-card">
                                        <span class="sett-card-icon set-icon-purple">
                                            <i class="mdi mdi-cellphone-iphone"></i>
                                        </span>
                                        <div class="media-body align-self-center"> 
                                            <div class="setting-detail">                                                        
                                                <h3 class="mb-0 mt-0">SMS Auth</h3>
                                                <p class="text-muted mb-0">Used for withdrawals and security modifications</p>
                                            </div> 
                                            <div class="mt-2">
                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-outline-light btn-sm active">
                                                        <input type="radio" name="options" id="option1" checked> Enable
                                                    </label>
                                                    
                                                    <label class="btn btn-outline-light btn-sm">
                                                        <input type="radio" name="options" id="option4"> Disable
                                                    </label>
                                                </div><!--end btn-group-->
                                            </div> <!--end /div-->                                                                                                    
                                        </div><!--end media body-->
                                    </div><!--end media-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media setting-card">
                                        <span class="sett-card-icon set-icon-success">
                                            <i class="mdi mdi-google-chrome"></i>
                                        </span>
                                        <div class="media-body align-self-center"> 
                                            <div class="setting-detail">                                                        
                                                <h3 class="mb-0 mt-0">Google Auth</h3>
                                                <p class="text-muted mb-0">Used for withdrawals and security modifications</p>
                                            </div> 
                                            <div class="mt-2">
                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-outline-light btn-sm active">
                                                        <input type="radio" name="options" id="option5" checked> Enable
                                                    </label>
                                                    
                                                    <label class="btn btn-outline-light btn-sm">
                                                        <input type="radio" name="options" id="option6"> Disable
                                                    </label>
                                                </div><!--end btn-group-->
                                            </div> <!--end /div-->                                                                                                    
                                        </div><!--end media body-->
                                    </div><!--end media-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media setting-card">
                                        <span class="sett-card-icon set-icon-danger">
                                            <i class="mdi mdi-database"></i>
                                        </span>
                                        <div class="media-body align-self-center"> 
                                            <div class="setting-detail">                                                        
                                                <h3 class="mb-0 mt-0">API</h3>
                                                <p class="text-muted mb-0">Create API private key can get you access to market.</p>
                                            </div> 
                                            <div class="mt-2">
                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-outline-light btn-sm active">
                                                        <input type="radio" name="options" id="option3" checked> Enable
                                                    </label>
                                                    
                                                    <label class="btn btn-outline-light btn-sm">
                                                        <input type="radio" name="options" id="option7"> Disable
                                                    </label>
                                                </div><!--end btn-group-->
                                            </div> <!--end /div-->                                                                                                    
                                        </div><!--end media body-->
                                    </div><!--end media-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                </div><!-- container -->
@stop
