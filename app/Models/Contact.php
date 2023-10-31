<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'address',
        'attachment',
        'subject',
        'content',
        'notes',
        'status',
        'sort',
    ];
}
