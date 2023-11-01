<?php

namespace App\Repositories\ProductSub;

use App\Models\ProductSub;
use App\Repositories\BaseRepository;

class ProductSubRepository extends BaseRepository implements ProductSubRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return ProductSub::class;
    }
}
