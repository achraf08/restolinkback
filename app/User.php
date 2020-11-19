<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Jenssegers\Mongodb\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject

{
    use Notifiable;
    protected $connection ='mongodb';
    protected $collection ='users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [        
        'firstName','lastName', 'email', 'password',
        'provider', 'provider_id',
        'is_activated','type','phoneNumber','status','role',
        'birthdate','address','country','state','gender'
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
    public function users()
    {
    return $this->belongsTo(Restaurant::class);
    }
    public function files()
    {
        return $this->hasMany(File::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function roles(){
        return $this->belongsToMany('App\Role');
    }
}
