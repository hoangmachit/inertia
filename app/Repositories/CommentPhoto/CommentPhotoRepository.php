<?php

namespace App\Repositories\CommentPhoto;

use App\Models\CommentPhoto;
use App\Repositories\BaseRepository;

class CommentPhotoRepository extends BaseRepository implements CommentPhotoRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return CommentPhoto::class;
    }
}
