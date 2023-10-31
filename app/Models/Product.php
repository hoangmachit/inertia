<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = [
        'product_list_id',
        'product_cat_id',
        'product_sub_id',
        'product_item_id',
        'product_brand_id',
        'photo_id',
        'slug_vi',
        'slug_en',
        'name_vi',
        'name_en',
        'desc_vi',
        'desc_en',
        'content_vi',
        'content_en',
        'code',
        'regular_price',
        'sale_price',
        'discount',
        'sort',
        'status',
        'type',
        'view',
    ];
}
