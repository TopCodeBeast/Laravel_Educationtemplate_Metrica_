@extends('layouts.authLayout')
@section('headerStyle')
        <link href="{{ URL::asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
@stop
@section('body')
<body class="bg-card">
@stop
@section('content')
    <div class="container-fluid">
            <!-- Log In page -->
            <div class="row vh-100">
                <div class="col-lg-3 pr-0">
                    <div class="auth-page">
                        <div class="card mb-0 shadow-none h-100">
                            <div class="card-body">
                                <div class="mb-5">
                                    <a href="/crm/crm-index" class="logo logo-admin">
                                        <span><img src="{{ URL::asset('assets/images/logo-sm.png')}}" height="30" alt="logo" class="my-3"></span>
                                        <span><img src="{{ URL::asset('assets/images/logo-dark.png')}}" height="16" alt="logo" class="logo-lg logo-dark my-3"></span>
                                        <span><img src="{{ URL::asset('assets/images/logo.png')}}" height="16" alt="logo" class="logo-lg logo-light my-3"></span>
                                    </a>
                                </div>
            
                                <div class="px-3">
                                    <h2 class="font-weight-semibold font-22 mb-2">Welcome  to <span class="text-primary">Metrica</span>.</h2>
                                    <p class="text-muted">Try our fully featured business texting platform.</p>

                                    <ul class="nav-border nav nav-pills" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link font-weight-semibold" data-toggle="tab" href="#LogIn_Tab" role="tab">Log In</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active font-weight-semibold" data-toggle="tab" href="#Register_Tab" role="tab">Register</a>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane p-3" id="LogIn_Tab" role="tabpanel">                                        
                                            <form class="form-horizontal auth-form my-4" action="/">
                
                                                <div class="form-group">
                                                    <label for="username">Username</label>
                                                    <div class="input-group mb-3">
                                                        <span class="auth-form-icon">
                                                            <i data-feather="user" class="icon-sm"></i>
                                                        </span>                                                                                                              
                                                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
                                                    </div>                                    
                                                </div><!--end form-group--> 
                    
                                                <div class="form-group">
                                                    <label for="userpassword">Password</label>                                            
                                                    <div class="input-group mb-3"> 
                                                        <span class="auth-form-icon">
                                                            <i data-feather="key" class="icon-sm"></i>
                                                        </span>                                                       
                                                        <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">
                                                    </div>                               
                                                </div><!--end form-group--> 
                    
                                                <div class="form-group row mt-4">
                                                    <div class="col-sm-6">
                                                        <div class="custom-control custom-switch switch-success">
                                                            <input type="checkbox" class="custom-control-input" id="customSwitchSuccess">
                                                            <label class="custom-control-label text-muted" for="customSwitchSuccess">Remember me</label>
                                                        </div>
                                                    </div><!--end col--> 
                                                    <div class="col-sm-6 text-right">
                                                        <a href="auth-recover-pw" class="text-muted font-13"><i class="dripicons-lock"></i> Forgot password?</a>                                    
                                                    </div><!--end col--> 
                                                </div><!--end form-group--> 
                    
                                                <div class="form-group mb-0 row">
                                                    <div class="col-12 mt-2">
                                                        <button class="btn btn-gradient-primary btn-round btn-block waves-effect waves-light" type="button">Log In <i class="fas fa-sign-in-alt ml-1"></i></button>
                                                    </div><!--end col--> 
                                                </div> <!--end form-group-->                           
                                            </form><!--end form-->
                                            <div class="mx-3 mt-3 text-center bg-light p-3 text-primary">
                                                <h4 class="">Don't have an account ? </h4>
                                                <p class="font-13">Join <span>Metrica</span> Now</p>
                                                <a href="/authentication/auth-register-alt" class="btn btn-primary waves-effect waves-light">Free Resister</a>                
                                            </div>
                                            
                                        </div>
                                        <div class="tab-pane active px-3 pt-3" id="Register_Tab" role="tabpanel">
                                            <form class="form-horizontal auth-form my-4" action="/">
            
                                                <div class="form-group">
                                                    <label for="username">Username</label>
                                                    <div class="input-group mb-3">
                                                        <span class="auth-form-icon">
                                                            <i data-feather="user" class="icon-sm"></i>
                                                        </span>                                                                                                              
                                                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
                                                    </div>                                    
                                                </div><!--end form-group--> 
            
                                                <div class="form-group">
                                                    <label for="useremail">Email</label>
                                                    <div class="input-group mb-3">
                                                        <span class="auth-form-icon">
                                                            <i data-feather="mail" class="icon-sm"></i>
                                                        </span>                                                                                                              
                                                        <input type="email" class="form-control" name="email" id="useremail" placeholder="Enter Email">
                                                    </div>                                    
                                                </div><!--end form-group-->
                    
                                                <div class="form-group">
                                                    <label for="userpassword">Password</label>                                            
                                                    <div class="input-group mb-3"> 
                                                        <span class="auth-form-icon">
                                                            <i data-feather="lock" class="icon-sm"></i> 
                                                        </span>                                                       
                                                        <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">
                                                    </div>                               
                                                </div><!--end form-group--> 
            
                                                <div class="form-group">
                                                    <label for="conf_password">Confirm Password</label>                                            
                                                    <div class="input-group mb-3"> 
                                                        <span class="auth-form-icon">
                                                            <i data-feather="key" class="icon-sm"></i> 
                                                        </span>                                                       
                                                        <input type="password" class="form-control" name="conf-password" id="conf_password" placeholder="Enter Confirm Password">
                                                    </div>  
                                                    
                                                    <div class="form-group">
                                                        <label for="mo_number">Mobile Number</label>                                            
                                                        <div class="input-group mb-3"> 
                                                            <span class="auth-form-icon">
                                                                <i data-feather="phone" class="icon-sm"></i>  
                                                            </span>                                                       
                                                            <input type="text" class="form-control" name="mobile-number" id="mo_number" placeholder="Enter Mobile Number">
                                                        </div>                               
                                                    </div><!--end form-group--> 
                                                </div><!--end form-group--> 
                    
                                                <div class="form-group row mt-4">
                                                    <div class="col-sm-12">
                                                        <div class="custom-control custom-switch switch-success">
                                                            <input type="checkbox" class="custom-control-input" id="customSwitchSuccess">
                                                            <label class="custom-control-label text-muted" for="customSwitchSuccess">You agree to the Metrica <a href="#" class="text-primary">Terms of Use</a></label>
                                                        </div>
                                                    </div><!--end col-->                                             
                                                </div><!--end form-group--> 
                    
                                                <div class="form-group mb-0 row">
                                                    <div class="col-12 mt-2">
                                                        <button class="btn btn-gradient-primary btn-round btn-block waves-effect waves-light" type="button">Register <i class="fas fa-sign-in-alt ml-1"></i></button>
                                                    </div><!--end col--> 
                                                </div> <!--end form-group-->                           
                                            </form><!--end form-->
                                            <div class="mx-3 mt-3 mb-0 text-center text-muted">
                                                <p class="mb-0">Already have an account ? <a href="/authentication/auth-login-alt" class="text-primary ml-2">Log in</a></p>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                
                                <div class="mt-3 text-center">
                                    &copy;  {{ date('Y') }} - {{ date('Y', strtotime('+1 year')) }} Metrica <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 p-0 h-100vh d-flex justify-content-center auth-bg">
                    <div class="accountbg d-flex align-items-center"> 
                        <div class="account-title text-center text-white">
                            <img src="{{ URL::asset('assets/images/logo-sm.png')}}" alt="" class="thumb-sm">
                            <h4 class="mt-3 text-white">Welcome To <span class="text-warning">Metrica</span> </h4>
                            <h1 class="text-white">Let's Get Started</h1>
                            <p class="font-18 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod.</p>
                            <div class="border w-25 mx-auto border-warning"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('footerScript')
        <script type="text/javascript">
            //  $( document ).ready() block.
            $(document).ready(function() {
                document.body.classList.add('bg-card');
            });
        </script>
@stop

