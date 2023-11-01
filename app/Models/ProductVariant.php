<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    /**
     * Summary of product
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'id', 'product_id');
    }

    /**
     * Summary of photo
     * @return BelongsTo
     */
    public function photo(): BelongsTo
    {
        return $this->belongsTo(File::class, 'id', 'photo_id');
    }
}
