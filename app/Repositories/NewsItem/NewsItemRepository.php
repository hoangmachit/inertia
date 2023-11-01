<?php

namespace App\Repositories\NewsItem;

use App\Models\NewsItem;
use App\Repositories\BaseRepository;

class NewsItemRepository extends BaseRepository implements NewsItemRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return NewsItem::class;
    }
}
