<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodType extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function DonarBloodType()
    {
        return $this->hasMany(Donor::class);
    }

    public function donors()
    {
        return $this->belongsToMany(Donor::class);
    }
}
