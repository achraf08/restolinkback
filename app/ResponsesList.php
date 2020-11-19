<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class ResponsesList extends Eloquent
{
    protected $connection ='mongodb';
    protected $collection ='responses';
    protected $fillable = [];
    protected $guarded = [];

    public function responses()
    {
        return $this->hasMany(Response::class);
    }
}
