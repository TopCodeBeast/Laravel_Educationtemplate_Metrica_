@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
   <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                             @component('common-components.breadcrumb')
                                 @slot('title') Form Elements @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') UI Kit @endslot
                                 @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Textual inputs</h4>
                                    <p class="text-muted mb-3">Here are examples of <code class="highlighter-rouge">.form-control</code> applied to each
                                        textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code class="highlighter-rouge">type</code>.
                                    </p>
                                    
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label text-right">Text</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-email-input" class="col-sm-2 col-form-label text-right">Email</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="example-tel-input" class="col-sm-2 col-form-label text-right">Telephone</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-password-input" class="col-sm-2 col-form-label text-right">Password</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="password" value="hunter2" id="example-password-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-number-input" class="col-sm-2 col-form-label text-right">Number</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="number" value="42" id="example-number-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-datetime-local-input" class="col-sm-2 col-form-label text-right">Date and time</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="example-color-input" class="col-sm-2 col-form-label text-right">Color</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="color" value="#125eff" id="example-color-input">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label text-right">Select</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control">
                                                        <option>Select</option>
                                                        <option>Large select</option>
                                                        <option>Small select</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label text-right">Custom Select</label>
                                                <div class="col-sm-10">
                                                    <select class="custom-select">
                                                        <option selected="">Open this select menu</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input-lg" class="col-sm-2 col-form-label text-right">Large</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" id="example-text-input-lg">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input-sm" class="col-sm-2 col-form-label text-right">Small</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" id="example-text-input-sm">
                                                </div>
                                            </div>                                   
                                        </div>


                                        <div class="col-lg-6">
                                            <div class="form-group row">
                                                <label for="example-search-input" class="col-sm-2 col-form-label text-right">Search</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="example-url-input" class="col-sm-2 col-form-label text-right">URL</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label text-right">Date</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-month-input" class="col-sm-2 col-form-label text-right">Month</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="month" value="2011-08" id="example-month-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-week-input" class="col-sm-2 col-form-label text-right">Week</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="week" value="2011-W33" id="example-week-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label text-right">Time</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                                                </div>
                                            </div>
                                            <div class="form-group row has-success">
                                                <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label text-right">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control form-control-success" id="inputHorizontalSuccess" placeholder="name@example.com">
                                                    <div class="form-control-feedback">Success! You've done it.</div>
                                                    <small class="form-text text-muted">Example help text that remains unchanged.</small>
                                                </div>
                                            </div>
                                            <div class="form-group row has-warning">
                                                <label for="inputHorizontalWarning" class="col-sm-2 col-form-label text-right">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control form-control-warning" id="inputHorizontalWarning" placeholder="name@example.com">
                                                    <div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
                                                    <small class="form-text text-muted">Example help text that remains unchanged.</small>
                                                </div>
                                            </div>
                                            <div class="form-group row has-error">
                                                <label for="inputHorizontalDnger" class="col-sm-2 col-form-label text-right">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control form-control-danger" id="inputHorizontalDnger" placeholder="name@example.com">
                                                    <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
                                                    <small class="form-text text-muted">Example help text that remains unchanged.</small>
                                                </div>
                                            </div>                                            
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
                                    <h4 class="mt-0 header-title">Basic Form</h4>
                                    <p class="text-muted mb-3">Basic example to demonstrate Bootstrap’s form styles.</p> 
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                        </div>
                                        <button type="submit" class="btn btn-gradient-primary">Submit</button>
                                        <button type="button" class="btn btn-gradient-danger">Cancel</button>
                                    </form>                                           
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Horizontal form</h4>
                                    <p class="text-muted mb-3">Be sure to use <code class="highlighter-rouge">.col-form-label-sm</code> 
                                        or <code class="highlighter-rouge">.col-form-label-lg</code> to your <code class="highlighter-rouge">&lt;label&gt;</code>s 
                                        or <code class="highlighter-rouge">&lt;legend&gt;</code>s 
                                        to correctly follow the size of <code class="highlighter-rouge">.form-control-lg</code> and 
                                        <code class="highlighter-rouge">.form-control-sm</code>.
                                    </p>
                                    <div class="general-label">
                                        <form>
                                            <div class="form-group row">
                                                <label for="horizontalInput1" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="horizontalInput1" placeholder="Enter Email">
                                                </div>
                                            </div>
                                                
                                            <div class="form-group row">
                                                <label for="horizontalInput2" class="col-sm-2 col-form-label">Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" id="horizontalInput2" placeholder="Password">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-10 ml-auto">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="horizontalCheckbox" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                        <label class="custom-control-label" for="horizontalCheckbox">Remember me</label>
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="row">
                                                <div class="col-sm-10 ml-auto">
                                                    <button type="submit" class="btn btn-gradient-primary">Submit</button>
                                                    <button type="button" class="btn btn-gradient-danger">Cancel</button>
                                                </div>
                                            </div> 
                                        </form>           
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                   
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Custom styles</h4>
                                    <p class="text-muted mb-3">Custom stylr example.</p>
                                    <form class="">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="username">Name</label>
                                                    <input type="text" class="form-control" id="username" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="useremail">Email address</label>
                                                    <input type="email" class="form-control" id="useremail" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="subject">Subject</label>
                                                    <input type="text" class="form-control" id="subject" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">                            
                                                <div class="form-group">
                                                    <label for="message">Message</label>
                                                    <textarea class="form-control" rows="5" id="message"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 text-right">
                                                <button type="submit" class="btn btn-gradient-primary px-5 py-2">Send Message</button>
                                            </div>
                                        </div>
                                    </form>
                                </div><!--end card-body-->
                            </div><!--end card-->

                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Inline Form</h4>
                                    <p class="text-muted mb-3">Use the <code>.form-inline </code>class to display a series of labels, form controls, and buttons on a single horizontal row. 
                                        Form controls within inline forms vary slightly from their default states..</p>
                                    <div class="general-label">
                                        <form class="form-inline">
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                                            </div>                                                    
                                            <div class="form-group m-l-10">
                                                <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                <input type="password" class="form-control ml-2" id="exampleInputPassword2" placeholder="Password">
                                            </div>
                                            <div class="form-group ml-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                    <label class="custom-control-label" for="customCheck1">Remember me</label>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-gradient-primary ml-2">Sign in</button>
                                        </form>           
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->

                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Input Size</h4>
                                    <p class="text-muted mb-3">Set heights using classes like <code class="highlighter-rouge">.form-control-lg</code> and <code class="highlighter-rouge">.form-control-sm</code>.</p>
                                    <form>
                                        <input class="form-control form-control-lg mb-4" type="text" placeholder=".form-control-lg">
                                        <input class="form-control form-control-sm mb-4" type="text" placeholder=".form-control-sm">
                                        <select class="form-control form-control-lg mb-4">
                                            <option>Large select</option>
                                        </select>
                                        <select class="form-control form-control-sm">
                                            <option>Small select</option>
                                        </select>
                                    </form>
                                </div><!--end card-body-->
                            </div><!--end card-->
                            
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">File browser</h4>
                                    <p class="text-muted mb-3">The file input is the most gnarly of the bunch and requires additional 
                                        JavaScript if you’d like to hook them up with functional Choose file… and selected file name text. 
                                    </p>
                                    <div class="custom-file mb-3">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                    <p class="text-muted mb-3">Here’s <code class="highlighter-rouge">lang(es)</code> in action on the custom file input for a Spanish translation:</p>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                                        <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->

                        


                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Form controls</h4>
                                    <p class="text-muted mb-3">Basic example to demonstrate Bootstrap’s form styles.</p> 
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Email address</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Example select</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect2">Example multiple select</label>
                                            <select multiple="" class="form-control" id="exampleFormControlSelect2">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-0">
                                            <label for="exampleFormControlTextarea1">Example textarea</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                    </form>                                           
                                </div><!--end card-body-->
                            </div><!--end card--> 

                            

                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Range</h4>
                                    <p class="text-muted mb-3">Create custom <code class="highlighter-rouge">&lt;input type="range"&gt;</code> controls with <code class="highlighter-rouge">.custom-range</code>. </p>
                                    <div class="general-label">
                                        <form class="mb-4">
                                            <label for="customRange1">Example range</label>
                                            <input type="range" class="custom-range" id="customRange1">
                                        </form> 
                                        <form>
                                            <label for="customRange3">Example range Max step 0.5</label>
                                            <input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange3">
                                        </form>        
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->  

                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Range Inputs</h4>
                                    <p class="text-muted mb-3">Set horizontally scrollable range inputs using <code class="highlighter-rouge">.form-control-range</code>.</p>
                                    <div class="general-label">
                                        <form>
                                            <div class="form-group mb-0">
                                                <label for="formControlRange">Example Range input</label>
                                                <input type="range" class="form-control-range" id="formControlRange">
                                            </div>
                                        </form>       
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card--> 

                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Switches</h4>
                                    <p class="text-muted mb-3">
                                        A switch has the markup of a custom checkbox but uses the <code class="highlighter-rouge">.custom-switch</code> class to render 
                                        a toggle switch. Switches also support the <code class="highlighter-rouge">disabled</code> attribute.
                                    </p> 

                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                                <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
                                            </div>

                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
                                                <label class="custom-control-label" for="customSwitch2">Disabled switch element</label>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-4">
                                            <div class="custom-control custom-switch switch-primary">
                                                <input type="checkbox" class="custom-control-input" id="customSwitchPrimary" checked>
                                                <label class="custom-control-label" for="customSwitchPrimary">Primary</label>
                                            </div>

                                            <div class="custom-control custom-switch switch-secondary">
                                                <input type="checkbox" class="custom-control-input" id="customSwitchSecondary" checked>
                                                <label class="custom-control-label" for="customSwitchSecondary">Secondary</label>
                                            </div>

                                            <div class="custom-control custom-switch switch-success">
                                                <input type="checkbox" class="custom-control-input" id="customSwitchSuccess" checked>
                                                <label class="custom-control-label" for="customSwitchSuccess">Success</label>
                                            </div>

                                            <div class="custom-control custom-switch switch-warning">
                                                <input type="checkbox" class="custom-control-input" id="customSwitchWarning" checked>
                                                <label class="custom-control-label" for="customSwitchWarning">Warning</label>
                                            </div>

                                            <div class="custom-control custom-switch switch-info">
                                                <input type="checkbox" class="custom-control-input" id="customSwitchInfo" checked>
                                                <label class="custom-control-label" for="customSwitchInfo">Info</label>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-4">
                                            <div class="custom-control custom-switch switch-danger">
                                                <input type="checkbox" class="custom-control-input" id="customSwitchDanger" checked>
                                                <label class="custom-control-label" for="customSwitchDanger">Danger</label>
                                            </div>

                                            <div class="custom-control custom-switch switch-dark">
                                                <input type="checkbox" class="custom-control-input" id="customSwitchDark" checked>
                                                <label class="custom-control-label" for="customSwitchDark">Dark</label>
                                            </div>

                                            <div class="custom-control custom-switch switch-purple">
                                                <input type="checkbox" class="custom-control-input" id="customSwitchPurple" checked>
                                                <label class="custom-control-label" for="customSwitchPurple">Purple</label>
                                            </div>

                                            <div class="custom-control custom-switch switch-pink">
                                                <input type="checkbox" class="custom-control-input" id="customSwitchPink" checked>
                                                <label class="custom-control-label" for="customSwitchPink">Pink</label>
                                            </div>

                                            <div class="custom-control custom-switch switch-blue">
                                                <input type="checkbox" class="custom-control-input" id="customSwitchBlue" checked>
                                                <label class="custom-control-label" for="customSwitchBlue">Blue</label>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                    
                                    
                                </div><!--end card-body-->
                            </div><!--end card-->                                
                        </div> <!-- end col -->
                    </div> <!-- end row --> 

                   

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="mt-0">Checkboxs</h5>
                                    <p class="text-muted mb-3">For even more customization and cross browser consistency, use our completely custom form elements to replace the browser defaults.
                                            They’re built on top of semantic and accessible markup, so they’re solid replacements for any default form control.</p>
                                    <div class="general-label">
                                        <form class="form">
    
                                            <div class="form-group row">
                                                <label class="col-md-3 my-2 control-label">Checkboxes</label>
                                                <div class="col-md-9">
                                                    <div class="checkbox my-2">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck02" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                            <label class="custom-control-label" for="customCheck02">Unchecked</label>
                                                        </div>
                                                    </div>
                                                    <div class="checkbox my-2">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" checked="" id="customCheck3" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                            <label class="custom-control-label" for="customCheck3">Checked</label>
                                                        </div>
                                                    </div>
                                                    <div class="checkbox my-2">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheckDisabled" disabled="">
                                                            <label class="custom-control-label"> Disabled Unchecked </label>
                                                        </div>
                                                    </div>
                                                    <div class="checkbox my-2">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" checked="" id="customCheck5" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                            <label class="custom-control-label" for="customCheckDisabled"> Disabled Checked </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!--end row-->
                                            
                                            <div class="form-group mb-0 row">
                                                <label class="col-md-3 my-2 control-label">Inline Checkboxes</label>
                                                <div class="col-md-9">
    
                                                    <div class="form-check-inline my-2">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck6" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                            <label class="custom-control-label" for="customCheck6">HTML</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check-inline my-2">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck7" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                            <label class="custom-control-label" for="customCheck7">CSS</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check-inline my-2">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck8" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                            <label class="custom-control-label" for="customCheck8">Javascript</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--end row-->                                          
                                        </form><!--end form-->
                                    </div><!--end general-->
                                </div><!--end card-body-->
                            </div><!--end card-->                                 
                        </div> <!-- end col -->
    
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="mt-0">Radios</h5>
                                    <p class="text-muted mb-3">For even more customization and cross browser consistency, use our completely custom form elements to replace the browser defaults. 
                                        They’re built on top of semantic and accessible markup, so they’re solid replacements for any default form control.</p>
                                    <div class="general-label">
                                        <form class="form">
                                            <div class="form-group row">
                                                <label class="col-md-3 my-2 control-label">Radios</label>
                                                <div class="col-md-9">
                                                    <div class="my-2">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio3">checked</label>
                                                        </div>
                                                    </div>
                                                    <div class="my-2">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio4" checked="" name="customRadio" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio4">checked</label>
                                                        </div>
                                                    </div>
                                                    <div class="my-2">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="radio5" name="radioDisabled" class="custom-control-input" disabled="">
                                                            <label class="custom-control-label"> Disabled radio</label>
                                                        </div>
                                                    </div>
                                                    <div class="my-2">
                                                        <div class="custom-control custom-radio">
                                                                <input type="radio" id="radio6" name="radioDisabled" checked="" class="custom-control-input" disabled="">
                                                            <label class="custom-control-label"> Disabled selected</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- form-group -->
    
                                            <div class="form-group mb-0 row">
                                                <label class="col-md-3 my-1 control-label">Inline Radios</label>
                                                <div class="col-md-9">
                                                    <div class="form-check-inline my-1">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio7" name="customRadio" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio7">HTML</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check-inline my-1">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio8" name="customRadio" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio8">css</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check-inline my-1">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio9" name="customRadio" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio9">Javascript</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!--end row-->                                   
                                        </form><!--end form-->
                                    </div><!--end general-->
                                </div><!--end card-body-->
                            </div><!--end card-->                                 
                        </div> <!-- end col -->
                    </div> <!-- end row --> 

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Bootstrap Supported elements</h4>
                                    <p class="text-muted mb-3">Our example forms show native textual <code class="highlighter-rouge">&lt;input&gt;</code>s above, but form validation styles are available for our custom form controls, too.</p> 
                                    <form class="was-validated">
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input" id="customControlValidation1" required="">
                                            <label class="custom-control-label" for="customControlValidation1">Check this custom checkbox</label>
                                            <div class="invalid-feedback">Example invalid feedback text</div>
                                        </div>
                                        
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required="">
                                            <label class="custom-control-label" for="customControlValidation2">Toggle this custom radio</label>
                                        </div>
                                        <div class="custom-control custom-radio mb-3">
                                            <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required="">
                                            <label class="custom-control-label" for="customControlValidation3">Or toggle this other custom radio</label>
                                            <div class="invalid-feedback">More example invalid feedback text</div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <select class="custom-select" required="">
                                            <option value="">Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            </select>
                                            <div class="invalid-feedback">Example invalid custom select feedback</div>
                                        </div>
                                        
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="validatedCustomFile" required="">
                                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                        </div>
                                    </form>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Validation Form Server side</h4>
                                    <p class="text-muted mb-3">We recommend using client side validation,
                                            but in case you require server side, you can indicate invalid and valid form 
                                            fields with <code class="highlighter-rouge">.is-invalid</code> and <code class="highlighter-rouge">.is-valid</code>. 
                                            Note that <code class="highlighter-rouge">.invalid-feedback</code> 
                                        is also supported with these classes.
                                    </p> 
                                    <form>
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label for="validationServer01">First name</label>
                                                <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="Mark" required="">
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationServer02">Last name</label>
                                                <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" value="Otto" required="">
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationServerUsername">Username</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                                    </div>
                                                    <input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="Username" aria-describedby="inputGroupPrepend3" required="">
                                                    <div class="invalid-feedback">
                                                        Please choose a username.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationServer03">City</label>
                                                <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="City" required="">
                                                <div class="invalid-feedback">
                                                    Please provide a valid city.
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationServer04">State</label>
                                                <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="State" required="">
                                                <div class="invalid-feedback">
                                                    Please provide a valid state.
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationServer05">Zip</label>
                                                <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Zip" required="">
                                                <div class="invalid-feedback">
                                                    Please provide a valid zip.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required="">
                                                <label class="form-check-label" for="invalidCheck3">
                                                    Agree to terms and conditions
                                                </label>
                                                <div class="invalid-feedback">
                                                    You must agree before submitting.
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-gradient-primary" type="submit">Submit</button>
                                        <button class="btn btn-gradient-danger" type="button">Cancel</button>
                                    </form>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Input groups Static</h4>
                                    <p class="text-muted mb-3">Easily extend form controls by adding text, buttons, 
                                        or button groups on either side of textual inputs, custom selects, and custom file inputs.
                                    </p>
                                    <form>
                                        <div class="form-group">
                                            <label for="example-input1-group1">Left Addon</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-user"></i></span>
                                                </div>
                                                <input type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-input2-group1">Right Addon</label>
                                            <div class="input-group">
                                                <input type="email" id="example-input2-group1" name="example-input2-group1" class="form-control" placeholder="Email">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="far fa-envelope"></i></span>
                                                </div>
                                            </div>                                                    
                                        </div>
                                        <div class="form-group">
                                            <label for="example-input3-group1">Both Side Addon</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                                                </div>
                                                <input type="text" id="example-input3-group1" name="example-input3-group1" class="form-control" placeholder="..">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">.00</span>
                                                </div>                                                    
                                            </div>                                                    
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Left Side Joint Addons</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                                                    <span class="input-group-text">0.00</span>
                                                </div>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Left Addons With Textarea</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">With textarea</span>
                                                </div>
                                                <textarea class="form-control" aria-label="With textarea"></textarea>
                                            </div>                                                    
                                        </div>

                                        <div class="form-group mb-0">
                                            <label for="exampleInputPassword1">Password</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">First and last name</span>
                                                </div>
                                                <input type="text" class="form-control">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div> <!--end form-grop-->
                                    </form><!--end form-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Input groups Buttons</h4>
                                    <p class="text-muted mb-3">Easily extend form controls by adding text, buttons, 
                                        or button groups on either side of textual inputs, custom selects, and custom file inputs.
                                    </p>

                                    <form> 
                                        <div class="form-group row">                                                        
                                            <div class="col-md-6">
                                                <label for="exampleInputPassword1">Password</label>
                                                <div class="input-group mb-2 mb-md-0">
                                                    <div class="input-group-prepend">                                                            
                                                        <span class="input-group-text">
                                                            <input type="checkbox">
                                                        </span>                                                           
                                                    </div>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="exampleInputPassword1">Password</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <input type="radio">
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group"> 
                                            <label for="exampleInputPassword1">Password</label>
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <button type="button" class="btn btn-gradient-primary"><i class="fas fa-search"></i></button>
                                                </span>
                                                <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Search">
                                            </div>                                                    
                                        </div>
                                        
                                        <div class="form-group"> 
                                            <label for="exampleInputPassword1">Password</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
                                                <span class="input-group-append">
                                                    <button class="btn btn-gradient-primary" type="button">Go!</button>
                                                </span>
                                            </div>                                                    
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <div class="input-group">
                                                <input type="email" id="example-input2-group2" name="example-input2-group2" class="form-control" placeholder="Email">
                                                <span class="input-group-append">
                                                <button type="button" class="btn  btn-gradient-primary">Submit</button>
                                                </span>
                                            </div>                                                    
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                <button type="button" class="btn btn-gradient-primary"><i class="fab fa-facebook-f"></i></button>
                                                </span>
                                                <input type="text" id="example-input3-group2" name="example-input3-group2" class="form-control" placeholder="Search">
                                                <span class="input-group-append">
                                                <button type="button" class="btn btn-gradient-primary"><i class="fab fa-twitter"></i></button>
                                                </span>
                                            </div>                                                    
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile04">
                                                    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-light" type="button">Button</button>
                                                </div>
                                            </div>                                                    
                                        </div>

                                        <div class="form-group mb-0">
                                            <label for="exampleInputPassword1">Password</label>
                                            <div class="input-group">
                                                <select class="custom-select" id="inputGroupSelect04">
                                                    <option selected="">Choose...</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-light" type="button">Button</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                </div><!-- container -->
@stop
