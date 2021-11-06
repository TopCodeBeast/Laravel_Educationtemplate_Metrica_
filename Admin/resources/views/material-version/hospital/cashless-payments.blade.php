@extends('layouts.material-version-master')

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
                                 @slot('title') Cashless @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Hospital @endslot
                              @endcomponent
                           
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <button type="button" class="btn btn-gradient-primary px-4 mt-0 mb-3" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg"><i class="mdi mdi-plus-circle-outline mr-2"></i>Add New Payment</button>
                                    <div class="table-responsive">
                                        <table id="datatable" class="table">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>Bill No</th>
                                                <th>Patient Name</th>  
                                                <th>Doctor Name</th>
                                                <th>Insurance Company</th>
                                                <th>Payment</th>
                                                <th>Bill Date</th>
                                                <th>Charge</th>
                                                <th>Tax</th>  
                                                <th>Discount</th>                                             
                                                <th class="text-right">Total</th>
                                            </tr><!--end tr-->
                                            </thead>
        
                                            <tbody>
                                            <tr>
                                                <td>1</td>                                                
                                                <td>
                                                    <a href="/material-version/hospital/payment-invoice">Keith Jacobson</a>
                                                </td>                                                
                                                <td>Dr.Justin Williams</td>
                                                <td>Tata MediCare Insurance</td>
                                                <td>Cashless</td>
                                                <td>23/07/2019</td>
                                                <td>$1500</td> 
                                                <td>10%</td>    
                                                <td>10%</td>                                               
                                                <td class="text-right text-dark font-weight-bold">$1500</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>2</td> 
                                                <td>
                                                    <a href="/material-version/hospital/payment-invoice">Fred Godina</a>
                                                </td>                                                
                                                <td>Dr.Thomas Fant</td>
                                                <td> Star Health insurance </td>
                                                <td>Cashless</td>
                                                <td>23/07/2019</td>
                                                <td>$1500</td> 
                                                <td>10%</td>    
                                                <td>10%</td>                                               
                                                <td class="text-right text-dark font-weight-bold">$3500</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>3</td>  
                                                <td>
                                                    <a href="/material-version/hospital/payment-invoice">Greg Crosby</a>
                                                </td>                                               
                                                <td>Dr.Aretha Garland</td>
                                                <td>Apollo Health Insurance</td>
                                                <td>Cashless</td>
                                                <td>24/07/2019</td>
                                                <td>$1500</td> 
                                                <td>10%</td>    
                                                <td>10%</td>                                               
                                                <td class="text-right text-dark font-weight-bold">$5000</td>
                                            </tr><!--end tr-->

                                            <tr>
                                                <td>4</td>                                                
                                                <td>
                                                    <a href="/material-version/hospital/payment-invoice">Jennifer Doss</a>
                                                </td>                                                
                                                <td>Dr.Justin Williams</td>
                                                <td>LIC Health Insurance</td>
                                                <td>Cashless</td>
                                                <td>23/07/2019</td>
                                                <td>$1500</td> 
                                                <td>10%</td>    
                                                <td>10%</td>                                               
                                                <td class="text-right text-dark font-weight-bold">$1500</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>5</td> 
                                                <td>
                                                    <a href="/material-version/hospital/payment-invoice">Peggy Doe</a>
                                                </td>                                                
                                                <td>Dr.Thomas Fant</td>
                                                <td> National Insurance</td>
                                                <td>Cashless</td>
                                                <td>23/07/2019</td>
                                                <td>$1500</td> 
                                                <td>10%</td>    
                                                <td>10%</td>                                               
                                                <td class="text-right text-dark font-weight-bold">$3500</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>6</td>  
                                                <td>
                                                    <a href="/material-version/hospital/payment-invoice">Donald Gardner</a>
                                                </td>                                               
                                                <td>Dr.Aretha Garland</td>
                                                <td>Star Health insurance </td>
                                                <td>Cashless</td>
                                                <td>24/07/2019</td>
                                                <td>$1500</td> 
                                                <td>10%</td>    
                                                <td>10%</td>                                               
                                                <td class="text-right text-dark font-weight-bold">$5000</td>
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
                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Add New Payment</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="PatientName">Patient Name</label>
                                                <input type="text" class="form-control" id="PatientName" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="DoctorName_select" class="mr-2">Doctor Name</label>
                                                <select class="custom-select" id="DoctorName_select">
                                                    <option selected="">-- Select --</option>
                                                    <option value="1">Dr.Thomas Fant</option>
                                                    <option value="2">Dr.Justin Williams</option>
                                                    <option value="3">Dr.Aretha Garland</option>
                                                    <option value="4">Dr.Lea Sanchez</option>
                                                    <option value="5">Dr.Helen White</option>
                                                    <option value="6">Dr.William Gonzalez</option>
                                                </select>
                                            </div>                                    
                                        </div> 
                                        <div class="col-md-3">
                                                <div class="form-group">
                                                <label for="InsuranceCompany">Insurance Company</label>
                                                <input type="text" class="form-control" id="InsuranceCompany" required="">
                                            </div>
                                        </div>                                    
                                    </div>
                                    <div class="row">  
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="BillDate">Bill Date</label>
                                                <input type="text" class="form-control" id="BillDate" required="">
                                            </div>
                                        </div>                                 
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Charge">Charge</label>
                                                <input type="text" class="form-control" id="Charge" required="">
                                            </div>
                                        </div>      
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Tax">Tax</label>
                                                <input type="text" class="form-control" id="Tax" required="">
                                            </div>
                                        </div>  
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="Discount">Discount</label>
                                                <input type="text" class="form-control" id="Discount" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="TotalBill">Total Bill</label>
                                                <input type="text" class="form-control" id="TotalBill" required="">
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
                <div class="modal modal-rightbar fade" tabindex="-1" role="dialog" aria-labelledby="MetricaRightbar" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0" id="MetricaRightbar">Appearance</h5>
                                <button type="button" class="btn btn-sm btn-soft-pink btn-circle btn-square" data-dismiss="modal" aria-hidden="true"><i class="mdi mdi-close"></i></button>
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
                                            <img src="../../assets/images/small/img-1.gif" alt="" class="d-block mx-auto my-4" height="180">
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
                                                    <img src="../../assets/images/widgets/project3.jpg" alt="" class="thumb-lg rounded-circle">                                      
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

        <script>
            // Datatable
            $('#datatable').DataTable();
        </script>
@stop