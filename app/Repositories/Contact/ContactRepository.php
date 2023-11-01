<?php

namespace App\Repositories\Contact;

use App\Models\Contact;
use App\Repositories\BaseRepository;

class ContactRepository extends BaseRepository implements ContactRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return Contact::class;
    }
}
