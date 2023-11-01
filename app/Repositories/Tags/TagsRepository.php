<?php

namespace App\Repositories\Tags;

use App\Models\Tags;
use App\Repositories\BaseRepository;

class TagsRepository extends BaseRepository implements TagsRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return Tags::class;
    }
}
