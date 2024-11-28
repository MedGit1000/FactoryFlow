<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductionLine extends Model
{
    protected $fillable = [
        'name',
        'status',
        'capacity'
    ];

    // Relationships and methods can be added here
}
