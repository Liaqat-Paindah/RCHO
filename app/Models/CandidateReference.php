<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateReference extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_id',
        'reference_name',
        'reference_type',
        'relationship',
        'organization',
        'email',
        'phone',
        'position',
        'association_start',
        'association_end',
        'perspective',

    ];
    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}
