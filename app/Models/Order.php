<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'medicines',
        'name_cstomer',
        'total_price',
    ];

    // Penegasan tipe dari migration (hasil property ketika diambil atau diinsert/update dibuat dalam bentuk tipe data apa)
    protected $casts = [
        'medicines' => 'array',
    ];
}
