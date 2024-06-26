<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'google_id', 'city', 'gender', 'hobbies','technologies','userimage',
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

    public function setHobbiesAttribute($value)
    {
        $this->attributes['hobbies'] = json_encode($value);
    }


    // public function getHobbiesAttribute($value)
    // {
    //     return $this->attributes['hobbies'] = json_decode($value);
    // }

    public function setTechnologiesAttribute($value)
    {
        $this->attributes['technologies'] = json_encode($value);
    }


    // public function getTechnologiesAttribute($value)
    // {
    //     return $this->attributes['technologies'] = json_decode($value);
    // }
   
}
