<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\StuffSpecialization;
use App\Models\Service;


class Order extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function stuff_specialization() {
        return $this->belongsTo(StuffSpecialization::class);
    }

    public function service() {
        return $this->belongsTo(Service::class);
    }
}
