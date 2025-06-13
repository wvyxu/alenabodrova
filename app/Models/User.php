<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use App\Models\StuffSpecialization;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function stuff_specialization() {
        return $this->hasMany(StuffSpecialization::class);
    }

    public function stuff_specs() {
        return $this->hasMany(StuffSpecialization::class)->get();
    }

    public function orders() {
        return $this->hasMany(Order::class);
    }

    public function specs() {
        return $this->hasMany(StuffSpecialization::class)->
                    select('specialization_id')->distinct()->get();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
    ];
}
