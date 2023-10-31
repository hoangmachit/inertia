<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = [
        'parent_id',
        'parent_variant',
        'star',
        'title',
        'content',
        'full_name',
        'phone',
        'email',
        'sort',
        'type',
        'status',
    ];
}
