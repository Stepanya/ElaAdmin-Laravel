@extends('layouts.master')

@section('title')
    CIMB Validation - Dashboard
@endsection

@section('content-top')
<div class="container">
    <div class="row text-center pt-2">
        <div class="col">
            <div class="dropdown">
                <button class="btn bg-white dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pass for GS03
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
                    Gsave
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
                    17-Feb-2020
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
                    16-Mar-2020
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <strong class="card-title">Pass for GS03</strong>
    </div>
    <div class="card-body">
        <div class="table-responsive overflow-auto">
            <table id="customers-table" class="table table-sm table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Cust No.</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Date of Birth</th>
                        <th>Opened Date</th>
                        <th>Nationality</th>
                        <th>Document No.</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>

jQuery('#customers-table').DataTable({
    serverSide: true,
    responsive: true,
    scrollY: 500,
    ajax: "{{ route('admin.persons') }}",
    columns: [
        { name: 'customer_number' },
        { name: 'last_name' },
        { name: 'first_name' },
        { name: 'dob'},
        { name: 'opened_date'},
        { name: 'nationality'},
        { name: 'doc_no'},
        { name: 'action', orderable: false, searchable: false }
    ]
});

</script>
@endsection