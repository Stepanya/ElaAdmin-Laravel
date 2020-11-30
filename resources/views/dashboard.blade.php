@extends('layouts.master')

@section('title')
    CIMB Validation - Dashboard
@endsection

@section('breadcrumb')
  <li><a href="#" class="active">Dashboard</a></li>
@endsection

@section('content')

{{-- First row --}}
<div class="row">
  <div class="col-lg-3 col-md-6">
      <div class="card">
          <div class="card-body">
              <div class="stat-widget-five">
                  <div class="stat-icon dib flat-color-3">
                      <i class="pe-7s-server"></i>
                  </div>
                  <div class="stat-content">
                      <div class="text-left dib">
                          <div class="stat-text"><small>2,500,000</small></div>
                          <div class="stat-heading">No. of account</div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="col-lg-3 col-md-6">
      <div class="card">
          <div class="card-body">
              <div class="stat-widget-five">
                  <div class="stat-icon dib flat-color-2">
                      <i class="fa fa-file-text-o"></i>
                  </div>
                  <div class="stat-content">
                      <div class="text-left dib">
                          <div class="stat-text"><small>30,000</small></div>
                          <div class="stat-heading">No Documents</div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="col-lg-3 col-md-6">
      <div class="card">
          <div class="card-body">
              <div class="stat-widget-five">
                  <div class="stat-icon dib flat-color-5">
                      <i class="pe-7s-id"></i>
                  </div>
                  <div class="stat-content">
                      <div class="text-left dib">
                          <div class="stat-text"><small>6,000</small></div>
                          <div class="stat-heading">ID Only</div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="col-lg-3 col-md-6">
      <div class="card">
          <div class="card-body">
              <div class="stat-widget-five">
                  <div class="stat-icon dib flat-color-4">
                      <i class="pe-7s-user-female"></i>
                  </div>
                  <div class="stat-content">
                      <div class="text-left dib">
                          <div class="stat-text"><small>1,000</small></div>
                          <div class="stat-heading">Selfie Only</div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
{{-- Second row --}}
<div class="row">
  <div class="col-lg-3 col-md-6">
      <div class="card">
          <div class="card-body">
              <div class="stat-widget-five">
                  <div class="stat-icon dib text-warning">
                      <i class="pe-7s-copy-file"></i>
                  </div>
                  <div class="stat-content">
                      <div class="text-left dib">
                          <div class="stat-text"><small>2,463,000</small></div>
                          <div class="stat-heading">With Both Document</div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="col-lg-3 col-md-6">
      <div class="card">
          <div class="card-body">
              <div class="stat-widget-five">
                  <div class="stat-icon dib flat-color-4">
                      <i class="fa fa-thumbs-o-up"></i>
                  </div>
                  <div class="stat-content">
                      <div class="text-left dib">
                          <div class="stat-text"><small>150,000</small></div>
                          <div class="stat-heading">Self Upgraded to GS02</div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="col-lg-3 col-md-6">
      <div class="card">
          <div class="card-body">
              <div class="stat-widget-five">
                  <div class="stat-icon dib flat-color-5">
                      <i class="fa fa-thumbs-o-up"></i>
                  </div>
                  <div class="stat-content">
                      <div class="text-left dib">
                          <div class="stat-text"><small>1,108,350</small></div>
                          <div class="stat-heading">Pass for GS03</div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="col-lg-3 col-md-6">
      <div class="card">
          <div class="card-body">
              <div class="stat-widget-five">
                  <div class="stat-icon dib flat-color-3">
                      <i class="fa fa-thumbs-o-up"></i>
                  </div>
                  <div class="stat-content">
                      <div class="text-left dib">
                          <div class="stat-text"><small>369,450</small></div>
                          <div class="stat-heading">Pass for GS03</div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="col-lg-3 col-md-6">
      <div class="card">
          <div class="card-body">
              <div class="stat-widget-five">
                  <div class="stat-icon dib text-danger">
                      <i class="pe-7s-id"></i>
                  </div>
                  <div class="stat-content">
                      <div class="text-left dib">
                          <div class="stat-text"><small>320,190 (13.00%)</small></div>
                          <div class="stat-heading">Unsupported ID's</div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="col-lg-3 col-md-6">
      <div class="card">
          <div class="card-body">
              <div class="stat-widget-five">
                  <div class="stat-icon dib text-danger">
                      <i class="fa fa-exclamation"></i>
                  </div>
                  <div class="stat-content">
                      <div class="text-left dib">
                          <div class="stat-text"><small>6,160 (0.25%)</small></div>
                          <div class="stat-heading">Null Results</div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="col-lg-3 col-md-6">
      <div class="card">
          <div class="card-body">
              <div class="stat-widget-five">
                  <div class="stat-icon dib text-danger">
                      <i class="fa fa-thumbs-o-down"></i>
                  </div>
                  <div class="stat-content">
                      <div class="text-left dib">
                          <div class="stat-text"><small>508,000 (20.63%)</small></div>
                          <div class="stat-heading">Fail</div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="col-lg-3 col-md-6">
      <div class="card">
          <div class="card-body">
              <div class="stat-widget-five">
                  <div class="stat-icon dib flat-color-1">
                      <i class="pe-7s-shield"></i>
                  </div>
                  <div class="stat-content">
                      <div class="text-left dib">
                          <div class="stat-text"><small>859 (0.03%)</small></div>
                          <div class="stat-heading">Fraud</div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  
  <div class="col-lg-3 col-md-6">
      <div class="card">
          <div class="card-body">
              <div class="stat-widget-five">
                  <div class="stat-icon dib flat-color-5">
                      {{-- <i class="pe-7s-id"></i> --}}
                  </div>
                  <div class="stat-content">
                      <div class="text-left dib">
                          <div class="stat-text"><small>320,190 (13.00%)</small></div>
                          <div class="stat-heading">Retain as GS01</div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection

@section('scripts')
    
@endsection