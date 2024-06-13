<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public function staff() {
        return $this->hasOne(Staff::class);
    }

    public function donations() {
        return $this->hasMany(Donation::class);
    }

    public function reports() {
        return $this->hasMany(Report::class, 'author_id');
    }
}
