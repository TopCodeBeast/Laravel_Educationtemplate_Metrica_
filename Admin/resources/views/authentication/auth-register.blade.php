@extends('layouts.authLayout')
@section('headerStyle')
        <link href="{{ URL::asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
@stop

@section('content')
         <!-- Log In page -->
        <div class="container">
            <div class="row vh-100 ">
                <div class="col-12 align-self-center">
                    <div class="auth-page">
                        <div class="card auth-card shadow-lg">
                            <div class="card-body">
                                <div class="px-3">
                                    <div class="auth-logo-box">
                                        <a href="/analytics/analytics-index" class="logo logo-admin"><img src="{{ URL::asset('assets/images/logo-sm.png')}}" height="55" alt="logo" class="auth-logo"></a>
                                    </div><!--end auth-logo-box-->
                                    
                                    <div class="text-center auth-logo-text">
                                        <h4 class="mt-0 mb-3 mt-5">Free Register for Metrica</h4>
                                        <p class="text-muted mb-0">Get your free Metrica account now.</p>
                                    </div> <!--end auth-logo-text-->  
                                    <form class="form-horizontal auth-form my-4" action="/">
            
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <div class="input-group mb-3">
                                                <span class="auth-form-icon">
                                                    <i class="dripicons-user"></i> 
                                                </span>                                                                                                              
                                                <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
                                            </div>                                    
                                        </div><!--end form-group--> 
    
                                        <div class="form-group">
                                            <label for="useremail">Email</label>
                                            <div class="input-group mb-3">
                                                <span class="auth-form-icon">
                                                    <i class="dripicons-mail"></i> 
                                                </span>                                                                                                              
                                                <input type="email" class="form-control" name="useremail" id="useremail" placeholder="Enter Email">
                                            </div>                                    
                                        </div><!--end form-group-->
            
                                        <div class="form-group">
                                            <label for="userpassword">Password</label>                                            
                                            <div class="input-group mb-3"> 
                                                <span class="auth-form-icon">
                                                    <i class="dripicons-lock"></i> 
                                                </span>                                                       
                                                <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">
                                            </div>                               
                                        </div><!--end form-group--> 
    
                                        <div class="form-group">
                                            <label for="conf_password">Confirm Password</label>                                            
                                            <div class="input-group mb-3"> 
                                                <span class="auth-form-icon">
                                                    <i class="dripicons-lock-open"></i> 
                                                </span>                                                       
                                                <input type="password" class="form-control" name="conf-password" id="conf_password" placeholder="Enter Confirm Password">
                                            </div>  
                                            
                                            <div class="form-group">
                                                <label for="mo_number">Mobile Number</label>                                            
                                                <div class="input-group mb-3"> 
                                                    <span class="auth-form-icon">
                                                        <i class="dripicons-phone"></i> 
                                                    </span>                                                       
                                                    <input type="text" class="form-control" name="mobile-number" id="mo_number" placeholder="Enter Mobile Number">
                                                </div>                               
                                            </div><!--end form-group--> 
                                        </div><!--end form-group--> 
            
                                        <div class="form-group row mt-4">
                                            <div class="col-sm-12">
                                                <div class="custom-control custom-switch switch-success">
                                                    <input type="checkbox" class="custom-control-input" id="customSwitchSuccess">
                                                    <label class="custom-control-label text-muted" for="customSwitchSuccess">By registering you agree to the Metrica <a href="#" class="text-primary">Terms of Use</a></label>
                                                </div>
                                            </div><!--end col-->                                             
                                        </div><!--end form-group--> 
            
                                        <div class="form-group mb-0 row">
                                            <div class="col-12 mt-2">
                                                <button class="btn btn-gradient-primary btn-round btn-block waves-effect waves-light" type="button">Register <i class="fas fa-sign-in-alt ml-1"></i></button>
                                            </div><!--end col--> 
                                        </div> <!--end form-group-->                           
                                    </form><!--end form-->
                                </div><!--end /div-->
                                
                                <div class="m-3 text-center text-muted">
                                    <p class="">Already have an account ? <a href="/authentication/auth-login" class="text-primary ml-2">Log in</a></p>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end auth-card-->
                </div><!--end col-->           
            </div><!--end row-->
        </div><!--end container-->
        <!-- End Log In page -->

@endsection

@section('footerScript')
        <script type="text/javascript">
            //  $( document ).ready() block.
            $(document).ready(function() {
                document.body.classList.add('account-body');
                document.body.classList.add('accountbg');
            });
        </script>
@stop

