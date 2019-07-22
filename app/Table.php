<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Table extends Eloquent
{
    protected $connection ='mongodb';
    protected $collection ='tables';
    protected $fillable = ['seats','numberOfTable','status'];
    protected $casts = [
        'seats' => 'integer',
        'numberOfTable' => 'integer',
        'status' => 'boolean',
    ];
    public function rooms()
    {
    return $this->belongsTo(Room::class);
    }

}
