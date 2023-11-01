<?php

namespace App\Repositories\City;

use App\Models\City;
use App\Repositories\BaseRepository;

class CityRepository extends BaseRepository implements CityRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return City::class;
    }
}
