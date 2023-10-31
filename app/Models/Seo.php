<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    use HasFactory;
    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = [
        'parent_id',
        'type',
        'table_name',
        'title_vi',
        'keyword_vi',
        'description_vi',
        'title_en',
        'keyword_en',
        'description_en',
        'schema_vi',
        'schema_en',
    ];
}
