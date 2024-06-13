<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public function staff() {
        return $this->belongsToMany(Staff::class);
    }

    public function services() {
        return $this->belongsToMany(Service::class);
    }

    public function reports() {
        return $this->hasMany(Report::class);
    }

    public function successStories() {
        return $this->hasMany(SuccessStory::class);
    }
}
