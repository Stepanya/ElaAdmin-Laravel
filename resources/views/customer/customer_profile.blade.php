@extends('layouts.master')

@section('title')
    CIMB Validation - Dashboard
@endsection

@section('content-top')
<div class="row"> 
    <div class="col">
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Customer Profile</h1>
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
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-5">
        <div class="card text-center">
            <div class="card-header">
                <strong class="card-title">ID Picture</strong>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <img src="images/umid.jfif" class="rounded" alt="ID Picture">
                    <select class="form-control mt-3">
                        <option>-</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="col-2">
        <div class="card text-center">
            <div class="card-header">
                <strong class="card-title">ID Type</strong>
            </div>
            <div class="card-body">
                <input type="text" class="form-control" readonly value="UNIFIED"> 
            </div>
            <div class="card-header">
                <strong class="card-title">Similarity</strong>
            </div>
            <div class="card-body">
                <input type="text" class="form-control bg-success text-light" readonly value="85.97590637">
            </div>
            <div class="card-header">
                <strong class="card-title">Signature</strong>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <img src="images/signature.jpg" class="rounded" alt="Signature">
                </div>
            </div>
        </div>
    </div>
    <div class="col-5">
        <div class="card text-center">
            <div class="card-header">
                <strong class="card-title">Submitted Picture</strong>
            </div>
            <div class="card-body">
                <img src="images/image-provided.jpg" class="rounded" alt="Image Provided">
                <select class="form-control mt-3">
                    <option>-</option>
                </select>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-4 text-center">Database Information</div>
            <div class="col-4 text-center">ID Information</div>
            <div class="col-1 text-center">Status</div>
            <div class="col-2 text-center">Remarks</div>
        </div>
        <div class="form-row">
            <div class="form-group col-4">
                <label>First Name</label>
                <input type="text" class="form-control" readonly value="Joe">
            </div>
            <div class="form-group col-4">
                <label>First Name</label>
                <input type="text" class="form-control" readonly value="Joe">
            </div>
            <div class="form-group col-1">
                <input type="text" class="form-control bg-success text-light text-center mt-4" readonly value="100" style="height: 310%">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-4">
                <label>Middle Name</label>
                <input type="text" class="form-control" readonly value="Juan">
            </div>
            <div class="form-group col-4">
                <label>Middle Name</label>
                <input type="text" class="form-control" readonly value="Juan">
            </div>
            <div class="form-group col-3 offset-1 mt-4">
                <select class="form-control">
                    <option>-</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-4">
                <label>Last Name</label>
                <input type="text" class="form-control" readonly value="Rizal">
            </div>
            <div class="form-group col-4">
                <label>Last Name</label>
                <input type="text" class="form-control" readonly value="Rizal">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-4">
                <label>Nationality</label>
                <input type="text" class="form-control" readonly value="PH">
            </div>
            <div class="form-group col-4">
                <label>Nationality</label>
                <input type="text" class="form-control" readonly value="N/A">
            </div>
            <div class="form-group col-1 mt-4">
                <input type="text" class="form-control bg-success text-light text-center" readonly value="100">
            </div>
            <div class="form-group col-3 mt-4">
                <select class="form-control">
                    <option>-</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-4">
                <label>Date of Birth</label>
                <input type="text" class="form-control" readonly value="19990522">
            </div>
            <div class="form-group col-4">
                <label>Date of Birth</label>
                <input type="text" class="form-control" readonly value="1999/05/22">
            </div>
            <div class="form-group col-1 mt-4">
                <input type="text" class="form-control bg-success text-light text-center" readonly value="87">
            </div>
            <div class="form-group col-3 mt-4">
                <select class="form-control">
                    <option>-</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-4">
                <label>Present Address</label>
                <textarea class="form-control" readonly value="19990522" style="resize: none;">1048 St. Centennial Farm Road, Pinagbuhatan, Pasig City, 1602</textarea>
            </div>
            <div class="form-group col-4">
                <label>Present Address</label>
                <textarea class="form-control" readonly value="1999/05/22" style="resize: none;">1048 St. Centennial Farm Road, Pinagbuhatan, Pasig City, 1602</textarea>
            </div>
            <div class="form-group col-1 mt-4">
                <input type="text" class="form-control bg-success text-light text-center" readonly value="100" style="height: 100%">
            </div>
            <div class="form-group col-3 mt-4">
                <select class="form-control">
                    <option>-</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-4">
                <label>Place of Birth</label>
                <input type="text" class="form-control" readonly value="Taguig City">
            </div>
            <div class="form-group col-4">
                <label>Place of Birth</label>
                <input type="text" class="form-control" readonly value="N/A">
            </div>
            <div class="form-group col-1">
                <input type="text" class="form-control bg-success text-light text-center mt-4" readonly value="100" style="height: 310%">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-4">
                <label>Source of Funds</label>
                <input type="text" class="form-control" readonly value="E">
            </div>
            <div class="form-group col-3 offset-5 mt-4">
                <select class="form-control">
                    <option>-</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-4">
                <label>Country of Residence</label>
                <input type="text" class="form-control" readonly value="PH">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-4">
                <label>Mobile Number</label>
                <input type="text" class="form-control" readonly value="09999999999">
            </div>
            <div class="form-group col-1 offset-4">
                <input type="text" class="form-control bg-success text-light text-center mt-4" readonly value="100" style="height: 200%">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-4">
                <label>Email Address</label>
                <input type="text" class="form-control" readonly value="example@email.com">
            </div>
            <div class="form-group col-3 offset-5">
                <select class="form-control">
                    <option>-</option>
                </select>
            </div>
        </div>
        <div class="form-row mt-5">
            <div class="form-group col-4">
                <label>Final Status</label>
                <select class="form-control">
                    <option>Selected Items</option>
                    <option>Retained GS01</option>
                    <option>Self Upgrade GS02</option>
                    <option>Pass - upgrade to GS03</option>
                    <option>Pass - upgrade to GS04</option>
                    <option>Fail - Criteria</option>
                    <option>Fail Fraud</option>
                </select>
            </div>
            <div class="form-group col-8">
                <label>QA Remarks</label>
                <textarea class="form-control" placeholder="Remarks" style="resize: none;"></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-5 offset-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="">
                    <label class="form-check-label">
                        Manual QA Completed
                    </label>
                </div>
            </div>
            <div class="form-group col-3">
                <button class="btn btn-success btn-block">Update</button>
            </div>
        </div>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-4">
        <label>Recommended Action</label>
        <select class="form-control">
            <option>For Closure</option>
            <option>For Upgrade</option>
            <option>For Blocking</option>
        </select>
    </div>
</div>
@endsection

@section('scripts')
    
@endsection