<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function photo()
    {
        return $this->belongsTo(Image::class);
    }
    public function icon()
    {
        return $this->belongsTo(Image::class, 'icon_id');
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    protected $fillable = [
        'category_id',
        'subcategory_id',
        'image_id',
        'icon_id',
        'brand',
        'model',
        'price',
        'description',
        'amount',
        'size'
    ];
}
