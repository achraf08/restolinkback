<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Reservation extends Eloquent
{
    protected $connection ='mongodb';
    protected $collection ='reservations';
    protected $fillable = ['status','hourReservation'];

    protected $casts = [
        'status' => 'boolean',
        'hourReservation' => 'datetime',
    ];
}
