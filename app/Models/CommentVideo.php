<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentVideo extends Model
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
}
