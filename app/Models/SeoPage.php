<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SeoPage extends Model
{
    use HasFactory;

    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = [
        'type',
        'photo_id',
        'title_vi',
        'keyword_vi',
        'description_vi',
        'title_en',
        'keyword_en',
        'description_en',
        'schema_vi',
        'schema_en',
    ];

    /**
     * Summary of photo
     * @return BelongsTo
     */
    public function tag(): BelongsTo
    {
        return $this->belongsTo(File::class, 'id', 'photo_id');
    }
}
