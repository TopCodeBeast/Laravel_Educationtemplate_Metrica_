@extends('layouts.hospital-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('headerStyle')
        <!-- DataTables -->
        <link href="{{ URL::asset('plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ URL::asset('plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@stop

@section('content')
 <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            
                             @component('common-components.breadcrumb')
                                 @slot('title') Expenses @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Hospital @endslot
                                 @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="fas fa-dollar-sign bg-soft-pink main-widgets-icon"></i>
                                    </div> 
                                    <h4 class="title-text mt-0">Today Expenses</h4>
                                    <h3 class="my-3">$500<small>Total</small></h3>
                                    <p class="mb-0 text-muted text-truncate"> Yesterday Expenses <span class="text-success">$880</span></p>                                    
                                </div><!--end card-body--> 
                                <div class="card-body p-0">
                                    <div id="spark1" class="apex-charts"></div>
                                </div>
                            </div><!--end card--> 
                        </div> <!--end col--> 
                        <div class="col-md-4">
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="fas fa-radiation bg-soft-warning main-widgets-icon"></i>
                                    </div> 
                                    <h4 class="title-text mt-0">This Week Expenses</h4>
                                    <h3 class="my-3">$8800 <small>Total</small></h3>
                                    <p class="mb-0 text-muted text-truncate">Last Week Expenses <span class="text-success">$9800</span></p>
                                </div><!--end card-body--> 
                                <div class="card-body p-0">
                                    <div id="spark2" class="apex-charts"></div>
                                </div>
                            </div><!--end card--> 
                        </div> <!--end col--> 
                        <div class="col-md-4">
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="fas fa-apple-alt bg-soft-success main-widgets-icon"></i>
                                    </div> 
                                    <h4 class="title-text mt-0">This Month Expenses</h4>
                                    <h3 class="my-3">$35000 <small>Total</small></h3>
                                    <p class="mb-0 text-muted text-truncate">Last Month Expenses <span class="text-success">$34500</span></p>
                                </div><!--end card-body--> 
                                <div class="card-body p-0">
                                    <div id="spark3" class="apex-charts"></div>
                                </div>
                            </div><!--end card--> 
                        </div> <!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <button type="button" class="btn btn-gradient-primary px-4 mt-0 mb-3" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg"><i class="mdi mdi-plus-circle-outline mr-2"></i>Add New Expense</button>
                                    <div class="table-responsive">
                                        <table id="datatable" class="table">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>Item</th>                                                 
                                                <th>Purchase Date</th>
                                                <th>Purchase From</th> 
                                                <th>Amount</th>
                                                <th>Paied By</th>
                                                <th>Status</th>                                                
                                                <th class="text-right">Action</th>
                                            </tr><!--end tr-->
                                            </thead>
        
                                            <tbody>
                                            <tr>
                                                <td>Bunsen Burner</td>                                                
                                                <td>20/07/2019</td>                                                
                                                <td>RoyalPro</td>
                                                <td>$99</td>
                                                <td>Card</td> 
                                                <td><span class="badge badge-soft-success">Approved</span></td>                                               
                                                <td class="text-right">                                                       
                                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>Vortex mixer</td>                                                
                                                <td>22/07/2019</td>                                                
                                                <td>Frozentree</td>
                                                <td>$899</td>
                                                <td>Online</td> 
                                                <td><span class="badge badge-soft-warning">Panding</span></td>                                               
                                                <td class="text-right">                                                       
                                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>Laboratory Centrifuge</td>                                                
                                                <td>28/07/2019</td>                                                
                                                <td>RoyalPro</td>
                                                <td>$1999</td>
                                                <td>Cash</td> 
                                                <td><span class="badge badge-soft-success">Approved</span></td>                                               
                                                <td class="text-right">                                                       
                                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->             
                                            </tbody>
                                        </table>                    
                                    </div>                                         
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->                               
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <button type="button" class="btn btn-gradient-primary px-4 mt-0 mb-3" data-toggle="modal" data-animation="bounce" data-target=".add-exprnses"><i class="mdi mdi-plus-circle-outline mr-2"></i>Add New Expense</button>
                                    <div class="table-responsive">
                                        <table id="datatable" class="table">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>Month</th>                                                 
                                                <th>All Staff lunch</th>
                                                <th>Cleaner Staff Salary</th> 
                                                <th>Light Bill</th>                                                
                                                <th>Total This Month</th>
                                                <th>Paied By</th>
                                                <th>Status</th>                                                
                                                <th class="text-right">Action</th>
                                            </tr><!--end tr-->
                                            </thead>
        
                                            <tbody>
                                            <tr>
                                                <td>01/06/2019 to 31/06/2019</td>                                                
                                                <td>$1000</td>                                                
                                                <td>$5000</td>
                                                <td>$2500</td>
                                                <td>$8500</td>
                                                <td>Online</td> 
                                                <td><span class="badge badge-soft-success">Approved</span></td>                                               
                                                <td class="text-right">                                                       
                                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>01/07/2019 to 31/07/2019</td>                                                
                                                <td>$900</td>                                                
                                                <td>$5000</td>
                                                <td>$2800</td>
                                                <td>$8700</td>
                                                <td>Online</td> 
                                                <td><span class="badge badge-soft-success">Approved</span></td>                                               
                                                <td class="text-right">                                                       
                                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>01/08/2019 to 31/08/2019</td>                                                
                                                <td>$1100</td>                                                
                                                <td>$5000</td>
                                                <td>$3000</td>
                                                <td>$9100</td>
                                                <td>Online</td> 
                                                <td><span class="badge badge-soft-success">Approved</span></td>                                               
                                                <td class="text-right">                                                       
                                                    <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->             
                                            </tbody>
                                        </table>                    
                                    </div>                                         
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->                               
                    </div><!--end row-->

                </div><!-- container -->

                <!--  Modal content for the above example -->
                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Add New Expenses</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">                  
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Item">Item</label>
                                                <input type="text" class="form-control" id="Item" required="">
                                            </div>
                                        </div>      
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="PurchaseFrom">Purchase From</label>
                                                <input type="text" class="form-control" id="PurchaseFrom" required="">
                                            </div>
                                        </div> 
                                    </div> 

                                    <div class="row">                  
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="PurchaseDate">Purchase Date</label>
                                                <input type="text" class="form-control" id="PurchaseDate" required="">
                                            </div>
                                        </div>      
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="Amounts">Amounts</label>
                                                <input type="text" class="form-control" id="Amounts" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="PaiedBy">Paied By</label>
                                                <input type="text" class="form-control" id="PaiedBy" required="">
                                            </div>
                                        </div>      
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="Status">Status</label>
                                                <input type="text" class="form-control" id="Status" required="">
                                            </div>
                                        </div>  
                                    </div> 
                                    <button type="button" class="btn btn-sm btn-primary">Save</button>  
                                    <button type="button" class="btn btn-sm btn-danger">Delete</button>             
                                </form>  
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal --> 


                <!--  Modal content for the above example -->
                <div class="modal fade add-exprnses" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Add New Expenses</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">                  
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Month">Month</label>
                                                <input type="text" class="form-control" id="Month" required="">
                                            </div>
                                        </div>      
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="AllStafflunch">All Staff lunch</label>
                                                <input type="text" class="form-control" id="AllStafflunch" required="">
                                            </div>
                                        </div> 
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="CleanerStaffSalary">Cleaner Staff Salary</label>
                                                <input type="text" class="form-control" id="CleanerStaffSalary" required="">
                                            </div>
                                        </div> 
                                    </div> 

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="LightBill">Light Bill</label>
                                                <input type="text" class="form-control" id="LightBill" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="PaiedBy">Paied By</label>
                                                <input type="text" class="form-control" id="PaiedBy" required="">
                                            </div>
                                        </div>     
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="TotalThisMonth">Total This Month</label>
                                                <input type="text" class="form-control" id="TotalThisMonth" required="">
                                            </div>
                                        </div>  
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="Status">Status</label>
                                                <input type="text" class="form-control" id="Status" required="">
                                            </div>
                                        </div>  
                                    </div> 
                                    <button type="button" class="btn btn-sm btn-primary">Save</button>  
                                    <button type="button" class="btn btn-sm btn-danger">Delete</button>             
                                </form>  
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal --> 

                <!--start rightbar-->
                <!--  Modal content for the above example -->
                <div class="modal modal-rightbar fade" tabindex="-1" role="dialog" aria-labelledby="MetricaRightbar" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0" id="MetricaRightbar">Appearance</h5>
                                <button type="button" class="btn btn-sm btn-soft-primary btn-circle btn-square" data-dismiss="modal" aria-hidden="true"><i class="mdi mdi-close"></i></button>
                            </div>
                            <div class="modal-body">                                
                               <!-- Nav tabs -->
                               <ul class="nav nav-pills nav-justified mt-2 mb-4" role="tablist">
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link active" data-toggle="tab" href="#ActivityTab" role="tab">Activity</a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-toggle="tab" href="#TasksTab" role="tab">Tasks</a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-toggle="tab" href="#SettingsTab" role="tab">Settings</a>
                                    </li>
                                </ul>                                
                                
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active " id="ActivityTab" role="tabpanel">
                                        <div class="bg-light mx-n3">
                                            <img src="../assets/images/small/img-1.gif" alt="" class="d-block mx-auto my-4" height="180">
                                        </div>
                                        <div class="slimscroll scroll-rightbar">
                                            <div class="activity">
                                                <div class="activity-info">
                                                    <div class="icon-info-activity">
                                                        <i class="mdi mdi-checkbox-marked-circle-outline bg-soft-success"></i>
                                                    </div>
                                                    <div class="activity-info-text mb-2">
                                                        <div class="mb-1">
                                                            <small class="text-muted d-block mb-1">10 Min ago</small>
                                                            <a href="#" class="m-0 w-75">Task finished</a>                                                            
                                                        </div>
                                                        <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
                                                    </div>
                                                </div> 
    
                                                <div class="activity-info">
                                                    <div class="icon-info-activity">
                                                        <i class="mdi mdi-timer-off bg-soft-pink"></i>
                                                    </div>
                                                    <div class="activity-info-text mb-2">
                                                        <div class="mb-1">
                                                            <small class="text-muted d-block mb-1">50 Min ago</small>
                                                            <a href="#" class="m-0 w-75">Task Overdue</a>                                                            
                                                        </div>
                                                        <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
                                                        <span class="badge badge-soft-secondary">Design</span>
                                                        <span class="badge badge-soft-secondary">HTML</span>
                                                    </div>                                                   
                                                </div>
                                                <div class="activity-info">
                                                    <div class="icon-info-activity">
                                                        <i class="mdi mdi-alert-decagram bg-soft-purple"></i>
                                                    </div>
                                                    <div class="activity-info-text mb-2">
                                                        <div class="mb-1">
                                                            <small class="text-muted d-block mb-1">10 hours ago</small>
                                                            <a href="#" class="m-0 w-75">New Task</a>                                                            
                                                        </div>
                                                        <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
                                                    </div>        
                                                </div>   
    
                                                <div class="activity-info">
                                                    <div class="icon-info-activity">
                                                        <i class="mdi mdi-clipboard-alert bg-soft-warning"></i>
                                                    </div>
                                                    <div class="activity-info-text mb-2">
                                                        <div class="mb-1">
                                                            <small class="text-muted d-block mb-1">yesterday</small>
                                                            <a href="#" class="m-0 w-75">New Comment</a>                                                            
                                                        </div>
                                                        <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
                                                    </div>    
                                                </div>  
                                                <div class="activity-info">
                                                    <div class="icon-info-activity">
                                                        <i class="mdi mdi-clipboard-alert bg-soft-secondary"></i>
                                                    </div>
                                                    <div class="activity-info-text mb-2">
                                                        <div class="mb-1">
                                                            <small class="text-muted d-block mb-1">01 feb 2020</small>
                                                            <a href="#" class="m-0 w-75">New Lead Meting</a>                                                            
                                                        </div>
                                                        <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
                                                    </div>    
                                                </div>   
                                                <div class="activity-info">
                                                    <div class="icon-info-activity">
                                                        <i class="mdi mdi-checkbox-marked-circle-outline bg-soft-success"></i>
                                                    </div>
                                                    <div class="activity-info-text mb-2">
                                                        <div class="mb-1">
                                                            <small class="text-muted d-block mb-1">26 jan 2020</small>
                                                            <a href="#" class="m-0 w-75">Task finished</a>                                                            
                                                        </div>
                                                        <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
                                                    </div>
                                                </div>                                                                                                            
                                            </div><!--end activity-->
                                        </div><!--end activity-scroll-->
                                    </div><!--end tab-pane-->
                                    <div class="tab-pane" id="TasksTab" role="tabpanel">
                                        <div class="m-0">
                                            <div id="rightbar_chart" class="apex-charts"></div>                                            
                                        </div>  
                                        <div class="text-center mt-n2 mb-2">
                                            <button type="button" class="btn btn-soft-primary">Create Project</button>
                                            <button type="button" class="btn btn-soft-primary">Create Task</button>
                                        </div>
                                        <div class="slimscroll scroll-rightbar">
                                            <div class="p-2">
                                                <div class="media mb-3">
                                                    <img src="../assets/images/widgets/project3.jpg" alt="" class="thumb-lg rounded-circle">                                      
                                                    <div class="media-body align-self-center text-truncate ml-3">
                                                        <p class="text-success font-weight-semibold mb-0 font-14">Project</p>
                                                        <h4 class="mt-0 mb-0 font-weight-semibold text-dark font-18">Payment App</h4>                                            
                                                    </div><!--end media-body-->
                                                </div>
                                                <span><b>Deadline:</b> 02 June 2020</span>
                                                <a href="javascript: void(0);" class="d-block mt-3">
                                                    <p class="text-muted mb-0">Complete Tasks<span class="float-right">75%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </a>                                            
                                            </div>
                                            <hr class="hr-dashed">                                            
                                        </div>                                        
                                    </div><!--end tab-pane-->
                                    <div class="tab-pane" id="SettingsTab" role="tabpanel">
                                        <div class="p-1 bg-light mx-n3">
                                            <h6 class="px-3">Account Settings</h6>
                                        </div>
                                        <div class="p-2 text-left mt-3">
                                            <div class="custom-control custom-switch switch-primary mb-3">
                                                <input type="checkbox" class="custom-control-input" id="settings-switch1" checked="">
                                                <label class="custom-control-label" for="settings-switch1">Auto updates</label>
                                            </div>

                                            <div class="custom-control custom-switch switch-primary mb-3">
                                                <input type="checkbox" class="custom-control-input" id="settings-switch2">
                                                <label class="custom-control-label" for="settings-switch2">Location Permission</label>
                                            </div>

                                            <div class="custom-control custom-switch switch-primary mb-3">
                                                <input type="checkbox" class="custom-control-input" id="settings-switch3" checked="">
                                                <label class="custom-control-label" for="settings-switch3">Show offline Contacts</label>
                                            </div>    
                                        </div>
                                        <div class="p-1 bg-light mx-n3">
                                            <h6 class="px-3">General Settings</h6>
                                        </div>
                                        <div class="p-2 text-left mt-3">
                                            <div class="custom-control custom-switch switch-primary mb-3">
                                                <input type="checkbox" class="custom-control-input" id="settings-switch4" checked="">
                                                <label class="custom-control-label" for="settings-switch4">Show me Online</label>
                                            </div>

                                            <div class="custom-control custom-switch switch-primary mb-3">
                                                <input type="checkbox" class="custom-control-input" id="settings-switch5">
                                                <label class="custom-control-label" for="settings-switch5">Status visible to all</label>
                                            </div>

                                            <div class="custom-control custom-switch switch-primary mb-3">
                                                <input type="checkbox" class="custom-control-input" id="settings-switch6" checked="">
                                                <label class="custom-control-label" for="settings-switch6">Notifications Popup</label>
                                            </div> 
                                        </div>
                                    </div><!--end tab-pane-->
                                </div> <!--end tab-content--> 
                            </div><!--end modal-body-->
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal --> 
@stop

@section('footerScript')
        <script src="{{ URL::asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{ URL::asset('plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{ URL::asset('assets/pages/jquery.expenses.init.js')}}"></script>
@stop