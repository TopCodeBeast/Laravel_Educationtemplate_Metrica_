@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('headerStyle')
<link href="{{ URL::asset('plugins/footable/css/footable.bootstrap.css')}}" rel="stylesheet" type="text/css">
@stop

@section('content')
       <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                             @component('common-components.breadcrumb')
                                 @slot('title') Footable @endslot
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
                                    <h4 class="header-title mt-0">Single Headers</h4>
                                    <p class="text-muted mb-3">How to create tables that have a single header row.</p>
                                    <table id="footable-1" class="table" data-sorting="true">
                                        <thead>
                                            <tr>
                                                <th data-name="id" data-breakpoints="xs" data-type="number">ID</th>
                                                <th data-name="firstName">First Name</th>
                                                <th data-name="lastName">Last Name</th>
                                                <th data-name="jobTitle" data-breakpoints="xs">Job Title</th>
                                                <th data-name="startedOn" data-breakpoints="xs sm" data-type="date" data-format-string="MMMM Do YYYY">Started On</th>
                                                <th data-name="dob" data-breakpoints="xs sm md" data-type="date" data-format-string="MMMM Do YYYY">Date of Birth</th>
                                            </tr>
                                        </thead>
                                        
                                        <tr>
                                            <td data-title="ID" data-breakpoints="xs">1</td>
                                            <td>Dennise</td>
                                            <td>Fuhrman</td>
                                            <td data-title="Job Title" data-breakpoints="xs">High School History Teacher</td>
                                            <td data-title="Started On" data-breakpoints="xs sm">November 8th 2011</td>
                                            <td data-title="Date of Birth" data-breakpoints="xs sm md">July 25th 1960</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Elodia</td>
                                            <td>Weisz</td>
                                            <td>Wallpaperer Helper</td>
                                            <td>October 15th 2010</td>
                                            <td>March 30th 1982</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Raeann</td>
                                            <td>Haner</td>
                                            <td>Internal Medicine Nurse Practitioner</td>
                                            <td>November 28th 2013</td>
                                            <td>February 26th 1966</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Junie</td>
                                            <td>Landa</td>
                                            <td>Offbearer</td>
                                            <td>October 31st 2010</td>
                                            <td>March 29th 1966</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Solomon</td>
                                            <td>Bittinger</td>
                                            <td>Roller Skater</td>
                                            <td>December 29th 2011</td>
                                            <td>September 22nd 1964</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Bar</td>
                                            <td>Lewis</td>
                                            <td>Clown</td>
                                            <td>November 12th 2012</td>
                                            <td>August 4th 1991</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Usha</td>
                                            <td>Leak</td>
                                            <td>Ships Electronic Warfare Officer</td>
                                            <td>August 14th 2012</td>
                                            <td>November 20th 1979</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Lorriane</td>
                                            <td>Cooke</td>
                                            <td>Technical Services Librarian</td>
                                            <td>September 21st 2010</td>
                                            <td>April 7th 1969</td>
                                        </tr>
                                    </table><!--end table-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                        
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0">Editing rows</h4>
                                    <p class="text-muted mb-3">How to create a table that uses the editing component.</p>
                                    <table id="footable-3" class="table mb-0" data-paging="true" data-filtering="true" data-sorting="true">
                                        <thead>
                                            <tr>
                                                <th data-name="id" data-breakpoints="xs" data-type="number">ID</th>
                                                <th data-name="firstName">First Name</th>
                                                <th data-name="lastName">Last Name</th>
                                                <th data-name="jobTitle" data-breakpoints="xs">Job Title</th>
                                                <th data-name="startedOn" data-breakpoints="xs sm" data-type="date" data-format-string="MMMM Do YYYY">Started On</th>
                                                <th data-name="dob" data-breakpoints="xs sm md" data-type="date" data-format-string="MMMM Do YYYY">Date of Birth</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr data-expanded="true">
                                                <td>1</td>
                                                <td>Dennise</td>
                                                <td>Fuhrman</td>
                                                <td>High School History Teacher</td>
                                                <td>November 8th 2011</td>
                                                <td>July 25th 1960</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Elodia</td>
                                                <td>Weisz</td>
                                                <td>Wallpaperer Helper</td>
                                                <td>October 15th 2010</td>
                                                <td>March 30th 1982</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Raeann</td>
                                                <td>Haner</td>
                                                <td>Internal Medicine Nurse Practitioner</td>
                                                <td>November 28th 2013</td>
                                                <td>February 26th 1966</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Junie</td>
                                                <td>Landa</td>
                                                <td>Offbearer</td>
                                                <td>October 31st 2010</td>
                                                <td>March 29th 1966</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Solomon</td>
                                                <td>Bittinger</td>
                                                <td>Roller Skater</td>
                                                <td>December 29th 2011</td>
                                                <td>September 22nd 1964</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Bar</td>
                                                <td>Lewis</td>
                                                <td>Clown</td>
                                                <td>November 12th 2012</td>
                                                <td>August 4th 1991</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Usha</td>
                                                <td>Leak</td>
                                                <td>Ships Electronic Warfare Officer</td>
                                                <td>August 14th 2012</td>
                                                <td>November 20th 1979</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Lorriane</td>
                                                <td>Cooke</td>
                                                <td>Technical Services Librarian</td>
                                                <td>September 21st 2010</td>
                                                <td>April 7th 1969</td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Nelly</td>
                                                <td>Lusher</td>
                                                <td>Broadcast Maintenance Engineer</td>
                                                <td>October 21st 2013</td>
                                                <td>February 16th 1983</td>
                                            </tr>
                                        </tbody>
                                    </table><!--end table-->

                                    <!--Editor-->
                                    <div class="modal fade" id="editor-modal" tabindex="-1" role="dialog" aria-labelledby="editor-title">
                                    
                                        <div class="modal-dialog" role="document">
                                            <form class="modal-content form-horizontal" id="editor">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editor-title">Add Row</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>                                                            
                                                </div>
                                                <div class="modal-body">
                                                   
                                                    <div class="form-group required row">
                                                        <label for="firstName" class="col-sm-3 control-label">First Name</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group require row">
                                                        <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="jobTitle" class="col-sm-3 control-label">Job Title</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="jobTitle" name="jobTitle" placeholder="Job Title">
                                                        </div>
                                                    </div>
                                                    <div class="form-group required row">
                                                        <label for="startedOn" class="col-sm-3 control-label">Started On</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="startedOn" name="startedOn" placeholder="Started On" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="dob" class="col-sm-3 control-label">Date of Birth</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="dob" name="dob" placeholder="Date of Birth">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-gradient-primary">Save changes</button>
                                                    <button type="button" class="btn btn-gradient-danger" data-dismiss="modal">Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div><!--end modal-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                    
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0">Row Toggle</h4>
                                    <p class="text-muted mb-3">How to disable the row toggle or change its position.</p>
                                    <table id="footable-2" class="table mb-0" data-filtering="true"  data-show-toggle="false">
                                        <thead>
                                            <tr>
                                                <th data-breakpoints="xs">ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th data-breakpoints="xs">Job Title</th>
                                                <th data-breakpoints="xs sm">Started On</th>
                                                <th data-breakpoints="all" data-title="DOB">Date of Birth</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr data-expanded="true">
                                                <td>1</td>
                                                <td>Dennise</td>
                                                <td>Fuhrman</td>
                                                <td>High School History Teacher</td>
                                                <td>November 8th 2011</td>
                                                <td>July 25th 1960</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Elodia</td>
                                                <td>Weisz</td>
                                                <td>Wallpaperer Helper</td>
                                                <td>October 15th 2010</td>
                                                <td>March 30th 1982</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Raeann</td>
                                                <td>Haner</td>
                                                <td>Internal Medicine Nurse Practitioner</td>
                                                <td>November 28th 2013</td>
                                                <td>February 26th 1966</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Junie</td>
                                                <td>Landa</td>
                                                <td>Offbearer</td>
                                                <td>October 31st 2010</td>
                                                <td>March 29th 1966</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Solomon</td>
                                                <td>Bittinger</td>
                                                <td>Roller Skater</td>
                                                <td>December 29th 2011</td>
                                                <td>September 22nd 1964</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Bar</td>
                                                <td>Lewis</td>
                                                <td>Clown</td>
                                                <td>November 12th 2012</td>
                                                <td>August 4th 1991</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Usha</td>
                                                <td>Leak</td>
                                                <td>Ships Electronic Warfare Officer</td>
                                                <td>August 14th 2012</td>
                                                <td>November 20th 1979</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Lorriane</td>
                                                <td>Cooke</td>
                                                <td>Technical Services Librarian</td>
                                                <td>September 21st 2010</td>
                                                <td>April 7th 1969</td>
                                            </tr>
                                        </tbody>
                                    </table><!--end table-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                </div><!-- container -->
@stop

@section('footerScript')
<script src="{{ URL::asset('plugins/footable/js/footable.js')}}"></script>
        <script src="{{ URL::asset('plugins/moment/moment.js')}}"></script> 
        <script src="{{ URL::asset('assets/pages/jquery.footable.init.js')}}"></script> 
        
@stop