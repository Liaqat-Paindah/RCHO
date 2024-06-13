<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuccessStory extends Model
{
    use HasFactory;
    public function projects() {
        return $this->belongsToMany(Project::class);
    }

    public function contributors() {
        return $this->belongsToMany(Staff::class);
    }

    public function services() {
        return $this->belongsToMany(Service::class);
    }
}
