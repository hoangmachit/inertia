<?php

namespace App\Repositories\NewsTag;

use App\Models\NewsTag;
use App\Repositories\BaseRepository;

class NewsTagRepository extends BaseRepository implements NewsTagRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return NewsTag::class;
    }
}
