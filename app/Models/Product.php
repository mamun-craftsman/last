<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'category_name',
        'title',
        'imageUrl',
        'price',
        'description',
        'usage',
        'material',
        'show_feat'
    ];

    // Relationship: Product belongs to a Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
