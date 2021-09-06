<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff_cat extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'description',
        'status',
        'created_by',
        'last_updated_by',
        'deleted_by',
        'delated_on',
        'leave_allocation',
        'medical_allocation',
    ];
}
