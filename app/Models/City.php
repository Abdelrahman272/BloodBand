<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'city', 'governorate_id'];

    public function governorate()
    {
        return $this->belongsTo(Governorate::class);
    }

    public function donar_city()
    {
        return $this->hasMany(Donor::class);
    }
}
