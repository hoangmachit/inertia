<?php

namespace App\Repositories\NewsSub;

use App\Models\NewsSub;
use App\Repositories\BaseRepository;

class NewsSubRepository extends BaseRepository implements NewsSubRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return NewsSub::class;
    }
}
