@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
  <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                               @component('common-components.breadcrumb')
                                 @slot('title') FAQs @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Pages @endslot
                                 @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Most Commonly Asked Questions</h4>
                                    <p class="text-muted">Anim pariatur cliche reprehenderit, 
                                        enim eiusmod high life accusamus terry richardson ad squid. 
                                    </p>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <ul class="list-unstyled faq-qa">
                                                <li class="mb-5">
                                                    <h6 class="">1. What is Metrica?</h6>
                                                    <p class="font-14 text-muted ml-3">Anim pariatur cliche reprehenderit, 
                                                        enim eiusmod high life accusamus terry richardson ad squid.
                                                    </p>
                                                </li>
                                                <li class="mb-5">
                                                    <h6 class="">3. What cryptocurrency can i use to buy Metrica?</h6>
                                                    <p class="font-14 text-muted  ml-3">Anim pariatur cliche reprehenderit, 
                                                        enim eiusmod high life accusamus terry richardson ad squid.
                                                    </p>
                                                </li>
                                                <li class="mb-5">
                                                    <h6 class="">5. Can i trade Metrica?</h6>
                                                    <p class="font-14 text-muted ml-3">Anim pariatur cliche reprehenderit, 
                                                        enim eiusmod high life accusamus terry richardson ad squid.
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <ul class="list-unstyled faq-qa">
                                                <li class="mb-5">
                                                    <h6 class="">2. How buy Metrica on coin?</h6>
                                                    <p class="font-14 text-muted ml-3">Anim pariatur cliche reprehenderit, 
                                                        enim eiusmod high life accusamus terry richardson ad squid.
                                                    </p>
                                                </li>
                                                <li class="mb-5">
                                                    <h6 class="">4. Where can i download the wallet?</h6>
                                                    <p class="font-14 text-muted ml-3">Anim pariatur cliche reprehenderit, 
                                                        enim eiusmod high life accusamus terry richardson ad squid.
                                                    </p>
                                                </li>
                                                <li class="mb-5">
                                                    <h6 class="">6. What is Metrica?</h6>
                                                    <p class="font-14 text-muted ml-3">Anim pariatur cliche reprehenderit, 
                                                        enim eiusmod high life accusamus terry richardson ad squid.
                                                    </p>
                                                </li>
                                            </ul>
                                        </div><!--end col-->
                                    </div> <!--end row-->                                           
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->                        
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Most Commonly Asked Questions</h4>
                                    <p class="text-muted">Anim pariatur cliche reprehenderit, 
                                        enim eiusmod high life accusamus terry richardson ad squid. 
                                    </p>
                                    <div class="accordion" id="accordionExample-faq">
                                        <div class="card shadow-none border mb-1">
                                            <div class="card-header" id="headingOne">
                                            <h5 class="my-0">
                                                <button class="btn btn-link ml-4 shadow-none" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    What is Metrica?
                                                </button>
                                            </h5>
                                            </div>
                                        
                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample-faq">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. 
                                            </div>
                                            </div>
                                        </div>
                                        <div class="card shadow-none border mb-1">
                                            <div class="card-header" id="headingTwo">
                                            <h5 class="my-0">
                                                <button class="btn btn-link collapsed ml-4 align-self-center shadow-none" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    How buy Metrica on coin?
                                                </button>
                                            </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample-faq">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
                                            </div>
                                            </div>
                                        </div>
                                        <div class="card shadow-none border mb-1">
                                            <div class="card-header" id="headingThree">
                                            <h5 class="my-0">
                                                <button class="btn btn-link collapsed ml-4 shadow-none" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    What cryptocurrency can i use to buy Metrica?
                                                </button>
                                            </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample-faq">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                            </div>
                                            </div>
                                        </div>                                                
                                    </div><!--end accordion-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Have More Questions</h4>
                                    <p class="text-muted">Don't Worry ! Email us your Questions or you can send us twitter.</p>
                                    <div class="row">
                                        <div class="col-4 align-self-center">
                                            <img src="{{ URL::asset('assets/images/widgets/faq.svg')}}" alt="" class="img-fluid">
                                        </div><!--end col-->
                                        <div class="col-8">
                                            <form>
                                                <div class="form-group row">
                                                    <div class="col-lg-6  mo-b-15">
                                                        <input class="form-control" type="text" id="name" placeholder="Name">                                                       
                                                    </div> 
                                                    <div class="col-lg-6">
                                                        <input class="form-control" type="email" id="example-email-input3" placeholder="Email">
                                                    </div>                                                   
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <input class="form-control" type="text" id="subject2" placeholder="Subject">                                                       
                                                    </div>                                                    
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Your message"></textarea>
                                                </div>                                                
                                               
                                                <button type="submit" class="btn btn-gradient-primary btn-block px-4">Send Email</button>
                                            </form>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                    
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                </div><!-- container -->

@stop
