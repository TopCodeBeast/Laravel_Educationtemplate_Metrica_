@extends('layouts.master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
   <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                             @component('common-components.breadcrumb')
                                 @slot('title') Feather Icons @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') UI Kit @endslot
                                 @endcomponent
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h5 class="mt-0 mb-1 header-title">Examples</h5>
                                    <p class="mb-3">Use <code>&lt;i data-feather="activity"&gt;&lt;/i&gt;</code>.</p>
                                    

                                    <div class="row icon-demo-content">
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="activity"></i>
                                                <span>activity</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="airplay"></i>
                                                <span>airplay</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="alert-circle"></i>
                                                <span>alert-circle</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="alert-octagon"></i>
                                                <span>alert-octagon</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="alert-triangle"></i>
                                                <span>alert-triangle</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="align-center"></i>
                                                <span>align-center</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="align-justify"></i>
                                                <span>align-justify</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="align-left"></i>
                                                <span>align-left</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="align-right"></i>
                                                <span>align-right</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="anchor"></i>
                                                <span>anchor</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="aperture"></i>
                                                <span>aperture</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="archive"></i>
                                                <span>archive</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="arrow-down-circle"></i>
                                                <span>arrow-down-circle</span>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="arrow-down-left"></i>
                                                <span>arrow-down-left</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="arrow-down-right"></i>
                                                <span>arrow-down-right</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="arrow-down"></i>
                                                <span>arrow-down</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="arrow-left-circle"></i>
                                                <span>arrow-left-circle</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="arrow-left"></i>
                                                <span>arrow-left</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="arrow-right-circle"></i>
                                                <span>arrow-right-circle</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="arrow-right"></i>
                                                <span>arrow-right</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="arrow-up-circle"></i>
                                                <span>arrow-up-circle</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="arrow-up-left"></i>
                                                <span>arrow-up-left</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="arrow-up-right"></i>
                                                <span>arrow-up-right</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="arrow-up"></i>
                                                <span>arrow-up</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="at-sign"></i>
                                                <span>at-sign</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="award"></i>
                                                <span>award</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="bar-chart-2"></i>
                                                <span>bar-chart-2</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="bar-chart"></i>
                                                <span>bar-chart</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="battery-charging"></i>
                                                <span>battery-charging</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="battery"></i>
                                                <span>battery</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="bell-off"></i>
                                                <span>bell-off</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="bell"></i>
                                                <span>bell</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="bluetooth"></i>
                                                <span>bluetooth</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="bold"></i>
                                                <span>bold</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="book-open"></i>
                                                <span>book-open</span>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="book"></i>
                                                <span>book</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="bookmark"></i>
                                                <span>bookmark</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="box"></i>
                                                <span>box</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="briefcase"></i>
                                                <span>briefcase</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="calendar"></i>
                                                <span>calendar</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="camera-off"></i>
                                                <span>camera-off</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="camera"></i>
                                                <span>camera</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="cast"></i>
                                                <span>cast</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="check-circle"></i>
                                                <span>check-circle</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="check-square"></i>
                                                <span>check-square</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="check"></i>
                                                <span>check</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="chevron-down"></i>
                                                <span>chevron-down</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="chevron-left"></i>
                                                <span>chevron-left</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="chevron-right"></i>
                                                <span>chevron-right</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="chevron-up"></i>
                                                <span>chevron-up</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="chevrons-down"></i>
                                                <span>chevrons-down</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="chevrons-left"></i>
                                                <span>chevrons-left</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="chevrons-right"></i>
                                                <span>chevrons-right</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="chevrons-up"></i>
                                                <span>chevrons-up</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="chrome"></i>
                                                <span>chrome</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="circle"></i>
                                                <span>circle</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="clipboard"></i>
                                                <span>clipboard</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="clock"></i>
                                                <span>clock</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="cloud-drizzle"></i>
                                                <span>cloud-drizzle</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="cloud-lightning"></i>
                                                <span>cloud-lightning</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="cloud-off"></i>
                                                <span>cloud-off</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="cloud-rain"></i>
                                                <span>cloud-rain</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="cloud-snow"></i>
                                                <span>cloud-snow</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="cloud"></i>
                                                <span>cloud</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="code"></i>
                                                <span>code</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="codepen"></i>
                                                <span>codepen</span>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="codesandbox"></i>
                                                <span>codesandbox</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="coffee"></i>
                                                <span>coffee</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="columns"></i>
                                                <span>columns</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="command"></i>
                                                <span>command</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="compass"></i>
                                                <span>compass</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="copy"></i>
                                                <span>copy</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="corner-down-left"></i>
                                                <span>corner-down-left</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="corner-down-right"></i>
                                                <span>corner-down-right</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="corner-left-down"></i>
                                                <span>corner-left-down</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="corner-left-up"></i>
                                                <span>corner-left-up</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="corner-right-down"></i>
                                                <span>corner-right-down</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="corner-right-up"></i>
                                                <span>corner-right-up</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="corner-up-left"></i>
                                                <span>corner-up-left</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="corner-up-right"></i>
                                                <span>corner-up-right</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="cpu"></i>
                                                <span>cpu</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="credit-card"></i>
                                                <span>credit-card</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="crop"></i>
                                                <span>crop</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="crosshair"></i>
                                                <span>crosshair</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="database"></i>
                                                <span>database</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="delete"></i>
                                                <span>delete</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="disc"></i>
                                                <span>disc</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="dollar-sign"></i>
                                                <span>dollar-sign</span>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="download-cloud"></i>
                                                <span>download-cloud</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="download"></i>
                                                <span>download</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="droplet"></i>
                                                <span>droplet</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="edit-2"></i>
                                                <span>edit-2</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="edit-3"></i>
                                                <span>edit-3</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="edit"></i>
                                                <span>edit</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="external-link"></i>
                                                <span>external-link</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="eye-off"></i>
                                                <span>eye-off</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="eye"></i>
                                                <span>eye</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="facebook"></i>
                                                <span>facebook</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="fast-forward"></i>
                                                <span>fast-forward</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="feather"></i>
                                                <span>feather</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="figma"></i>
                                                <span>figma</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="file-minus"></i>
                                                <span>file-minus</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="file-plus"></i>
                                                <span>file-plus</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="file-text"></i>
                                                <span>file-text</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="file"></i>
                                                <span>file</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="film"></i>
                                                <span>film</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="filter"></i>
                                                <span>filter</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="flag"></i>
                                                <span>flag</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="folder-minus"></i>
                                                <span>folder-minus</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="folder-plus"></i>
                                                <span>folder-plus</span>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="folder"></i>
                                                <span>folder</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="framer"></i>
                                                <span>framer</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="frown"></i>
                                                <span>frown</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="gift"></i>
                                                <span>gift</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="git-branch"></i>
                                                <span>git-branch</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="git-commit"></i>
                                                <span>git-commit</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="git-merge"></i>
                                                <span>git-merge</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="git-pull-request"></i>
                                                <span>git-pull-request</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="github"></i>
                                                <span>github</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="gitlab"></i>
                                                <span>gitlab</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="globe"></i>
                                                <span>globe</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="grid"></i>
                                                <span>grid</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="hard-drive"></i>
                                                <span>hard-drive</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="hash"></i>
                                                <span>hash</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="headphones"></i>
                                                <span>headphones</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="heart"></i>
                                                <span>heart</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="help-circle"></i>
                                                <span>help-circle</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="hexagon"></i>
                                                <span>hexagon</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="home"></i>
                                                <span>home</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="image"></i>
                                                <span>image</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="inbox"></i>
                                                <span>inbox</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="info"></i>
                                                <span>info</span>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="instagram"></i>
                                                <span>instagram</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="italic"></i>
                                                <span>italic</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="key"></i>
                                                <span>key</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="layers"></i>
                                                <span>layers</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="layout"></i>
                                                <span>layout</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="life-buoy"></i>
                                                <span>life-buoy</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="link-2"></i>
                                                <span>link-2</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="link"></i>
                                                <span>link</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="linkedin"></i>
                                                <span>linkedin</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="list"></i>
                                                <span>list</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="loader"></i>
                                                <span>loader</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="lock"></i>
                                                <span>lock</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="log-in"></i>
                                                <span>log-in</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="log-out"></i>
                                                <span>log-out</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="mail"></i>
                                                <span>mail</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="map-pin"></i>
                                                <span>map-pin</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="map"></i>
                                                <span>map</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="maximize-2"></i>
                                                <span>maximize-2</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="maximize"></i>
                                                <span>maximize</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="meh"></i>
                                                <span>meh</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="menu"></i>
                                                <span>menu</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="message-circle"></i>
                                                <span>message-circle</span>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="message-square"></i>
                                                <span>message-square</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="mic-off"></i>
                                                <span>mic-off</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="mic"></i>
                                                <span>mic</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="minimize-2"></i>
                                                <span>minimize-2</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="minimize"></i>
                                                <span>minimize</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="minus-circle"></i>
                                                <span>minus-circle</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="minus-square"></i>
                                                <span>minus-square</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="minus"></i>
                                                <span>minus</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="monitor"></i>
                                                <span>monitor</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="moon"></i>
                                                <span>moon</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="more-horizontal"></i>
                                                <span>more-horizontal</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="more-vertical"></i>
                                                <span>more-vertical</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="mouse-pointer"></i>
                                                <span>mouse-pointer</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="move"></i>
                                                <span>move</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="music"></i>
                                                <span>music</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="navigation-2"></i>
                                                <span>navigation-2</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="navigation"></i>
                                                <span>navigation</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="octagon"></i>
                                                <span>octagon</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="package"></i>
                                                <span>package</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="paperclip"></i>
                                                <span>paperclip</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="pause-circle"></i>
                                                <span>pause-circle</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="pause"></i>
                                                <span>pause</span>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="pen-tool"></i>
                                                <span>pen-tool</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="percent"></i>
                                                <span>percent</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="phone-call"></i>
                                                <span>phone-call</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="phone-forwarded"></i>
                                                <span>phone-forwarded</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="phone-incoming"></i>
                                                <span>phone-incoming</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="phone-missed"></i>
                                                <span>phone-missed</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="phone-off"></i>
                                                <span>phone-off</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="phone-outgoing"></i>
                                                <span>phone-outgoing</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="phone"></i>
                                                <span>phone</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="pie-chart"></i>
                                                <span>pie-chart</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="play-circle"></i>
                                                <span>play-circle</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="play"></i>
                                                <span>play</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="plus-circle"></i>
                                                <span>plus-circle</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="plus-square"></i>
                                                <span>plus-square</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="plus"></i>
                                                <span>plus</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="pocket"></i>
                                                <span>pocket</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="power"></i>
                                                <span>power</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="printer"></i>
                                                <span>printer</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="radio"></i>
                                                <span>radio</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="refresh-ccw"></i>
                                                <span>refresh-ccw</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="refresh-cw"></i>
                                                <span>refresh-cw</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="repeat"></i>
                                                <span>repeat</span>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="rewind"></i>
                                                <span>rewind</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="rotate-ccw"></i>
                                                <span>rotate-ccw</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="rotate-cw"></i>
                                                <span>rotate-cw</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="rss"></i>
                                                <span>rss</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="save"></i>
                                                <span>save</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="scissors"></i>
                                                <span>scissors</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="search"></i>
                                                <span>search</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="send"></i>
                                                <span>send</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="server"></i>
                                                <span>server</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="settings"></i>
                                                <span>settings</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="share-2"></i>
                                                <span>share-2</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="share"></i>
                                                <span>share</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="shield-off"></i>
                                                <span>shield-off</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="shield"></i>
                                                <span>shield</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="shopping-bag"></i>
                                                <span>shopping-bag</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="shopping-cart"></i>
                                                <span>shopping-cart</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="shuffle"></i>
                                                <span>shuffle</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="sidebar"></i>
                                                <span>sidebar</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="skip-back"></i>
                                                <span>skip-back</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="skip-forward"></i>
                                                <span>skip-forward</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="slack"></i>
                                                <span>slack</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="slash"></i>
                                                <span>slash</span>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="sliders"></i>
                                                <span>sliders</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="smartphone"></i>
                                                <span>smartphone</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="smile"></i>
                                                <span>smile</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="speaker"></i>
                                                <span>speaker</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="square"></i>
                                                <span>square</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="star"></i>
                                                <span>star</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="stop-circle"></i>
                                                <span>stop-circle</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="sun"></i>
                                                <span>sun</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="sunrise"></i>
                                                <span>sunrise</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="sunset"></i>
                                                <span>sunset</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="tablet"></i>
                                                <span>tablet</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="tag"></i>
                                                <span>tag</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="target"></i>
                                                <span>target</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="terminal"></i>
                                                <span>terminal</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="thermometer"></i>
                                                <span>thermometer</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="thumbs-down"></i>
                                                <span>thumbs-down</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="thumbs-up"></i>
                                                <span>thumbs-up</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="toggle-left"></i>
                                                <span>toggle-left</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="toggle-right"></i>
                                                <span>toggle-right</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="tool"></i>
                                                <span>tool</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="trash-2"></i>
                                                <span>trash-2</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="trash"></i>
                                                <span>trash</span>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="trello"></i>
                                                <span>trello</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="trending-down"></i>
                                                <span>trending-down</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="trending-up"></i>
                                                <span>trending-up</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="triangle"></i>
                                                <span>triangle</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="truck"></i>
                                                <span>truck</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="tv"></i>
                                                <span>tv</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="twitch"></i>
                                                <span>twitch</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="twitter"></i>
                                                <span>twitter</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="type"></i>
                                                <span>type</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="umbrella"></i>
                                                <span>umbrella</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="underline"></i>
                                                <span>underline</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="unlock"></i>
                                                <span>unlock</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="upload-cloud"></i>
                                                <span>upload-cloud</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="upload"></i>
                                                <span>upload</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="user-check"></i>
                                                <span>user-check</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="user-minus"></i>
                                                <span>user-minus</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="user-plus"></i>
                                                <span>user-plus</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="user-x"></i>
                                                <span>user-x</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="user"></i>
                                                <span>user</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="users"></i>
                                                <span>users</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="video-off"></i>
                                                <span>video-off</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="video"></i>
                                                <span>video</span>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="voicemail"></i>
                                                <span>voicemail</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="volume-1"></i>
                                                <span>volume-1</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="volume-2"></i>
                                                <span>volume-2</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="volume-x"></i>
                                                <span>volume-x</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="volume"></i>
                                                <span>volume</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="watch"></i>
                                                <span>watch</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="wifi-off"></i>
                                                <span>wifi-off</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="wifi"></i>
                                                <span>wifi</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="wind"></i>
                                                <span>wind</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="x-circle"></i>
                                                <span>x-circle</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="x-octagon"></i>
                                                <span>x-octagon</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="x-square"></i>
                                                <span>x-square</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="x"></i>
                                                <span>x</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="youtube"></i>
                                                <span>youtube</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="zap-off"></i>
                                                <span>zap-off</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="zap"></i>
                                                <span>zap</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="zoom-in"></i>
                                                <span>zoom-in</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="zoom-out"></i>
                                                <span>zoom-out</span>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h5 class="mt-0 mb-1 header-title">Two Tone Icons</h5>
                                    <p class="mb-3">Use <code>&lt;i data-feather="activity" class="icon-dual"&gt;&lt;/i&gt;</code>.</p>
                                    

                                    <div class="row icon-demo-content">
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="activity" class="icon-dual"></i>
                                                <span>activity</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="airplay" class="icon-dual"></i>
                                                <span>airplay</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="alert-circle" class="icon-dual"></i>
                                                <span>alert-circle</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="alert-octagon" class="icon-dual"></i>
                                                <span>alert-octagon</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="alert-triangle" class="icon-dual"></i>
                                                <span>alert-triangle</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="align-center" class="icon-dual"></i>
                                                <span>align-center</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="align-justify" class="icon-dual"></i>
                                                <span>align-justify</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="align-left" class="icon-dual"></i>
                                                <span>align-left</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="align-right" class="icon-dual"></i>
                                                <span>align-right</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="anchor" class="icon-dual"></i>
                                                <span>anchor</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="aperture" class="icon-dual"></i>
                                                <span>aperture</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="archive" class="icon-dual"></i>
                                                <span>archive</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="arrow-down-circle" class="icon-dual"></i>
                                                <span>arrow-down-circle</span>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="arrow-down-left" class="icon-dual"></i>
                                                <span>arrow-down-left</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="arrow-down-right" class="icon-dual"></i>
                                                <span>arrow-down-right</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="arrow-down" class="icon-dual"></i>
                                                <span>arrow-down</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="arrow-left-circle" class="icon-dual"></i>
                                                <span>arrow-left-circle</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="arrow-left" class="icon-dual"></i>
                                                <span>arrow-left</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="arrow-right-circle" class="icon-dual"></i>
                                                <span>arrow-right-circle</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="arrow-right" class="icon-dual"></i>
                                                <span>arrow-right</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="arrow-up-circle" class="icon-dual"></i>
                                                <span>arrow-up-circle</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="arrow-up-left" class="icon-dual"></i>
                                                <span>arrow-up-left</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="arrow-up-right" class="icon-dual"></i>
                                                <span>arrow-up-right</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="arrow-up" class="icon-dual"></i>
                                                <span>arrow-up</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="at-sign" class="icon-dual"></i>
                                                <span>at-sign</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="award" class="icon-dual"></i>
                                                <span>award</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="bar-chart-2" class="icon-dual"></i>
                                                <span>bar-chart-2</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="bar-chart" class="icon-dual"></i>
                                                <span>bar-chart</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="battery-charging" class="icon-dual"></i>
                                                <span>battery-charging</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="battery" class="icon-dual"></i>
                                                <span>battery</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="bell-off" class="icon-dual"></i>
                                                <span>bell-off</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="bell" class="icon-dual"></i>
                                                <span>bell</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="bluetooth" class="icon-dual"></i>
                                                <span>bluetooth</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="bold" class="icon-dual"></i>
                                                <span>bold</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="book-open" class="icon-dual"></i>
                                                <span>book-open</span>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="book" class="icon-dual"></i>
                                                <span>book</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="bookmark" class="icon-dual"></i>
                                                <span>bookmark</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="box" class="icon-dual"></i>
                                                <span>box</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="briefcase" class="icon-dual"></i>
                                                <span>briefcase</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="calendar" class="icon-dual"></i>
                                                <span>calendar</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="camera-off" class="icon-dual"></i>
                                                <span>camera-off</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="camera" class="icon-dual"></i>
                                                <span>camera</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="cast" class="icon-dual"></i>
                                                <span>cast</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="check-circle" class="icon-dual"></i>
                                                <span>check-circle</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="check-square" class="icon-dual"></i>
                                                <span>check-square</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="check" class="icon-dual"></i>
                                                <span>check</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="chevron-down" class="icon-dual"></i>
                                                <span>chevron-down</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="chevron-left" class="icon-dual"></i>
                                                <span>chevron-left</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="chevron-right" class="icon-dual"></i>
                                                <span>chevron-right</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="chevron-up" class="icon-dual"></i>
                                                <span>chevron-up</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="chevrons-down" class="icon-dual"></i>
                                                <span>chevrons-down</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="chevrons-left" class="icon-dual"></i>
                                                <span>chevrons-left</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="chevrons-right" class="icon-dual"></i>
                                                <span>chevrons-right</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="chevrons-up" class="icon-dual"></i>
                                                <span>chevrons-up</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="chrome" class="icon-dual"></i>
                                                <span>chrome</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="circle" class="icon-dual"></i>
                                                <span>circle</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="clipboard" class="icon-dual"></i>
                                                <span>clipboard</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="clock" class="icon-dual"></i>
                                                <span>clock</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="cloud-drizzle" class="icon-dual"></i>
                                                <span>cloud-drizzle</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="cloud-lightning" class="icon-dual"></i>
                                                <span>cloud-lightning</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="cloud-off" class="icon-dual"></i>
                                                <span>cloud-off</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="cloud-rain" class="icon-dual"></i>
                                                <span>cloud-rain</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="cloud-snow" class="icon-dual"></i>
                                                <span>cloud-snow</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="cloud" class="icon-dual"></i>
                                                <span>cloud</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="code" class="icon-dual"></i>
                                                <span>code</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="codepen" class="icon-dual"></i>
                                                <span>codepen</span>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="codesandbox" class="icon-dual"></i>
                                                <span>codesandbox</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="coffee" class="icon-dual"></i>
                                                <span>coffee</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="columns" class="icon-dual"></i>
                                                <span>columns</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="command" class="icon-dual"></i>
                                                <span>command</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="compass" class="icon-dual"></i>
                                                <span>compass</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="copy" class="icon-dual"></i>
                                                <span>copy</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="corner-down-left" class="icon-dual"></i>
                                                <span>corner-down-left</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="corner-down-right" class="icon-dual"></i>
                                                <span>corner-down-right</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="corner-left-down" class="icon-dual"></i>
                                                <span>corner-left-down</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="corner-left-up" class="icon-dual"></i>
                                                <span>corner-left-up</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="corner-right-down" class="icon-dual"></i>
                                                <span>corner-right-down</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="corner-right-up" class="icon-dual"></i>
                                                <span>corner-right-up</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="corner-up-left" class="icon-dual"></i>
                                                <span>corner-up-left</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="corner-up-right" class="icon-dual"></i>
                                                <span>corner-up-right</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="cpu" class="icon-dual"></i>
                                                <span>cpu</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="credit-card" class="icon-dual"></i>
                                                <span>credit-card</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="crop" class="icon-dual"></i>
                                                <span>crop</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="crosshair" class="icon-dual"></i>
                                                <span>crosshair</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="database" class="icon-dual"></i>
                                                <span>database</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="delete" class="icon-dual"></i>
                                                <span>delete</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="disc" class="icon-dual"></i>
                                                <span>disc</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="dollar-sign" class="icon-dual"></i>
                                                <span>dollar-sign</span>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="download-cloud" class="icon-dual"></i>
                                                <span>download-cloud</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="download" class="icon-dual"></i>
                                                <span>download</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="droplet" class="icon-dual"></i>
                                                <span>droplet</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="edit-2" class="icon-dual"></i>
                                                <span>edit-2</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="edit-3" class="icon-dual"></i>
                                                <span>edit-3</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="edit" class="icon-dual"></i>
                                                <span>edit</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="external-link" class="icon-dual"></i>
                                                <span>external-link</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="eye-off" class="icon-dual"></i>
                                                <span>eye-off</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="eye" class="icon-dual"></i>
                                                <span>eye</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="facebook" class="icon-dual"></i>
                                                <span>facebook</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="fast-forward" class="icon-dual"></i>
                                                <span>fast-forward</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="feather" class="icon-dual"></i>
                                                <span>feather</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="figma" class="icon-dual"></i>
                                                <span>figma</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="file-minus" class="icon-dual"></i>
                                                <span>file-minus</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="file-plus" class="icon-dual"></i>
                                                <span>file-plus</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="file-text" class="icon-dual"></i>
                                                <span>file-text</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="file" class="icon-dual"></i>
                                                <span>file</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="film" class="icon-dual"></i>
                                                <span>film</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="filter" class="icon-dual"></i>
                                                <span>filter</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="flag" class="icon-dual"></i>
                                                <span>flag</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="folder-minus" class="icon-dual"></i>
                                                <span>folder-minus</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="folder-plus" class="icon-dual"></i>
                                                <span>folder-plus</span>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="folder" class="icon-dual"></i>
                                                <span>folder</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="framer" class="icon-dual"></i>
                                                <span>framer</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="frown" class="icon-dual"></i>
                                                <span>frown</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="gift" class="icon-dual"></i>
                                                <span>gift</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="git-branch" class="icon-dual"></i>
                                                <span>git-branch</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="git-commit" class="icon-dual"></i>
                                                <span>git-commit</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="git-merge" class="icon-dual"></i>
                                                <span>git-merge</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="git-pull-request" class="icon-dual"></i>
                                                <span>git-pull-request</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="github" class="icon-dual"></i>
                                                <span>github</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="gitlab" class="icon-dual"></i>
                                                <span>gitlab</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="globe" class="icon-dual"></i>
                                                <span>globe</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="grid" class="icon-dual"></i>
                                                <span>grid</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="hard-drive" class="icon-dual"></i>
                                                <span>hard-drive</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="hash" class="icon-dual"></i>
                                                <span>hash</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="headphones" class="icon-dual"></i>
                                                <span>headphones</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="heart" class="icon-dual"></i>
                                                <span>heart</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="help-circle" class="icon-dual"></i>
                                                <span>help-circle</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="hexagon" class="icon-dual"></i>
                                                <span>hexagon</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="home" class="icon-dual"></i>
                                                <span>home</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="image" class="icon-dual"></i>
                                                <span>image</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="inbox" class="icon-dual"></i>
                                                <span>inbox</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="info" class="icon-dual"></i>
                                                <span>info</span>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="instagram" class="icon-dual"></i>
                                                <span>instagram</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="italic" class="icon-dual"></i>
                                                <span>italic</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="key" class="icon-dual"></i>
                                                <span>key</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="layers" class="icon-dual"></i>
                                                <span>layers</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="layout" class="icon-dual"></i>
                                                <span>layout</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="life-buoy" class="icon-dual"></i>
                                                <span>life-buoy</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="link-2" class="icon-dual"></i>
                                                <span>link-2</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="link" class="icon-dual"></i>
                                                <span>link</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="linkedin" class="icon-dual"></i>
                                                <span>linkedin</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="list" class="icon-dual"></i>
                                                <span>list</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="loader" class="icon-dual"></i>
                                                <span>loader</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="lock" class="icon-dual"></i>
                                                <span>lock</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="log-in" class="icon-dual"></i>
                                                <span>log-in</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="log-out" class="icon-dual"></i>
                                                <span>log-out</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="mail" class="icon-dual"></i>
                                                <span>mail</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="map-pin" class="icon-dual"></i>
                                                <span>map-pin</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="map" class="icon-dual"></i>
                                                <span>map</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="maximize-2" class="icon-dual"></i>
                                                <span>maximize-2</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="maximize" class="icon-dual"></i>
                                                <span>maximize</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="meh" class="icon-dual"></i>
                                                <span>meh</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="menu" class="icon-dual"></i>
                                                <span>menu</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="message-circle" class="icon-dual"></i>
                                                <span>message-circle</span>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="message-square" class="icon-dual"></i>
                                                <span>message-square</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="mic-off" class="icon-dual"></i>
                                                <span>mic-off</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="mic" class="icon-dual"></i>
                                                <span>mic</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="minimize-2" class="icon-dual"></i>
                                                <span>minimize-2</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="minimize" class="icon-dual"></i>
                                                <span>minimize</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="minus-circle" class="icon-dual"></i>
                                                <span>minus-circle</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="minus-square" class="icon-dual"></i>
                                                <span>minus-square</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="minus" class="icon-dual"></i>
                                                <span>minus</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="monitor" class="icon-dual"></i>
                                                <span>monitor</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="moon" class="icon-dual"></i>
                                                <span>moon</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="more-horizontal" class="icon-dual"></i>
                                                <span>more-horizontal</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="more-vertical" class="icon-dual"></i>
                                                <span>more-vertical</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="mouse-pointer" class="icon-dual"></i>
                                                <span>mouse-pointer</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="move" class="icon-dual"></i>
                                                <span>move</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="music" class="icon-dual"></i>
                                                <span>music</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="navigation-2" class="icon-dual"></i>
                                                <span>navigation-2</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="navigation" class="icon-dual"></i>
                                                <span>navigation</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="octagon" class="icon-dual"></i>
                                                <span>octagon</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="package" class="icon-dual"></i>
                                                <span>package</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="paperclip" class="icon-dual"></i>
                                                <span>paperclip</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="pause-circle" class="icon-dual"></i>
                                                <span>pause-circle</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="pause" class="icon-dual"></i>
                                                <span>pause</span>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="pen-tool" class="icon-dual"></i>
                                                <span>pen-tool</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="percent" class="icon-dual"></i>
                                                <span>percent</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="phone-call" class="icon-dual"></i>
                                                <span>phone-call</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="phone-forwarded" class="icon-dual"></i>
                                                <span>phone-forwarded</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="phone-incoming" class="icon-dual"></i>
                                                <span>phone-incoming</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="phone-missed" class="icon-dual"></i>
                                                <span>phone-missed</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="phone-off" class="icon-dual"></i>
                                                <span>phone-off</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="phone-outgoing" class="icon-dual"></i>
                                                <span>phone-outgoing</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="phone" class="icon-dual"></i>
                                                <span>phone</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="pie-chart" class="icon-dual"></i>
                                                <span>pie-chart</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="play-circle" class="icon-dual"></i>
                                                <span>play-circle</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="play" class="icon-dual"></i>
                                                <span>play</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="plus-circle" class="icon-dual"></i>
                                                <span>plus-circle</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="plus-square" class="icon-dual"></i>
                                                <span>plus-square</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="plus" class="icon-dual"></i>
                                                <span>plus</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="pocket" class="icon-dual"></i>
                                                <span>pocket</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="power" class="icon-dual"></i>
                                                <span>power</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="printer" class="icon-dual"></i>
                                                <span>printer</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="radio" class="icon-dual"></i>
                                                <span>radio</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="refresh-ccw" class="icon-dual"></i>
                                                <span>refresh-ccw</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="refresh-cw" class="icon-dual"></i>
                                                <span>refresh-cw</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="repeat" class="icon-dual"></i>
                                                <span>repeat</span>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="rewind" class="icon-dual"></i>
                                                <span>rewind</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="rotate-ccw" class="icon-dual"></i>
                                                <span>rotate-ccw</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="rotate-cw" class="icon-dual"></i>
                                                <span>rotate-cw</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="rss" class="icon-dual"></i>
                                                <span>rss</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="save" class="icon-dual"></i>
                                                <span>save</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="scissors" class="icon-dual"></i>
                                                <span>scissors</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="search" class="icon-dual"></i>
                                                <span>search</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="send" class="icon-dual"></i>
                                                <span>send</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="server" class="icon-dual"></i>
                                                <span>server</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="settings" class="icon-dual"></i>
                                                <span>settings</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="share-2" class="icon-dual"></i>
                                                <span>share-2</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="share" class="icon-dual"></i>
                                                <span>share</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="shield-off" class="icon-dual"></i>
                                                <span>shield-off</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="shield" class="icon-dual"></i>
                                                <span>shield</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="shopping-bag" class="icon-dual"></i>
                                                <span>shopping-bag</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="shopping-cart" class="icon-dual"></i>
                                                <span>shopping-cart</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="shuffle" class="icon-dual"></i>
                                                <span>shuffle</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="sidebar" class="icon-dual"></i>
                                                <span>sidebar</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="skip-back" class="icon-dual"></i>
                                                <span>skip-back</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="skip-forward" class="icon-dual"></i>
                                                <span>skip-forward</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="slack" class="icon-dual"></i>
                                                <span>slack</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="slash" class="icon-dual"></i>
                                                <span>slash</span>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="sliders" class="icon-dual"></i>
                                                <span>sliders</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="smartphone" class="icon-dual"></i>
                                                <span>smartphone</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="smile" class="icon-dual"></i>
                                                <span>smile</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="speaker" class="icon-dual"></i>
                                                <span>speaker</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="square" class="icon-dual"></i>
                                                <span>square</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="star" class="icon-dual"></i>
                                                <span>star</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="stop-circle" class="icon-dual"></i>
                                                <span>stop-circle</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="sun" class="icon-dual"></i>
                                                <span>sun</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="sunrise" class="icon-dual"></i>
                                                <span>sunrise</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="sunset" class="icon-dual"></i>
                                                <span>sunset</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="tablet" class="icon-dual"></i>
                                                <span>tablet</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="tag" class="icon-dual"></i>
                                                <span>tag</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="target" class="icon-dual"></i>
                                                <span>target</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="terminal" class="icon-dual"></i>
                                                <span>terminal</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="thermometer" class="icon-dual"></i>
                                                <span>thermometer</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="thumbs-down" class="icon-dual"></i>
                                                <span>thumbs-down</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="thumbs-up" class="icon-dual"></i>
                                                <span>thumbs-up</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="toggle-left" class="icon-dual"></i>
                                                <span>toggle-left</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="toggle-right" class="icon-dual"></i>
                                                <span>toggle-right</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="tool" class="icon-dual"></i>
                                                <span>tool</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="trash-2" class="icon-dual"></i>
                                                <span>trash-2</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="trash" class="icon-dual"></i>
                                                <span>trash</span>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="trello" class="icon-dual"></i>
                                                <span>trello</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="trending-down" class="icon-dual"></i>
                                                <span>trending-down</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="trending-up" class="icon-dual"></i>
                                                <span>trending-up</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="triangle" class="icon-dual"></i>
                                                <span>triangle</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="truck" class="icon-dual"></i>
                                                <span>truck</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="tv" class="icon-dual"></i>
                                                <span>tv</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="twitch" class="icon-dual"></i>
                                                <span>twitch</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="twitter" class="icon-dual"></i>
                                                <span>twitter</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="type" class="icon-dual"></i>
                                                <span>type</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="umbrella" class="icon-dual"></i>
                                                <span>umbrella</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="underline" class="icon-dual"></i>
                                                <span>underline</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="unlock" class="icon-dual"></i>
                                                <span>unlock</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="upload-cloud" class="icon-dual"></i>
                                                <span>upload-cloud</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="upload" class="icon-dual"></i>
                                                <span>upload</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="user-check" class="icon-dual"></i>
                                                <span>user-check</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="user-minus" class="icon-dual"></i>
                                                <span>user-minus</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="user-plus" class="icon-dual"></i>
                                                <span>user-plus</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="user-x" class="icon-dual"></i>
                                                <span>user-x</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="user" class="icon-dual"></i>
                                                <span>user</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="users" class="icon-dual"></i>
                                                <span>users</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="video-off" class="icon-dual"></i>
                                                <span>video-off</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="video" class="icon-dual"></i>
                                                <span>video</span>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="voicemail" class="icon-dual"></i>
                                                <span>voicemail</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="volume-1" class="icon-dual"></i>
                                                <span>volume-1</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="volume-2" class="icon-dual"></i>
                                                <span>volume-2</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="volume-x" class="icon-dual"></i>
                                                <span>volume-x</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="volume" class="icon-dual"></i>
                                                <span>volume</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="watch" class="icon-dual"></i>
                                                <span>watch</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="wifi-off" class="icon-dual"></i>
                                                <span>wifi-off</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="wifi" class="icon-dual"></i>
                                                <span>wifi</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="wind" class="icon-dual"></i>
                                                <span>wind</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="x-circle" class="icon-dual"></i>
                                                <span>x-circle</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="x-octagon" class="icon-dual"></i>
                                                <span>x-octagon</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="x-square" class="icon-dual"></i>
                                                <span>x-square</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="x" class="icon-dual"></i>
                                                <span>x</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="youtube" class="icon-dual"></i>
                                                <span>youtube</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="zap-off" class="icon-dual"></i>
                                                <span>zap-off</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="zap" class="icon-dual"></i>
                                                <span>zap</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="zoom-in" class="icon-dual"></i>
                                                <span>zoom-in</span>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="">
                                                <i data-feather="zoom-out" class="icon-dual"></i>
                                                <span>zoom-out</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div><!-- container -->
@stop
