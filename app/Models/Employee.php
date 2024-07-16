<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'gender',
        'date_of_birth',
        'nationality',
        'address',
        'phone_number',
        'emergency_contact_name',
        'emergency_contact_number',
        'job_title',
        'joining_date',
        'department_id',
        'image', 
        'status',
        // Assuming you have an 'image' attribute in your model
        // Add other attributes as needed
    ];

}
