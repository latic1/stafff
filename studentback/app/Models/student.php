<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_login',
        'user_pass',
        'application_number',
        'indexnumber',
        'regno2',
        'surname',
        'firstname',
        'middlename',
        'title',
        'gender',
        'dob',
        'doa',
        'doc',
        'progid',
        'major',
        'level',
        'entrylevel',
        'hall',
        'ssnit',
        'nationality',
        'telephone',
        'mobile_phone',
        'email',
        'nhis',
        'student_type',
        'completed',
        'graduate',
        'classification',
        'status',
        'nat_id',
        'campus',
        'class',
        'contact_name',
        'contact_address',
        'contact_email',
        'contact_phone',
        'picture',
        'created_by',
        'updated_by',
        'account_status',
        'admitted_cohort',
        'current_cohort',
        'editable_email',
        'editable_mobile',
        'programduration',
    ];
}
