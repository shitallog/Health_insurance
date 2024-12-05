<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    // Define the table associated with the model (optional if table name is plural of model name)
    protected $table = 'subcategories';

    // Specify which attributes should be mass-assignable
    protected $fillable = [
        'name',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(InsuranceCategory::class);
    }
}
