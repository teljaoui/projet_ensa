<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    use HasFactory;
    protected $fillable = ['name' , 'ability'];
    public function booking()
    {
        return $this->hasMany(Booking::class, 'id_salle');
    }
}
