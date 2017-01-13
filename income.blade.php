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
      <h3>Invite Auditor</h3>
      <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
   </div>
</div>
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <div class="x_title">
               <h2>Company's Auditor<small>Invitation</small></h2>
               <div class="clearfix"></div>
            </div>
            <div class="x_content">
               <p class="text-muted font-13 m-b-30">
                  Invite fellow auditor to audit the account:
               </p>
				<div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
					<div class="row">
						{{-- data table --}}
						<div id="jsGrid"></div>
                       {{-- form start --}}
                       <br id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                          <div class="form-group">
                             <label class="control-label col-md-3 col-sm-3 col-xs-12">Auditor ID</label>
                             <div class="col-md-8 col-sm-8 col-xs-12">
                                <label>
                                   <input type="text" class="form-control" name="AuditorID">
                                </label>
                             </div>
                          </div>
                          <div class="form-group">
                             <label class="control-label col-md-3 col-sm-3 col-xs-12">Account ID</label>
                             <div class="col-md-8 col-sm-8 col-xs-12">
                                <label>
                                   <input type="text" class="form-control" name="AccountID">
                                </label>
                             </div>
                          </div>
                          <div class="ln_solid"></div>
                          <div class="form-group">
                             <div class="col-md-offset-9">
                                <button type="submit" class="btn btn-primary">Cancel</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                             </div>
                          </div>
                       </form>
                       {{-- form end --}}
						{{-- data table end --}}
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