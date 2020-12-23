@extends('layouts.master')

@section('title')
    CIMB Validation - Dashboard
@endsection

@section('content-top')
<div class="container">
    <div class="row text-center mr-2 pt-2">
        <div class="col">
            <div class="dropdown">
                <button class="btn bg-white dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Selected Items
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">All Selected</a>
                    <a class="dropdown-item" href="#">All Items</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="dropdown">
                <button class="btn bg-white dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    A/C opened 'to'
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Epie B. Brillones</a>
                    <a class="dropdown-item" href="#">Narissa Hernandez</a>
                    <a class="dropdown-item" href="#">Marivic Falsis</a>
                    <a class="dropdown-item" href="#">Elysa Tan</a>
                    <a class="dropdown-item" href="#">Glofer Love Pepito</a>
                    <a class="dropdown-item" href="#">Maryleene Tan</a>
                    <a class="dropdown-item" href="#">Cristina Madridano</a>
                    <a class="dropdown-item" href="#">Denmark Isidro</a>
                    <a class="dropdown-item" href="#">Niza Levera</a>
                    <a class="dropdown-item" href="#">Myla Eleine</a>
                </div>
            </div>
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
                <th>Cust No.</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Date of Birth</th>
                <th>Opened Date</th>
                <th>Nationality</th>
                <th>Document No.</th>
                <th id="select-all">Select All <br> <input type="checkbox" class="text-center"></th>
            </tr>
        </thead>
    </table>
</div>
@endsection

@section('scripts')
<script>

jQuery('#customers-table').DataTable({
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
        { name: 'select', orderable: false, className: "text-center" },

    ]
});

jQuery('#select-all input:checkbox').click(function () {    
     jQuery('input:checkbox').prop('checked', this.checked);    
 });
</script>
@endsection