<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Form extends Eloquent
{
    protected $connection ='mongodb';
    protected $collection ='forms';
    protected $fillable = ['title','status'];

    protected $casts = [
        'status' => 'boolean',
    ];
    protected $guarded = [];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
