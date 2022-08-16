<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodType extends Model
{
    use HasFactory;

    public function DonarBloodType()
    {
        return $this->hasMany(Donar::class);
    }

    public function donar()
    {
        return $this->belongsToMany(Donar::class,'notification_settings');
    }
}
