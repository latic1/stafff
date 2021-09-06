<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff_personal_detail extends Model
{
    use HasFactory;
    protected $fillable =[
        'employee_number',
        'first_name',
        'last_name',
        'middle_name',
        'title',
        'dob',
        'email',
        'mobile_number',
        'emergency_number',
        'emergency_contact_person',
        'tin_number',
        'status',
        'created_by',
        'last_updated_by',
        'gender',
        'nationality',
        'maridtal_Status',
        'picture',
        'address_mailing',
        'physical_address',
    ];
    protected $attributes = [
        'employee_number' => 431435454,
        'created_by' => 53443,
        'last_updated_by' => 645456,
        'nationality' => 'sdksgdf',
    ];
}
