<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock_quantity',
        'category_id',
        'supplier_id'

    ];

    // Relationships, if applicable
    // For example, if you have a "Category" model, you can define a relationship like this:
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
