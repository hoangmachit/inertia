<?php

namespace App\Repositories\ProductCat;

use App\Models\ProductCat;
use App\Repositories\BaseRepository;

class ProductCatRepository extends BaseRepository implements ProductCatRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return ProductCat::class;
    }
}
