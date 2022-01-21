<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'total-price'=>0,
        'total_amount'=>0
    ];


    public function products()
    {
        return $this->belongsToMany( Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
