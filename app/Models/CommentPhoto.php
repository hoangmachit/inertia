<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CommentPhoto extends Model
{
    use HasFactory;

    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = [
        'comment_id',
        'file_id',
    ];

    /**
     * Summary of device
     * @return BelongsTo
     */
    public function device(): BelongsTo
    {
        return $this->belongsTo(Comment::class, 'id', 'comment_id');
    }

    /**
     * Summary of photo
     * @return BelongsTo
     */
    public function video(): BelongsTo
    {
        return $this->belongsTo(File::class, 'id', 'file_id');
    }
}
