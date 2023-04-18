<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'price',
        'quantity',
        'category',
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function reviews(){
        return $this->hasMany(Review::class)->orderBy("created_at");
    }
    public function images(){
       # return $this->hasMany(Image::class)->orderBy("source");
        return $this->hasMany(Image::class);
    }
}
