@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
                 <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">

                              <!-- Page-Title -->
                             @component('common-components.breadcrumb')
                                 @slot('title') Starter @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Pages @endslot
                              @endcomponent

                          
                        </div><!--end col-->
                    </div>
                </div><!-- container -->
@stop
