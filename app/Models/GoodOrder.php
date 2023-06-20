<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoodOrder extends Model
{
    use HasFactory;

    protected $table = 'good_order'; // Указываем имя таблицы, так как Laravel ожидает, что оно будет во множественном числе

    protected $fillable = ['order_id', 'good_id', 'quantity'];
}
