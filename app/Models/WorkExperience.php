<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Job()
    {
        return $this->belongsTo(Applicant::class);
    }
}
