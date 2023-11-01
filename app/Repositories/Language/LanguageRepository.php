<?php

namespace App\Repositories\Language;

use App\Models\Language;
use App\Repositories\BaseRepository;

class LanguageRepository extends BaseRepository implements LanguageRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return Language::class;
    }
}
