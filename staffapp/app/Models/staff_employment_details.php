<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff_employment_details extends Model
{
    use HasFactory;
    protected $fillable =[
        'staff_id',
        'department',
        'position',
        'supervisor',
        'staff_email',
        'staff_phone',
        'status',
        'rank',
        'entry_qualification',
        'date_started',
        'ending_date',
        'created_by',
        'last_updated_by',
    ];
    protected $attributes =[
        'staff_id'=>35,
        'status' => 1,
        'date_started'=>'2018-03-29 13:34:00',
        'ending_date'=>'2018-03-29 13:34:00',
        'created_by'=>3777,
        'last_updated_by'=>53454354,
    ];

}