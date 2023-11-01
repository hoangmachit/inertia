<?php

namespace App\Repositories\SeoPage;

use App\Models\SeoPage;
use App\Repositories\BaseRepository;

class SeoPageRepository extends BaseRepository implements SeoPageRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return SeoPage::class;
    }
}
