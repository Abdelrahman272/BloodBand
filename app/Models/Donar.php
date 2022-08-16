<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donar extends Model
{
    use HasFactory;

    public function cites()
    {
        return $this->hasMany(City::class);
    } 

    public function bloodType()
    {
        return $this->belongsToMany(BloodType::class,'notification_settings');
    }
}
