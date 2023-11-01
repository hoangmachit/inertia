<?php

namespace App\Repositories\Permission;

use App\Models\Permission;
use App\Repositories\BaseRepository;

class PermissionRepository extends BaseRepository implements PermissionRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return Permission::class;
    }
}
