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
        'username', 'email', 'password', 'user_type_id', 'user_type',
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

    public function admin()
    {
        return $this->hasOne(Admin::class, 'id');
    }

    public function member()
    {
        return $this->belongsTo(Member::class, 'id');
    }
}
