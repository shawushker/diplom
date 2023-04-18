<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'path',
        'good_id',

    ];
   # public function good(){
      #  return $this->belongsTo(Good::class);
      #  return $this->belongsTo(Good::class);
    #}
    public function goods()
    {
        return $this->belongsTo(Good::class);
    }

}
