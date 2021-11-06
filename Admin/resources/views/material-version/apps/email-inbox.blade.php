@extends('layouts.material-version-master')

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
                                 @slot('title') Cantacts @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Inbox @endslot
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


                                <div class="card my-3">
                                    <ul class="message-list">
                                        <li>                                           
                                            <div class="col-mail col-mail-1">
                                                <div class="checkbox-wrapper-mail">
                                                    <input type="checkbox" id="chk19">
                                                    <label for="chk19" class="toggle"></label>
                                                </div>
                                                <a href="">
                                                    <p class="title">Peter, me (3)</p><span class="star-toggle far fa-star"></span>
                                                </a>                                                     
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="" class="subject">Hello &nbsp;–&nbsp; <span class="teaser">Trip home from 🎉 Colombo has been arranged, then Jenna will come get me from Stockholm. :)</span>
                                                </a>
                                                <div class="date">Mar. 6</div>
                                            </div>                                           
                                        </li>
                                        <li>                                            
                                            <div class="col-mail col-mail-1">
                                                <div class="checkbox-wrapper-mail">
                                                    <input type="checkbox" id="chk20">
                                                    <label for="chk20" class="toggle"></label>
                                                </div>
                                                <a href="">
                                                    <p class="title">me, Susanna (7)</p><span class="star-toggle far fa-star"></span>
                                                </a>                                                   
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="" class="subject"><span class="badge-soft-warning badge mr-2">Freelance</span>Since you asked... and i'm
                                                    inconceivably bored at the train station &nbsp;–&nbsp;
                                                    <span class="teaser">Alright thanks. I'll have to re-book that somehow, i'll get back to you.</span>
                                                </a>
                                                <div class="date">Mar. 6</div>
                                            </div>
                                        </li>

                                        <li>                                            
                                            <div class="col-mail col-mail-1">
                                                <div class="checkbox-wrapper-mail">
                                                    <input type="checkbox" id="chk6">
                                                    <label for="chk6" class="toggle"></label>
                                                </div>
                                                <a href="">
                                                    <p class="title">Web Support Dennis</p><span class="star-toggle far fa-star"></span>
                                                </a>                                                    
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="" class="subject">Re: New mail settings &nbsp;–&nbsp;
                                                    <span class="teaser">Will you answer him asap?</span>
                                                </a>
                                                <div class="date">Mar 7</div>
                                            </div>
                                        </li>
                                        <li>                                           
                                            <div class="col-mail col-mail-1">
                                                <div class="checkbox-wrapper-mail">
                                                    <input type="checkbox" id="chk7">
                                                    <label for="chk7" class="toggle"></label>
                                                </div>
                                                <a href="">
                                                    <p class="title">me, Peter (2)</p><span class="star-toggle far fa-star"></span>
                                                </a>
                                                
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="" class="subject"><span class="badge-soft-info badge mr-2">Support</span>Off on Thursday &nbsp;–&nbsp;
                                                    <span class="teaser">Eff that place, you might as well stay here with us instead! Sent from my iPhone 4 &gt; 4 mar 2014 at 5:55 pm</span>
                                                </a>
                                                <div class="date">Mar 4</div>
                                            </div>                                            
                                        </li>
                                        <li>                                            
                                            <div class="col-mail col-mail-1">
                                                <div class="checkbox-wrapper-mail">
                                                    <input type="checkbox" id="chk8">
                                                    <label for="chk8" class="toggle"></label>
                                                </div>
                                                <a href="">
                                                    <p class="title">Medium</p><span class="star-toggle far fa-star"></span>
                                                </a>                                                    
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="" class="subject"><span class="badge-soft-purple badge mr-2">Social</span>This Week's Top Stories &nbsp;–&nbsp;
                                                    <span class="teaser">Our top pick for you on Medium this week The Man Who Destroyed America’s Ego</span>
                                                </a>
                                                <div class="date">Feb 28</div>
                                            </div>
                                        </li>
                                        <li>                                            
                                            <div class="col-mail col-mail-1">
                                                <div class="checkbox-wrapper-mail">
                                                    <input type="checkbox" id="chk9">
                                                    <label for="chk9" class="toggle"></label>
                                                </div>
                                                <a href="">
                                                    <p class="title">Death to Stock</p><span class="star-toggle far fa-star"></span>
                                                </a>                                                    
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="" class="subject">🎁 Montly High-Res Photos &nbsp;–&nbsp;
                                                    <span class="teaser">To create this month's pack, we hosted a party with local musician Jared Mahone here in Columbus, Ohio.</span>
                                                </a>
                                                <div class="date">Feb 28</div>
                                            </div>
                                        </li>
                                        <li>                                           
                                            <div class="col-mail col-mail-1">
                                                <div class="checkbox-wrapper-mail">
                                                    <input type="checkbox" checked id="chk3">
                                                    <label for="chk3" class="toggle"></label>
                                                </div>
                                                <a href="">
                                                    <p class="title">Randy, me (5)</p><span class="star-toggle fas fa-star text-warning"></span>
                                                </a>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="" class="subject"><span class="badge-soft-success badge mr-2">Family</span>Last pic over my village &nbsp;–&nbsp;
                                                    <span class="teaser">Yeah i'd like that! Do you remember the video you showed me of your train ride between Colombo and Kandy? The one with the mountain view? I would love to see that one again!</span>
                                                </a>
                                                <div class="date">5:01 am</div>
                                            </div>
                                        </li>
                                        <li>                                           
                                            <div class="col-mail col-mail-1">
                                                <div class="checkbox-wrapper-mail">
                                                    <input type="checkbox" id="chk4">
                                                    <label for="chk4" class="toggle"></label>
                                                </div>
                                                <a href="">
                                                    <p class="title">Andrew Zimmer</p><span class="star-toggle far fa-star"></span>
                                                </a>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="" class="subject">Mochila Beta: Subscription Confirmed
                                                    &nbsp;–&nbsp; <span class="teaser">You've been confirmed! Welcome to the ruling class of the inbox. For your records, here is a copy of the information you submitted to us...</span>
                                                </a>
                                                <div class="date">Mar 8</div>
                                            </div>
                                        </li>
                                        <li>                                           
                                            <div class="col-mail col-mail-1">
                                                <div class="checkbox-wrapper-mail">
                                                    <input type="checkbox" id="chk5">
                                                    <label for="chk5" class="toggle"></label>
                                                </div>
                                                <a href="">
                                                    <p class="title">Infinity HR</p><span class="star-toggle far fa-star"></span>
                                                </a>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="" class="subject">Sveriges Hetaste sommarjobb &nbsp;–&nbsp; 👌
                                                    <span class="teaser">Hej Nicklas Sandell! Vi vill bjuda in dig till "First tour 2014", ett rekryteringsevent som erbjuder jobb på 16 semesterorter iSverige.</span>
                                                </a>
                                                <div class="date">Mar 8</div>
                                            </div>
                                        </li>
                                        <li>                                            
                                            <div class="col-mail col-mail-1">
                                                <div class="checkbox-wrapper-mail">
                                                    <input type="checkbox" id="chk10">
                                                    <label for="chk10" class="toggle"></label>
                                                </div>
                                                <a href="">
                                                    <p class="title">Revibe</p><span class="star-toggle far fa-star"></span>
                                                </a>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="" class="subject"><span class="badge-soft-pink badge mr-2">Friends</span>Weekend on Revibe &nbsp;–&nbsp;
                                                    <span class="teaser">Today's Friday and we thought maybe you want some music inspiration for the weekend. Here are some trending tracks and playlists we think you should give a listen!</span>
                                                </a>
                                                <div class="date">Feb 27</div>
                                            </div>
                                        </li>
                                        <li>                                            
                                            <div class="col-mail col-mail-1">
                                                <div class="checkbox-wrapper-mail">
                                                    <input type="checkbox" id="chk11">
                                                    <label for="chk11" class="toggle"></label>
                                                </div>
                                                <a href="">
                                                    <p class="title">Erik, me (5)</p><span class="star-toggle far fa-star"></span>
                                                </a>                                                    
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="" class="subject">Regarding our meeting &nbsp;–&nbsp;
                                                    <span class="teaser">That's great, see you on Thursday!</span>
                                                </a>
                                                <div class="date">Feb 24</div>
                                            </div>
                                        </li>
                                        <li>                                            
                                            <div class="col-mail col-mail-1">
                                                <div class="checkbox-wrapper-mail">
                                                    <input type="checkbox" id="chk12">
                                                    <label for="chk12" class="toggle"></label>
                                                </div>
                                                <a href="">
                                                    <p class="title">KanbanFlow</p><span class="star-toggle far fa-star"></span>
                                                </a>                                                    
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="" class="subject"><span class="badge-soft-purple badge mr-2">Social</span>Task assigned: Clone ARP's website
                                                    &nbsp;–&nbsp; <span class="teaser">You have been assigned 💥 a task by Alex@Work on the board Web.</span>
                                                </a>
                                                <div class="date">Feb 24</div>
                                            </div>                                            
                                        </li>
                                        <li>                                            
                                            <div class="col-mail col-mail-1">
                                                <div class="checkbox-wrapper-mail">
                                                    <input type="checkbox" id="chk13">
                                                    <label for="chk13" class="toggle"></label>
                                                </div>
                                                <a href="">
                                                    <p class="title">Tobias Berggren</p><span class="star-toggle far fa-star"></span>
                                                </a>                                                    
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="" class="subject">Let's go fishing! &nbsp;–&nbsp;
                                                    <span class="teaser">Hey, You wanna join me and Fred at the lake tomorrow? It'll be awesome.</span>
                                                </a>
                                                <div class="date">Feb 23</div>
                                            </div>
                                        </li>
                                        <li>                                           
                                            <div class="col-mail col-mail-1">
                                                <div class="checkbox-wrapper-mail">
                                                    <input type="checkbox" id="chk14">
                                                    <label for="chk14" class="toggle"></label>
                                                </div>
                                                <a href="">
                                                    <p class="title">Charukaw, me (7)</p><span class="star-toggle far fa-star"></span>
                                                </a>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="" class="subject">Hey man &nbsp;–&nbsp; <span class="teaser">Nah man sorry i don't. Should i get it?</span>
                                                </a>
                                                <div class="date">Feb 23</div>
                                            </div>
                                        </li>
                                        <li>                                           
                                            <div class="col-mail col-mail-1">
                                                <div class="checkbox-wrapper-mail">
                                                    <input type="checkbox" checked id="chk15">
                                                    <label for="chk15" class="toggle"></label>
                                                </div>
                                                <a href="">
                                                    <p class="title">me, Peter (5)</p><span class="star-toggle fas fa-star text-warning"></span>
                                                </a>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="" class="subject"><span class="badge-soft-info badge mr-2">Support</span>Home again! &nbsp;–&nbsp; <span class="teaser">That's just perfect! See you tomorrow.</span>
                                                </a>
                                                <div class="date">Feb 21</div>
                                            </div>
                                        </li>
                                        <li>                                           
                                            <div class="col-mail col-mail-1">
                                                <div class="checkbox-wrapper-mail">
                                                    <input type="checkbox" id="chk16">
                                                    <label for="chk16" class="toggle"></label>
                                                </div>
                                                <a href="">
                                                    <p class="title">Stack Exchange</p><span class="star-toggle far fa-star"></span>
                                                </a>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="" class="subject">1 new items in your Stackexchange inbox
                                                    &nbsp;–&nbsp; <span class="teaser">The following items were added to your Stack Exchange global inbox since you last checked it.</span>
                                                </a>
                                                <div class="date">Feb 21</div>
                                            </div>
                                        </li>
                                        <li>                                            
                                            <div class="col-mail col-mail-1">
                                                <div class="checkbox-wrapper-mail">
                                                    <input type="checkbox" id="chk17">
                                                    <label for="chk17" class="toggle"></label>
                                                </div>
                                                <a href="">
                                                    <p class="title">Google Drive Team</p><span class="star-toggle far fa-star"></span>
                                                </a>                                                
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="" class="subject">You can now use your storage in Google
                                                    Drive &nbsp;–&nbsp; <span class="teaser">Hey Nicklas Sandell! Thank you for purchasing extra storage space in Google Drive.</span>
                                                </a>
                                                <div class="date">Feb 20</div>
                                            </div>                                            
                                        </li>
                                        <li>                                            
                                            <div class="col-mail col-mail-1">
                                                <div class="checkbox-wrapper-mail">
                                                    <input type="checkbox" id="chk18">
                                                    <label for="chk18" class="toggle"></label>
                                                </div>
                                                <a href="">
                                                    <p class="title">me, Susanna (11)</p><span class="star-toggle far fa-star"></span>
                                                </a>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="" class="subject">Train/Bus &nbsp;–&nbsp; <span class="teaser">Yes ok, great! I'm not stuck in Stockholm anymore, we're making progress.🏏</span>
                                                </a>
                                                <div class="date">Feb 19</div>
                                            </div>                                            
                                        </li>
                                    </ul>
                                </div> <!-- panel -->

                                <div class="row mb-3">
                                    <div class="col-7 align-self-center">
                                        Showing 1 - 20 of 1,524
                                    </div><!-- end Col -->
                                    <div class="col-5">
                                        <div class="btn-group float-right">
                                            <button type="button" class="btn btn-sm btn-gradient-primary waves-effect mb-0"><i class="fa fa-chevron-left"></i></button>
                                            <button type="button" class="btn btn-sm btn-gradient-primary waves-effect mb-0"><i class="fa fa-chevron-right"></i></button>
                                        </div>
                                    </div><!-- end Col -->
                                </div> <!--end row-->   
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