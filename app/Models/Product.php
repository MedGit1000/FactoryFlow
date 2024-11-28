<?php

namespace App\Models;

/**
 * @property int $id
 * @property string $name
 * @property float $unit_price
 * @property string $status
 * @property int $category_id
 * @property string|null $image
 * @property int $created_by
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 */


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

// class Product extends Model
// {
//     use HasFactory;

//     protected $fillable = [
//         'name',
//         'description',
//         'category_id',
//         'unit_price',
//         'cost_price',
//         'quantity',
//         'minimum_stock_level',
//         'maximum_stock_level',
//         'created_by',
//         'status',
//         'stock_quantity',
//         'expiry_date'
//     ];

//     protected $casts = [
//         'expiry_date' => 'datetime'
//     ];

//     public function category()
//     {
//         return $this->belongsTo(Category::class);
//     }

//     public function creator()
//     {
//         return $this->belongsTo(User::class, 'created_by');
//     }

//     public function inventoryTransactions()
//     {
//         return $this->hasMany(InventoryTransaction::class);
//     }

//     public function purchaseItems()
//     {
//         return $this->hasMany(PurchaseItem::class);
//     }

//     public function scopeInStock($query)
//     {
//         return $query->where('stock_quantity', '>', 0);
//     }

//     public function scopeLowStock($query)
//     {
//         return $query->where('stock_quantity', '<=', $this->minimum_stock_level);
//     }

//     public function scopeExpired($query)
//     {
//         return $query->where('expiry_date', '<', now());
//     }

//     public function getStockStatusAttribute()
//     {
//         if ($this->quantity <= $this->minimum_stock_level) {
//             return 'Low Stock';
//         } elseif ($this->quantity >= $this->maximum_stock_level) {
//             return 'Overstocked';
//         }
//         return 'Normal';
//     }

//     public function getTotalInventoryValueAttribute()
//     {
//         return $this->quantity * $this->unit_price;
//     }

//     public function adjustQuantity($amount, $type = 'input')
//     {
//         if ($type === 'input') {
//             $this->increment('stock_quantity', $amount);
//         } else {
//             $this->decrement('stock_quantity', $amount);
//         }
//     }

//     protected static function boot()
//     {
//         parent::boot();

//         static::creating(function ($product) {
//             if (!$product->category_id) {
//                 $defaultCategory = Category::firstOrCreate([
//                     'name' => 'Uncategorized'
//                 ]);
//                 $product->category_id = $defaultCategory->id;
//             }
//         });
//     }
// }

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'category_id',
        'unit_price',
        'cost_price',
        'quantity',
        'minimum_stock_level',
        'maximum_stock_level',
        'created_by',
        'user_id',  // Add this line
        'status',
        'stock_quantity',
        'expiry_date'
    ];

    protected $casts = [
        'expiry_date' => 'datetime'
    ];

    // Relationships
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function user()
    {
        return $this->belongsTo(User::class); // Add this relationship
    }

    public function inventoryTransactions()
    {
        return $this->hasMany(InventoryTransaction::class);
    }

    public function purchaseItems()
    {
        return $this->hasMany(PurchaseItem::class);
    }

    // Scopes
    public function scopeInStock($query)
    {
        return $query->where('stock_quantity', '>', 0);
    }

    public function scopeLowStock($query)
    {
        return $query->where('stock_quantity', '<=', $this->minimum_stock_level);
    }

    public function scopeExpired($query)
    {
        return $query->where('expiry_date', '<', now());
    }

    // Accessors and Mutators
    public function getStockStatusAttribute()
    {
        if ($this->quantity <= $this->minimum_stock_level) {
            return 'Low Stock';
        } elseif ($this->quantity >= $this->maximum_stock_level) {
            return 'Overstocked';
        }
        return 'Normal';
    }

    public function getTotalInventoryValueAttribute()
    {
        return $this->quantity * $this->unit_price;
    }

    // Methods
    public function adjustQuantity($amount, $type = 'input')
    {
        if ($type === 'input') {
            $this->increment('stock_quantity', $amount);
        } else {
            $this->decrement('stock_quantity', $amount);
        }
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            // If no category is set, use the first category or create a default
            if (!$product->category_id) {
                $defaultCategory = Category::firstOrCreate([
                    'name' => 'Uncategorized'
                ]);
                $product->category_id = $defaultCategory->id;
            }

            // Set the user_id to the currently authenticated user
            // $product->user_id = auth()->id();
        });
    }
}
