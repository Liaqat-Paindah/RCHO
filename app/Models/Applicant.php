<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class applicant extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function workExperiences()
    {
        return $this->hasMany(WorkExperience::class);
    }
}
