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
                                    <h2 class="font-weight-semibold font-22 mb-2">Enter Password And Use <span class="text-primary">Metrica</span>.</h2>
                                    <p class="text-muted">Hello Mark, enter your password to unlock the screen !</p>

                                    <form class="form-horizontal auth-form my-4" action="/">
                                        <div class="user-thumb text-center m-b-30">
                                            <img src="{{ URL::asset('assets/images/users/user-2.jpg')}}" class="rounded-circle img-thumbnail thumb-xl" alt="thumbnail">
                                            <h5>Mark Kearney</h5>
                                        </div>   
                                        <div class="form-group">
                                            <label for="userpassword">Password</label>                                            
                                            <div class="input-group mb-3"> 
                                                <span class="auth-form-icon">
                                                    <i data-feather="key" class="icon-sm"></i> 
                                                </span>                                                       
                                                <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">
                                            </div>                               
                                        </div><!--end form-group--> 
                                        
                                        <div class="form-group mb-0 row">
                                            <div class="col-12 mt-2">
                                                <button class="btn btn-gradient-primary btn-round btn-block waves-effect waves-light" type="button">Unlock <i class="fas fa-sign-in-alt ml-1"></i></button>
                                            </div><!--end col--> 
                                        </div> <!--end form-group-->                           
                                    </form><!--end form-->
                                    <div class="mx-3 mt-3 mb-0 text-center text-muted">
                                        <p class="mb-0">Not you ? return  <a href="/authentication/auth-register-alt" class="text-primary ml-2">Sign In</a></p>
                                    </div>
                                </div>
                                
                                <div class="mt-3 text-center">
                                    &copy; {{ date('Y') }} - {{ date('Y', strtotime('+1 year')) }} Metrica <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</span>
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