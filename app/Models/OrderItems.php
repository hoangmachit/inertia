<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    use HasFactory;
    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = [
        'order_id',
        'product_variant_id',
        'photo',
        'product_name',
        'product_code',
        'regular_price',
        'sale_price',
        'quantity',
    ];
}
