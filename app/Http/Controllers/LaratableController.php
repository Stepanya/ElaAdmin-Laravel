<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persons;
use App\Models\WorkAllocations;
use App\Models\Logs;
use Freshbitsweb\Laratables\Laratables;

class LaratableController extends Controller
{
    public function laratableData() {
        return Laratables::recordsOf(Persons::class);
    }
    public function workAllocation() {
        return Laratables::recordsOf(WorkAllocations::class);
    }
    public function auditHistory() {
        return Laratables::recordsOf(Logs::class);
    }
}
