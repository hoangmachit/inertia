<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'language_id',
        'name_vi',
        'name_en',
        'head_js',
        'body_js',
        'google_master_tool',
        'google_analytics',
    ];
}
