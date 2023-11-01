<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    /**
     * Summary of order
     * @return BelongsTo
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class, 'id', 'order_id');
    }

    /**
     * Summary of productVariant
     * @return BelongsTo
     */
    public function productVariant(): BelongsTo
    {
        return $this->belongsTo(ProductVariant::class, 'id', 'product_variant_id');
    }
}
