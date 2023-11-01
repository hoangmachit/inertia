<?php

namespace App\Repositories\ProductItem;

use App\Models\ProductItem;
use App\Repositories\BaseRepository;

class ProductItemRepository extends BaseRepository implements ProductItemRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return ProductItem::class;
    }
}
