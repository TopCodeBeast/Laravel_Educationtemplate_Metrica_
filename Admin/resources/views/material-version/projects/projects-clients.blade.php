@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
   <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            @component('common-components.breadcrumb')
                                 @slot('title') Clients @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Project @endslot
                                 @endcomponent
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card client-card">                               
                                <div class="card-body text-center">                                    
                                    <img src="{{ URL::asset('assets/images/users/user-8.jpg')}}" alt="user" class="rounded-circle thumb-xl">
                                    <h5 class=" client-name">Charles Fang</h5> 
                                    <span class="text-muted mr-3"><i class="dripicons-location mr-2 text-info"></i>New York, USA</span>
                                    <span  class="text-muted"><i class="dripicons-phone mr-2 text-info"></i>+1 123 456 789</span>
                                    <p class="text-muted text-center mt-3">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                    <button type="button" class="btn btn-sm btn-soft-secondary">Project</button>
                                    <button type="button" class="btn btn-sm btn-soft-primary">Message</button>
                                </div><!--end card-body-->                                                                     
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card client-card">                               
                                <div class="card-body text-center">                                    
                                    <img src="{{ URL::asset('assets/images/users/user-4.jpg')}}" alt="user" class="rounded-circle thumb-xl">
                                    <h5 class=" client-name">Wendy Keen</h5> 
                                    <span class="text-muted mr-3"><i class="dripicons-location mr-2 text-info"></i>New York, USA</span>
                                    <span  class="text-muted"><i class="dripicons-phone mr-2 text-info"></i>+1 123 456 789</span>
                                    <p class="text-muted text-center mt-3">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                    <button type="button" class="btn btn-sm btn-soft-secondary">Project</button>
                                    <button type="button" class="btn btn-sm btn-soft-primary">Message</button>
                                </div><!--end card-body-->                                                                     
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card client-card">                               
                                <div class="card-body text-center">                                    
                                    <img src="{{ URL::asset('assets/images/users/user-5.jpg')}}" alt="user" class="rounded-circle thumb-xl">
                                    <h5 class=" client-name">Marvin Turner</h5> 
                                    <span class="text-muted mr-3"><i class="dripicons-location mr-2 text-info"></i>New York, USA</span>
                                    <span  class="text-muted"><i class="dripicons-phone mr-2 text-info"></i>+1 123 456 789</span>
                                    <p class="text-muted text-center mt-3">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                    <button type="button" class="btn btn-sm btn-soft-secondary">Project</button>
                                    <button type="button" class="btn btn-sm btn-soft-primary">Message</button>
                                </div><!--end card-body-->                                                                     
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card client-card">                               
                                <div class="card-body text-center">                                    
                                    <img src="{{ URL::asset('assets/images/users/user-3.jpg')}}" alt="user" class="rounded-circle thumb-xl">
                                    <h5 class=" client-name">Michael Cahill</h5> 
                                    <span class="text-muted mr-3"><i class="dripicons-location mr-2 text-info"></i>New York, USA</span>
                                    <span  class="text-muted"><i class="dripicons-phone mr-2 text-info"></i>+1 123 456 789</span>
                                    <p class="text-muted text-center mt-3">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                    <button type="button" class="btn btn-sm btn-soft-secondary">Project</button>
                                    <button type="button" class="btn btn-sm btn-soft-primary">Message</button>
                                </div><!--end card-body-->                                                                     
                            </div><!--end card-->
                        </div><!--end col--> 
                                                    
                    </div><!--end row-->
                    
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card client-card">                               
                                <div class="card-body text-center">                                    
                                    <img src="{{ URL::asset('assets/images/users/user-9.jpg')}}" alt="user" class="rounded-circle thumb-xl">
                                    <h5 class=" client-name">Joseph Cate</h5> 
                                    <span class="text-muted mr-3"><i class="dripicons-location mr-2 text-info"></i>New York, USA</span>
                                    <span  class="text-muted"><i class="dripicons-phone mr-2 text-info"></i>+1 123 456 789</span>
                                    <p class="text-muted text-center mt-3">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                    <button type="button" class="btn btn-sm btn-soft-secondary">Project</button>
                                    <button type="button" class="btn btn-sm btn-soft-primary">Message</button>
                                </div><!--end card-body-->                                                                     
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card client-card">                               
                                <div class="card-body text-center">                                    
                                    <img src="{{ URL::asset('assets/images/users/user-10.jpg')}}" alt="user" class="rounded-circle thumb-xl">
                                    <h5 class=" client-name">Robert Kipp</h5> 
                                    <span class="text-muted mr-3"><i class="dripicons-location mr-2 text-info"></i>New York, USA</span>
                                    <span  class="text-muted"><i class="dripicons-phone mr-2 text-info"></i>+1 123 456 789</span>
                                    <p class="text-muted text-center mt-3">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                    <button type="button" class="btn btn-sm btn-soft-secondary">Project</button>
                                    <button type="button" class="btn btn-sm btn-soft-primary">Message</button>
                                </div><!--end card-body-->                                                                     
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card client-card">                               
                                <div class="card-body text-center">                                    
                                    <img src="{{ URL::asset('assets/images/users/user-7.jpg')}}" alt="user" class="rounded-circle thumb-xl">
                                    <h5 class=" client-name">Nancy Perdue</h5> 
                                    <span class="text-muted mr-3"><i class="dripicons-location mr-2 text-info"></i>New York, USA</span>
                                    <span  class="text-muted"><i class="dripicons-phone mr-2 text-info"></i>+1 123 456 789</span>
                                    <p class="text-muted text-center mt-3">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                    <button type="button" class="btn btn-sm btn-soft-secondary">Project</button>
                                    <button type="button" class="btn btn-sm btn-soft-primary">Message</button>
                                </div><!--end card-body-->                                                                     
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card client-card">                               
                                <div class="card-body text-center">                                    
                                    <img src="{{ URL::asset('assets/images/users/user-6.jpg')}}" alt="user" class="rounded-circle thumb-xl">
                                    <h5 class=" client-name">Monique McAfee</h5> 
                                    <span class="text-muted mr-3"><i class="dripicons-location mr-2 text-info"></i>New York, USA</span>
                                    <span  class="text-muted"><i class="dripicons-phone mr-2 text-info"></i>+1 123 456 789</span>
                                    <p class="text-muted text-center mt-3">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                    <button type="button" class="btn btn-sm btn-soft-secondary">Project</button>
                                    <button type="button" class="btn btn-sm btn-soft-primary">Message</button>
                                </div><!--end card-body-->                                                                     
                            </div><!--end card-->
                        </div><!--end col-->                                                     
                    </div><!--end row-->

                </div><!-- container -->
@stop
