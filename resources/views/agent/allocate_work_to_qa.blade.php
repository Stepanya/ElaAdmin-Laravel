@extends('layouts.master')

@section('stylesheets')
<link rel="stylesheet" href="assets/DataTables/datatables.min.css"/>
<link rel="stylesheet" href="assets/DataTables/Select-1.3.1/css/select.dataTables.min.css"/>
@endsection

@section('title')
CIMB Validation - Dashboard
@endsection

@section('content-top')
<div class="container">
    <div class="row text-center mr-2 pt-2">
        <div class="col">
            <select id="select" class="form-control">
                <option value="all">All Items</option>
                <option value="selected">All Selected</option>
            </select>
        </div>
        <div class="col">
            <select class="form-control">
                <option>A/C Opened 'to'</option>
                <option>Epie B. Brillones</option>
                <option>Narissa Hernandez</option>
                <option>Marivic Falsis</option>
                <option>Elysa Tan</option>
                <option>Glofer Love Pepito</option>
                <option>Maryleene Tan</option>
                <option>Cristina Madridano</option>
                <option>Denmark Isidro</option>
                <option>Niza Levera</option>
                <option>Myla Eleine</option>
            </select>
        </div>
        <div class="col-6">
            <button class="btn btn-success btn-block">Allocate</button>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="table-responsive">
    <table id="customers-table" class="table table-sm table-bordered table-light">
        <thead class="thead-dark"> 
            <tr>
                <th class="text-center">Select All <br> <input id="select-all" type="checkbox"></th>
                <th>Cust No.</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Date of Birth</th>
                <th>Opened Date</th>
                <th>Nationality</th>
                <th>Document No.</th>
            </tr>
        </thead>
    </table>
</div>
@endsection

@section('scripts')

<script src="assets/DataTables/datatables.min.js"></script>
<script src="assets/DataTables/Select-1.3.1/js/dataTables.select.min.js"></script>
<script src="assets/DataTables/DataTables-1.10.23/js/dataTables.bootstrap4.min.js"></script>

<script>

var table = jQuery('#customers-table').DataTable({
    serverSide: true,
    responsive: true,
    searching: false,
    scrollY: 500,
    scrollCollapse: true,
    select: true,
    ajax: "{{ route('admin.persons') }}",
    columns: [
        { name: 'nationality', orderable: false},
        { name: 'customer_number' },
        { name: 'last_name' },
        { name: 'first_name' },
        { name: 'dob'},
        { name: 'opened_date'},
        { name: 'nationality'},
        { name: 'doc_no'}
    ],
    columnDefs: [ {
        targets: 0,
        data: null,
        defaultContent: '',
        orderable: false,
        className: 'select-checkbox'
    } ],
    select: {
        style:    'multi',
        selector: 'td:first-child'
    }
});

jQuery("#select-all").on( "click", function(e) {
    if (jQuery("th.select-checkbox").hasClass("selected")) {
        table.rows().deselect();
        jQuery("th.select-checkbox").removeClass("selected");
    } else {
        table.rows().select();
        jQuery("th.select-checkbox").addClass("selected");
    }
});

jQuery('#select').on('change', function() {
  if (this.value == "all") {  table.ajax.reload(); }
  else if (this.value == "selected") { showSelected(); }
});

function showSelected() {
    if (jQuery( "tbody > tr" ).is( ".selected" )) {
        jQuery("tbody > tr:not(.selected)").hide();   
    }
}

</script>
@endsection