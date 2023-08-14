<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity',
        'unit_price',
        // Add more attributes as needed.
    ];

    // Relationships, if applicable
    // For example, a sale item belongs to a product, so you can define a many-to-one relationship like this:
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // A sale item belongs to a sale, so you can define a many-to-one relationship like this:
    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }
}
