<?php

namespace App\Models;

use Laratrust\Models\LaratrustPermission;

class Permission extends LaratrustPermission
{
    // public $guarded = [];

    protected $fillable = [
        'name',
        'display_name',
        'description',
    ];

    /**
     * A permission can belong to many roles.
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
