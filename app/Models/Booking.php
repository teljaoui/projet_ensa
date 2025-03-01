<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_booking',
        'time_start',
        'time_fin',
        'id_salle',
        'id_prof'
    ];

    public function prof()
    {
        return $this->belongsTo(Prof::class, 'id_prof');
    }

    public function salle()
    {
        return $this->belongsTo(Salle::class, 'id_salle');
    }

    public function timeStart()
    {
        return $this->belongsTo(Tim::class, 'time_start');
    }

    public function timeFin()
    {
        return $this->belongsTo(Tim::class, 'time_fin');
    }
}
