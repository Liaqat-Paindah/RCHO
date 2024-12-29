<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; // Ensure this import
use Illuminate\Notifications\Notifiable; // Import the Notifiable trait

class User extends Authenticatable // This ensures the User model implements Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',           // Add name here
        'email',          // If email is also mass assignable
        'password',       // Add other fields you want to allow for mass assignment
    ];

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
