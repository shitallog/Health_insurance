<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class InsuranceCategory extends Model
{
    use HasFactory;

    protected $table = 'insurance_categories'; // Table name

    // Specify which attributes are mass assignable
    protected $fillable = [
        'name',
        'description',
        'discount',
        'image',
    ];

    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }
}
