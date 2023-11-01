<?php

namespace App\Repositories\RolePermission;

use App\Models\RolePermission;
use App\Repositories\BaseRepository;

class RolePermissionRepository extends BaseRepository implements RolePermissionRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return RolePermission::class;
    }
}
