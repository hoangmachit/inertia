<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasFactory;
    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = [
        'full_name',
        'attachment',
        'email',
        'phone',
        'address',
        'subject',
        'content',
        'notes',
        'type',
        'status',
        'confirm_status',
        'sort',
    ];
}
