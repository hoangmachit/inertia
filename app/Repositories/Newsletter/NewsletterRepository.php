<?php

namespace App\Repositories\Newsletter;

use App\Models\Newsletter;
use App\Repositories\BaseRepository;

class NewsletterRepository extends BaseRepository implements NewsletterRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return Newsletter::class;
    }
}
