@extends('authLayouts.app')
@section('headerStyle')
<link href="{{ URL::asset('assets/css/app-material.min.css') }}" rel="stylesheet" type="text/css" />
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
                            <a href="/material-version/crm/crm-index" class="logo logo-admin">
                                <span><img src="{{ URL::asset('assets/images/logo-sm.png')}}" height="30" alt="logo" class="my-3"></span>
                                <span><img src="{{ URL::asset('assets/images/logo-dark.png')}}" height="16" alt="logo" class="logo-lg logo-dark my-3"></span>
                                <span><img src="{{ URL::asset('assets/images/logo.png')}}" height="16" alt="logo" class="logo-lg logo-light my-3"></span>
                            </a>
                        </div>

                        <div class="px-3">
                            <h2 class="font-weight-semibold font-22 mb-2">Welcome to <span class="text-primary">Metrica</span>.</h2>
                            <p class="text-muted">Try our fully featured business texting platform.</p>

                            <img src="{{ URL::asset('assets/images/404.png')}}" alt="" class="d-block mx-auto mt-4" height="250">
                            <div class="text-center auth-logo-text mb-4">
                                <h4 class="mt-0 mb-3 mt-5">Looks like you've got lost...</h4>
                                <a href="/material-version/crm/crm-index" class="btn btn-sm btn-gradient-primary">Back to Dashboard</a>
                            </div>
                            <!--end auth-logo-text-->
                        </div>

                        <div class="mt-3 text-center">
                            &copy; {{ date('Y') }} - {{ date('Y', strtotime('+1 year')) }} Metrica Metrica <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</span>
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