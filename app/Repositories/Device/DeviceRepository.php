<?php

namespace App\Repositories\Device;

use App\Models\Device;
use App\Repositories\BaseRepository;

class DeviceRepository extends BaseRepository implements DeviceRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return Device::class;
    }
}
