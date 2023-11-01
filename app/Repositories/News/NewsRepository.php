<?php

namespace App\Repositories\News;

use App\Models\News;
use App\Repositories\BaseRepository;

class NewsRepository extends BaseRepository implements NewsRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return News::class;
    }
}
