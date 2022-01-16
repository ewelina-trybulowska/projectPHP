<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }
    protected $fillable = [
        'category_id',
        //'subcategory_id',
        'image_id',
        'brand',
        'model',
        'price',
        'description',
        'amount',
        'size'
    ];
}
