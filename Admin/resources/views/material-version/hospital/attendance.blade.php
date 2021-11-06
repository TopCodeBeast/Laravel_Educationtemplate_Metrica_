@extends('layouts.material-version-master')

@section('title', 'Metrica - Admin & Dashboard Template')

@section('content')
      <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                              @component('common-components.breadcrumb')
                                 @slot('title') Attendance @endslot
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
                                    <div class="table-responsive attendance-table">
                                        <table class="table table-bordered mb-0 table-centered">
                                            <thead>
                                            <tr>
                                                
                                                <th colspan="2"></th>
                                                <th>Sun</th>
                                                <th>Mon</th>
                                                <th>Tue</th>
                                                <th>Wed</th>
                                                <th>Thu</th>
                                                <th>Fri</th>
                                                <th>Set</th>
                                                <th>Sun</th>
                                                <th>Mon</th>
                                                <th>Tue</th>
                                                <th>Wed</th>
                                                <th>Thu</th>
                                                <th>Fri</th>
                                                <th>Set</th>
                                                <th>Sun</th>
                                                <th>Mon</th>
                                                <th>Tue</th>
                                                <th>Wed</th>
                                                <th>Thu</th>
                                                <th>Fri</th>
                                                <th>Set</th>
                                                <th>Sun</th>
                                                <th>Mon</th>
                                                <th>Tue</th>
                                                <th>Wed</th>
                                                <th>Thu</th>
                                                <th>Fri</th>
                                                <th>Set</th>
                                                <th>Sun</th>
                                                <th>Mon</th>
                                                <th>Tue</th>
                                            </tr>
                                            <tr>
                                                <th>Name</th>
                                                <th>ID</th>
                                                <th>1</th>
                                                <th>2</th>
                                                <th>3</th>
                                                <th>4</th>
                                                <th>5</th>
                                                <th>6</th>
                                                <th>7</th>
                                                <th>8</th>
                                                <th>9</th>
                                                <th>10</th>
                                                <th>11</th>
                                                <th>12</th>
                                                <th>13</th>
                                                <th>14</th>
                                                <th>15</th>
                                                <th>16</th>
                                                <th>17</th>
                                                <th>18</th>
                                                <th>19</th>
                                                <th>20</th>
                                                <th>21</th>
                                                <th>22</th>
                                                <th>23</th>
                                                <th>24</th>
                                                <th>25</th>
                                                <th>26</th>
                                                <th>27</th>
                                                <th>28</th>
                                                <th>29</th>
                                                <th>30</th>
                                                <th>31</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Richard Smith</td>
                                                <td>#6521</td>
                                                <td><i class="mdi mdi-check text-success"></i></td> 
                                                <td><i class="mdi mdi-close text-danger"></i></td> 
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td> 
                                                <td><i class="mdi mdi-close text-danger"></i></td> 
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>  
                                                <td><i class="mdi mdi-close text-danger"></i></td> 
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td> 
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>                                              
                                            </tr>
                                            <tr>
                                                <td>Terry Gregg</td>
                                                <td>#3254</td>
                                                <td><i class="mdi mdi-check text-success"></i></td> 
                                                <td><i class="mdi mdi-close text-danger"></i></td> 
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td> 
                                                <td><i class="mdi mdi-close text-danger"></i></td> 
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>  
                                                <td><i class="mdi mdi-close text-danger"></i></td> 
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td> 
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>                                              
                                            </tr>
                                            <tr>
                                                <td>Emily Lingle</td>
                                                <td>#6632</td>
                                                <td><i class="mdi mdi-check text-success"></i></td> 
                                                <td><i class="mdi mdi-close text-danger"></i></td> 
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td> 
                                                <td><i class="mdi mdi-close text-danger"></i></td> 
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>  
                                                <td><i class="mdi mdi-close text-danger"></i></td> 
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td> 
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>                                              
                                            </tr>
                                            <tr>
                                                <td>Donald Gardner</td>
                                                <td>#2143</td>
                                                <td><i class="mdi mdi-check text-success"></i></td> 
                                                <td><i class="mdi mdi-close text-danger"></i></td> 
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td> 
                                                <td><i class="mdi mdi-close text-danger"></i></td> 
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>  
                                                <td><i class="mdi mdi-close text-danger"></i></td> 
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td> 
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>
                                                <td><i class="mdi mdi-check text-success"></i></td>                                              
                                            </tr>
                                            </tbody>
                                        </table><!--end /table-->
                                    </div><!--end /tableresponsive-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                </div><!-- container -->
@stop
