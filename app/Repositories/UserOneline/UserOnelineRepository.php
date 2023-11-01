<?php

namespace App\Repositories\UserOneline;

use App\Models\UserOneline;
use App\Repositories\BaseRepository;

class UserOnelineRepository extends BaseRepository implements UserOnelineRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return UserOneline::class;
    }
}
