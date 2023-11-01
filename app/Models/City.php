<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    /**
     * Summary of table
     * @var string
     */
    protected $table = 'city';

    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = [
        'name_vi',
        'name_en',
        'slug',
        'level',
        'code',
        'sort',
        'status',
    ];
}
