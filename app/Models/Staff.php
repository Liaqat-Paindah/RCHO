<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    public function projects() {
        return $this->belongsToMany(Project::class);
    }

    public function supervisorOf() {
        return $this->hasMany(Staff::class, 'supervisor_id');
    }
}
