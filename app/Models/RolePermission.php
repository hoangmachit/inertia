<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RolePermission extends Model
{
    use HasFactory;
    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = [
        'role_id',
        'permission_id',
    ];

    /**
     * Summary of permission
     * @return BelongsTo
     */
    public function permission(): BelongsTo
    {
        return $this->BelongsTo(Permission::class, 'id', 'permission_id');
    }

    /**
     * Summary of role
     * @return BelongsTo
     */
    public function role(): BelongsTo
    {
        return $this->BelongsTo(Role::class, 'id', 'role_id');
    }
}
