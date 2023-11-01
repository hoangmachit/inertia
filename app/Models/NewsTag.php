<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NewsTag extends Model
{
    use HasFactory;

    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = [
        'news_id',
        'tag_id',
    ];

    /**
     * Summary of product
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(News::class, 'id', 'news_id');
    }

    /**
     * Summary of tag
     * @return BelongsTo
     */
    public function tag(): BelongsTo
    {
        return $this->belongsTo(Tags::class, 'id', 'tag_id');
    }
}
