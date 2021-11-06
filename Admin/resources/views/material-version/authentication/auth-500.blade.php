@extends('authLayouts.app')
@section('headerStyle')
        <link href="{{ URL::asset('assets/css/app-material.min.css') }}" rel="stylesheet" type="text/css" />
@stop

@section('content')
    
        <div class="container">
            <div class="row vh-100 ">
                <div class="col-12 align-self-center">
                    <div class="auth-page">
                        <div class="card auth-card shadow-lg">
                            <div class="card-body">
                                <div class="px-3">
                                    <div class="auth-logo-box">
                                        <a href="/material-version/analytics/analytics-index" class="logo logo-admin"><img src="{{ URL::asset('assets/images/logo-sm.png')}}" height="55" alt="logo" class="auth-logo"></a>
                                    </div><!--end auth-logo-box-->
                                    <img src="{{ URL::asset('assets/images/500.png')}}" alt="" class="d-block mx-auto mt-4" height="250">
                                    <div class="text-center auth-logo-text mb-4">
                                        <h4 class="mt-0 mb-3 mt-5">Somthing went wrong</h4>
                                        <a href="/material-version/analytics/analytics-index" class="btn btn-sm btn-gradient-primary">Back to Dashboard</a> 
                                    </div> <!--end auth-logo-text-->
                                </div><!--end /div-->                               
                            </div><!--end card-body-->                            
                        </div><!--end card-->
                    </div><!--end auth-page-->
                </div><!--end col-->           
            </div><!--end row-->
        </div><!--end container-->

        
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