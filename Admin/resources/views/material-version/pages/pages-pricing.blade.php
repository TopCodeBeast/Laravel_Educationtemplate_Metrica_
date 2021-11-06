@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
  <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                              @component('common-components.breadcrumb')
                                 @slot('title') Pricing @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Pages @endslot
                                 @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        
                          @component('common-components.pricing')
                                 @slot('title') Basic plan @endslot
                                 @slot('price') $39.00 @endslot
                                 @slot('per') month @endslot
                          @endcomponent

                         @component('common-components.pricing')
                                 @slot('title') Premium plan @endslot
                                 @slot('price') $49.00 @endslot
                                 @slot('per') month @endslot
                                 @slot('popular') true @endslot
                          @endcomponent

                       @component('common-components.pricing')
                                 @slot('title') plus plan @endslot
                                 @slot('price') $69.00 @endslot
                                 @slot('per') month @endslot
                          @endcomponent

                           @component('common-components.pricing')
                                 @slot('title') Master plan @endslot
                                 @slot('price') $799.00 @endslot
                                 @slot('per') year @endslot
                          @endcomponent
                    </div><!--end row-->

                    
                    <div class="row">
                        
                          @component('common-components.iconPricing')
                                 @slot('title') Premium plan @endslot
                                 @slot('img') p-1 @endslot
                                 @slot('price') $39.00 @endslot
                                 @slot('per') Month @endslot
                          @endcomponent

                          @component('common-components.iconPricing')
                                 @slot('popular') true @endslot
                                 @slot('title') Premium plan @endslot
                                 @slot('img') p-2 @endslot
                                 @slot('price') $49.00 @endslot
                                 @slot('per') Month @endslot
                          @endcomponent

                           @component('common-components.iconPricing')
                                 @slot('title') Plus plan @endslot
                                 @slot('img') p-5 @endslot
                                 @slot('price') $69.00 @endslot
                                 @slot('per') Month @endslot
                          @endcomponent

                           @component('common-components.iconPricing')
                                 @slot('title') Master plan @endslot
                                 @slot('img') p-6 @endslot
                                 @slot('price') $199.00 @endslot
                                 @slot('per') Month @endslot
                          @endcomponent

                    </div><!--end row-->

                </div><!-- container -->
@stop
