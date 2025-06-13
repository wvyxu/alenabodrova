<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Specialization;
use App\Models\Order;

class StuffSpecialization extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function specialization() {
        return $this->belongsTo(Specialization::class);
    }

    public function orders() {
        return $this->hasMany(Order::class);
    }
}
