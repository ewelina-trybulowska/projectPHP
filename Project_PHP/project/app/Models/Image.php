<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $uploads = '/images/products';
    protected $fillable = ['file'];

    public function getFileAttribute($photo) {
        return $this->uploads . '/' . $photo;
    }

    public function deleteImage(){
        return unlink(public_path() .  $this->file);
    }
}
