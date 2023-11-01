<?php

namespace App\Repositories\ProductBrand;

use App\Models\ProductBrand;
use App\Repositories\BaseRepository;

class ProductBrandRepository extends BaseRepository implements ProductBrandRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return ProductBrand::class;
    }
}
