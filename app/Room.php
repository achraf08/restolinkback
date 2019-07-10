<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Room extends Eloquent
{
    protected $connection ='mongodb';
    protected $collection ='rooms';
    protected $fillable = ['status','title'];
    protected $casts = [
        'status' => 'boolean',
    ];
    public function tables()
    {
        return $this->hasMany('App\Table');
    }
}
