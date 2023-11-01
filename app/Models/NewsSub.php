<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NewsSub extends Model
{
    use HasFactory;

    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = [
        'news_list_id',
        'news_cat_id',
        'news_item_id',
        'photo_id',
        'slug_vi',
        'slug_en',
        'name_vi',
        'name_en',
        'desc_vi',
        'desc_en',
        'content_vi',
        'content_en',
        'sort',
        'status',
        'type',
    ];

    /**
     * Summary of newsList
     * @return BelongsTo
     */
    public function newsList(): BelongsTo
    {
        return $this->belongsTo(NewsList::class, 'id', 'news_list_id');
    }

    /**
     * Summary of newsCat
     * @return BelongsTo
     */
    public function newsCat(): BelongsTo
    {
        return $this->belongsTo(NewsCat::class, 'id', 'news_cat_id');
    }

    /**
     * Summary of newsItem
     * @return BelongsTo
     */
    public function newsItem(): BelongsTo
    {
        return $this->belongsTo(NewsItem::class, 'id', 'news_item_id');
    }

    /**
     * Summary of photo
     * @return BelongsTo
     */
    public function photo(): BelongsTo
    {
        return $this->belongsTo(File::class, 'id', 'photo_id');
    }
}
