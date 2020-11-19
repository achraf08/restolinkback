<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Order extends Eloquent
{
    protected $connection ='mongodb';
    protected $collection ='orders';
    protected $fillable = ['location','status','expected_by','total','source'];
    protected $casts = [
        'expected_by' => 'datetime',
        'status' => 'boolean',
    ];
    public function users()
    {
    return $this->belongsTo(User::class);
    }
}
