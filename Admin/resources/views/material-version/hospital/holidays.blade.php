@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('headerStyle')
<!--calendar css-->
<link href="{{ URL::asset('plugins/fullcalendar/packages/core/main.css')}}" rel="stylesheet" />
<link href="{{ URL::asset('plugins/fullcalendar/packages/daygrid/main.css')}}" rel="stylesheet" />
<link href="{{ URL::asset('plugins/fullcalendar/packages/bootstrap/main.css')}}" rel="stylesheet" />
<link href="{{ URL::asset('plugins/fullcalendar/packages/timegrid/main.css')}}" rel="stylesheet" />
<link href="{{ URL::asset('plugins/fullcalendar/packages/list/main.css')}}" rel="stylesheet" />
@stop

@section('content')
 <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                              @component('common-components.breadcrumb')
                                 @slot('title') Holidays @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Hospital @endslot
                              @endcomponent
                           </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">  
                        <div class="col-lg-4">
                            <img src="{{ URL::asset('assets/images/widgets/calendar.svg" alt="" class="img-fluid">

                            <div class="card">
                                <div class="card-body">
                                    <ul class="list-group calendar-event mb-0">
                                        <li class="list-group-item align-items-center d-flex">
                                            <div class="media">
                                                <img src="{{ URL::asset('assets/images/widgets/project1.jpg')}}" class="mr-3 thumb-sm align-self-center rounded-circle" alt="...">
                                                <div class="media-body align-self-center"> 
                                                    <div class="event-name">                                                        
                                                        <h3 class="m-0">Internatinal Doctor Day</h3>
                                                        <p class="text-muted mb-0">1 July 2019</p>
                                                    </div>                                                                                              
                                                </div><!--end media body-->
                                            </div>
                                        </li>
                                        <li class="list-group-item align-items-center ">
                                            <div class="media">
                                                <img src="{{ URL::asset('assets/images/users/user-5.jpg')}}" class="mr-3 thumb-sm align-self-center rounded-circle" alt="...">
                                                <div class="media-body align-self-center"> 
                                                    <div class="event-name">                                                        
                                                        <h3 class="m-0">Independence day</h3>
                                                        <p class="text-muted mb-0">15 August 2019</p>
                                                    </div>                                                                                              
                                                </div><!--end media body-->
                                            </div>
                                        </li>
                                        <li class="list-group-item align-items-center">
                                            <div class="media">
                                                <img src="{{ URL::asset('assets/images/widgets/project3.jpg')}}" class="mr-3 thumb-sm align-self-center rounded-circle" alt="...">
                                                <div class="media-body align-self-center"> 
                                                    <div class="event-name">                                                        
                                                        <h3 class="m-0">World Car-Free Day</h3>
                                                        <p class="text-muted mb-0">22 Sep 2019</p>
                                                    </div>                                                                                              
                                                </div><!--end media body-->
                                            </div>
                                        </li>
                                        <li class="list-group-item align-items-center ">
                                            <div class="media">
                                                <img src="{{ URL::asset('assets/images/users/user-4.jpg')}}" class="mr-3 thumb-sm align-self-center rounded-circle" alt="...">
                                                <div class="media-body align-self-center"> 
                                                    <div class="event-name">                                                        
                                                        <h3 class="m-0">World Mental Health Day</h3>
                                                        <p class="text-muted mb-0">10 Oct 2019</p>
                                                    </div>                                                                                              
                                                </div><!--end media body-->
                                            </div>
                                        </li>
                                        <li class="list-group-item align-items-center">
                                            <div class="media">
                                                <img src="{{ URL::asset('assets/images/widgets/project4.jpg')}}" class="mr-3 thumb-sm align-self-center rounded-circle" alt="...">
                                                <div class="media-body align-self-center"> 
                                                    <div class="event-name">                                                        
                                                        <h3 class="m-0">World AIDS Day</h3>
                                                        <p class="text-muted mb-0">1 December 2019</p>
                                                    </div>                                                                                              
                                                </div><!--end media body-->
                                            </div>
                                        </li>
                                    </ul> 
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->                      
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <div id='calendar'></div>
                                    <div style='clear:both'></div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!-- End row -->

                </div><!-- container -->

@stop

@section('footerScript')
 <script src="{{ URL::asset('plugins/moment/moment.js')}}"></script>
        <script src="{{ URL::asset('plugins/fullcalendar/packages/core/main.js')}}"></script>
        <script src="{{ URL::asset('plugins/fullcalendar/packages/daygrid/main.js')}}"></script>
        <script src="{{ URL::asset('plugins/fullcalendar/packages/timegrid/main.js')}}"></script>
        <script src="{{ URL::asset('plugins/fullcalendar/packages/interaction/main.js')}}"></script>
        <script src="{{ URL::asset('plugins/fullcalendar/packages/list/main.js')}}"></script>
        <script src="{{ URL::asset('assets/pages-material/jquery.calendar.js')}}"></script>

@stop