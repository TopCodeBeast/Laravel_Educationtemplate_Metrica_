@extends('layouts.master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('headerStyle')
<link href="{{ URL::asset('plugins/summernote/summernote-bs4.css')}}" rel="stylesheet" />
@stop

@section('content')
  <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                             @component('common-components.breadcrumb')
                                 @slot('title') Email Read @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Apps @endslot
                              @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <!-- Left sidebar -->
                            <div class="email-leftbar">
                                <button type="button" class="btn btn-gradient-danger btn-round btn-custom btn-block waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".compose-modal">
                                    <i class="fas fa-feather-alt mr-2"></i>Compose
                                </button>

                                <div class="card mt-3">
                                    <div class="card-body">
                                        <div class="mail-list">
                                            <a href="#" class="active pt-0">Inbox <span class="ml-1">(5)</span></a>
                                            <a href="#">Starred</a>
                                            <a href="#">Important</a>
                                            <a href="#">Draft</a>
                                            <a href="#">Sent Mail</a>
                                            <a href="#">Trash</a>
                                        </div>
        
                                        <h5 class="my-4">Labels</h5>
                                        <div class="mail-list">
                                            <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-info float-right mt-1 mr-1"></span>Theme Support</a>
                                            <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-warning float-right mt-1 mr-1"></span>Freelance</a>
                                            <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-purple float-right mt-1 mr-1"></span>Social</a>
                                            <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-pink float-right mt-1 mr-1"></span>Friends</a>
                                            <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-success float-right mt-1 mr-1"></span>Family</a>
                                        </div>
        
                                        <h5 class="my-4">Chat</h5>
                                        <div class="">
                                            <a href="#" class="media">
                                                <img class="d-flex mr-3 rounded-circle" src="{{ URL::asset('assets/images/users/user-1.jpg')}}" alt="Generic placeholder image" height="36">
                                                <div class="media-body chat-user-box">
                                                    <p class="user-title m-0">Scott Median</p>
                                                    <p class="text-muted">Hello</p>
                                                </div>
                                            </a>
        
                                            <a href="#" class="media">
                                                <img class="d-flex mr-3 rounded-circle" src="{{ URL::asset('assets/images/users/user-2.jpg')}}" alt="Generic placeholder image" height="36">
                                                <div class="media-body chat-user-box">
                                                    <p class="user-title m-0">Julian Rosa</p>
                                                    <p class="text-muted">What about our next..</p>
                                                </div>
                                            </a>
        
                                            <a href="#" class="media">
                                                <img class="d-flex mr-3 rounded-circle" src="{{ URL::asset('assets/images/users/user-3.jpg')}}" alt="Generic placeholder image" height="36">
                                                <div class="media-body chat-user-box">
                                                    <p class="user-title m-0">David Medina</p>
                                                    <p class="text-muted">Yeah everything is fine</p>
                                                </div>
                                            </a>
        
                                            <a href="#" class="media">
                                                <img class="d-flex mr-3 rounded-circle" src="{{ URL::asset('assets/images/users/user-4.jpg')}}" alt="Generic placeholder image" height="36">
                                                <div class="media-body chat-user-box">
                                                    <p class="user-title m-0">Jay Baker</p>
                                                    <p class="text-muted">Wow that's great</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div>
                            <!-- End Left sidebar -->


                            <!-- Right Sidebar -->
                            <div class="email-rightbar">
                                <div class="float-right d-flex justify-content-between">
                                    <div class="btn-group ml-1">
                                        <button type="button" class="btn btn-outline-info waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-question-circle"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Updates</a>
                                            <a class="dropdown-item" href="#">Social</a>
                                            <a class="dropdown-item" href="#">Team Manage</a>
                                        </div>
                                    </div>
                                    <div class="btn-group ml-1">
                                        <button type="button" class="btn btn-outline-info waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-cog"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Display density</a>
                                            <a class="dropdown-item" href="#">Themes</a>
                                            <a class="dropdown-item" href="#">Help</a>
                                        </div>
                                    </div>
                                </div><!-- end div -->
                                <div class="btn-toolbar" role="toolbar">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-outline-info waves-light waves-effect"><i class="fas fa-inbox"></i></button>
                                        <button type="button" class="btn btn-outline-info waves-light waves-effect"><i class="fas fa-exclamation-circle"></i></button>
                                        <button type="button" class="btn btn-outline-info waves-light waves-effect"><i class="fas fa-trash"></i></button>
                                    </div>
                                    <div class="btn-group ml-1">
                                        <button type="button" class="btn btn-outline-info waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-folder"></i><i class="mdi mdi-chevron-down ml-1"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Updates</a>
                                            <a class="dropdown-item" href="#">Social</a>
                                            <a class="dropdown-item" href="#">Team Manage</a>
                                        </div>
                                    </div>
                                    <div class="btn-group ml-1">
                                        <button type="button" class="btn btn-outline-info waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-tag"></i><i class="mdi mdi-chevron-down ml-1"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Updates</a>
                                            <a class="dropdown-item" href="#">Social</a>
                                            <a class="dropdown-item" href="#">Team Manage</a>
                                        </div>
                                    </div>

                                    <div class="btn-group ml-1">
                                        <button type="button" class="btn btn-outline-info waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            More<i class="mdi mdi-chevron-down ml-1"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Mark as Unread</a>
                                            <a class="dropdown-item" href="#">Mark as Important</a>
                                            <a class="dropdown-item" href="#">Add to Tasks</a>
                                            <a class="dropdown-item" href="#">Add Star</a>
                                            <a class="dropdown-item" href="#">Mute</a>
                                        </div>
                                    </div>                                        
                                </div><!-- end toolbar -->


                                <div class="card mt-3">
                                    <div class="card-body">

                                        <div class="media mb-4">
                                            <img class="d-flex mr-3 rounded-circle thumb-md" src="{{ URL::asset('assets/images/users/user-5.jpg')}}" alt="Generic placeholder image">
                                            <div class="media-body align-self-center">
                                                <h4 class="font-14 m-0">Humberto D. Champion</h4>
                                                <small class="text-muted">support@domain.com</small>
                                            </div>
                                        </div>

                                        <h4 class="mt-0">This Week's Top Stories</h4>

                                        <p>Dear Lorem Ipsum,</p>
                                        <p>Praesent dui ex, dapibus eget mauris ut, finibus vestibulum enim. Quisque arcu leo, facilisis in fringilla id, luctus in tortor. Nunc vestibulum est quis orci varius viverra. Curabitur dictum volutpat massa vulputate molestie. In at felis ac velit maximus
                                            convallis.</p>
                                        <p>Sed elementum turpis eu lorem interdum, 🏆sed porttitor eros commodo. Nam eu venenatis tortor, id lacinia diam. Sed aliquam in dui et porta. Sed bibendum orci non tincidunt ultrices. Vivamus fringilla, mi lacinia dapibus condimentum, ipsum urna lacinia
                                            lacus, vel tincidunt mi nibh sit amet lorem.</p>
                                        <p>Sincerly,</p>
                                        <hr/>

                                        <div class="row">
                                            <div class="col-lg-1 col-md-4">
                                                <div class="card">
                                                    <img class="card-img-top img-fluid" src="{{ URL::asset('assets/images/small/sm-1.jpg')}}" alt="Card image cap">
                                                    <div class="py-2 text-center">
                                                        <a href="" class="text-muted">Download<i class="dripicons-download ml-1"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-4">
                                                <div class="card">
                                                    <img class="card-img-top img-fluid" src="{{ URL::asset('assets/images/small/sm-3.jpg')}}" alt="Card image cap">
                                                    <div class="py-2 text-center">
                                                        <a href="" class="text-muted">Download<i class="dripicons-download ml-1"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <a href="#custom-modal" class="btn btn-gradient-primary waves-effect"  data-toggle="modal" data-animation="bounce" data-target=".compose-modal">
                                            <i class="mdi mdi-reply"></i> Reply</a>
                                        <a href="#" class="btn btn-gradient-primary waves-effect">Forward <i class="mdi mdi-share"></i></a>
                                    </div>
                                </div>  
                            </div> <!-- end email-rightbar -->
                        </div><!-- end Col -->
                    </div><!-- End row -->
                </div><!-- container -->
@stop

@section('footerScript')
  <script src="{{ URL::asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
          <script>
            jQuery(document).ready(function(){

                $('.summernote').summernote({
                    height: 320,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });
            });
            
            $('li').click(function () {
                $('input:not(:checked)').parent().parent().parent().removeClass("unread");
                $('input:checked').parent().parent().parent().addClass("unread");
            });
            $('input:checked').parent().parent().parent().addClass("unread");
        </script>   
@stop