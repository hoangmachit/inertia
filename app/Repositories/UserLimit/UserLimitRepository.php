<?php

namespace App\Repositories\UserLimit;

use App\Models\UserLimit;
use App\Repositories\BaseRepository;

class UserLimitRepository extends BaseRepository implements UserLimitRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return UserLimit::class;
    }
}
