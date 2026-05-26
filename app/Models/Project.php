<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    protected $casts = [
        'tech' => 'array',
        'challenges' => 'array',
        'outcomes' => 'array',
        'gallery' => 'array',
        'featured' => 'boolean',
    ];
}
