<?php

namespace App\Repositories\CommentVideo;

use App\Models\CommentVideo;
use App\Repositories\BaseRepository;

class CommentVideoRepository extends BaseRepository implements CommentVideoRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return CommentVideo::class;
    }
}
