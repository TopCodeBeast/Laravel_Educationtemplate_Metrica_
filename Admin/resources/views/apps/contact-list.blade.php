@extends('layouts.master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
  <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                             @component('common-components.breadcrumb')
                                 @slot('title') Cantacts @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Apps @endslot
                              @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">

@component('common-components.contact-list-widget')
     @slot('title') Merri Diamond @endslot
     @slot('email') @SaraHopkins.com @endslot
     @slot('image') user-4 @endslot 
 @endcomponent

@component('common-components.contact-list-widget')
     @slot('title') Paul Schmidt @endslot
     @slot('email') @SaraHopkins.com @endslot
     @slot('image') user-5 @endslot 
 @endcomponent

@component('common-components.contact-list-widget')
     @slot('title') Harry McCall @endslot
     @slot('email') @SaraHopkins.com @endslot
     @slot('image') user-8 @endslot 
 @endcomponent

                    </div><!--end row-->

                    <div class="row">

@component('common-components.contact-section')
    @slot('image') user-8.jpg  @endslot
@endcomponent
@component('common-components.contact-section')
    @slot('image') user-4.jpg  @endslot
@endcomponent
@component('common-components.contact-section')
    @slot('image') user-5.jpg  @endslot
@endcomponent
@component('common-components.contact-section')
    @slot('image') user-3.jpg  @endslot
@endcomponent
                                                                  
                    </div><!--end row--> 


                    <div class="row">

@component('common-components.contact-section')
    @slot('image') user-1.png  @endslot
@endcomponent
@component('common-components.contact-section')
    @slot('image') user-2.png  @endslot
@endcomponent
@component('common-components.contact-section')
    @slot('image') user-3.png  @endslot
@endcomponent
@component('common-components.contact-section')
    @slot('image') user-4.png  @endslot
@endcomponent
                                                                  
                    </div><!--end row--> 


                </div>
@stop
