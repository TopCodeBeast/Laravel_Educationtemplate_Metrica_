@extends('layouts.master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
 <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                               @component('common-components.breadcrumb')
                                 @slot('title') UI Bootstrap @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') UI Kit @endslot
                                 @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <h4 class="mt-0 mb-2 header-title">Jumbotron</h4>
                            <p class="text-muted mb-3">Lightweight, flexible component for showcasing hero unit style content. </p>  
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="jumbotron mb-0 bg-light">
                                        <h1 class="display-4">Hello, world!</h1>
                                        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                                        <hr class="my-4">
                                        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                                        <a class="btn btn-gradient-primary btn-lg" href="#" role="button">Learn more</a>
                                    </div>
                                </div><!--end card-body-->    
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-12">
                            <h4 class="mt-0 mb-2 header-title">Alerts</h4>
                            <p class="text-muted mb-3">Provide contextual feedback messages for typical user 
                                actions with the handful of available and flexible alert messages.
                            </p>  
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="alert alert-secondary border-0" role="alert">
                                        <strong>Well done!</strong> You successfully read this important alert message.
                                    </div>    
                                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true"><i class="mdi mdi-close"></i></span>
                                        </button>
                                        <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                    </div> 
                                    <div class="alert alert-light text-muted mb-0" role="alert">
                                        <h4 class="alert-heading font-18 text-dark">Well done!</h4>
                                        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                                    </div>                             
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="alert alert-outline-purple b-round" role="alert">
                                        <strong>Well done!</strong> You successfully read this important alert message.
                                    </div>
                                    <div class="alert icon-custom-alert alert-outline-pink b-round fade show" role="alert">                                            
                                        <i class="mdi mdi-alert-outline alert-icon"></i>
                                        <div class="alert-text">
                                            <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                        </div>
                                        
                                        <div class="alert-close">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true"><i class="mdi mdi-close text-danger"></i></span>
                                            </button>
                                        </div>
                                    </div>  
                                    <div class="alert icon-custom-alert alert-outline-success alert-success-shadow" role="alert">
                                        <i class="mdi mdi-check-all alert-icon"></i>
                                        <div class="alert-text">
                                            <strong>Well done!</strong> You successfully read this important alert message.
                                        </div>                                            
                                    </div>
                                    <div class="alert alert-outline-warning alert-warning-shadow mb-0 alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true"><i class="mdi mdi-close"></i></span>
                                        </button>
                                        <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                    </div>                                       
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-12">
                            <h4 class="mt-0 mb-2 header-title">Pagination</h4>
                            <p class="text-muted mb-3">Documentation and examples for showing pagination to indicate
                                    a series of related content exists across multiple pages.
                            </p>  
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class="row">   
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
    
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul><!--end pagination-->
                                    </nav><!--end nav-->

                                    <nav aria-label="...">
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul><!--end pagination-->
                                    </nav><!--end nav-->

                                    <nav aria-label="...">
                                        <ul class="pagination pagination-lg mb-0">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul><!--end pagination-->
                                    </nav><!--end nav-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->             
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul><!--end pagination-->
                                    </nav><!--end nav-->
    
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul><!--end pagination-->
                                    </nav><!--end nav-->
    
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-end">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul><!--end pagination-->
                                    </nav><!--end nav-->
                                </div><!--end card-body-->
                            </div><!--end card--> 
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <h4 class="mt-0 mb-2 header-title">Dropdown Outline</h4>
                            <p class="text-muted mb-3">Toggle contextual overlays for displaying lists 
                                of links and more with the Bootstrap dropdown plugin.
                            </p>  
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body"> 
                                    <div class="btn-group mb-4">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Primary <i class="mdi mdi-chevron-down"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group mb-4">
                                        <button type="button" class="btn btn-secondary">Secondary</button>
                                        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span> <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group mb-4">
                                        <button type="button" class="btn btn-danger btn-round dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danger <i class="mdi mdi-chevron-down"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group mb-4">
                                        <button type="button" class="btn btn-dark btn-round">Dark</button>
                                        <button type="button" class="btn btn-dark btn-round dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span> <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div><!-- /btn-group -->   
                                    <div class="d-block my-2">
                                                                            
                                    </div>
                                    <div class="btn-group dropup mb-4 mb-md-0">
                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropup <i class="mdi mdi-chevron-up"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div><!-- /btn-group -->

                                    <div class="btn-group dropright mb-4 mb-md-0">
                                        <button type="button" class="btn btn-info waves-effect waves-light">
                                            Split dropright
                                        </button>
                                        <button type="button" class="btn btn-info waves-effect waves-light dropdown-toggle-split dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropright</span><i class="mdi mdi-chevron-right"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div><!-- /btn-group -->

                                    <div class="btn-group dropleft mb-4 mb-md-0">
                                        <button type="button" class="btn btn-info waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi mdi-chevron-left"></i> Dropleft
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div> <!-- /btn-group -->       
                                    <!-- Split dropright button -->
                                    
                                </div><!--end card-body--> 
                            </div><!--end card-->        
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">   
                                    <div class="btn-group mb-4">
                                        <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Primary <i class="mdi mdi-chevron-down"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group mb-4">
                                        <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Secondary <i class="mdi mdi-chevron-down"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group mb-4">
                                        <button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Success <i class="mdi mdi-chevron-down"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div><!-- /btn-group -->                                            
                                    <div class="btn-group mb-4">
                                        <button type="button" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Warning <i class="mdi mdi-chevron-down"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group mb-4">
                                        <button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info <i class="mdi mdi-chevron-down"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group mb-4">
                                        <button type="button" class="btn btn-outline-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danger <i class="mdi mdi-chevron-down"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div><!-- /btn-group -->
                                    <div class="d-block my-2">
                                        <div class="btn-group mb-4 mb-md-0">
                                            <button type="button" class="btn btn-outline-success">Danger</button>
                                            <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span> <i class="mdi mdi-chevron-down"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div><!-- /btn-group -->
                                        <div class="btn-group mb-4 mb-md-0">
                                            <button type="button" class="btn btn-outline-purple btn-round dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Purple <i class="mdi mdi-chevron-down"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div><!-- /btn-group -->

                                        <div class="btn-group mb-4 mb-md-0">
                                            <button type="button" class="btn btn-outline-pink btn-round">Pink</button>
                                            <button type="button" class="btn btn-outline-pink btn-round dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span> <i class="mdi mdi-chevron-down"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div><!-- /btn-group --> 
                                    </div>        
                                </div><!--end card-body--> 
                            </div><!--end card-->        
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <h4 class="mt-0 mb-2 header-title">Cards</h4>
                            <p class="text-muted mb-3">Bootstrap’s cards provide a flexible and extensible content 
                                container with multiple variants and options.
                            </p>  
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="card card-border">
                                <img class="card-img-top img-fluid bg-light-alt" src="{{ URL::asset('assets/images/small/ex-card.png')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title mt-0">Card title</h4>
                                    <p class="card-text text-muted ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-gradient-primary">Go somewhere</a>   
                                </div><!--end card -body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-md-12 col-xl-4">
                            <div class="card card-border">
                                <div class="card-body">
                                    <h4 class="card-title mt-0">Card title</h4>
                                    <p class="card-subtitle font-14 mb-2">This is the card subtitle</p>
                                    <p class="card-text text-muted">Some quick example text to build on the card title and make up 
                                        the bulk of the card's content.
                                        It is a long established fact that a reader will be distracted by the readable 
                                        content. 
                                    </p>
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div><!--end card -body-->
                            </div><!--end card-->

                            <div class="card card-border">
                                <div class="card-body">
                                    <h4 class="card-title mt-0">Kitchen sink</h4>
                                    <p class="card-text  text-muted ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Cras justo odio</li>
                                </ul>
                                <div class="card-body">
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div><!--end card -body-->
                            </div><!--end card-->                                                                                                   
                        </div><!--end col-->

                        <div class="col-lg-4">
                            <div class="card text-white bg-classic">
                                <div class="card-body">
                                    <blockquote class="card-bodyquote mb-0">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                            erat a ante.</p>
                                        <footer class="blockquote-footer text-white font-14">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                        </footer>
                                    </blockquote>
                                </div><!--end card-body-->
                            </div><!--end card-->                    
                            <div class="card">
                                <h5 class="card-header bg-primary text-white mt-0">Header - Primary</h5>
                                <div class="card-body">
                                    <h4 class="card-title mt-0">Card title</h4>
                                    <p class="card-text text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>                                        
                                </div><!--end card-body-->
                            </div><!--end card--> 
                            <div class="card"> 
                                <h5 class="card-header bg-secondary text-white mt-0">Header - Secondary</h5>                                       
                                <div class="card-body">
                                    <p class="card-text text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>                                        
                                </div><!--end card-body-->
                                <p class="card-footer bg-light m-0">Footer - 2019 Metrica</p>
                            </div><!--end card-->                                   
                        </div><!--end col-->
                    </div><!--end row-->
                    
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card card-body">
                                <h4 class="card-title mt-0">Special title treatment</h4>
                                <p class="card-text text-muted ">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="#" class="btn btn-info">Go somewhere</a>
                            </div><!--end card-->
                        </div><!--end col-->
    
                        <div class="col-lg-4 ">
                            <div class="card card-body text-center">
                                <h4 class="card-title mt-0">Special title treatment</h4>
                                <p class="card-text text-muted ">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="#" class="btn btn-info">Go somewhere</a>
                            </div><!--end card-->
                        </div><!--end col-->
    
                        <div class="col-lg-4">
                            <div class="card card-body text-right">
                                <h4 class="card-title mt-0">Special title treatment</h4>
                                <p class="card-text text-muted ">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="#" class="btn btn-info">Go somewhere</a>
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                    
                    <div class="row">
                        <div class="col-12">
                            <h4 class="mt-0 mb-2 header-title">Modals</h4>
                            <p class="text-muted mb-3">Modals are streamlined, but flexible
                                dialog prompts powered by JavaScript. They support a number of use cases
                                from user notification to completely custom content and feature a
                                handful of helpful subcomponents, sizes, and more.
                            </p>  
                            <div class="card">
                                <div class="card-body">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Size</th>
                                                <th>Class</th>
                                                <th>Modal max-width</th>
                                                <th>Modal Button</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Small</td>
                                                <td><code>.modal-sm</code></td>
                                                <td><code>300px</code></td>
                                                <td>
                                                    <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-sm">Small modal</button>
                                                    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title mt-0" id="mySmallModalLabel">Small modal</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Cras mattis consectetur purus sit amet fermentum.
                                                                        Cras justo odio, dapibus ac facilisis in,
                                                                        egestas eget quam. Morbi leo risus, porta ac
                                                                        consectetur ac, vestibulum at eros.</p>
                                                                    <p>Praesent commodo cursus magna, vel scelerisque
                                                                        nisl consectetur et. Vivamus sagittis lacus vel
                                                                        augue laoreet rutrum faucibus dolor auctor.</p>
                                                                    <p>Aenean lacinia bibendum nulla sed consectetur.
                                                                        Praesent commodo cursus magna, vel scelerisque
                                                                        nisl consectetur et. Donec sed odio dui. Donec
                                                                        ullamcorper nulla non metus auctor
                                                                        fringilla.</p>
                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div><!-- /.modal -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Default</td>
                                                <td class="text-muted">None</td>
                                                <td><code>500px</code></td>
                                                <td>
                                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                                                            Default modal
                                                    </button>
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title mt-0" id="exampleModalLabel">Modal title</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Praesent commodo cursus magna, vel scelerisque
                                                                    nisl consectetur et. Vivamus sagittis lacus vel
                                                                    augue laoreet rutrum faucibus dolor auctor.</p>
                                                                <p>Aenean lacinia bibendum nulla sed consectetur.
                                                                    Praesent commodo cursus magna, vel scelerisque
                                                                    nisl consectetur et. Donec sed odio dui. Donec
                                                                    ullamcorper nulla non metus auctor
                                                                    fringilla.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Large</td>
                                                <td><code>.modal-lg</code></td>
                                                <td><code>800px</code></td>
                                                <td>
                                                    <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">Large modal</button>
                                                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Large modal</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Cras mattis consectetur purus sit amet fermentum.
                                                                        Cras justo odio, dapibus ac facilisis in,
                                                                        egestas eget quam. Morbi leo risus, porta ac
                                                                        consectetur ac, vestibulum at eros.</p>
                                                                    <p>Praesent commodo cursus magna, vel scelerisque
                                                                        nisl consectetur et. Vivamus sagittis lacus vel
                                                                        augue laoreet rutrum faucibus dolor auctor.</p>
                                                                    <p>Aenean lacinia bibendum nulla sed consectetur.
                                                                        Praesent commodo cursus magna, vel scelerisque
                                                                        nisl consectetur et. Donec sed odio dui. Donec
                                                                        ullamcorper nulla non metus auctor
                                                                        fringilla.</p>
                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div><!-- /.modal -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Extra large</td>
                                                <td><code>.modal-xl</code></td>
                                                <td><code>1140px</code></td>
                                                <td>
                                                    <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target=".bd-example-modal-xl">Extra large modal</button>
                                                    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog modal-xl">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title mt-0" id="myModalLabel">Modal Heading</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5 class="mt-0">Overflowing text to show scroll behavior</h5>
                                                                    <p>Cras mattis consectetur purus sit amet fermentum.
                                                                        Cras justo odio, dapibus ac facilisis in,
                                                                        egestas eget quam. Morbi leo risus, porta ac
                                                                        consectetur ac, vestibulum at eros.</p>
                                                                    <p>Praesent commodo cursus magna, vel scelerisque
                                                                        nisl consectetur et. Vivamus sagittis lacus vel
                                                                        augue laoreet rutrum faucibus dolor auctor.</p>
                                                                    <p>Aenean lacinia bibendum nulla sed consectetur.
                                                                        Praesent commodo cursus magna, vel scelerisque
                                                                        nisl consectetur et. Donec sed odio dui. Donec
                                                                        ullamcorper nulla non metus auctor
                                                                        fringilla.</p>
                                                                    <p>Cras mattis consectetur purus sit amet fermentum.
                                                                        Cras justo odio, dapibus ac facilisis in,
                                                                        egestas eget quam. Morbi leo risus, porta ac
                                                                        consectetur ac, vestibulum at eros.</p>
                                                                    <p>Praesent commodo cursus magna, vel scelerisque
                                                                        nisl consectetur et. Vivamus sagittis lacus vel
                                                                        augue laoreet rutrum faucibus dolor auctor.</p>
                                                                    <p>Aenean lacinia bibendum nulla sed consectetur.
                                                                        Praesent commodo cursus magna, vel scelerisque
                                                                        nisl consectetur et. Donec sed odio dui. Donec
                                                                        ullamcorper nulla non metus auctor
                                                                        fringilla.</p>
                                                                    <p>Cras mattis consectetur purus sit amet fermentum.
                                                                        Cras justo odio, dapibus ac facilisis in,
                                                                        egestas eget quam. Morbi leo risus, porta ac
                                                                        consectetur ac, vestibulum at eros.</p>
                                                                    <p>Praesent commodo cursus magna, vel scelerisque
                                                                        nisl consectetur et. Vivamus sagittis lacus vel
                                                                        augue laoreet rutrum faucibus dolor auctor.</p>
                                                                    <p>Aenean lacinia bibendum nulla sed consectetur.
                                                                        Praesent commodo cursus magna, vel scelerisque
                                                                        nisl consectetur et. Donec sed odio dui. Donec
                                                                        ullamcorper nulla non metus auctor
                                                                        fringilla.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div><!-- /.modal -->  
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Center Modal</td>
                                                <td><code>.modal-center</code></td>
                                                <td> - </td>
                                                <td>
                                                    <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-center">Center modal</button>
                                                    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title mt-0" id="exampleModalLabel">Modal title</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Cras mattis consectetur purus sit amet fermentum.
                                                                        Cras justo odio, dapibus ac facilisis in,
                                                                        egestas eget quam. Morbi leo risus, porta ac
                                                                        consectetur ac, vestibulum at eros.</p>
                                                                    <p>Praesent commodo cursus magna, vel scelerisque
                                                                        nisl consectetur et. Vivamus sagittis lacus vel
                                                                        augue laoreet rutrum faucibus dolor auctor.</p>
                                                                    <p>Aenean lacinia bibendum nulla sed consectetur.
                                                                        Praesent commodo cursus magna, vel scelerisque
                                                                        nisl consectetur et. Donec sed odio dui. Donec
                                                                        ullamcorper nulla non metus auctor
                                                                        fringilla.
                                                                    </p>
                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div><!-- /.modal -->
                                                </td>
                                            </tr><!--end tr-->
                                        </tbody><!--end tbody-->
                                    </table><!--end table-->
                                </div><!--end card-body-->    
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                    
                    <div class="row">
                        <div class="col-12">
                            <h4 class="mt-0 mb-2 header-title">Buttons</h4>
                            <p class="text-muted mb-3">Bootstrap includes six predefined button styles, 
                                each serving its own semantic purpose.
                            </p>  
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="button-items mb-4">
                                        <button type="button" class="btn btn-primary waves-effect waves-light">Primary</button>
    
                                        <button type="button" class="btn btn-secondary waves-effect">Secondary</button>
    
                                        <button type="button" class="btn btn-success waves-effect waves-light">Success</button>
    
                                        <button type="button" class="btn btn-warning waves-effect waves-light">Warning</button>

                                        <button type="button" class="btn btn-info waves-effect waves-light">Info</button>
    
                                        <button type="button" class="btn btn-danger waves-effect waves-light">Danger</button>
    
                                        <button type="button" class="btn btn-dark waves-effect waves-light">Dark</button>

                                        <button type="button" class="btn btn-light waves-effect waves-light">Light</button>
    
                                        <button type="button" class="btn btn-link waves-effect">Link</button>
                                    </div>
                                    
                                    
                                        
                                    <div class="button-items mb-4">

                                        <button type="button" class="btn btn-blue btn-square waves-effect waves-light"><i class="mdi mdi-check-all mr-2"></i>Blue</button>

                                        <button type="button" class="btn btn-secondary btn-round waves-effect waves-light"><i class="mdi mdi-check-all mr-2"></i>secondary</button>                                         

                                        <button type="button" class="btn btn-success btn-square btn-skew waves-effect waves-light"><span><i class="mdi mdi-check-all mr-2"></i>Success</span></button> 
                                        
                                        <button type="button" class="btn btn-info btn-square btn-outline-dashed waves-effect waves-light"><i class="mdi mdi-check-all mr-2"></i>Info</button>

                                        <button type="button" class="btn btn-purple waves-effect waves-light"><i class="mdi mdi-alert-outline mr-2"></i>Purple</button>
    
                                        <button type="button" class="btn btn-soft-pink btn-round waves-effect waves-light"><i class="mdi mdi-power mr-2"></i>Pink</button>

                                        <button type="button" class="btn btn-soft-warning btn-square waves-effect waves-light"><i class="mdi mdi-refresh mr-2"></i>Warning</button>
                                        
                                    </div> 

                                    <div class="button-items mb-4">
                                        <button type="button" class="btn btn-outline-primary waves-effect waves-light">Primary</button>

                                        <button type="button" class="btn btn-outline-secondary waves-effect">Secondary</button>

                                        <button type="button" class="btn btn-outline-success waves-effect waves-light">Success</button>

                                        <button type="button" class="btn btn-outline-info waves-effect waves-light">Info</button>

                                        <button type="button" class="btn btn-outline-warning waves-effect waves-light">Warning</button>

                                        <button type="button" class="btn btn-outline-danger waves-effect waves-light">Danger</button>

                                        <button type="button" class="btn btn-outline-dark waves-effect waves-light">Dark</button>

                                        <button type="button" class="btn btn-outline-light waves-effect waves-light">Light</button>
                                    </div>
                                    <div class="button-items mb-4"> 

                                        <button type="button" class="btn btn-outline-purple btn-round waves-effect waves-light"><i class="mdi mdi-email-outline mr-2"></i>Purple</button>

                                        <button type="button" class="btn btn-outline-pink waves-effect waves-light"><i class="mdi mdi-send mr-2"></i>Pink</button>

                                        <button type="button" class="btn btn-outline-primary btn-square btn-skew waves-effect waves-light"><span><i class="mdi mdi-power mr-2"></i>Primary</span></button>

                                        <button type="button" class="btn btn-outline-blue btn-square waves-effect waves-light"><i class="mdi mdi-check-all mr-2"></i>Blue</button>

                                    </div>
                                    <div class="button-list btn-social-icon mb-4">
                                        <button type="button" class="btn btn-primary">
                                            <i class="fab fa-facebook-f"></i>
                                        </button>

                                        <button type="button" class="btn btn-secondary btn-circle">
                                            <i class="fab fa-twitter"></i>
                                        </button>               

                                        <button type="button" class="btn btn-outline-pink">
                                            <i class="fab fa-dribbble"></i>
                                        </button>

                                        <button type="button" class="btn btn-outline-info btn-round">
                                            <i class="fab fa-linkedin"></i>
                                        </button>                            
                                    </div>  
                                    <div class="button-items">
                                        <button type="button" class="btn btn-gradient-primary waves-effect waves-light">Primary</button>
    
                                        <button type="button" class="btn btn-gradient-secondary waves-effect">Secondary</button>
    
                                        <button type="button" class="btn btn-gradient-success waves-effect waves-light">Success</button>
    
                                        <button type="button" class="btn btn-gradient-info waves-effect waves-light">Info</button>
    
                                        <button type="button" class="btn btn-gradient-warning waves-effect waves-light">Warning</button>
    
                                        <button type="button" class="btn btn-gradient-danger waves-effect waves-light">Danger</button>

                                        <button type="button" class="btn btn-gradient-purple waves-effect waves-light">Purple</button>

                                        <button type="button" class="btn btn-gradient-pink waves-effect waves-light">Pink</button>
    
                                        <button type="button" class="btn btn-gradient-dark waves-effect waves-light">Dark</button>

                                    </div>                                                                   
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">                                    
                                    <div class="button-items mb-4">
                                        <button type="button" class="btn btn-outline-light btn-xl">Extra Large</button>
                                        <button type="button" class="btn btn-outline-light btn-sm">Small button</button>
                                        <button type="button" class="btn btn-outline-light btn-xs">Extra Small</button>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="btn-group mb-4 d-block" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-outline-light"><i class="fa fa-align-left"></i></button>
                                                <button type="button" class="btn btn-outline-light"><i class="fa fa-align-center"></i></button>
                                                <button type="button" class="btn btn-outline-light"><i class="fa fa-align-right"></i></button>
                                            </div> 
                                            <div class="btn-group mb-4" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-outline-light">Left</button>
                                                <button type="button" class="btn btn-outline-light">Middle</button>
                                                <button type="button" class="btn btn-outline-light">Right</button>
                                            </div> 
                                        </div><!--end col-->
                                        <div class="col-lg-6">
                                            <div class="btn-group btn-group-toggle mb-4" data-toggle="buttons">
                                                <label class="btn btn-outline-secondary active">
                                                    <input type="checkbox" checked=""> Active
                                                </label>
                                                <label class="btn btn-outline-secondary">
                                                    <input type="checkbox"> Check
                                                </label>
                                                <label class="btn btn-outline-secondary">
                                                    <input type="checkbox"> Check
                                                </label>
                                            </div>

                                            <div class="btn-group btn-group-toggle mb-4" data-toggle="buttons">
                                                <label class="btn btn-outline-secondary active">
                                                    <input type="radio" name="options" id="option1" checked=""> Active
                                                </label>
                                                <label class="btn btn-outline-secondary">
                                                    <input type="radio" name="options" id="option2"> Radio
                                                </label>
                                                <label class="btn btn-outline-secondary">
                                                    <input type="radio" name="options" id="option3"> Radio
                                                </label>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <div class="btn-group-vertical">    
                                                    <button type="button" class="btn btn-outline-light">Button 1</button>
                                                    <button type="button" class="btn btn-outline-light">Button 2</button>
                                                    <button type="button" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Button 3 <span class="caret"></span> </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                                    </div>
                                                </div>
                                            </div>                                                    
                                        </div><!--end col-->
                                        <div class="col-lg-6">
                                            
                                            <div class="mb-4">
                                                <div class="btn-group" aria-label="Basic example" role="group">
                                                    <button type="button" class="btn btn-outline-secondary"><i class="mdi mdi-play"></i></button>
                                                    <button type="button" class="btn btn-outline-secondary active"><i class="mdi mdi-pause"></i></button>
                                                    <button type="button" class="btn btn-outline-secondary"><i class="mdi mdi-stop"></i></button>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="mb-4">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-outline-secondary">1</button>
                                                    <button type="button" class="btn btn-outline-secondary">2</button>
                                                    <button type="button" class="btn btn-outline-secondary active">3</button>
                                                    <button type="button" class="btn btn-outline-secondary">4</button>
                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-outline-secondary">5</button>
                                                    <button type="button" class="btn btn-outline-secondary active">6</button>
                                                    <button type="button" class="btn btn-outline-secondary">7</button>
                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-outline-secondary">8</button>
                                                </div>                
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row--> 
                                    <div class="button-items">
                                        <button type="button" class="btn btn-info btn-lg btn-block">Block level button</button>
                                    </div>
                                </div><!--end card-body-->    
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                    

                    

                    <div class="row">
                        <div class="col-12">
                            <h4 class="mt-0 mb-2 header-title">Carousel</h4>
                            <p class="text-muted mb-3">A slideshow component for cycling through 
                                elements—images or slides of text—like a carousel.
                            </p>  
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body"> 
    
                                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="3000">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img class="d-block img-fluid" src="{{ URL::asset('assets/images/small/img-1.jpg')}}" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="{{ URL::asset('assets/images/small/img-2.jpg')}}" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="{{ URL::asset('assets/images/small/img-3.jpg')}}" alt="Third slide">
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->    
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
    
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img class="d-block img-fluid" src="{{ URL::asset('assets/images/small/img-4.jpg')}}" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="{{ URL::asset('assets/images/small/img-5.jpg')}}" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="{{ URL::asset('assets/images/small/img-6.jpg')}}" alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
    
                                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                 <img class="d-block img-fluid" src="{{ URL::asset('assets/images/small/img-7.jpg')}}" alt="Third slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="{{ URL::asset('assets/images/small/img-3.jpg')}}" alt="Third slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="{{ URL::asset('assets/images/small/img-1.jpg')}}" alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div> <!-- end row --> 

                    

                    <div class="row">
                        <div class="col-12">
                            <h4 class="mt-0 mb-2 header-title">Tabs & Accordions</h4>
                            <p class="text-muted mb-3">Documentation and examples for how to use Bootstrap’s included navigation components.
                                Toggle the visibility of content across your project with a few classes and our JavaScript plugins.
                            </p>  
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="card-body">
    
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Profile</a>
                                        </li>                                                
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a>
                                        </li>
                                    </ul>
    
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active p-3" id="home" role="tabpanel">
                                            <p class="mb-0 text-muted">
                                                Raw denim you probably haven't heard of them jean shorts Austin.
                                            </p>
                                        </div>
                                        <div class="tab-pane p-3" id="profile" role="tabpanel">
                                            <p class="mb-0 text-muted">
                                                Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                                single-origin coffee squid. 
                                            </p>
                                        </div>                                                
                                        <div class="tab-pane p-3" id="settings" role="tabpanel">
                                            <p class="text-muted mb-0">
                                                Trust fund seitan letterpress, keytar raw denim keffiyeh etsy.
                                            </p>
                                        </div>
                                    </div>        
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
    
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-pills nav-justified" role="tablist">
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link active" data-toggle="tab" href="#home-1" role="tab">Home</a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link" data-toggle="tab" href="#profile-1" role="tab">Profile</a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link" data-toggle="tab" href="#settings-1" role="tab">Settings</a>
                                        </li>
                                    </ul>
    
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active p-3" id="home-1" role="tabpanel">
                                            <p class="text-muted mb-0">
                                                Raw denim you probably haven't heard of them jean shorts Austin.
                                            </p>
                                        </div>
                                        <div class="tab-pane p-3" id="profile-1" role="tabpanel">
                                            <p class="text-muted mb-0">
                                                Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                                single-origin coffee squid. 
                                            </p>
                                        </div>
                                        <div class="tab-pane p-3" id="settings-1" role="tabpanel">
                                            <p class="text-muted mb-0">
                                                Trust fund seitan letterpress, keytar raw denim keffiyeh etsy.
                                            </p>
                                        </div>
                                    </div>    
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                   
    
                    <!-- Collapse -->
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <a class="nav-link waves-effect waves-light active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                                                <a class="nav-link waves-effect waves-light" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                                                <a class="nav-link waves-effect waves-light" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="tab-content mo-mt-2" id="v-pills-tabContent">
                                                <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                    <p class="text-muted mb-0">
                                                        Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                                                        art party before they sold out master cleanse gluten-free squid
                                                        scenester freegan cosby sweater. Fanny pack portland seitan DIY,
                                                        art party locavore wolf cliche high life echo park Austin. Cred
                                                        vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                                                        farm-to-table VHS viral locavore cosby sweater.
                                                    </p>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                    <p class="text-muted mb-0">
                                                        Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin
                                                        coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next
                                                        level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                                                        booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco
                                                            ad vinyl cillum PBR. Homo nostrud organic.
                                                    </p>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                    <p class="text-muted mb-0">
                                                        Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin
                                                        coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next
                                                        level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                                                        booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco
                                                            ad vinyl cillum PBR. 
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                            <div class="card">
                                <div class="card-body">    
                                    <p>
                                        <a class="btn btn-secondary mb-2 mb-lg-0" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                            Link with href
                                        </a>
                                        <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                            Button with data-target
                                        </button>
                                    </p>
                                    <div class="collapse show" id="collapseExample">
                                        <div class="card mb-0 card-body">
                                            <p class="mb-0 text-muted">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p> 
                                        </div>
                                    </div>    
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
    
                        <div class="col-md-12 col-lg-12 col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card border mb-1 shadow-none">
                                            <div class="card-header" id="headingOne">
                                                <a href="" class="text-dark" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Collapsible Group Item #1
                                                </a>
                                            </div>
                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">
                                                <p class="mb-0 text-muted">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                                </p> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-1 border shadow-none">
                                            <div class="card-header" id="headingTwo">
                                                <a href="" class="collapsed text-dark" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Collapsible Group Item #2
                                                </a>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <p class="mb-0 text-muted">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                                    </p> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-0 border shadow-none">
                                            <div class="card-header" id="headingThree">
                                                <a href="" class="collapsed text-dark" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Collapsible Group Item #3
                                                </a>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <p class="mb-0 text-muted">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                                    </p> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row--> 
                    
                    <div class="row">
                        <div class="col-12">
                            <h4 class="mt-0 mb-2 header-title">Progress</h4>
                            <p class="text-muted mb-3">Documentation and examples for using Bootstrap custom progress bars 
                                featuring support for stacked bars, animated backgrounds, and text labels.
                            </p>  
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">       
                                    
                                    <div class="progress mb-4" style="height: 3px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                    </div>
                                    <div class="progress mb-4" style="height: 12px;">
                                        <div class="progress-bar  progress-bar-striped progress-bar-animated bg-secondary" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">15%</div>
                                        <div class="progress-bar progress-bar-striped bg-secondary" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">15%</div>
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">15%</div>
                                    </div>

                                    <div class="progress" style="height: 24px;">
                                        <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">       
                                    
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 d-flex justify-content-center">                                                
                                            <div class="progress progress-vertical my-3" style="height: 8px;">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="height: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress progress-vertical my-3" style="height: 8px;">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" role="progressbar" style="height: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress progress-vertical my-3" style="height: 8px;">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="height: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>                                                
                                        </div><!--end col-->

                                        <div class="col-md-4 col-sm-12 d-flex justify-content-center">
                                            <div class="progress progress-vertical-bottom my-3" style="height: 8px;">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="height: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress progress-vertical-bottom my-3" style="height: 8px;">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" role="progressbar" style="height: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress progress-vertical-bottom my-3" style="height: 8px;">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="height: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-md-4 col-sm-12 d-flex justify-content-center">
                                            <div class="progress progress-vertical-bottom my-3" style="width: 30px;">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" role="progressbar" style="height: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            
                                            <div class="progress progress-vertical-bottom my-3" style="width: 30px;">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="height: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->    
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-12">
                            <h4 class="mt-0 mb-2 header-title">Bootstrap Tooltips & Popovers</h4>
                            <p class="text-muted mb-3">Documentation and examples for how to use Bootstrap’s included navigation components.
                                Toggle the visibility of content across your project with a few classes and our JavaScript plugins.
                            </p>  
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
    
                                    <button type="button" class="btn btn-outline-light uitooltip" data-toggle="tooltip" data-placement="top" title="Tooltip-top">
                                        Tooltip on top
                                    </button>
                                    <button type="button" class="btn btn-outline-light" data-toggle="tooltip" data-placement="right"  data-trigger="hover" title="Tooltip-right">
                                        Tooltip on right
                                    </button>
                                    <button type="button" class="btn btn-outline-light" data-toggle="tooltip" data-placement="bottom" title="Tooltip-bottom">
                                        Tooltip on bottom
                                    </button>
                                    <button type="button" class="btn btn-outline-light" data-toggle="tooltip" data-placement="left" title="Tooltip-left">
                                        Tooltip on left
                                    </button>                                     
                                </div>
                            </div>
                        </div> <!-- end col -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">    
                                    <button type="button" class="btn btn-outline-light waves-effect mo-mb-2" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                        Popover-top
                                    </button>
    
                                    <button type="button" class="btn btn-outline-light waves-effect mo-mb-2" data-container="body" data-toggle="popover" data-placement="right"  data-trigger="hover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                        Popover-right
                                    </button>
    
                                    <button type="button" class="btn btn-outline-light waves-effect mo-mb-2"
                                            data-container="body" data-toggle="popover" title="Popover Title" data-placement="bottom"
                                            data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                        Popover-bottom
                                    </button>
    
                                    <button type="button" class="btn btn-outline-light waves-effect mo-mb-2" data-container="body" data-toggle="popover" data-placement="left" title="Popover Title" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                        Popover-left
                                    </button>
    
                                    <button type="button" tabindex="0" class="btn btn-info waves-effect" data-toggle="popover" data-trigger="focus" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="Dismissible popover">
                                            Dismissible popover
                                        </button>
                                </div>
                            </div>
                        </div> <!-- end col -->                        
                    </div> <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <h4 class="mt-0 mb-2 header-title">Toasts</h4>
                            <p class="text-muted mb-3">Push notifications to your visitors with a toast,
                                    a lightweight and easily customizable alert message.
                            </p>  
                        </div> <!-- end col -->
                    </div> <!-- end row -->    
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body"> 
                                    <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast">
                                        <div class="toast-header">
                                            <i class="mdi mdi-circle-slice-8 font-18 mr-1 text-primary"></i>
                                            <h5 class="mr-auto">Metrica</h5>
                                            <small>11 mins ago</small>
                                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="toast-body">
                                            Hello, world! This is a toast message.
                                        </div>
                                    </div> <!--end toast-->   
                                    <div class="bg-light p-3">
                                        <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center" style="min-height: 200px;">

                                            <!-- Then put toasts within -->
                                            <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast">
                                                <div class="toast-header">
                                                <i class="mdi mdi-circle-slice-8 font-18 mr-1 text-secondary"></i>
                                                <strong class="mr-auto">Metrica</strong>
                                                <small>11 mins ago</small>
                                                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="toast-body">
                                                Hello, world! This is a toast message.
                                                </div>
                                            </div> <!--end toast-->
                                        </div>
                                    </div> <!--end div-->                                                                          
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">  
                                    <div class="bg-light p-3">
                                        <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
                                            <!-- Position it -->
                                            <div style="position: absolute; top: 0; right: 0;">
                                            
                                                <!-- Then put toasts within -->
                                                <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast">
                                                    <div class="toast-header">
                                                        <i class="mdi mdi-circle-slice-8 font-18 mr-1 text-warning"></i>
                                                        <strong class="mr-auto">Metrica</strong>
                                                        <small class="text-muted">just now</small>
                                                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="toast-body">
                                                        See? Just like this.
                                                    </div>
                                                </div> <!--end toast-->
                                            
                                                <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast">
                                                    <div class="toast-header">
                                                        <i class="mdi mdi-circle-slice-8 font-18 mr-1 text-info"></i>
                                                        <strong class="mr-auto">Metrica</strong>
                                                        <small class="text-muted">2 seconds ago</small>
                                                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="toast-body">
                                                        Heads up, toasts will stack automatically
                                                    </div>
                                                </div> <!--end toast-->
                                            </div>
                                        </div>                                            
                                    </div> <!--end /div-->                                                                                 
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->                                 
                    </div> <!-- end row -->
                     
                    
                    <div class="row">
                        <div class="col-12">
                            <h4 class="mt-0 mb-2 header-title">Spinner</h4>
                            <p class="text-muted mb-3">Indicate the loading state of a component or page with Bootstrap spinners, 
                                built entirely with HTML, CSS, and no JavaScript.
                            </p>  
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="spinner-border text-primary" role="status"></div>
                                    <div class="spinner-border text-blue" role="status"></div>
                                    <div class="spinner-border text-secondary" role="status"></div>
                                    <div class="spinner-border text-success" role="status"></div>
                                    <div class="spinner-border text-danger" role="status"></div>
                                    <div class="spinner-border text-warning" role="status"></div>
                                    <div class="spinner-border text-info" role="status"></div>
                                    <div class="spinner-border text-pink" role="status"></div>
                                    <div class="spinner-border text-purple" role="status"></div>
                                    <div class="spinner-border text-light" role="status"></div>
                                    <div class="spinner-border text-dark" role="status"></div>  
                                </div><!--end card-body-->
                            </div><!--end card-->
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="spinner-border thumb-md text-primary" role="status"></div>
                                            <div class="spinner-border thumb-md text-secondary" role="status"></div>
                                        </div><!-- end col -->
                                        
                                        <div class="col-lg-4 align-self-center">
                                            <div class="spinner-border text-primary" role="status"></div>
                                            <div class="spinner-border text-secondary" role="status"></div>
                                        </div><!-- end col -->
                
                                        <div class="col-lg-4 align-self-center">
                                            <div class="spinner-border spinner-border-sm" role="status"></div>
                                            <div class="spinner-grow spinner-grow-sm" role="status"></div>
                                        </div><!-- end col -->                                            
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">  
                                    <div class="spinner-grow text-primary" role="status"></div>
                                    <div class="spinner-grow text-secondary" role="status"></div>
                                    <div class="spinner-grow text-success" role="status"></div>
                                    <div class="spinner-grow text-danger" role="status"></div>
                                    <div class="spinner-grow text-warning" role="status"></div>
                                    <div class="spinner-grow text-info" role="status"></div>
                                    <div class="spinner-grow text-pink" role="status"></div>
                                    <div class="spinner-grow text-purple" role="status"></div>
                                    <div class="spinner-grow text-light" role="status"></div>
                                    <div class="spinner-grow text-dark" role="status"></div>
                                </div><!--end card-body-->
                            </div><!--end card-->

                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <button class="btn btn-gradient-primary" type="button" disabled>
                                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="sr-only">Loading...</span>
                                            </button>
                                            <button class="btn btn-gradient-primary" type="button" disabled>
                                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                Loading...
                                            </button>                                                         
                                        </div><!-- end col -->
                                        <div class="col-lg-6">
                                            <button class="btn btn-gradient-primary" type="button" disabled>
                                                <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> <span class="sr-only">Loading...</span>
                                            </button>
                                            <button class="btn btn-gradient-primary" type="button" disabled>
                                                <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                                Loading...
                                            </button>
                                        </div><!-- end col -->
                                    </div> <!-- end row -->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <h4 class="mt-0 mb-2 header-title">Grid Option</h4>
                            <p class="text-muted mb-3">See how aspects of the Bootstrap grid system work 
                                across multiple devices with a handy table.
                            </p>  
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
    
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-centered">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th class="text-center">
                                                    Extra small<br>
                                                    <small>&lt;576px</small>
                                                </th>
                                                <th class="text-center">
                                                    Small<br>
                                                    <small>≥576px</small>
                                                </th>
                                                <th class="text-center">
                                                    Medium<br>
                                                    <small>≥768px</small>
                                                </th>
                                                <th class="text-center">
                                                    Large<br>
                                                    <small>≥992px</small>
                                                </th>
                                                <th class="text-center">
                                                    Extra large<br>
                                                    <small>≥1200px</small>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Grid behavior</th>
                                                <td>Horizontal at all times</td>
                                                <td colspan="4">Collapsed to start, horizontal above breakpoints</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Max container width</th>
                                                <td>None (auto)</td>
                                                <td>540px</td>
                                                <td>720px</td>
                                                <td>960px</td>
                                                <td>1140px</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Class prefix</th>
                                                <td><code>.col-</code></td>
                                                <td><code>.col-sm-</code></td>
                                                <td><code>.col-md-</code></td>
                                                <td><code>.col-lg-</code></td>
                                                <td><code>.col-xl-</code></td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row"># of columns</th>
                                                <td colspan="5">12</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Gutter width</th>
                                                <td colspan="5">20px (10px on each side of a column)</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Nestable</th>
                                                <td colspan="5">Yes</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Offsets</th>
                                                <td colspan="5">Yes</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Column ordering</th>
                                                <td colspan="5">Yes</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->        
                    </div> <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <h4 class="mt-0 mb-2 header-title">Typography</h4>
                            <p class="text-muted mb-3">Documentation and examples for Bootstrap typography, 
                                including global settings, headings, body text, lists, and more.
                            </p>  
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <span class="float-right text-muted font-weight-normal">Normal / 400</span>
                                            <h1 class="font-54 font-weight-normal mt-0 mb-4">Aa</h1>
                                            <h5 class="mb-0 font-weight-normal">Metrica</h5>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->
                                
                                <div class="col-lg-6">
                                    <div class="card ">
                                        <div class="card-body">
                                            <span class="float-right text-muted font-weight-bold">Bold / 700</span>
                                            <h1 class="font-54 font-weight-bold mt-0 mb-4">Aa</h1>
                                            <h5 class="mb-0 font-weight-bold">Metrica</h5>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->
                            </div><!--end row-->
                                        
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0">Heading </h4> 
                                    <p class="text-muted mb-4">All HTML headings, 
                                        <code class="highlighter-rouge">&lt;h1&gt;</code> through 
                                        <code class="highlighter-rouge">&lt;h6&gt;</code>, are available.
                                    </p>   
                                    <h1>h1. Bootstrap heading</h1>
                                    <h2>h2. Bootstrap heading</h2>
                                    <h3>h3. Bootstrap heading</h3>
                                    <h4>h4. Bootstrap heading</h4>
                                    <h5>h5. Bootstrap heading</h5>
                                    <h6>h6. Bootstrap heading</h6>
                                </div><!--end card-body-->
                            </div><!--end card-->

                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0">Lead</h4> 
                                    <p class="text-muted mb-4">Make a paragraph stand out by adding <code class="highlighter-rouge">.lead</code>.</p>
                                    <p class="lead mb-0">
                                        Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                                    </p>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        
                        <div class="col-lg-6">
                            <div class="card bg-topbar">
                                <div class="card-body">
                                    <div class="font-16">                                                
                                        <code>@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700');</code><br>
                                        <code>font-family : 'Poppins', sans-serif; </code>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0">Display Headings</h4>
                                    <p class="text-muted mb-4">Traditional heading elements are designed to work best in the meat of your page content. </p>
                                    <h1 class="display-1">Display 1</h1>
                                    <h1 class="display-2">Display 2</h1>
                                    <h1 class="display-3">Display 3</h1>
                                    <h1 class="display-4">Display 4</h1>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Blockquotes</h4>
                                    <p class="text-muted mb-4 ">For quoting blocks of content from
                                        another source within your document. Wrap <code class="highlighter-rouge">&lt;blockquote
                                            class="blockquote"&gt;</code> around any <abbr title="HyperText Markup Language">HTML</abbr> as the quote.</p>
    
                                    <blockquote class="blockquote">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                        <footer class="blockquote-footer font-14">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                    </blockquote>
    
                                    <blockquote class="blockquote blockquote-reverse mb-0">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                        <footer class="blockquote-footer font-14">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                    </blockquote>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Inline text elements</h4>
                                    <p class="text-muted mb-4">Styling for common inline HTML5 elements.</p>        
                                    <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                                    <p><del>This line of text is meant to be treated as deleted text.</del></p>
                                    <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                                    <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
                                    <p><u>This line of text will render as underlined</u></p>
                                    <p><small>This line of text is meant to be treated as fine print.</small></p>
                                    <p><strong>This line rendered as bold text.</strong></p>
                                    <p class="mb-0"><em>This line rendered as italicized text.</em></p>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Unorder List</h4>
                                    <p class="text-muted mb-4 ">Bootstrap unorder list style</p>
    
                                    <ul class="mb-0">
                                        <li>Integer molestie lorem at massa</li>
                                        <li>Nulla volutpat aliquam velit
                                            <ul>
                                                <li>Phasellus iaculis neque</li>
                                                <li>Purus sodales ultricies</li>
                                                <li>Vestibulum laoreet porttitor sem</li>
                                            </ul>
                                        </li>
                                        <li>Faucibus porta lacus fringilla vel</li>
                                    </ul>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Order List</h4>
                                    <p class="text-muted mb-4 ">Bootstrap order list style</p>
    
                                    <ol class="mb-0">
                                        <li>Integer molestie lorem at massa</li>
                                        <li>Nulla volutpat aliquam velit </li>
                                        <li>Phasellus iaculis neque</li>
                                        <li>Purus sodales ultricies</li>
                                        <li>Vestibulum laoreet porttitor sem</li>                                           
                                        <li>Faucibus porta lacus fringilla vel</li>
                                    </ol>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Unstyled List</h4>
                                    <p class="text-muted mb-4 ">Bootstrap unstyled list style</p>
    
                                    <ul class="mb-0 list-unstyled">
                                        <li>Integer molestie lorem at massa</li>
                                        <li>Nulla volutpat aliquam velit </li>
                                        <li>Phasellus iaculis neque</li>
                                        <li>Purus sodales ultricies</li>
                                        <li>Vestibulum laoreet porttitor sem</li>                                           
                                        <li>Faucibus porta lacus fringilla vel</li>
                                    </ul>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Inline List</h4>
                                    <p class="text-muted mb-4 ">Bootstrap inline list style</p>
    
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="mdi mdi-circle-outline font-13 text-success mr-1"></i>Lorem ipsum</li>
                                        <li class="list-inline-item"><i class="mdi mdi-circle-outline font-13 text-success mr-1"></i>Phasellus iaculis</li>
                                        <li class="list-inline-item"><i class="mdi mdi-circle-outline font-13 text-success mr-1"></i>Nulla volutpat</li>
                                        <li class="list-inline-item"><i class="mdi mdi-circle-outline font-13 text-success mr-1"></i>Lorem ipsum</li>
                                        <li class="list-inline-item"><i class="mdi mdi-circle-outline font-13 text-success mr-1"></i>Phasellus iaculis</li>
                                        <li class="list-inline-item"><i class="mdi mdi-circle-outline font-13 text-success mr-1"></i>Nulla volutpat</li>
                                        <li class="list-inline-item"><i class="mdi mdi-circle-outline font-13 text-success mr-1"></i>Lorem ipsum</li>
                                        <li class="list-inline-item"><i class="mdi mdi-circle-outline font-13 text-success mr-1"></i>Phasellus iaculis</li>
                                        <li class="list-inline-item"><i class="mdi mdi-circle-outline font-13 text-success mr-1"></i>Nulla volutpat</li>                                            
                                    </ul>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-12">        
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Description list alignment</h4>
                                    <p class="text-muted mb-4">Align terms and descriptions
                                        horizontally by using our grid system’s predefined classes (or semantic
                                        mixins). For longer terms, you can optionally add a <code class="highlighter-rouge">.text-truncate</code> class to
                                        truncate the text with an ellipsis.
                                    </p>
    
                                    <dl class="row mb-0">
                                        <dt class="col-sm-3">Description lists</dt>
                                        <dd class="col-sm-9">A description list is perfect for defining terms.</dd>
    
                                        <dt class="col-sm-3">Euismod</dt>
                                        <dd class="col-sm-9">Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                        <dd class="col-sm-9 offset-sm-3">Donec id elit non mi porta gravida at eget metus.</dd>
    
                                        <dt class="col-sm-3">Malesuada porta</dt>
                                        <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>
    
                                        <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                                        <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
    
                                        <dt class="col-sm-3">Nesting</dt>
                                        <dd class="col-sm-9 mb-0">
                                            <dl class="row mb-0">
                                                <dt class="col-sm-4">Nested definition list</dt>
                                                <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
                                            </dl>
                                        </dd>
                                    </dl>        
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!-- container -->
@stop

@section('footerScript')
<script src="{{ URL::asset('/assets/js/jquery.core.js')}}"></script>
@stop