<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;
    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = [
        'city_id',
        'district_id',
        'name',
        'slug',
        'code',
        'level',
        'status',
        'sort',
    ];
}
