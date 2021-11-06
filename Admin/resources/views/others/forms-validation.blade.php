@extends('layouts.master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
  <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            
                             @component('common-components.breadcrumb')
                                 @slot('title') Validation @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') UI Kit @endslot
                                 @endcomponent
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Custom styles</h4>
                                    <p class="text-muted mb-3">Custom feedback styles apply custom colors, borders, focus styles, and background icons to better communicate feedback. 
                                        Background icons for <code class="highlighter-rouge">&lt;select&gt;</code>s are only 
                                        available with <code class="highlighter-rouge">.custom-select</code>, and not <code class="highlighter-rouge">.form-control</code>.
                                    </p>
                                    <form class="needs-validation" novalidate> 
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom01">First name</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom02">Last name</label>
                                                <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustomUsername">Username</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                    </div>
                                                    <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                                                    <div class="invalid-feedback">
                                                        Please choose a username.
                                                    </div>
                                                </div>                                          
                                            </div><!--end col-->
                                        </div><!--end form-row-->
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom03">City</label>
                                                <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid city.
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom04">State</label>
                                                <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid state.
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom05">Zip</label>
                                                <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid zip.
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end form-row-->
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                                <label class="form-check-label" for="invalidCheck">
                                                    Agree to terms and conditions
                                                </label>
                                                <div class="invalid-feedback">
                                                    You must agree before submitting.
                                                </div>
                                            </div>
                                        </div><!--end form-group-->
                                        <button class="btn btn-gradient-primary" type="submit">Submit form</button>
                                    </form> <!--end form-->                                          
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Validation Tooltips</h4>
                                    <p class="text-muted mb-3">Custom feedback styles apply custom colors, borders, focus styles, and background icons to better communicate feedback. 
                                        Background icons for <code class="highlighter-rouge">&lt;select&gt;</code>s are only 
                                        available with <code class="highlighter-rouge">.custom-select</code>, and not <code class="highlighter-rouge">.form-control</code>.
                                    </p>
                                    <form class="needs-validation" novalidate>
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label for="validationTooltip01">First name</label>
                                                <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Mark" required>
                                                <div class="valid-tooltip">
                                                    Looks good!
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-4 mb-3">
                                                <label for="validationTooltip02">Last name</label>
                                                <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required>
                                                <div class="valid-tooltip">
                                                    Looks good!
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-4 mb-3">
                                                <label for="validationTooltipUsername">Username</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                                                    </div>
                                                    <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
                                                    <div class="invalid-tooltip">
                                                        Please choose a unique and valid username.
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end form-row-->

                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationTooltip03">City</label>
                                                <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
                                                <div class="invalid-tooltip">
                                                    Please provide a valid city.
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-3 mb-3">
                                                <label for="validationTooltip04">State</label>
                                                <input type="text" class="form-control" id="validationTooltip04" placeholder="State" required>
                                                <div class="invalid-tooltip">
                                                    Please provide a valid state.
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-3 mb-3">
                                                <label for="validationTooltip05">Zip</label>
                                                <input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" required>
                                                <div class="invalid-tooltip">
                                                    Please provide a valid zip.
                                                </div>
                                            </div>
                                        </div><!--end form-row-->
                                        <button class="btn btn-gradient-primary" type="submit">Submit form</button>
                                    </form><!--end form-->                                      
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Validation type</h4>
                                    <p class="text-muted mb-3">Parsley is a javascript form validation
                                        library. It helps you provide your users with feedback on their form
                                        submission before sending it to your server.
                                    </p>
    
                                    <form class="form-parsley" action="#">
                                        <div class="form-group">
                                            <label>Required</label>
                                            <input type="text" class="form-control" required placeholder="Type something"/>
                                        </div><!--end form-group-->
    
                                        <div class="form-group">
                                            <label>Equal To</label>
                                            <input type="password" id="pass2" class="form-control" required
                                                        placeholder="Password"/>
                                            <div class="mt-2">
                                                <input type="password" class="form-control" required
                                                        data-parsley-equalto="#pass2"
                                                        placeholder="Re-Type Password"/>
                                            </div>
                                        </div><!--end form-group-->
    
                                        <div class="form-group">
                                            <label>E-Mail</label>
                                            <div>
                                                <input type="email" class="form-control" required
                                                        parsley-type="email" placeholder="Enter a valid e-mail"/>
                                            </div>
                                        </div><!--end form-group-->

                                        <div class="form-group">
                                            <label>URL</label>
                                            <input parsley-type="url" type="url" class="form-control"
                                                        required placeholder="URL"/>
                                        </div><!--end form-group-->

                                        <div class="form-group">
                                            <label>Digits</label>
                                            <input data-parsley-type="digits" type="text"
                                            class="form-control" required
                                            placeholder="Enter only digits"/>
                                        </div><!--end form-group-->

                                        <div class="form-group">
                                            <label>Number</label>
                                            <div>
                                                <input data-parsley-type="number" type="text"
                                                        class="form-control" required
                                                        placeholder="Enter only numbers"/>
                                            </div>
                                        </div><!--end form-group-->

                                        <div class="form-group">
                                            <label>Alphanumeric</label>
                                            <input data-parsley-type="alphanum" type="text"
                                                        class="form-control" required
                                                        placeholder="Enter alphanumeric value"/>
                                        </div><!--end form-group-->

                                        <div class="form-group">
                                            <label>Textarea</label>
                                            <textarea required class="form-control" rows="5"></textarea>
                                        </div><!--end form-group-->

                                        <div class="form-group mb-0">
                                            <button type="submit" class="btn btn-gradient-primary waves-effect waves-light">
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-gradient-danger waves-effect m-l-5">
                                                Cancel
                                            </button>
                                        </div><!--end form-group-->
                                    </form><!--end form-->        
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
    
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Range validation</h4>
                                    <p class="text-muted mb-3">Parsley is a javascript form validation
                                        library. It helps you provide your users with feedback on their form
                                        submission before sending it to your server.</p>
    
                                    <form class="form-parsley" action="#">    
                                        <div class="form-group">
                                            <label>Min Length</label>
                                            <input type="text" class="form-control" required
                                            data-parsley-minlength="6" placeholder="Min 6 chars."/>
                                        </div><!--end form-group-->

                                        <div class="form-group">
                                            <label>Max Length</label>
                                            <input type="text" class="form-control" required
                                                        data-parsley-maxlength="6" placeholder="Max 6 chars."/>
                                        </div><!--end form-group-->

                                        <div class="form-group">
                                            <label>Range Length</label>
                                            <input type="text" class="form-control" required
                                                        data-parsley-length="[5,10]"
                                                        placeholder="Text between 5 - 10 chars length"/>
                                        </div><!--end form-group-->

                                        <div class="form-group">
                                            <label>Min Value</label>
                                            <input type="text" class="form-control" required
                                            data-parsley-min="6" placeholder="Min value is 6"/>
                                        </div><!--end form-group-->

                                        <div class="form-group">
                                            <label>Max Value</label>
                                            <input type="text" class="form-control" required
                                            data-parsley-max="6" placeholder="Max value is 6"/>
                                        </div><!--end form-group-->

                                        <div class="form-group">
                                            <label>Range Value</label>
                                            <input class="form-control" required type="text" min="6"
                                                        max="100" placeholder="Number between 6 - 100"/>
                                        </div><!--end form-group-->

                                        <div class="form-group">
                                            <label>Regular Exp</label>
                                            <input type="text" class="form-control" required
                                                data-parsley-pattern="#[A-Fa-f0-9]{6}"
                                                placeholder="Hex. Color"/>
                                        </div><!--end form-group-->
    
                                        <div class="form-group">
                                            <label>Min check</label>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1" data-parsley-multiple="groups"
                                                        data-parsley-mincheck="2">
                                                <label class="custom-control-label" for="customCheck1">And this</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2" data-parsley-multiple="groups"
                                                        data-parsley-mincheck="2">
                                                <label class="custom-control-label" for="customCheck2">Can't check this</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck3" data-parsley-multiple="groups"
                                                        data-parsley-mincheck="2">
                                                <label class="custom-control-label" for="customCheck3">This too</label>
                                            </div>
                                        </div><!--end form-group-->
    
                                        <div class="form-group mb-0">
                                            <button type="submit" class="btn btn-gradient-primary waves-effect waves-light">
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-gradient-danger waves-effect m-l-5">
                                                Cancel
                                            </button>
                                        </div><!--end form-group-->
                                    </form><!--end form-->        
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                </div><!-- container -->

@stop

@section('footerScript')

        <!-- Parsley js -->
        <script src="{{ URL::asset('plugins/parsleyjs/parsley.min.js')}}"></script>
        <script src="{{ URL::asset('assets/pages/jquery.validation.init.js')}}"></script>
        
        <!-- App js -->
        <script src="../assets/js/jquery.core.js"></script>
@stop