<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    protected $fillable = [
        'id',
        'name',
        'fields',
        'image'
    ];
    use HasFactory;
    public $timestamps=false;

}
