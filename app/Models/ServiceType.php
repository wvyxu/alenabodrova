<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Specialization;
use App\Models\Subcategory;

class ServiceType extends Model
{
    use HasFactory;
    public function specializations()
    {
        return $this->hasMany(Specialization::class);
    }

    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }
}
