<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class Restaurant extends Eloquent
{
    protected $connection ='mongodb';
    protected $collection ='restaurants';
    protected $fillable = ['name','address','type','image','numberOfStars','numberOfLikes'];
    protected $casts = [
        'numberOfStars' => 'integer',
        'numberOfLikes' => 'integer',
    ];
    public function rooms()
    {
        return $this->hasMany('App\Room');
    }
}
