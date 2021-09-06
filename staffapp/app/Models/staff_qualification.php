<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff_qualification extends Model
{
    use HasFactory;
    protected $fillable =[
        'staff_id',
        'name_of_institution',
        'start_year',
        'qualification_type',
        'awards',
        'end_year',
        'file_path',
        'subject_area',
    ];
}
