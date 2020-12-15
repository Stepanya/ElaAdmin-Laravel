@extends('layouts.master')

@section('title')
    CIMB Validation - Dashboard
@endsection

@section('content-top')
<div class="container">
    <div class="row mb-4"> 
        <div class="breadcrumbs col">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Work Allocation</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center mr-2">
        <div class="col">
            <div class="dropdown">
                <button class="btn bg-white dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Selected Items
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="dropdown">
                <button class="btn bg-white dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    A/C opened 'to'
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
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
        </tr>
    </thead>
</table>
@endsection

@section('scripts')
<script>

$('#customers-table').DataTable({
    serverSide: true,
    searching: false,
    paging: false,
    scrollY: "300px",
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
    ]
});

</script>
@endsection