<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prof extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone_number', 'password'];

    public function booking()
    {
        return $this->hasMany(Booking::class, 'id_prof');
    }
}
