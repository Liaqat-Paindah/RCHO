<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function workExperiences()
    {
        return $this->hasMany(WorkExperience::class);
    }
}
