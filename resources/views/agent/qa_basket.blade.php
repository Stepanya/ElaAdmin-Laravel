@extends('layouts.master')

@section('stylesheets')
<link rel="stylesheet" href="assets/DataTables/datatables.min.css"/>
@endsection

@section('title')
CIMB Validation - Dashboard
@endsection

@section('content-top')
<div class="container">
  <div class="row pt-2">
    <div class="col-lg-3 col-md-6">
      <div class="card">
        <div class="card-body">
          <div class="stat-widget-five">
            <div class="stat-icon dib flat-color-6">
              <i class="fa fa-users"></i>
            </div>
            <div class="stat-content">
              <div class="text-left dib">
                <div class="stat-text"><small>5,000</small></div>
                <div class="stat-heading">My Basket</div>
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
              <i class="fa fa-thumbs-o-up"></i>
            </div>
            <div class="stat-content">
              <div class="text-left dib">
                <div class="stat-text"><small>3,400</small></div>
                <div class="stat-heading">Completed QA</div>
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
            <div class="stat-icon dib text-warning">
              <i class="fa fa-thumbs-o-down"></i>
            </div>
            <div class="stat-content">
              <div class="text-left dib">
                <div class="stat-text"><small>5,000</small></div>
                <div class="stat-heading">Pending with SLA</div>
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
                <div class="stat-text"><small>60</small></div>
                <div class="stat-heading">Pending with SLA breach</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('content')
<div class="table-responsive overflow-auto">
<table id="customers-table" class="table table-sm table-bordered table-light">
    <thead class="thead-dark">
        <tr>
          <th>Cust No.</th>
          <th>Last Name</th>
          <th>First Name</th>
          <th>Date of Birth</th>
          <th>Opened Date</th>
          <th>Nationality</th>
          <th>Document No.</th>
          <th>SLA</th>
          <th>Action</th>
        </tr>
    </thead>
</table>
</div>
@endsection

@section('scripts')

<script src="assets/DataTables/datatables.min.js"></script>
<script src="assets/DataTables/DataTables-1.10.23/js/dataTables.bootstrap4.min.js"></script>

<script>

var table = jQuery('#customers-table').DataTable({
    serverSide: true,
    responsive: true,
    searching: false,
    scrollY: 500,
    scrollCollapse: true,
    ajax: "{{ route('admin.persons') }}",
    columns: [
        { name: 'customer_number' },
        { name: 'last_name' },
        { name: 'first_name' },
        { name: 'dob'},
        { name: 'opened_date'},
        { name: 'nationality'},
        { name: 'doc_no'},
        { name: 'sla'},
        { name: 'action', orderable: false, searchable: false }
    ],
    fnDrawCallback: function() { addColor() }
});

function addColor() {
  jQuery('td:contains("true")').html("<h3><i class='fa fa-circle' aria-hidden='true'></i></h3>").addClass("text-center text-success");
  jQuery('td:contains("false")').html("<h3><i class='fa fa-circle' aria-hidden='true'></i></h3>").addClass("text-center text-danger");
}

</script>
@endsection