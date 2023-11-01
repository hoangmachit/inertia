<?php

namespace App\Repositories\NewsList;

use App\Models\NewsList;
use App\Repositories\BaseRepository;

class NewsListRepository extends BaseRepository implements NewsListRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return NewsList::class;
    }
}
