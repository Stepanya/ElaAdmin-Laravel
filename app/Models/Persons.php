<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persons extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_number',
        'last_name',
        'first_name',
        'dob',
        'opened_date',
        'nationality',
        'doc_no'
    ]; 

    public static function laratablesCustomAction($user) {
        return view('layouts.action', compact('user'))->render();
    }
}

