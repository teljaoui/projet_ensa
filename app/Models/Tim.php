<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tim extends Model
{
    use HasFactory;
    protected $fillable = [
        'time'
    ];
    public function bookingsStart()
    {
        return $this->hasMany(Booking::class, 'time_start');
    }

    public function bookingsEnd()
    {
        return $this->hasMany(Booking::class, 'time_fin');
    }
}