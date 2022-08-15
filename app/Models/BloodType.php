<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodType extends Model
{
    use HasFactory;

    public function bloodType()
    {
        return $this->hasMany(Doner::class);
    }

    public function notifications()
    {
        return $this->belongsToMany(NotificationSetting::class);
    }
}
