@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
      <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                               @component('common-components.breadcrumb')
                                 @slot('title') Alert Email @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') UI Kit @endslot
                                 @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-12">
                            <table class="body-wrap" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; background-color: transparent; margin: 0;" bgcolor="transparent">
                                <tr>                                   
                                    <td class="container" width="600" style=" display: block !important; max-width: 600px !important; clear: both !important; " valign="top">
                                        <div class="content" style="padding: 20px;">
                                            <table class="main" width="100%" cellpadding="0" cellspacing="0" style="border: 1px solid rgba(130, 134, 156, 0.15);" bgcolor="transparent">
                        
                                                <tr>
                                                    <td class="alert alert-primary border-0 bg-primary" style="padding: 20px; border-radius: 0;" align="center" valign="top">
                                                        <img src="{{ URL::asset('assets/images/bell.png')}}" alt="" style="margin-left: auto; margin-right: auto; display:block;width: 60px;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="alert alert-dark border-0" style="color:#ffffff; background-color: #212f56; padding: 20px; border-radius: 0;" align="center" valign="top">
                                                        Warning: You're approaching your limit. Please upgrade.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="content-wrap" style="padding: 20px;" valign="top">
                                                        <table width="100%" cellpadding="0" cellspacing="0">
                                                            <tr>
                                                                <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; padding: 10px" valign="top">
                                                                    You have <strong style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">1 free report</strong> remaining.
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; padding: 10px 10px 20px;" valign="top">
                                                                    Add your credit card now to upgrade your account to a premium plan to ensure you don't miss out on any reports.
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; padding: 0 0 20px;" valign="top">
                                                                    <a href="#" class="btn-gradient-primary" style=" font-size: 14px; text-decoration: none; line-height: 2em; font-weight: bold; text-align: center; cursor: pointer; display: block; border-radius: 5px; text-transform: capitalize; border: none; padding: 10px 20px;">Upgrade my account</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; text-align: center;" valign="top">
                                                                    Thanks for choosing <b>Metrica</b> Admin.
                                                                </td>
                                                            </tr>                                                            
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>                                            
                                        </div>
                                    </td>
                                    <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;" valign="top"></td>
                                </tr>
                            </table><!--end table-->                                
                        </div><!--end col-->
                    </div><!--end row-->  

                </div><!-- container -->

@stop
