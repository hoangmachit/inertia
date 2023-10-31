<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    use HasFactory;
    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = [
        'product_id',
        'photo_id',
        'size_id',
        'color_id',
        'code',
        'regular_price',
        'sale_price',
        'discount',
        'sort',
        'status',
    ];
}
