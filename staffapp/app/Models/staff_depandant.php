<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff_depandant extends Model
{
    use HasFactory;
    protected $fillable =[
        'staff_id',
        'name',
        'relationship',
        'dob',
        'status',
    ];
}
