<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    use HasFactory;

    protected $fillable = [
        'token',
        'donor_id',
    ];

    public function donor()
    {
        return $this->belongsTo(Donor::class);
    }
}
