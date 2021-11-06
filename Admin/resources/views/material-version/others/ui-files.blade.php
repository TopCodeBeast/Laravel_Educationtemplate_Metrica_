@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
   <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                             @component('common-components.breadcrumb')
                                 @slot('title') Files @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') UI Kit @endslot
                                 @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown d-inline-block float-right mt-n2">
                                        <a class="nav-link dropdown-toggle arrow-none" id="drop1" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v font-18 text-muted"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="drop1" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(38px, 38px, 0px);">
                                            <a class="dropdown-item" href="#">Create Folder</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                            <a class="dropdown-item" href="#">Settings</a>
                                        </div>
                                    </div>      
                                    <h4 class="header-title mt-0 mb-3">Categories</h4>
                                    <div class="files-nav">                                     
                                        <div class="nav flex-column nav-pills" id="files-tab" aria-orientation="vertical">
                                            <a class="nav-link active" id="files-projects-tab" data-toggle="pill" href="#files-projects" aria-selected="true">
                                                <span class="mr-3 text-warning d-inline-block">📁</span>
                                                <div class="d-inline-block align-self-center">
                                                    <h5 class="m-0">Projects</h5>
                                                    <small>80GB/200GB Used</small>                                                    
                                                </div>
                                            </a>
                                            <a class="nav-link" id="files-pdf-tab" data-toggle="pill" href="#files-pdf" aria-selected="false">
                                                <span class="mr-3 text-warning d-inline-block">📁</span>
                                                <div class="d-inline-block align-self-center">
                                                    <h5 class="m-0">Pdf Files</h5>
                                                    <small>80GB/200GB Used</small>                                                    
                                                </div>
                                            </a>
                                            <a class="nav-link  align-items-center" id="files-documents-tab" data-toggle="pill" href="#files-documents" aria-selected="false">
                                                <span class="mr-3 text-warning d-inline-block">📁</span>
                                                <div class="d-inline-block align-self-center">
                                                    <h5 class="m-0">Documents</h5>
                                                    <small>80GB/200GB Used</small>                                                    
                                                </div>                                                
                                                <small class="badge badge-warning ml-auto">8</small>
                                            </a>
                                            <a class="nav-link mb-0"  href="#" data-toggle="modal" data-animation="bounce" data-target=".hide-modal">
                                                <span class="mr-3 text-warning d-inline-block">🔒</span>
                                                <div class="d-inline-block align-self-center">
                                                    <h5 class="m-0">Files Lock</h5>
                                                    <small>80GB/200GB Used</small>                                                    
                                                </div>                                                                                         
                                            </a>
                                        </div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->

                            <div class="card">
                                <div class="card-body">                                        
                                    <small class="float-right">62%</small>
                                    <h6 class="mt-0">620GB / 1TB Used</h6>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 62%;" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-9">
                            <div class="">                                    
                                <div class="tab-content" id="files-tabContent">
                                    <div class="float-right">
                                        <button class="btn btn-primary btn-sm add-file ml-3"><i class="fas fa-upload mr-2 "></i>Add File</button>
                                        <input id="Add_File" type="file" name="files[]" multiple style='display: none;'>
                                    </div>
                                    <div class="tab-pane fade show active" id="files-projects">
                                        <h4 class="header-title mt-0 mb-3">Projects</h4>                                         
                                        <div class="file-box-content">
                                            <div class="file-box">
                                                <a href="#" class="download-icon-link">
                                                    <i class="dripicons-download file-download-icon"></i>
                                                </a>
                                                <div class="text-center">
                                                    <i class="far fa-file-alt text-primary"></i>
                                                    <h6 class="text-truncate">Admin_Panel</h6>
                                                    <small class="text-muted">06 March 2019 / 5MB</small>
                                                </div>                                                        
                                            </div>
                                            <div class="file-box">
                                                <a href="#" class="download-icon-link">
                                                    <i class="dripicons-download file-download-icon"></i>
                                                </a>
                                                <div class="text-center">
                                                    <i class="far fa-file-code text-danger"></i>
                                                    <h6 class="text-truncate">Ecommerce.pdf</h6>
                                                    <small class="text-muted">15 March 2019 / 8MB</small>
                                                </div>                                                        
                                            </div>
                                            <div class="file-box">
                                                <a href="#" class="download-icon-link">
                                                    <i class="dripicons-download file-download-icon"></i>
                                                </a>
                                                <div class="text-center">
                                                    <i class="far fa-file-archive text-warning"></i>
                                                    <h6 class="text-truncate">Payment_app.zip</h6>
                                                    <small class="text-muted">11 April 2019 / 10MB</small>
                                                </div>                                                        
                                            </div>
                                            <div class="file-box">
                                                <a href="#" class="download-icon-link">
                                                    <i class="dripicons-download file-download-icon"></i>
                                                </a>
                                                <div class="text-center">
                                                    <i class="far fa-file text-secondary"></i>
                                                    <h6 class="text-truncate">App_landing_001</h6>
                                                    <small class="text-muted">06 March 2019 / 5MB</small>
                                                </div>                                                        
                                            </div>                                                
                                        </div> 
                                        
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="header-title my-3">Freelancing Projects</h4>  
                                            </div>
                                        </div>
                                        <div class="file-box-content">
                                            <div class="file-box">
                                                <a href="#" class="download-icon-link">
                                                    <i class="dripicons-download file-download-icon"></i>
                                                </a>
                                                <div class="text-center">
                                                    <i class="far fa-file-alt text-primary"></i>
                                                    <h6 class="text-truncate">Admin_Panel</h6>
                                                    <small class="text-muted">06 March 2019 / 5MB</small>
                                                </div>                                                        
                                            </div>
                                            <div class="file-box">
                                                <a href="#" class="download-icon-link">
                                                    <i class="dripicons-download file-download-icon"></i>
                                                </a>
                                                <div class="text-center">
                                                    <i class="far fa-file-code text-info"></i>
                                                    <h6 class="text-truncate">Ecommerce.pdf</h6>
                                                    <small class="text-muted">15 March 2019 / 8MB</small>
                                                </div>                                                        
                                            </div>                                                                                               
                                        </div>
                                    </div><!--end tab-pane-->

                                    <div class="tab-pane fade" id="files-pdf">
                                        <h4 class="mt-0 header-title mb-3">PDF Files</h4>
                                        <div class="file-box-content">
                                            <div class="file-box">
                                                <a href="#" class="download-icon-link">
                                                    <i class="dripicons-download file-download-icon"></i>
                                                </a>
                                                <div class="text-center">
                                                    <i class="far fa-file-pdf text-info"></i>
                                                    <h6 class="text-truncate">Admin_Panel</h6>
                                                    <small class="text-muted">06 March 2019 / 5MB</small>
                                                </div>                                                        
                                            </div>
                                            <div class="file-box">
                                                <a href="#" class="download-icon-link">
                                                    <i class="dripicons-download file-download-icon"></i>
                                                </a>
                                                <div class="text-center">
                                                    <i class="far fa-file-pdf text-danger"></i>
                                                    <h6 class="text-truncate">Ecommerce.pdf</h6>
                                                    <small class="text-muted">15 March 2019 / 8MB</small>
                                                </div>                                                        
                                            </div>
                                            <div class="file-box">
                                                <a href="#" class="download-icon-link">
                                                    <i class="dripicons-download file-download-icon"></i>
                                                </a>
                                                <div class="text-center">
                                                    <i class="far fa-file-pdf text-warning"></i>
                                                    <h6 class="text-truncate">Payment_app.zip</h6>
                                                    <small class="text-muted">11 April 2019 / 10MB</small>
                                                </div>                                                        
                                            </div>
                                            <div class="file-box">
                                                <a href="#" class="download-icon-link">
                                                    <i class="dripicons-download file-download-icon"></i>
                                                </a>
                                                <div class="text-center">
                                                    <i class="far fa-file-pdf text-secondary"></i>
                                                    <h6 class="text-truncate">App_landing_001.pdf</h6>
                                                    <small class="text-muted">06 March 2019 / 5MB</small>
                                                </div>                                                        
                                            </div>                                                
                                        </div> 
                                    </div><!--end tab-pane-->

                                    <div class="tab-pane fade" id="files-documents">
                                        <h4 class="mt-0 header-title mb-3">Documents</h4>
                                        <div class="file-box-content">
                                            <div class="file-box">
                                                <a href="#" class="download-icon-link">
                                                    <i class="dripicons-download file-download-icon"></i>
                                                </a>
                                                <div class="text-center">
                                                    <i class="far fa-file-pdf text-info"></i>
                                                    <h6 class="text-truncate">Adharcard_update</h6>
                                                    <small class="text-muted">06 March 2019 / 5MB</small>
                                                </div>                                                        
                                            </div>
                                            <div class="file-box">
                                                <a href="#" class="download-icon-link">
                                                    <i class="dripicons-download file-download-icon"></i>
                                                </a>
                                                <div class="text-center">
                                                    <i class="far fa-file-pdf text-danger"></i>
                                                    <h6 class="text-truncate">Pancard</h6>
                                                    <small class="text-muted">15 March 2019 / 8MB</small>
                                                </div>                                                        
                                            </div>
                                            <div class="file-box">
                                                <a href="#" class="download-icon-link">
                                                    <i class="dripicons-download file-download-icon"></i>
                                                </a>
                                                <div class="text-center">
                                                    <i class="far fa-file-pdf text-warning"></i>
                                                    <h6 class="text-truncate">ICICI_statment</h6>
                                                    <small class="text-muted">11 April 2019 / 10MB</small>
                                                </div>                                                        
                                            </div>
                                            <div class="file-box">
                                                <a href="#" class="download-icon-link">
                                                    <i class="dripicons-download file-download-icon"></i>
                                                </a>
                                                <div class="text-center">
                                                    <i class="far fa-file-pdf text-secondary"></i>
                                                    <h6 class="text-truncate">March_Invoice</h6>
                                                    <small class="text-muted">06 March 2019 / 5MB</small>
                                                </div>                                                        
                                            </div>                                                
                                        </div> 

                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="header-title my-3">Company Documents</h4>  
                                            </div>
                                        </div>
                                        <div class="file-box-content">
                                            <div class="file-box">
                                                <a href="#" class="download-icon-link">
                                                    <i class="dripicons-download file-download-icon"></i>
                                                </a>
                                                <div class="text-center">
                                                    <i class="far fa-file-pdf text-success"></i>
                                                    <h6 class="text-truncate">Adharcard_update</h6>
                                                    <small class="text-muted">06 March 2019 / 5MB</small>
                                                </div>                                                        
                                            </div>
                                            <div class="file-box">
                                                <a href="#" class="download-icon-link">
                                                    <i class="dripicons-download file-download-icon"></i>
                                                </a>
                                                <div class="text-center">
                                                    <i class="far fa-file-pdf text-pink"></i>
                                                    <h6 class="text-truncate">Pancard</h6>
                                                    <small class="text-muted">15 March 2019 / 8MB</small>
                                                </div>                                                        
                                            </div>
                                            <div class="file-box">
                                                <a href="#" class="download-icon-link">
                                                    <i class="dripicons-download file-download-icon"></i>
                                                </a>
                                                <div class="text-center">
                                                    <i class="far fa-file-pdf text-purple"></i>
                                                    <h6 class="text-truncate">ICICI_statment</h6>
                                                    <small class="text-muted">11 April 2019 / 10MB</small>
                                                </div>                                                        
                                            </div>                                                                                           
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="header-title my-3">Personal Documents</h4>  
                                            </div>
                                        </div>
                                        <div class="file-box-content">
                                            <div class="file-box">
                                                <a href="#" class="download-icon-link">
                                                    <i class="dripicons-download file-download-icon"></i>
                                                </a>
                                                <div class="text-center">
                                                    <i class="far fa-file-pdf text-blue"></i>
                                                    <h6 class="text-truncate">Adharcard_update</h6>
                                                    <small class="text-muted">06 March 2019 / 5MB</small>
                                                </div>                                                        
                                            </div>
                                            <div class="file-box">
                                                <a href="#" class="download-icon-link">
                                                    <i class="dripicons-download file-download-icon"></i>
                                                </a>
                                                <div class="text-center">
                                                    <i class="far fa-file-pdf text-dark"></i>
                                                    <h6 class="text-truncate">Pancard</h6>
                                                    <small class="text-muted">15 March 2019 / 8MB</small>
                                                </div>                                            
                                            </div>                      
                                        </div>
                                    </div><!--end tab-pen-->
                                    <div class="tab-pane fade" id="files-hide">
                                        <h4 class="mt-0 header-title mb-3">Hide</h4>
                                    </div><!--end tab-pane-->
                                </div>  <!--end tab-content-->                          
                            </div><!--end card-body-->
                        </div><!--end col-->
                    </div><!--end row-->

                </div><!-- container -->
                
                <!-- Modal -->
                <div class="modal fade hide-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0" id="exampleModalLabel">Enter Password</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="p-3">
                                    <form class="form-horizontal" action="index.html">
            
                                        <div class="text-center mb-4">
                                            <div class="avatar-box thumb-xl align-self-center mr-2">
                                                <span class="avatar-title bg-light rounded-circle text-danger"><i class="fas fa-lock"></i></span>
                                            </div>
                                        </div>

                                        <div class="input-group">
                                            <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="HideCard">
                                            <div class="input-group-append">
                                                <button class="btn btn-gradient-primary" type="button" id="HideCard"><i class="mdi mdi-key"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
@stop

@section('footerScript')
<script>
            $('.add-file').on('click', function() { $('#Add_File').click();return false;});
        </script>
        
@stop