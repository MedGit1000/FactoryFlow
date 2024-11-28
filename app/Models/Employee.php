<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Carbon\Carbon;

class Employee extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'department_id',
        'position',
        'hire_date',
        'salary',
        'status'
    ];

    protected $dates = ['hire_date'];

    // Relationship with Department
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    // Accessor for full name
    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    // Accessor for years of service
    public function getYearsOfServiceAttribute()
    {
        return Carbon::parse($this->hire_date)->diffInYears(now());
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function scopeInactive($query)
    {
        return $query->where('status', 'inactive');
    }
}
