<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff_beneficiary extends Model
{
    use HasFactory;
    protected $fillable =[
        'staff_id',
        'name_of_beneficiary',
        'percentage',
        'mobile',
        'address',
        'status',
    ];
}
