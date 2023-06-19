<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'good_id',
        'quantity',
        'status',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function goods()
    {
        return $this->belongsToMany(Good::class)->withPivot('quantity');
    }

}
