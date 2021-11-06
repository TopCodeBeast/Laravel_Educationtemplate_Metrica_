@extends('layouts.master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('headerStyle')
<link href="{{ URL::asset('plugins/cropper/css/cropper.css')}}" rel="stylesheet">
<link href="{{ URL::asset('plugins/cropper/css/main.css')}}" rel="stylesheet">
@stop

@section('content')
     <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                             @component('common-components.breadcrumb')
                                 @slot('title') Image Cropper @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') UI Kit @endslot
                                 @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-body">
                                    <!-- <h3>Demo:</h3> -->
                                    <div class="img-container mb-0">
                                        <img id="image" src="{{ URL::asset('plugins/cropper/images/picture01.jpg')}}" alt="Picture">
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                            <div class="card docs-buttons">
                                <div class="card-body">
                                    <!-- <h3>Toolbar:</h3> -->
                                    <div class="btn-group mb-2 mr-1">
                                        <button type="button" class="btn btn-light" data-method="setDragMode" data-option="move" title="Move">
                                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;setDragMode&quot;, &quot;move&quot;)">
                                            <span class="fas fa-expand-arrows-alt"></span>
                                            </span>
                                        </button>
                                        <button type="button" class="btn btn-light" data-method="setDragMode" data-option="crop" title="Crop">
                                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;setDragMode&quot;, &quot;crop&quot;)">
                                            <span class="fas fa-crop"></span>
                                            </span>
                                        </button>
                                    </div>
                            
                                    <div class="btn-group mb-2 mr-1">
                                        <button type="button" class="btn btn-light" data-method="zoom" data-option="0.1" title="Zoom In">
                                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;zoom&quot;, 0.1)">
                                            <span class="fas fa-search-plus"></span>
                                            </span>
                                        </button>
                                        <button type="button" class="btn btn-light" data-method="zoom" data-option="-0.1" title="Zoom Out">
                                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;zoom&quot;, -0.1)">
                                            <span class="fas fa-search-minus"></span>
                                            </span>
                                        </button>
                                    </div>
                            
                                    <div class="btn-group mb-2 mr-1">
                                        <button type="button" class="btn btn-light" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
                                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;move&quot;, -10, 0)">
                                            <span class="fas fa-arrow-left"></span>
                                            </span>
                                        </button>
                                        <button type="button" class="btn btn-light" data-method="move" data-option="10" data-second-option="0" title="Move Right">
                                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;move&quot;, 10, 0)">
                                            <span class="fas fa-arrow-right"></span>
                                            </span>
                                        </button>
                                        <button type="button" class="btn btn-light" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
                                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;move&quot;, 0, -10)">
                                            <span class="fas fa-arrow-up"></span>
                                            </span>
                                        </button>
                                        <button type="button" class="btn btn-light" data-method="move" data-option="0" data-second-option="10" title="Move Down">
                                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;move&quot;, 0, 10)">
                                            <span class="fa fa-arrow-down"></span>
                                            </span>
                                        </button>
                                    </div>
                            
                                    <div class="btn-group mb-2 mr-1">
                                        <button type="button" class="btn btn-light" data-method="rotate" data-option="-45" title="Rotate Left">
                                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;rotate&quot;, -45)">
                                            <span class="fas fa-reply"></span>
                                            </span>
                                        </button>
                                        <button type="button" class="btn btn-light" data-method="rotate" data-option="45" title="Rotate Right">
                                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;rotate&quot;, 45)">
                                            <span class="fas fa-share"></span>
                                            </span>
                                        </button>
                                    </div>
                            
                                    <div class="btn-group mb-2 mr-1">
                                        <button type="button" class="btn btn-light" data-method="scaleX" data-option="-1" title="Flip Horizontal">
                                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;scaleX&quot;, -1)">
                                            <span class="fa fa-arrows-alt-h"></span>
                                            </span>
                                        </button>
                                        <button type="button" class="btn btn-light" data-method="scaleY" data-option="-1" title="Flip Vertical">
                                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;scaleY&quot;, -1)">
                                            <span class="fas fa-arrows-alt-v"></span>
                                            </span>
                                        </button>
                                    </div>
                            
                                    <div class="btn-group mb-2 mr-1">
                                        <button type="button" class="btn btn-light" data-method="crop" title="Crop">
                                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;crop&quot;)">
                                            <span class="fas fa-check"></span>
                                            </span>
                                        </button>
                                        <button type="button" class="btn btn-light" data-method="clear" title="Clear">
                                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;clear&quot;)">
                                            <span class="fas fa-times"></span>
                                            </span>
                                        </button>
                                    </div>
                            
                                    <div class="btn-group mb-2 mr-1">
                                        <button type="button" class="btn btn-light" data-method="disable" title="Disable">
                                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;disable&quot;)">
                                            <span class="fas fa-lock"></span>
                                            </span>
                                        </button>
                                        <button type="button" class="btn btn-light" data-method="enable" title="Enable">
                                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;enable&quot;)">
                                            <span class="fas fa-unlock"></span>
                                            </span>
                                        </button>
                                    </div>
                            
                                    <div class="btn-group mb-2 mr-1">
                                        <button type="button" class="btn btn-light" data-method="reset" title="Reset">
                                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;reset&quot;)">
                                            <span class="fas fa-redo"></span>
                                            </span>
                                        </button>
                                        <button type="button" class="btn btn-light btn-upload" title="Upload image file">
                                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="Import image with Blob URLs">
                                            <span class="fas fa-upload"></span>
                                            </span>
                                        </button>
                                        <button type="button" class="btn btn-light" data-method="destroy" title="Destroy">
                                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;destroy&quot;)">
                                            <span class="fas fa-power-off"></span>
                                            </span>
                                        </button>
                                    </div>
                            
                                    <div class="btn-group btn-group-crop mb-2 mr-1">
                                        <button type="button" class="btn btn-primary" data-method="getCroppedCanvas" data-option="{ &quot;maxWidth&quot;: 4096, &quot;maxHeight&quot;: 4096 }">
                                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getCroppedCanvas&quot;, { maxWidth: 4096, maxHeight: 4096 })">
                                            Get Cropped Canvas
                                            </span>
                                        </button>
                                        <button type="button" class="btn btn-primary" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }">
                                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 160, height: 90 })">
                                            160&times;90
                                            </span>
                                        </button>
                                        <button type="button" class="btn btn-primary" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }">
                                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 320, height: 180 })">
                                            320&times;180
                                            </span>
                                        </button>
                                    </div>
                            
                                    <!-- Show the cropped image in modal -->
                                    <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="getCroppedCanvasTitle">Cropped</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body"></div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <a class="btn btn-primary" id="download" href="javascript:void(0);" download="cropped.jpg">Download</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.modal -->
                            
                                    <button type="button" class="btn btn-secondary mb-2 mr-1" data-method="getData" data-option data-target="#putData">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getData&quot;)">
                                            Get Data
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-secondary mb-2 mr-1" data-method="setData" data-target="#putData">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;setData&quot;, data)">
                                            Set Data
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-secondary mb-2 mr-1" data-method="getContainerData" data-option data-target="#putData">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getContainerData&quot;)">
                                            Get Container Data
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-secondary mb-2 mr-1" data-method="getImageData" data-option data-target="#putData">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getImageData&quot;)">
                                            Get Image Data
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-secondary mb-2 mr-1" data-method="getCanvasData" data-option data-target="#putData">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getCanvasData&quot;)">
                                            Get Canvas Data
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-secondary mb-2 mr-1" data-method="setCanvasData" data-target="#putData">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;setCanvasData&quot;, data)">
                                            Set Canvas Data
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-secondary mb-2 mr-1" data-method="getCropBoxData" data-option data-target="#putData">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getCropBoxData&quot;)">
                                            Get Crop Box Data
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-secondary mb-2 mr-1" data-method="setCropBoxData" data-target="#putData">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;setCropBoxData&quot;, data)">
                                            Set Crop Box Data
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-secondary mb-2 mr-1" data-method="moveTo" data-option="0">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="cropper.moveTo(0)">
                                            Move to [0,0]
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-secondary mb-2 mr-1" data-method="zoomTo" data-option="1">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="cropper.zoomTo(1)">
                                            Zoom to 100%
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-secondary mb-2 mr-1" data-method="rotateTo" data-option="180">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="cropper.rotateTo(180)">
                                            Rotate 180°
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-secondary mb-2 mr-1" data-method="scale" data-option="-2" data-second-option="-1">
                                        <span class="docs-tooltip" data-toggle="tooltip" title="cropper.scale(-2, -1)">
                                            Scale (-2, -1)
                                        </span>
                                    </button>
                                    <textarea class="form-control" id="putData" rows="3" placeholder="Get data to here or set data with this value"></textarea>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <!-- <h3>Preview:</h3> -->
                                    <div class="docs-preview clearfix">
                                        <div class="img-preview preview-lg"></div>
                                        <div class="img-preview preview-md"></div>
                                        <div class="img-preview preview-sm"></div>
                                        <div class="img-preview preview-xs"></div>
                                    </div>
                            
                                    <!-- <h3>Data:</h3> -->
                                    <div class="docs-data">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">X</span>
                                            </div>
                                            <input type="text" class="form-control" id="dataX" placeholder="x">
                                            <div class="input-group-append">
                                                <span class="input-group-text">px</span>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Y</span>
                                            </div>
                                            <input type="text" class="form-control" id="dataY" placeholder="y">
                                            <div class="input-group-append">
                                                <span class="input-group-text">px</span>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Width</span>
                                            </div>
                                            <input type="text" class="form-control" id="dataWidth" placeholder="width">
                                            <div class="input-group-append">
                                                <span class="input-group-text">px</span>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Height</span>
                                            </div>
                                            <input type="text" class="form-control" id="dataHeight" placeholder="height">
                                            <div class="input-group-append">
                                                <span class="input-group-text">px</span>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Rotate</span>
                                            </div>
                                            <input type="text" class="form-control" id="dataRotate" placeholder="rotate">
                                            <div class="input-group-append">
                                                <span class="input-group-text">deg</span>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">ScaleX</span>
                                            </div>
                                            <input type="text" class="form-control" id="dataScaleX" placeholder="scaleX">
                                        </div>
                                        <div class="input-group mb-0">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">ScaleY</span>
                                            </div>
                                            <input type="text" class="form-control" id="dataScaleY" placeholder="scaleY">
                                        </div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                            
                            <div class="card docs-toggles">
                                <div class="card-body">
                                    <div class="btn-group d-flex flex-nowrap" data-toggle="buttons">
                                        <label class="btn btn-light active">
                                            <input type="radio" class="sr-only" id="aspectRatio0" name="aspectRatio" value="1.7777777777777777">
                                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="aspectRatio: 16 / 9">
                                            16:9
                                            </span>
                                        </label>
                                        <label class="btn btn-light">
                                            <input type="radio" class="sr-only" id="aspectRatio1" name="aspectRatio" value="1.3333333333333333">
                                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="aspectRatio: 4 / 3">
                                            4:3
                                            </span>
                                        </label>
                                        <label class="btn btn-light">
                                            <input type="radio" class="sr-only" id="aspectRatio2" name="aspectRatio" value="1">
                                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="aspectRatio: 1 / 1">
                                            1:1
                                            </span>
                                        </label>
                                        <label class="btn btn-light">
                                            <input type="radio" class="sr-only" id="aspectRatio3" name="aspectRatio" value="0.6666666666666666">
                                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="aspectRatio: 2 / 3">
                                            2:3
                                            </span>
                                        </label>
                                        <label class="btn btn-light">
                                            <input type="radio" class="sr-only" id="aspectRatio4" name="aspectRatio" value="NaN">
                                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="aspectRatio: NaN">
                                            Free
                                            </span>
                                        </label>
                                    </div>
                            
                                    <div class="btn-group d-flex flex-nowrap" data-toggle="buttons">
                                        <label class="btn btn-light active">
                                            <input type="radio" class="sr-only" id="viewMode0" name="viewMode" value="0" checked>
                                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="View Mode 0">
                                            VM0
                                            </span>
                                        </label>
                                        <label class="btn btn-light">
                                            <input type="radio" class="sr-only" id="viewMode1" name="viewMode" value="1">
                                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="View Mode 1">
                                            VM1
                                            </span>
                                        </label>
                                        <label class="btn btn-light">
                                            <input type="radio" class="sr-only" id="viewMode2" name="viewMode" value="2">
                                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="View Mode 2">
                                            VM2
                                            </span>
                                        </label>
                                        <label class="btn btn-light">
                                            <input type="radio" class="sr-only" id="viewMode3" name="viewMode" value="3">
                                            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="View Mode 3">
                                            VM3
                                            </span>
                                        </label>
                                    </div>
                            
                                    <div class="dropdown dropup docs-options">
                                        <button type="button" class="btn btn-gradient-primary btn-block dropdown-toggle" id="toggleOptions" data-toggle="dropdown" aria-expanded="true">
                                            Toggle Options
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="toggleOptions" role="menu">
                                            <li class="dropdown-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="responsive" type="checkbox" name="responsive" checked>
                                                    <label class="form-check-label" for="responsive">responsive</label>
                                                </div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="restore" type="checkbox" name="restore" checked>
                                                    <label class="form-check-label" for="restore">restore</label>
                                                </div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="checkCrossOrigin" type="checkbox" name="checkCrossOrigin" checked>
                                                    <label class="form-check-label" for="checkCrossOrigin">checkCrossOrigin</label>
                                                </div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="checkOrientation" type="checkbox" name="checkOrientation" checked>
                                                    <label class="form-check-label" for="checkOrientation">checkOrientation</label>
                                                </div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="modal" type="checkbox" name="modal" checked>
                                                    <label class="form-check-label" for="modal">modal</label>
                                                </div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="guides" type="checkbox" name="guides" checked>
                                                    <label class="form-check-label" for="guides">guides</label>
                                                </div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="center" type="checkbox" name="center" checked>
                                                    <label class="form-check-label" for="center">center</label>
                                                </div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="highlight" type="checkbox" name="highlight" checked>
                                                    <label class="form-check-label" for="highlight">highlight</label>
                                                </div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="background" type="checkbox" name="background" checked>
                                                    <label class="form-check-label" for="background">background</label>
                                                </div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="autoCrop" type="checkbox" name="autoCrop" checked>
                                                    <label class="form-check-label" for="autoCrop">autoCrop</label>
                                                </div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="movable" type="checkbox" name="movable" checked>
                                                    <label class="form-check-label" for="movable">movable</label>
                                                </div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="rotatable" type="checkbox" name="rotatable" checked>
                                                    <label class="form-check-label" for="rotatable">rotatable</label>
                                                </div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="scalable" type="checkbox" name="scalable" checked>
                                                    <label class="form-check-label" for="scalable">scalable</label>
                                                </div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="zoomable" type="checkbox" name="zoomable" checked>
                                                    <label class="form-check-label" for="zoomable">zoomable</label>
                                                </div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="zoomOnTouch" type="checkbox" name="zoomOnTouch" checked>
                                                    <label class="form-check-label" for="zoomOnTouch">zoomOnTouch</label>
                                                </div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="zoomOnWheel" type="checkbox" name="zoomOnWheel" checked>
                                                    <label class="form-check-label" for="zoomOnWheel">zoomOnWheel</label>
                                                </div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="cropBoxMovable" type="checkbox" name="cropBoxMovable" checked>
                                                    <label class="form-check-label" for="cropBoxMovable">cropBoxMovable</label>
                                                </div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="cropBoxResizable" type="checkbox" name="cropBoxResizable" checked>
                                                    <label class="form-check-label" for="cropBoxResizable">cropBoxResizable</label>
                                                </div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="toggleDragModeOnDblclick" type="checkbox" name="toggleDragModeOnDblclick" checked>
                                                    <label class="form-check-label" for="toggleDragModeOnDblclick">toggleDragModeOnDblclick</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><!-- /.dropdown -->
                            
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!-- container -->
@stop

@section('footerScript')
        <script src="{{ URL::asset('plugins/cropper/js/cropper.js')}}"></script>
        <script src="{{ URL::asset('plugins/cropper/js/main.js')}}"></script>
@stop