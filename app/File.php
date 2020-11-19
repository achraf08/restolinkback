<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class File extends Eloquent
{
    protected $connection ='mongodb';
    protected $collection ='files';
    protected $fillable = ['name','extension','type'];

    public function user()
    {
    return $this->belongsTo(User::class);
    }

}
