@extends('layouts.master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
<div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                          
                               @component('common-components.breadcrumb')
                                 @slot('title') Billing Email @endslot
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
                                    <td valign="top"></td>
                                    <td class="container" width="600" style="display: block !important; max-width: 600px !important; clear: both !important;" valign="top">
                                        <div class="content" style="padding: 20px;">
                                            <table class="main" width="100%" cellpadding="0" cellspacing="0" style="border: 1px dashed #4d79f6;">
                                                <tr>
                                                    <td class="content-wrap aligncenter" style="padding: 20px; background-color: transparent;" align="center" valign="top">
                                                        <table width="100%" cellpadding="0" cellspacing="0">
                                                            <tr>
                                                                <td>
                                                                    <a href="#"><img src="{{ URL::asset('assets/images/logo-sm.png')}}" alt="" style="height: 40px; margin-left: auto; margin-right: auto; display:block;"></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="content-block" style="padding: 0 0 20px;" valign="top">
                                                                    <h2 class="aligncenter" style="font-family: 'Helvetica Neue',Helvetica,Arial,'Lucida Grande',sans-serif;font-size: 24px; color:#50649c; line-height: 1.2em; font-weight: 600; text-align: center;" align="center">Thanks for using <span style="color: #4d79f6; font-weight: 700;">Metrica</span>.</h2>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="content-block aligncenter" style="padding: 0 0 20px;" align="center" valign="top">
                                                                    <table class="invoice" style="width: 80%;">
                                                                        <tr>
                                                                            <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; padding: 5px 0;" valign="top">Mannatthemes
                                                                                <br/>Invoice #12345
                                                                                <br/>01 Sep 2018
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="padding: 5px 0;" valign="top">
                                                                                <table class="invoice-items" cellpadding="0" cellspacing="0" style="width: 100%;">
                                                                                    <tr>
                                                                                        <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; vertical-align: top; border-top-width: 1px; border-top-color: #eee; border-top-style: solid; margin: 0; padding: 10px 0;" valign="top">Apple iphone X</td>
                                                                                        <td class="alignright" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; vertical-align: top; text-align: right; border-top-width: 1px; border-top-color: #eee; border-top-style: solid; margin: 0; padding: 10px 0;" align="right" valign="top">$ 1499.99</td>
                                                                                    </tr>
                                                                                    <tr >
                                                                                        <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; vertical-align: top; border-top-width: 1px; border-top-color: #eee; border-top-style: solid; margin: 0; padding: 10px 0;" valign="top">Data cable</td>
                                                                                        <td class="alignright" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; vertical-align: top; text-align: right; border-top-width: 1px; border-top-color: #eee; border-top-style: solid; margin: 0; padding: 10px 0;" align="right" valign="top">$ 20.00</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; vertical-align: top; border-top-width: 1px; border-top-color: #eee; border-top-style: solid; margin: 0; padding: 10px 0;" valign="top">Phone Cover</td>
                                                                                        <td class="alignright" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; vertical-align: top; text-align: right; border-top-width: 1px; border-top-color: #eee; border-top-style: solid; margin: 0; padding: 10px 0;" align="right" valign="top">$ 40.00</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="alignright" width="80%" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; vertical-align: top; text-align: right; border-top-width: 2px; border-top-color: #50649c; border-top-style: solid; border-bottom-color: #50649c; border-bottom-width: 2px; border-bottom-style: solid; font-weight: 700; margin: 0; padding: 10px 0;" align="right" valign="top">Total</td>
                                                                                        <td class="alignright" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; vertical-align: top; text-align: right; border-top-width: 2px; border-top-color: #50649c; border-top-style: solid; border-bottom-color: #50649c; border-bottom-width: 2px; border-bottom-style: solid; font-weight: 700; margin: 0; padding: 10px 0;" align="right" valign="top">$ 1559.99</td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="content-block aligncenter" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; vertical-align: top; text-align: center; margin: 0; padding: 0 0 20px;" align="center" valign="top">
                                                                    <a href="#" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; color: #4d79f6; text-decoration: underline; margin: 0;">View in browser</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="content-block aligncenter" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; vertical-align: top; text-align: center; margin: 0; padding: 0 0 20px;" align="center" valign="top">
                                                                    Metrica Inc. 123 my street, And my Country
                                                                </td>
                                                            </tr>
                                                        </table><!--end table-->   
                                                    </td>
                                                </tr>
                                            </table><!--end table-->                                               
                                        </div><!--end content-->   
                                    </td>
                                    <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; vertical-align: top; margin: 0;" valign="top"></td>
                                </tr>
                            </table><!--end table-->                                
                        </div><!--end col-->
                    </div><!--end row-->  

                </div><!-- container -->
@stop
