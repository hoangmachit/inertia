<?php

namespace App\Repositories\ProductTag;

use App\Models\ProductTag;
use App\Repositories\BaseRepository;

class ProductTagRepository extends BaseRepository implements ProductTagRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return ProductTag::class;
    }
}
