<?php

namespace App\Repositories\NewsCat;

use App\Models\NewsCat;
use App\Repositories\BaseRepository;

class NewsCatRepository extends BaseRepository implements NewsCatRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return NewsCat::class;
    }
}
