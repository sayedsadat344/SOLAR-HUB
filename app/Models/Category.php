<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        // Add more attributes as needed.
    ];

    // Relationships, if applicable
    // For example, a category can have multiple products, so you can define a one-to-many relationship like this:
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
