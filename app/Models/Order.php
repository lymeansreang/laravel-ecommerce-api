<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'location_id',
        'total_price',
        'date of delivery',
        'status',
    ];

    
}
