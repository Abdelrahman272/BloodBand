<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'd_o_b',
        'blood_type_id',
        'city_id',
        'phone',
        'password',
        'age',
        'address',
        'gender',
        "token"
    ];

    public function cites()
    {
        return $this->hasMany(City::class);
    }

    public function bloodType()
    {
        return $this->belongsTo(BloodType::class, 'notification_settings');
    }

    public function tokens()
    {
        return $this->hasMany(Token::class);
    }

    public function bloodTypes()
    {
        return $this->belongsToMany(BloodType::class);
    }
}
