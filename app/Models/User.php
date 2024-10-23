<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use Notifiable, LaratrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'userable_id', 'userable_type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function comments() {
        return $this->hasMany(Models\Comment::class) ;
    }

    /**
     * A user can have many roles.
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * A user can have many permissions through roles.
     */
    public function permissions()
    {
        return $this->hasManyThrough(Permission::class, Role::class);
    }

    public function userable()
    {
        return $this->morphTo();
    }

    public function isAdmin()
    {
        return $this->userable_type == Admin::class;
    }

    public function isMember()
    {
        return $this->userable_type == Member::class;
    }

    public function getMember()
    {
        if ($this->isMember()) {
            return $this->userable;
        }
        return null;
    }

    public function getAdmin()
    {
        if ($this->isAdmin()) {
            return $this->userable;
        }
        return null;
    }
}
