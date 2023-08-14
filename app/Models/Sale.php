<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'sale_date',
        'total_amount',
        'payment_status',
        // Add more attributes as needed.
    ];

    // Relationships, if applicable
    // For example, a sale can have multiple sale items, so you can define a one-to-many relationship like this:
    public function saleItems()
    {
        return $this->hasMany(SaleItem::class);
    }

    // A sale belongs to a customer, so you can define a many-to-one relationship like this:
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
