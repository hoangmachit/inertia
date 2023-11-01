<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductItem extends Model
{
    use HasFactory;

    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = [
        'product_list_id',
        'product_cat_id',
        'photo_id',
        'slug_vi',
        'slug_en',
        'name_vi',
        'name_en',
        'desc_vi',
        'desc_en',
        'content_vi',
        'content_en',
        'sort',
        'status',
        'type',
    ];

    /**
     * Summary of productList
     * @return BelongsTo
     */
    public function productList(): BelongsTo
    {
        return $this->belongsTo(ProductList::class, 'id', 'product_list_id');
    }

    /**
     * Summary of productCat
     * @return BelongsTo
     */
    public function productCat(): BelongsTo
    {
        return $this->belongsTo(ProductCat::class, 'id', 'product_cat_id');
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
