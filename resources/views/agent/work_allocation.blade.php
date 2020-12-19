@extends('layouts.master')

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
                        <div class="stat-icon dib flat-color-5">
                            <i class="pe-7s-note2"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><small>50,000</small></div>
                                <div class="stat-heading">QA Basket</div>
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
                        <div class="stat-icon dib flat-color-6">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><small>45,000</small></div>
                                <div class="stat-heading">Allocated to QA</div>
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
                                <div class="stat-text"><small>40,000</small></div>
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
                        <div class="stat-icon dib text-danger">
                            <i class="fa fa-thumbs-o-down"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><small>5,000</small></div>
                                <div class="stat-heading">Pending with QA</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="/allocate-work-to-qa" class="float-right text-primary">Allocate work to QA</a>
</div>
@endsection

@section('content')
<div class="table-responsive">
    <table id="customers-table" class="table table-sm table-bordered table-light" border="1px solid black">
        <thead class="thead-dark">
            <tr class="text-center">
                <th>QA Name</th>
                <th>Allocation</th>
                <th>Completed</th>
                <th>Pending (Withing SLA)</th>
                <th>Pending (SLA Breach)</th>
            </tr>
        </thead>
    </table>
</div>
@endsection

@section('scripts')
<script>

var table = jQuery('#customers-table').DataTable({
    serverSide: true,
    responsive: true,
    searching: false,
    scrollY: 500,
    scrollCollapse: true,
    ajax: "{{ route('admin.work.allocation') }}",
    columns: [
        { name: 'name' },
        { name: 'allocation' },
        { name: 'completed' },
        { name: 'pending_SLA'},
        { name: 'pending_SLA_breach'},
    ],
    fnDrawCallback: function() { addColor() }
});

function addColor() {
    jQuery( table.column( 1 ).nodes() ).addClass( 'text-center' );
    jQuery( table.column( 2 ).nodes() ).addClass( 'bg-success text-center text-light' );
    jQuery( table.column( 3 ).nodes() ).addClass( 'bg-warning text-center' );
    jQuery( table.column( 4 ).nodes() ).addClass( 'bg-danger text-center text-light' );
}

</script>
@endsection