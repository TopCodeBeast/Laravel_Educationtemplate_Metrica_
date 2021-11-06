@extends('layouts.project-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('headerStyle')
<link href="{{ URL::asset('plugins/lightpick/lightpick.css')}}" rel="stylesheet" />
@stop

@section('content')
 <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            
                                @component('common-components.breadcrumb')
                                 @slot('title') Create Project @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Project @endslot
                                 @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Create Project Form</h4>
                                    <p class="text-muted mb-3">Basic example to create project form styles.</p> 
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form>
                                                <div class="form-group">
                                                    <label for="projectName">Project Name :</label>
                                                    <input type="text" class="form-control" id="projectName" aria-describedby="emailHelp" placeholder="Enter project name">
                                                </div><!--end form-group-->
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-6 mb-2 mb-lg-0">
                                                            <label for="pro-start-date">Project Start Date</label>
                                                            <input type="text" class="form-control" id="pro-start-date" placeholder="Enter start date">
                                                        </div><!--end col-->
                                                        <div class="col-lg-3 col-6 mb-2 mb-lg-0">
                                                            <label for="pro-end-date">Project End Date</label>
                                                            <input type="text" class="form-control" id="pro-end-date" placeholder="Enter end date">
                                                        </div><!--end col-->
                                                        <div class="col-lg-3 col-6">
                                                            <label for="pro-rate">Rate</label>
                                                            <input type="text" class="form-control" id="pro-rate" placeholder="Enter rate">
                                                        </div><!--end col-->
                                                        <div class="col-lg-3 col-6">
                                                            <label for="pro-end-date">Price Type</label>
                                                            <select class="form-control">
                                                                <option>Hourly</option>
                                                                <option>Daily</option>
                                                                <option>Fix</option>
                                                            </select>
                                                        </div><!--end col-->                                                        
                                                    </div><!--end row-->
                                                </div><!--end form-group-->
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-6 mb-2 mb-lg-0">
                                                            <label for="pro-end-date">Required</label>
                                                            <select class="form-control">
                                                                <option>--Select--</option>
                                                                <option>UI/UX Design</option>
                                                                <option>Payment System </option>
                                                                <option>Android 10</option>
                                                            </select>
                                                        </div><!--end col-->
                                                        <div class="col-lg-3 col-6">
                                                            <label for="pro-end-date">Invoice Time</label>
                                                            <select class="form-control">
                                                                <option>30 Day</option>
                                                                <option>3 Month</option>
                                                                <option>1 Year</option>
                                                            </select>
                                                        </div><!--end col-->
                                                        <div class="col-lg-3 col-6">
                                                            <label for="pro-end-date">Priority</label>
                                                            <select class="form-control">
                                                                <option>-- select --</option>
                                                                <option>High</option>
                                                                <option>Medium</option>
                                                                <option>Low</option>                                                                
                                                            </select>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div><!--end form-group-->
                                                <div class="form-group">
                                                    <label for="pro-message">Message</label>
                                                    <textarea class="form-control" rows="5" id="pro-message"  placeholder="writing here.."></textarea>
                                                </div><!--end form-group-->
                                                
                                                <button type="submit" class="btn btn-gradient-primary">Create project</button>
                                                <button type="button" class="btn btn-gradient-danger">Cancel</button>
                                            </form>  <!--end form-->
                                        </div><!--end col-->
                                        <div class="col-lg-5 ml-auto align-self-center">
                                            <form>
                                                <div class="form-group">
                                                    <label for="pro-avatar">Project Avatar</label>
                                                    <img src="{{ URL::asset('assets/images/widgets/project3.jpg')}}" alt="" class="thumb-xl ml-3">
                                                    <button class="btn btn-gradient-primary btn-sm change-avatar ml-3">Change Avatar</button>
                                                    <input id="fileupload" type="file" name="files[]" multiple style='display: none;'>
                                                </div><!--end form-group-->
                                                <h5 class="font-weight-normal my-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised.</h5>
                                                <div class="form-group">
                                                    <label for="team-leader">Project team members</label>
                                                    <div class="img-group ml-3">
                                                        <a class="user-avatar user-avatar-group" href="#">
                                                            <img src="{{ URL::asset('assets/images/users/user-3.jpg')}}" alt="user" class="thumb-md rounded-circle">
                                                        </a>
                                                        <a class="user-avatar user-avatar-group" href="#">
                                                            <img src="{{ URL::asset('assets/images/users/user-5.jpg')}}" alt="user" class="thumb-md rounded-circle">
                                                        </a>
                                                        <a class="user-avatar user-avatar-group" href="#">
                                                            <img src="{{ URL::asset('assets/images/users/user-10.jpg')}}" alt="user" class="thumb-md rounded-circle">
                                                        </a>
                                                        <a class="user-avatar user-avatar-group" href="#">
                                                            <img src="{{ URL::asset('assets/images/users/user-4.jpg')}}" alt="user" class="thumb-md rounded-circle">
                                                        </a>
                                                    </div><!--end img-group-->
                                                    <button type="button" class="btn btn-gradient-primary btn-sm add-member ml-3 px-3">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                    <input id="add-member" type="file" name="files[]" multiple style='display: none;'>
                                                </div><!--end form-group-->
                                            </form>
                                        </div><!--end col-->
                                    </div><!--end row-->                                                                              
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                </div><!-- container -->
@stop

@section('footerScript')
        <script src="{{ URL::asset('plugins/moment/moment.js')}}"></script>
        <script src="{{ URL::asset('plugins/lightpick/lightpick.js')}}"></script>
        <script src="{{ URL::asset('assets/pages/jquery.projects_new.init.js')}}"></script>
        <script>
            $('.change-avatar').on('click', function() { $('#fileupload').click();return false;});
            $('.add-member').on('click', function() { $('#add-member').click();return false;});
        </script>

@stop