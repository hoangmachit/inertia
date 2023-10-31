<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'payment_method_id',
        'status_id',
        'code',
        'full_name',
        'email',
        'phone',
        'address',
        'temp_price',
        'total_price',
        'city_id',
        'district_id',
        'ward_id',
        'ship_price',
        'requirements',
        'notes',
        'sort',
    ];
}
