<?php

namespace App\Models;

use Laratrust\Models\LaratrustRole;

class Role extends LaratrustRole
{
    // public $guarded = [];

    protected $fillable = [
        'role_name'
    ];

    /**
     * A role can belong to many users.
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * A role can have many permissions.
     */
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
}
