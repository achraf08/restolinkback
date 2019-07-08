<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Table extends Eloquent
{
    protected $connection ='mongodb';
    protected $collection ='tables';
    protected $casts = [
        'numberOfPlaces' => 'integer',
        'numberOfTable' => 'integer',
        'status' => 'boolean',
    ];
}
