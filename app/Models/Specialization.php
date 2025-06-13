<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\ServiceType;
use App\Models\StuffSpecialization;
use App\Models\Service;

class Specialization extends Model
{
    use HasFactory;

    public function service_type() 
    {
        return $this->belongsTo(ServiceType::class);
    }

    public function stuff_specialization()
    {
        return $this->hasMany(StuffSpecialization::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
