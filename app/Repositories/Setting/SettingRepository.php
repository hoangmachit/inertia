<?php

namespace App\Repositories\Setting;

use App\Models\Setting;
use App\Repositories\BaseRepository;

class SettingRepository extends BaseRepository implements SettingRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return Setting::class;
    }
}
