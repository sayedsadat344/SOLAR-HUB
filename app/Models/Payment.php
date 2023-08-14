<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'payment_date',
        // Add more attributes as needed.
    ];

    // Relationships, if applicable
    // For example, a payment belongs to a customer, so you can define a many-to-one relationship like this:
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // A payment belongs to a debt, so you can define a many-to-one relationship like this:
    public function debt()
    {
        return $this->belongsTo(Debt::class);
    }
}
