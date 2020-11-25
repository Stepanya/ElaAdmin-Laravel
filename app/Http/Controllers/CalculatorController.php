<?php

namespace laravelstudio\calculator;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function calculator(){
        return view('calculator::calculator');
    }
}
