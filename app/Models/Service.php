<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Subcategory;
use App\Models\Specialization;
use App\Models\Order;

class Service extends Model
{
    use HasFactory;

    public function subcategory() {
        return $this->belongsTo(Subcategory::class);
    }

    public function specialization() {
        return $this->belongsTo(Specialization::class);
    }

    public function length() {
        return $this->belongsTo(Length::class);
    }

    

    public function orders() {
        return $this->hasMany(Order::class);
    }
}
