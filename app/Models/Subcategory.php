<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\ServiceType;
use App\Models\Service;
use App\Models\Length;

class Subcategory extends Model
{
    use HasFactory;

    public function service_type() {
        return $this->belongsTo(ServiceType::class);
    }

    // public function subcategory() {
    //     return $this->belongsTo(ServiceType::class);
    // }

    public function services() {
        return $this->hasMany(Service::class);
    }

    public function specs() {
        return $this->hasMany(Service::class)->select('specialization_id')->distinct()->get();
    }

    public function servs() {
        return $this->hasMany(Service::class)
        ->select('subcategory_id', 'length_id')
        ->distinct()
        ->get();
    }

    public function catserv($id) {
        return $this->hasMany(Service::class)->where('specialization_id','=', $id)->get();
    }

    public function specsserv($id) {
        return $this->hasMany(Service::class)->where('subcategory_id','=', $id)->get();
    }
}
