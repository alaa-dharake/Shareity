<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'lastName',
        'username',
        'email',
        'password',
        'is_admin',
        'city_id',
        'state_id',
        'role',
        'image'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_admin' => 'boolean',
    ];

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isChef()
    {
        return $this->role === 'chef';
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class, 'chef_id'); // Assuming 'chef_id' is the foreign key in the ratings table
    }

    public function mealRequests()
    {
        return $this->hasMany(MealRequest::class, 'user_id');
    }

    public function receivedMealRequests()
    {
        return $this->hasMany(MealRequest::class, 'chef_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }
}
