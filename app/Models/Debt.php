<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debt extends Model
{
    use HasFactory;


    protected $fillable = [
        'amount',
        'due_date',
        // Add more attributes as needed.
    ];

    // Relationships, if applicable
    // For example, a debt belongs to a customer, so you can define a many-to-one relationship like this:
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // A debt can have multiple payments, so you can define a one-to-many relationship like this:
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
