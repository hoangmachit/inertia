<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
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
        'sort',
        'status',
        'type',
        'view',
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
     * Summary of productItem
     * @return BelongsTo
     */
    public function productItem(): BelongsTo
    {
        return $this->belongsTo(ProductItem::class, 'id', 'product_item_id');
    }


    /**
     * Summary of productSub
     * @return BelongsTo
     */
    public function productSub(): BelongsTo
    {
        return $this->belongsTo(ProductSub::class, 'id', 'product_sub_id');
    }

    /**
     * Summary of productBrand
     * @return BelongsTo
     */
    public function productBrand(): BelongsTo
    {
        return $this->belongsTo(ProductBrand::class, 'id', 'product_brand_id');
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
