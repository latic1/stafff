<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff_employment_document extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'staff_id',
        'document_type',
        'file_path',
        'name_of_document',
        'status'
    ];
}
