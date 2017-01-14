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
      <h3>Version</h3>
      <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
   </div>
</div>
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <div class="x_title">
               <h2>Version of Audited Account</h2>
               <div class="clearfix"></div>
            </div>
            <div class="x_content">
               <p class="text-muted font-13 m-b-30">
                  Show the list of all version of account that you have audited
               </p>
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
                                 <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Account ID: activate to sort column descending" style="width: 197px;">Account ID</th>
                                 <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Feedback: activate to sort column ascending" style="width: 313px;">Feedback</th>
                                 <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Version: activate to sort column ascending" style="width: 145px;">Version</th>
                                 <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 74px;">Date</th>
                                 <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Time: activate to sort column ascending" style="width: 74px;">Time</th>
                              </tr>
                           </thead>
                           <tbody>
                               <tr role="row" class="odd">
                                  <td>22658</td>
                                  <td>Re-check November's account</td>
                                  <td>v1.0</td>
                                  <td>03-01-2017</td>
                                  <td>09:05</td>
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