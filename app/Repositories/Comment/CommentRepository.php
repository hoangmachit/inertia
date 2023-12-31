<?php

namespace App\Repositories\Comment;

use App\Models\Comment;
use App\Repositories\BaseRepository;

class CommentRepository extends BaseRepository implements CommentRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return Comment::class;
    }
}
