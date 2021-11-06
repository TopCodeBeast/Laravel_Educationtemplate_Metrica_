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
                                        <h4 class="mt-0 mb-3 mt-5">Reset Password For Metrica</h4>
                                        <p class="text-muted mb-0">Enter your Email and instructions will be sent to you!</p>  
                                    </div> <!--end auth-logo-text-->  
    
                                    
                                    <form class="form-horizontal auth-form my-4" action="/">
            
                                        <div class="form-group">
                                            <label for="useremail">Email</label>
                                            <div class="input-group mb-3">
                                                <span class="auth-form-icon">
                                                    <i class="dripicons-mail"></i> 
                                                </span>                                                                                                              
                                                <input type="email" class="form-control" name="email" id="useremail" placeholder="Enter Email">
                                            </div>                                    
                                        </div><!--end form-group-->        
            
                                        
                                        <div class="form-group mb-0 row">
                                            <div class="col-12 mt-2">
                                                <button class="btn btn-gradient-primary btn-round btn-block waves-effect waves-light" type="button">Reset <i class="fas fa-sign-in-alt ml-1"></i></button>
                                            </div><!--end col--> 
                                        </div> <!--end form-group-->                           
                                    </form><!--end form-->
                                </div><!--end /div-->
                                
                                <div class="m-3 text-center text-muted">
                                    <p class="">Remember It ?  <a href="/authentication/auth-register" class="text-primary ml-2">Sign in here</a></p>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end auth-page-->
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

