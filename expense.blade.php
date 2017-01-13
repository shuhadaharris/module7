@extends('layouts.layout')
@section('content')
    <!-- menu profile quick info -->
    @include('layouts.profile-quick-info')
    <!-- menu profile quick info -->
    <br />
    <!-- sidebar menu -->
    @include('layouts.sidebar-menu')
    <!-- sidebar menu -->
    <!-- /menu footer buttons -->
    @include('layouts.footer-button')
    <!-- /menu footer buttons -->
    </div>
    </div>
    <!-- top navigation -->
    @include('layouts.top-navigation')
    <!-- top navigation -->

    <!-- page content -->
{{-- data table start --}}
<div class="right_col" role="main">
<div class="nav side-menu">
</div>
<div class="alert alert-success alert-dismissible fade in" role="alert">
   <div class="title_left">
      <h3>Audit Account</h3>
      <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
   </div>
</div>
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <div class="x_title">
               <h2>Audit Account<small>Users</small></h2>
               <div class="clearfix"></div>
            </div>
            <div class="x_content">
               <p class="text-muted font-13 m-b-30">
                  List of in-charge auditor audit account</p>
               <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="dataTables_length" id="datatable_length">
                           <label>
                              Show 
                              <select name="datatable_length" aria-controls="datatable" class="form-control input-sm">
                                 <option value="10">10</option>
                                 <option value="25">25</option>
                                 <option value="50">50</option>
                                 <option value="100">100</option>
                              </select>
                              entries
                           </label>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div id="datatable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></label></div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-12">
                        <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                           <thead>
                              <tr role="row">
                                 <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 197px;">Account ID</th>
                                 <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 313px;">Accountant In-charge</th>
                                 <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 145px;">Version</th>
                                 <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 74px;">Date</th>
                                 <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 139px;">Time</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr role="row" class="odd">
                                 <td>22658</td>
                                 <td>Airi Satou</td>
                                 <td>v1.0</td>
                                 <td>01-01-2017</td>
                                 <td>10:25</td>
                              </tr>
                              <tr role="row" class="odd">
                                 <td>24789</td>
                                 <td>Angelica Ramos</td>
                                 <td>v2.1</td>
                                 <td>12-12-2016</td>
                                 <td>14:04</td>
                              </tr>
                              <tr role="row" class="odd">
                                 <td>23658</td>
                                 <td>Ashton Cox</td>
                                 <td>v1.2</td>
                                 <td>25-12-2016</td>
                                 <td>15:57</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
{{-- data table end --}}
<!-- footer content -->
@include('layouts.footer-content')
<!-- footer content -->
{{-- js files start --}}
@include ('layouts.js')
{{-- js files end --}}
@endsection