<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use SoftDeletes;

    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = [
        'username',
        'password',
        'avatar_id',
        'full_name',
        'email',
        'phone',
        'sex_id',
        'address',
        'remember_token',
        'status',
        'role_id',
        'birth_day',
        'email_verified_at',
        'sort',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Summary of avatar
     * @return BelongsTo
     */
    public function city(): BelongsTo
    {
        return $this->belongsTo(File::class, 'id', 'avatar_id');
    }

    /**
     * Summary of sex
     * @return BelongsTo
     */
    public function sex(): BelongsTo
    {
        return $this->belongsTo(Sex::class, 'id', 'sex_id');
    }

    /**
     * Summary of role
     * @return BelongsTo
     */
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class, 'id', 'role_id');
    }
}
