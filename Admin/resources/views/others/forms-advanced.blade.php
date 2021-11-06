@extends('layouts.master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('headerStyle')
        <!-- Plugins css -->
<link href="{{ URL::asset('plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />
<link href="{{ URL::asset('plugins/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('plugins/timepicker/bootstrap-material-datetimepicker.css')}}" rel="stylesheet">
1<link href="{{ URL::asset('plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
@stop

@section('content')
  <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                               @component('common-components.breadcrumb')
                                 @slot('title') Form Advanced @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') UI Kit @endslot
                                 @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body bootstrap-select-1">
                                    <h4 class="header-title mt-0">Select2 Components</h4>
                                    <p class="text-muted mb-3">Select2 is a jQuery based replacement for select boxes. 
                                        It supports searching, remote data sets, and infinite scrolling of results. 
                                    </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="mb-3">Single select</label>
                                            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;">
                                                <option>Select</option>
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                                <optgroup label="Mountain Time Zone">
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                </optgroup>
                                                <optgroup label="Central Time Zone">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="WI">Wisconsin</option>
                                                </optgroup>
                                                <optgroup label="Eastern Time Zone">
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WV">West Virginia</option>
                                                </optgroup>
                                            </select>
                                        </div><!-- end col -->                                     
                                        <div class="col-md-6">
                                            <label class="mb-3">Multiple Select</label>
                                            <select class="select2 mb-3 select2-multiple" style="width: 100%" multiple="multiple" data-placeholder="Choose">
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                                <optgroup label="Mountain Time Zone">
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                </optgroup>
                                                <optgroup label="Central Time Zone">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="WI">Wisconsin</option>
                                                </optgroup>
                                                <optgroup label="Eastern Time Zone">
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WV">West Virginia</option>
                                                </optgroup>
                                            </select> 
                                        </div> <!-- end col -->                                                
                                    </div><!-- end row --> 
                                </div><!-- end card-body --> 
                            </div> <!-- end card -->                               
                        </div> <!-- end col -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body bootstrap-select-1">
                                    <h4 class="mt-0 header-title">Bootstrap Colorpicker</h4>
                                    <p class="text-muted mb-3">Most simple example, with any options or color information. </p>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="mb-3">Simple mode</label> 
                                            <div id="b_color-default" class="input-group" title="Using input value">
                                                <input type="text" class="form-control input-lg" value="#f5a416"/>
                                                <span class="input-group-append">
                                                    <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                                </span>
                                            </div>
                                        </div>  <!-- end row -->                                  
                                        <div class="col-md-4">
                                            <label class="mb-3">RGB mode</label>                                            
                                            <div id="b_color_rgb" class="input-group" data-color="rgb(21, 178, 236)"
                                                    title="Using data-color attribute in the colorpicker element">
                                                <input type="text" class="form-control input-lg"/>
                                                <span class="input-group-append">
                                                    <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                                </span>
                                            </div>
                                        </div><!-- end row -->
                                        <div class="col-md-4">
                                            <label class="mb-3">HSL mode</label>                                           
                                            <div id="b_color_hsl" class="input-group" title="Using data-color attribute in the input">
                                                <input type="text" class="form-control input-lg" data-color="hsl(150, 86%, 48%)"/>
                                                <span class="input-group-append">
                                                    <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                                </span>
                                            </div>
                                        </div><!-- end row -->
                                    </div><!-- end row -->
                                </div> <!-- end card-body -->
                            </div> <!-- end card -->                               
                        </div> <!-- end col -->
                    </div> <!-- end row --> 

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0">Bootstrap Material Datetimepicker</h4>
                                    <p class="text-muted mb-3">An example of Bootstrap Material DatePicker.</p> 
                                    <div class="form-material">
                                        <label class="mb-3">Default Material Date Picker</label>
                                        <input type="text" class="form-control" placeholder="2017-06-04" id="mdate">
                                        
                                        <label class="my-3">Default Material Date Timepicker</label>
                                        <input type="text" id="date-format" class="form-control" placeholder="Saturday 24 June 2017 - 21:44">

                                        <label class="my-3">Time Picker</label>
                                        <input class="form-control" id="timepicker" placeholder="Check time">
                                        
                                        <label class="my-3">Min Date set</label>
                                        <input type="text" class="form-control" placeholder="set min date" id="min-date">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="my-3">Start Date</label>
                                                <input type="text" class="form-control" placeholder="Start date" id="date-start">
                                            </div><!--end col-->
                                            <div class="col-md-6">
                                                <label class="my-3">End Date</label>
                                                <input type="text" class="form-control" placeholder="End date" id="date-end">
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div>       
                                </div><!--end card-body-->
                            </div><!--end card-->                                
                        </div> <!-- end col -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Date Range Picker</h4>  
                                    <P class="mt-0 text-muted mb-3">A JavaScript component for choosing date ranges, dates and times.</P> 
                                    <label class="mb-3">Basic Example</label>                             
                                    <div class="input-group">                                            
                                        <input type="text" class="form-control" name="dates">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="dripicons-calendar"></i></span>
                                        </div>
                                    </div>
                                    <label class="my-3">Simple Date Range Picker With a Callback</label>
                                    <div class="input-group">                                            
                                        <input type="text" class="form-control" name="daterange">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="dripicons-calendar"></i></span>
                                        </div>
                                    </div>
                                    <label class="my-3">Date Range Picker With Times</label>
                                    <div class="input-group">                                            
                                        <input type="text" class="form-control" name="datetimes">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="dripicons-calendar"></i></span>
                                        </div>
                                    </div>
                                    <label class="my-3">Single Date Picker</label>
                                    <div class="input-group">                                            
                                        <input type="text" class="form-control" name="birthday" value="10/24/1984">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="dripicons-calendar"></i></span>
                                        </div>
                                    </div>
                                    <label class="my-3">Predefined Date Ranges</label>
                                    <div class="input-group">  
                                        <input type="text"  id="reportrange" class="form-control" value="10/24/1984">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="dripicons-calendar"></i></span>
                                        </div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->  
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body"> 
                                    <h4 class="mt-0 header-title">Bootstrap MaxLength</h4>
                                    <p class="text-muted mb-3">This plugin integrates by default with
                                        Twitter bootstrap using badges to display the maximum lenght of the
                                        field where the user is inserting text. 
                                    </p>
                                    <label class="mb-2">Default usage</label>
                                    <p class="text-muted mb-3 font-13">
                                        The badge will show up by default when the remaining chars are 10 or less:
                                    </p>

                                    <input type="text" class="form-control" maxlength="25" name="defaultconfig" id="defaultconfig" />            
                                    <div class="mt-3">
                                        <label class="mb-2">Threshold value</label>
                                        <p class="text-muted mb-3 font-13">
                                            Do you want the badge to show up when there are 20 chars or less? Use the <code>threshold</code> option:
                                        </p>
                                        <input type="text" maxlength="25" name="thresholdconfig" class="form-control" id="thresholdconfig" />
                                    </div>

                                    <div class="mt-3">
                                        <label class="mb-2">Position</label>
                                        <p class="text-muted  mb-3 font-13">
                                            All you need to do is specify the <code>placement</code> option, with one of those strings. If none
                                            is specified, the positioning will be defauted to 'bottom'.
                                        </p>
                                        <input type="text" class="form-control" maxlength="25" name="placement" id="placement" />
                                    </div>                                    
                                    <div class="mt-3">
                                        <label class="mb-2">All the options</label>
                                        <p class="text-muted  mb-3 font-13">
                                            Please note: if the <code>alwaysShow</code> option is enabled, the <code>threshold</code> option is ignored.
                                        </p>
                                        <input type="text" class="form-control" maxlength="25" name="alloptions" id="alloptions" />
                                    </div>

                                    <div class="mt-3">
                                        <label class="mb-2">textareas</label>
                                        <p class="text-muted  mb-3 font-13">
                                            Bootstrap maxlength supports textarea as well as inputs. Even on old IE.
                                        </p>
                                        <textarea id="textarea" class="form-control" maxlength="225" rows="3" placeholder="This textarea has a limit of 225 chars."></textarea>
                                    </div>                                    
                                </div> <!-- end card-body -->
                            </div> <!-- end card -->                                       
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">            
                                    <h4 class="mt-0 header-title">Bootstrap TouchSpin</h4>
                                    <p class="text-muted  mb-3">A mobile and touch friendly input spinner component for Bootstrap</p>
                                    <form>
                                        <div class="form-group">
                                            <label class="mb-3">Using data attributes</label>
                                            <input id="demo0" type="text" value="55" name="demo0" data-bts-min="0" data-bts-max="100" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default"/>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-3">Init with empty value:</label>
                                            <input id="demo3" type="text" value="" name="demo3">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-3">Example with postfix (large)</label>
                                            <input id="demo1" type="text" value="55" name="demo1">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-3">Value attribute is not set (applying settings.initval)</label>
                                            <input id="demo3_21" type="text" value="" name="demo3_21">
                                        </div>
                                        <div class="form-group mb-2">
                                            <label class="mb-3">With prefix </label>
                                            <input id="demo2" type="text" value="0" name="demo2" class=" form-control">
                                        </div>
                                        <div class="form-group mb-0">
                                            <label class="mb-3">Value is set explicitly to 33 (skipping settings.initval) </label>
                                            <input id="demo3_22" type="text" value="33" name="demo3_22">
                                        </div>  
                                    </form>
                                </div> <!-- end card-body -->
                            </div> <!-- end card -->
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                </div><!-- container -->
@stop

@section('footerScript')
<!-- Plugins js -->
        <script src="{{ URL::asset('plugins/moment/moment.js')}}"></script>
        <script src="{{ URL::asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
        <script src="{{ URL::asset('plugins/select2/select2.min.js')}}"></script>
        <script src="{{ URL::asset('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
        <script src="{{ URL::asset('plugins/timepicker/bootstrap-material-datetimepicker.js')}}"></script>
        <script src="{{ URL::asset('plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
        <script src="{{ URL::asset('plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js')}}"></script>
        <script src="{{ URL::asset('assets/pages/jquery.forms-advanced.js')}}"></script>
        

@stop