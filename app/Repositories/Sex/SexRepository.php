<?php

namespace App\Repositories\Sex;

use App\Models\Sex;
use App\Repositories\BaseRepository;

class SexRepository extends BaseRepository implements SexRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return Sex::class;
    }
}
