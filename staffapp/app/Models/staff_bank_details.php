<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff_bank_details extends Model
{
    use HasFactory;
    protected $fillable =[
        'staff_id',
        'bank_name',
        'short_code',
        'account_name',
        'account_number',
        'account_branch',
        'status',
    ];
}
