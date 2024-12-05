<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class InsuranceProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'monthly_price',
        'annual_price',
        'price',
        'category_id',
        'product_code',
        'image',
        'cover_amount',
        'cashless_hospitals',
    ];

    // Optional: Define the relationship with InsuranceCategory
    public function category()
    {
        return $this->belongsTo(InsuranceCategory::class);
    }
}
