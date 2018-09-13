<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;



class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    public $table = 'users';

    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'name',
        'lastname',
        'email',
        'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'name' => 'string',
        'lastname' => 'string',
        'email' => 'string'
    ];

    public static $rules = [

    ];

    public function isSuperAdmin()
    {
        return ($this->email == 'lucas@verticedigital.com.ar' || $this->email == 'fernando@verticedigital.com.ar');
    }

    public function getFullnameAttribute()
    {
        return $this->name . ' ' . $this->lastname;
    }
}
