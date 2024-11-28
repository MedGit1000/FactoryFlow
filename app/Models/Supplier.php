<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'contact_person',
        'status'
    ];

    // Relationships
    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    // Accessors
    public function getTotalPurchasesAttribute()
    {
        return $this->purchases()->count();
    }

    public function getTotalPurchaseAmountAttribute()
    {
        return $this->purchases()->sum('total_amount');
    }
}
