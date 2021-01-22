@extends('layouts.master')

@section('stylesheets')
    <link rel="stylesheet" href="assets/DataTables/datatables.min.css" />
@endsection

@section('title')
    CIMB Validation - Dashboard
@endsection

@section('content-top')
    <div class="container">
        <div class="row text-center pt-2">
            <div class="col">
                <label>Validation Result</label>
                <select class="form-control">
                    <option>Pass for GS03</option>
                </select>
            </div>
            <div class="col">
                <label>Stream</label>
                <select class="form-control">
                    <option>Gsave</option>
                </select>
            </div>
            <div class="col">
                <label>Start Date</label>
                <select class="form-control">
                    <option>17-Feb-2020</option>
                </select>
            </div>
            <div class="col">
                <label>End Date</label>
                <select class="form-control">
                    <option>16-Mar-2020</option>
                </select>
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
                            <th>ID Type</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Date of Birth</th>
                            <th>Account Opened Date</th>
                            <th>Aging</th>
                            <th>Product ID</th>
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

    <script src="assets/DataTables/datatables.min.js"></script>
    <script src="assets/DataTables/DataTables-1.10.23/js/dataTables.bootstrap4.min.js"></script>

    <script>
        var table = jQuery('#customers-table').DataTable({
            serverSide: true,
            responsive: true,
            scrollY: 500,
            ajax: "{{ route('admin.persons') }}",
            columns: [
                { name: 'customer_number' },
                { name: 'id_type' },
                { name: 'last_name' },
                { name: 'first_name' },
                { name: 'dob' },
                { name: 'opened_date' },
                { name: 'fields', orderable: false, searchable: false },
                { name: 'product_id' }, 
                { name: 'doc_no' },
                { name: 'action', orderable: false, searchable: false }
            ],
            fnDrawCallback: function() {
                table.rows().every(function(index, element) {
                    var row = jQuery(this.node());
                    var openedDate = row.find('td').eq(5).text();
                    var accAge = getAccAge(openedDate, new Date());
                    row.find('td').eq(6).text(accAge);
                });
            }
        });

        function getAccAge(openedDate) {
            return Math.floor((new Date() - new Date(openedDate)) / (1000 * 60 * 60 * 24)) + "d";
        }

    </script>
@endsection
