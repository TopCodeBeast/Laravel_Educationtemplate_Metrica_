@extends('layouts.ecommerce-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('headerStyle')
<!-- DataTables -->
<link href="{{ URL::asset('plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@stop

@section('content')
  <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                             @component('common-components.breadcrumb')
                                 @slot('title') Product List @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Ecommerce @endslot
                                 @slot('item3') List @endslot
                              @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
    
                                    <h4 class="mt-0 header-title">Product Stock</h4>
                                    <p class="text-muted mb-4 font-13">
                                        Available all products.
                                    </p>
    
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Category</th>
                                            <th>Pics</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th>Avai.Color</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
    
    
                                        <tbody>
                                        <tr>
                                            <td>
                                                <img src="{{ URL::asset('assets/images/products/img-2.png')}}" alt="" height="52">
                                                <p class="d-inline-block align-middle mb-0">
                                                    <a href="" class="d-inline-block align-middle mb-0 product-name">Apple Watch</a> 
                                                    <br>
                                                    <span class="text-muted font-13">Size-05 (Model 2019)</span> 
                                                </p>
                                            </td>
                                            <td>Sports</td>
                                            <td>32</td>
                                            <td>$39</td>
                                            <td><span class="badge badge-soft-warning">Stock</span></td>
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-danger"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-dark"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                                                </ul>
                                            </td>
                                            <td>
                                                <a href=""><i class="far fa-edit text-info mr-1"></i></a>
                                                <a href=""><i class="far fa-trash-alt text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ URL::asset('assets/images/products/1.jpg')}}" alt="" height="52">
                                                <p class="d-inline-block align-middle mb-0">
                                                    <a href="" class="d-inline-block align-middle mb-0 product-name">Morden Chair</a> 
                                                    <br>
                                                    <span class="text-muted font-13">Size-Mediam (Model 2019)</span> 
                                                </p>
                                            </td>
                                            <td>Interior</td>
                                            <td>10</td>
                                            <td>$99</td>
                                            <td><span class="badge badge-soft-pink">Sold</span></td>
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-danger"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                                </ul>
                                            </td>
                                            <td>
                                                <a href=""><i class="far fa-edit text-info mr-1"></i></a>
                                                <a href=""><i class="far fa-trash-alt text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ URL::asset('assets/images/products/img-5.png')}}" alt="" height="52">
                                                <p class="d-inline-block align-middle mb-0">
                                                    <a href="" class="d-inline-block align-middle mb-0 product-name">Reebok Shoes</a> 
                                                    <br>
                                                    <span class="text-muted font-13">size-08 (Model 2019)</span> 
                                                </p>
                                            </td>
                                            <td>Footwear</td>
                                            <td>24</td>
                                            <td>$49</td>
                                            <td><span class="badge badge-soft-secondary">Stock</span></td>
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-danger"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-dark"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                                                </ul>
                                            </td>
                                            <td>
                                                <a href=""><i class="far fa-edit text-info mr-1"></i></a>
                                                <a href=""><i class="far fa-trash-alt text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ URL::asset('assets/images/products/img-6.png')}}" alt="" height="52">
                                                <p class="d-inline-block align-middle mb-0">
                                                    <a href="" class="d-inline-block align-middle mb-0 product-name">Cosco Vollyboll</a> 
                                                    <br>
                                                    <span class="text-muted font-13">size-04 (Model 2019)</span> 
                                                </p>
                                            </td>
                                            <td>Sports</td>
                                            <td>8</td>
                                            <td>$49</td>
                                            <td><span class="badge badge-soft-secondary">Stock</span></td>
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-dark"></i></li>
                                                </ul>
                                            </td>
                                            <td>
                                                <a href=""><i class="far fa-edit text-info mr-1"></i></a>
                                                <a href=""><i class="far fa-trash-alt text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ URL::asset('assets/images/products/img-4.png')}}" alt="" height="52">
                                                <p class="d-inline-block align-middle mb-0">
                                                    <a href="" class="d-inline-block align-middle mb-0 product-name">Royal Purse</a> 
                                                    <br>
                                                    <span class="text-muted font-13">Pure Lether 100%</span> 
                                                </p>
                                            </td>
                                            <td>Life Style</td>
                                            <td>52</td>
                                            <td>$89</td>
                                            <td><span class="badge badge-soft-purple">Stock</span></td>
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-danger"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-dark"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                                                </ul>
                                            </td>
                                            <td>
                                                <a href=""><i class="far fa-edit text-info mr-1"></i></a>
                                                <a href=""><i class="far fa-trash-alt text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ URL::asset('assets/images/products/img-5.png')}}" alt="" height="52">
                                                <p class="d-inline-block align-middle mb-0">
                                                    <a href="" class="d-inline-block align-middle mb-0 product-name">New Morden Chair</a> 
                                                    <br>
                                                    <span class="text-muted font-13">size-05 (Model 2019)</span> 
                                                </p>
                                            </td>
                                            <td>Interior</td>
                                            <td>6</td>
                                            <td>$20</td>
                                            <td><span class="badge badge-soft-warning">Stock</span></td>
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-dark"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                                                </ul>
                                            </td>
                                            <td>
                                                <a href=""><i class="far fa-edit text-info mr-1"></i></a>
                                                <a href=""><i class="far fa-trash-alt text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ URL::asset('assets/images/products/2.jpg')}}" alt="" height="52">
                                                <p class="d-inline-block align-middle mb-0">
                                                    <a href="" class="d-inline-block align-middle mb-0 product-name">Important Chair</a> 
                                                    <br>
                                                    <span class="text-muted font-13">size-05 (Model 2019)</span> 
                                                </p>
                                            </td>
                                            <td>Interior</td>
                                            <td>32</td>
                                            <td>$39</td>
                                            <td><span class="badge badge-soft-warning">Stock</span></td>
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-danger"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-dark"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                                                </ul>
                                            </td>
                                            <td>
                                                <a href=""><i class="far fa-edit text-info mr-1"></i></a>
                                                <a href=""><i class="far fa-trash-alt text-danger"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img src="{{ URL::asset('assets/images/products/img-2.png')}}" alt="" height="52">
                                                <p class="d-inline-block align-middle mb-0">
                                                    <a href="" class="d-inline-block align-middle mb-0 product-name">Nivya Footboll</a> 
                                                    <br>
                                                    <span class="text-muted font-13">Size-05 (Model 2019)</span> 
                                                </p>
                                            </td>
                                            <td>Sports</td>
                                            <td>32</td>
                                            <td>$39</td>
                                            <td><span class="badge badge-soft-warning">Stock</span></td>
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-danger"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-dark"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                                                </ul>
                                            </td>
                                            <td>
                                                <a href=""><i class="far fa-edit text-info mr-1"></i></a>
                                                <a href=""><i class="far fa-trash-alt text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ URL::asset('assets/images/products/1.jpg')}}" alt="" height="52">
                                                <p class="d-inline-block align-middle mb-0">
                                                    <a href="" class="d-inline-block align-middle mb-0 product-name">Green Morden Chair</a> 
                                                    <br>
                                                    <span class="text-muted font-13">Size-Mediam (Model 2019)</span> 
                                                </p>
                                            </td>
                                            <td>Interior</td>
                                            <td>10</td>
                                            <td>$99</td>
                                            <td><span class="badge badge-soft-pink">Sold</span></td>
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-danger"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                                </ul>
                                            </td>
                                            <td>
                                                <a href=""><i class="far fa-edit text-info mr-1"></i></a>
                                                <a href=""><i class="far fa-trash-alt text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ URL::asset('assets/images/products/img-5.png')}}" alt="" height="52">
                                                <p class="d-inline-block align-middle mb-0">
                                                    <a href="" class="d-inline-block align-middle mb-0 product-name">Bata Shoes</a> 
                                                    <br>
                                                    <span class="text-muted font-13">size-08 (Model 2019)</span> 
                                                </p>
                                            </td>
                                            <td>Footwear</td>
                                            <td>24</td>
                                            <td>$49</td>
                                            <td><span class="badge badge-soft-secondary">Stock</span></td>
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-danger"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-dark"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                                                </ul>
                                            </td>
                                            <td>
                                                <a href=""><i class="far fa-edit text-info mr-1"></i></a>
                                                <a href=""><i class="far fa-trash-alt text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ URL::asset('assets/images/products/img-6.png')}}" alt="" height="52">
                                                <p class="d-inline-block align-middle mb-0">
                                                    <a href="" class="d-inline-block align-middle mb-0 product-name">Nike Vollyboll</a> 
                                                    <br>
                                                    <span class="text-muted font-13">size-04 (Model 2019)</span> 
                                                </p>
                                            </td>
                                            <td>Sports</td>
                                            <td>8</td>
                                            <td>$49</td>
                                            <td><span class="badge badge-soft-secondary">Stock</span></td>
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-dark"></i></li>
                                                </ul>
                                            </td>
                                            <td>
                                                <a href=""><i class="far fa-edit text-info mr-1"></i></a>
                                                <a href=""><i class="far fa-trash-alt text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ URL::asset('assets/images/products/img-4.png')}}" alt="" height="52">
                                                <p class="d-inline-block align-middle mb-0">
                                                    <a href="" class="d-inline-block align-middle mb-0 product-name">Lava Purse</a> 
                                                    <br>
                                                    <span class="text-muted font-13">Pure Lether 100%</span> 
                                                </p>
                                            </td>
                                            <td>Life Style</td>
                                            <td>52</td>
                                            <td>$89</td>
                                            <td><span class="badge badge-soft-purple">Stock</span></td>
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-danger"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-dark"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                                                </ul>
                                            </td>
                                            <td>
                                                <a href=""><i class="far fa-edit text-info mr-1"></i></a>
                                                <a href=""><i class="far fa-trash-alt text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ URL::asset('assets/images/products/img-3.png')}}" alt="" height="52">
                                                <p class="d-inline-block align-middle mb-0">
                                                    <a href="" class="d-inline-block align-middle mb-0 product-name">Brown Morden Chair</a> 
                                                    <br>
                                                    <span class="text-muted font-13">size-05 (Model 2019)</span> 
                                                </p>
                                            </td>
                                            <td>Interior</td>
                                            <td>6</td>
                                            <td>$20</td>
                                            <td><span class="badge badge-soft-warning">Stock</span></td>
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-dark"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                                                </ul>
                                            </td>
                                            <td>
                                                <a href=""><i class="far fa-edit text-info mr-1"></i></a>
                                                <a href=""><i class="far fa-trash-alt text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ URL::asset('assets/images/products/img-2.png')}}" alt="" height="52">
                                                <p class="d-inline-block align-middle mb-0">
                                                    <a href="" class="d-inline-block align-middle mb-0 product-name">Best Look Chair</a> 
                                                    <br>
                                                    <span class="text-muted font-13">size-05 (Model 2019)</span> 
                                                </p>
                                            </td>
                                            <td>Interior</td>
                                            <td>32</td>
                                            <td>$39</td>
                                            <td><span class="badge badge-soft-warning">Stock</span></td>
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-danger"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-dark"></i></li>
                                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                                                </ul>
                                            </td>
                                            <td>
                                                <a href=""><i class="far fa-edit text-info mr-1"></i></a>
                                                <a href=""><i class="far fa-trash-alt text-danger"></i></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>        
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                </div><!-- container -->
@stop

@section('footerScript')

        <script src="{{ URL::asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{ URL::asset('plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <script>
            $('#datatable').DataTable();
        </script>
@stop