<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persons;
use App\Models\WorkAllocations;
use Freshbitsweb\Laratables\Laratables;

class LaratableController extends Controller
{
    public function laratableData() {
        return Laratables::recordsOf(Persons::class);
    }
    public function workAllocation() {
        return Laratables::recordsOf(WorkAllocations::class);
    }
}
