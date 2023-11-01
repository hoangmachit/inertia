<?php

namespace App\Repositories\Counter;

use App\Models\Counter;
use App\Repositories\BaseRepository;

class CounterRepository extends BaseRepository implements CounterRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return Counter::class;
    }
}
