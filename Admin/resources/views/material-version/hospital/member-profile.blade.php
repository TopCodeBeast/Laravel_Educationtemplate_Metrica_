@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
    <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                              @component('common-components.breadcrumb')
                                 @slot('title') Member Profile @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Hospital @endslot
                              @endcomponent
                            
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">                                                            
                                <div class="card-body">   
                                    <div class="row">
                                        <div class="col-lg-6 align-self-center">
                                            <div class="media">
                                                <img src="{{ URL::asset('assets/images/users/user-4.jpg')}}" alt="user" class="rounded-circle thumb-xl mr-3 align-self-center">
                                                <div class="media-body align-self-center">
                                                    <h4 class="mt-0">Rosa Dodson</h4>
                                                    <p class="mb-0 text-muted">Contrary to popular belief, Lorem Ipsum is not simply random text. 
                                                        It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. 
                                                        Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, 
                                                        looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, 
                                                        and going through the cites of the word in classical literature, discovered the undoubtable source.
                                                    </p>
                                                </div>
                                            </div> 
                                        </div><!--end col--> 
                                        <div class="col-lg-4 ml-auto">
                                            <p>
                                                <span class="personal-detail-title">Name</span> 
                                                <span class="personal-detail-info">Rosa Dodson</span>
                                            </p> 
                                            <p>
                                                <span class="personal-detail-title">Admit Date</span> 
                                                <span class="personal-detail-info">09/07/2019</span>
                                            </p> 
                                            <p>
                                                <span class="personal-detail-title">Phone No</span> 
                                                <span class="personal-detail-info">+1 234 567 890</span>
                                            </p> 
                                            <p>
                                                <span class="personal-detail-title">Address</span> 
                                                <span class="personal-detail-info">225  Rose Street, Dublin, California</span>
                                            </p> 
                                            <p class="mb-lg-0">
                                                <span class="personal-detail-title">Post</span> 
                                                <span class="personal-detail-info">Nurse</span>
                                            </p> 
                                        </div><!--end col--> 
                                    </div><!--end row-->
                                </div><!--end card-body--> 
                                                                                               
                            </div><!--end card-->
                        </div><!--end col-->                        
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body"> 
                                    <h4 class="header-title mt-0 mb-4">Latest Activity</h4>
                                    <div class="slimscroll profile-activity-height">
                                        <div class="activity">
                                            <div class="activity-info">
                                                <div class="icon-info-activity">
                                                    <i class="mdi mdi-checkbox-marked-circle-outline bg-soft-success"></i>
                                                </div>
                                                <div class="activity-info-text">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="text-muted mb-0 font-14 w-75"><span class="text-dark font-14">Donald</span> 
                                                            updated the status of <a href="" class="text-dark">Refund #1234</a> to awaiting customer response
                                                        </p>
                                                        <span class="text-muted">10 Min ago</span>
                                                    </div>    
                                                </div>
                                            </div>   

                                            <div class="activity-info">
                                                <div class="icon-info-activity">
                                                    <i class="mdi mdi-timer-off bg-soft-pink"></i>
                                                </div>
                                                <div class="activity-info-text">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="text-muted mb-0 font-14 w-75"><span class="text-dark font-14">Lucy Peterson</span> 
                                                            was added to the group, group name is <a href="" class="text-dark">Overtake</a>
                                                        </p>
                                                        <span class="text-muted">50 Min ago</span>
                                                    </div>    
                                                </div>
                                            </div>   

                                            <div class="activity-info">
                                                <div class="icon-info-activity">
                                                    <i class="mdi mdi-alert-decagram bg-soft-purple"></i>
                                                </div>
                                                <div class="activity-info-text">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="text-muted mb-0 font-14 w-75"><span class="text-dark font-14">Joseph Rust</span> 
                                                            opened new showcase <a href="" class="text-dark">Mannat #112233</a> with theme market
                                                        </p>
                                                        <span class="text-muted">10 hours ago</span>
                                                    </div>    
                                                </div>
                                            </div>   

                                            <div class="activity-info">
                                                <div class="icon-info-activity">
                                                    <i class="mdi mdi-clipboard-alert bg-soft-warning"></i>
                                                </div>
                                                <div class="activity-info-text">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="text-muted mb-0 font-14 w-75"><span class="text-dark font-14">Donald</span> 
                                                            updated the status of <a href="" class="text-dark">Refund #1234</a> to awaiting customer response
                                                        </p>
                                                        <span class="text-muted">Yesterday</span>
                                                    </div>    
                                                </div>
                                            </div>   
                                            <div class="activity-info">
                                                <div class="icon-info-activity">
                                                    <i class="mdi mdi-clipboard-alert bg-soft-secondary"></i>
                                                </div>
                                                <div class="activity-info-text">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="text-muted mb-0 font-14 w-75"><span class="text-dark font-14">Lucy Peterson</span> 
                                                            was added to the group, group name is <a href="" class="text-dark">Overtake</a>
                                                        </p>
                                                        <span class="text-muted">14 Nov 2019</span>
                                                    </div>    
                                                </div>
                                            </div> 
                                            <div class="activity-info">
                                                <div class="icon-info-activity">
                                                    <i class="mdi mdi-clipboard-alert bg-soft-info"></i>
                                                </div>
                                                <div class="activity-info-text">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="text-muted mb-0 font-14 w-75"><span class="text-dark font-14">Joseph Rust</span> 
                                                            opened new showcase <a href="" class="text-dark">Mannat #112233</a> with theme market
                                                        </p>
                                                        <span class="text-muted">15 Nov 2019</span>
                                                    </div>    
                                                </div>
                                            </div>                                                                                                                                      
                                        </div><!--end activity-->
                                    </div><!--crypot dash activity-->
                                </div><!--end card-body-->
                            </div><!--end card--><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-6">
                            <div class="card">                                       
                                <div class="card-body"> 
                                    <h4 class="header-title mt-0 mb-3">My Skills</h4>
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="{{ URL::asset('assets/images/widgets/sales-re.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-8 align-self-center">
                                            <p class="skill-detail">Contrary to popular belief, Lorem Ipsum is not simply random text. 
                                                It has roots in a piece of classical Latin literature from 45 BC, 
                                                making it over 2000 years old. Richard McClintock, a Latin professor 
                                                at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="skills mt-4">
                                        <div class="skill-box"> 
                                            <h4 class="skill-title">Replacement</h4> 
                                            <div class="progress-line"> 
                                                <span data-percent="78" style="width: 78%;">
                                                    <span class="percent-tooltip">78%</span>
                                                </span> 
                                            </div>
                                        </div>
                                        <div class="skill-box"> 
                                            <h4 class="skill-title">Complex Problem Solving</h4> 
                                            <div class="progress-line"> 
                                                <span data-percent="90" style="width: 90%;">
                                                    <span class="percent-tooltip">90%</span>
                                                </span> 
                                            </div>
                                        </div>
                                        <div class="skill-box"> 
                                            <h4 class="skill-title">Patient Care Skills</h4> 
                                            <div class="progress-line"> 
                                                <span data-percent="80" style="width: 80%;">
                                                    <span class="percent-tooltip">80%</span>
                                                </span> 
                                            </div>
                                        </div>
                                        <div class="skill-box"> 
                                            <h4 class="skill-title">Scientific Skills</h4> 
                                            <div class="progress-line"> 
                                                <span data-percent="95" style="width: 95%;">
                                                    <span class="percent-tooltip">95%</span>
                                                </span> 
                                            </div>
                                        </div>
                                    </div>
                                </div>  <!--end card-body-->                                     
                            </div><!--end card-->
                        </div><!--end col-->
        
                    </div><!--end row-->

                </div><!-- container -->
@stop
