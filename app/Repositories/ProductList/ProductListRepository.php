<?php

namespace App\Repositories\ProductList;

use App\Models\ProductList;
use App\Repositories\BaseRepository;

class ProductListRepository extends BaseRepository implements ProductListRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return ProductList::class;
    }
}
