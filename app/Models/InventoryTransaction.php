<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InventoryTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'user_id',
        'type',
        'quantity',
        'transaction_date',
        'description',
        'reference_number'
    ];

    protected $dates = [
        'transaction_date'
    ];

    // Relationships
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Scopes
    public function scopeInputTransactions($query)
    {
        return $query->where('type', 'input');
    }

    public function scopeOutputTransactions($query)
    {
        return $query->where('type', 'output');
    }

    // Accessors
    public function getFormattedTypeAttribute()
    {
        return ucfirst($this->type);
    }

    public function getTotalValueAttribute()
    {
        return $this->quantity * $this->product->unit_price;
    }
}
