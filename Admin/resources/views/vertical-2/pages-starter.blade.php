@extends('layouts.vertical-2-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('sidebarPortion')
      <li class="leftbar-menu-item">
                    <a href="javascript: void(0);" class="menu-link">
                        <i data-feather="monitor" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>
                        <span>Dashboard</span>
                        <span class="menu-arrow">
                            <i class="mdi mdi-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="/vertical-2/analytics-index"><i class="ti-control-record"></i>Analytics</a></li>
                        <li class="nav-item"><a class="nav-link" href="/vertical-2/crypto-index"><i class="ti-control-record"></i>Crypto</a></li>
                        <li class="nav-item"><a class="nav-link" href="/vertical-2/crm-index"><i class="ti-control-record"></i>CRM</a></li>
                        <li class="nav-item"><a class="nav-link" href="/vertical-2/projects-index"><i class="ti-control-record"></i>Project</a></li>
                        <li class="nav-item"><a class="nav-link" href="/vertical-2/ecommerce-index"><i class="ti-control-record"></i>Ecommerce</a></li>
                        <li class="nav-item"><a class="nav-link" href="/vertical-2/helpdesk-index"><i class="ti-control-record"></i>Helpdesk</a></li>
                        <li class="nav-item"><a class="nav-link" href="/vertical-2/hospital-index"><i class="ti-control-record"></i>Hospital</a></li> 
                    </ul>
                </li>
@stop

@section('content')
   <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-right">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Metrica</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                        <li class="breadcrumb-item active">Starter</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Starter</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->
                </div><!-- container -->
@stop
