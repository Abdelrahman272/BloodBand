<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function governorate()
    {
        return $this->belongsTo(Governorate::class);
    }

    public function donar_city()
    {
        return $this->belongsTo(Donar::class);
    }
}
