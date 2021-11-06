@extends('layouts.master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
  <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                             @component('common-components.breadcrumb')
                                 @slot('title') Idle Timer @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') UI Kit @endslot
                                 @endcomponent


                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">            
                                    <h4 class="mt-0 header-title">Document <small><span id="docTimeout"></span> second timeout</small></h4>
                                    <p class="text-muted mb-4">The idle timer is built on <a href="#">jQuery</a> and provides two events: <code>idle.idleTimer</code> and <code>active.idleTimer</code>, which fire when the user's idle state has changed.</p>
                                    <div class="btn-group mb-3">
                                        <a href="#" id="btPause" class="btn btn-outline-primary btn-sm">Pause</a>
                                        <a href="#" id="btResume" class="btn btn-outline-primary btn-sm">Resume</a>
                                        <a href="#" id="btElapsed" class="btn btn-outline-primary btn-sm">Elapsed</a>
                                        <a href="#" id="btInit" class="btn btn-outline-primary btn-sm">Init</a>
                                        <a href="#" id="btDestroy" class="btn btn-outline-primary btn-sm">Destroy</a>
                                    </div>
                                    <textarea rows="10" cols="30" id="docStatus" class="form-control"></textarea>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">            
                                    <h4 class="mt-0 header-title">Element  <small><span id="elTimeout"></span> second timeout</small></h4>
                                    <p class="text-muted mb-4">The idle timer is built on <a href="#">jQuery</a> and provides two events: <code>idle.idleTimer</code> and <code>active.idleTimer</code>, which fire when the user's idle state has changed.</p>
                                    <div class="btn-group mb-3">
                                        <a href="#" id="btReset" class="btn btn-outline-primary btn-sm">Reset</a>
                                        <a href="#" id="btLastActive" class="btn btn-outline-primary btn-sm">Last Active</a>
                                        <a href="#" id="btRemaining" class="btn btn-outline-primary btn-sm">Remaining</a>
                                        <a href="#" id="btState" class="btn btn-outline-primary btn-sm">State</a>
                                    </div>
                                    <textarea rows="10" cols="30" id="elStatus" class="form-control"></textarea>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                </div><!-- container -->

@stop

@section('footerScript')

        <script src="{{ URL::asset('plugins/moment/moment.js')}}"></script>
        <script src="{{ URL::asset('plugins/idle-timer/idle-timer.min.js')}}"></script>        
        <script src="{{ URL::asset('assets/pages/jquery.idle-timer.init.js')}}"></script>
@stop