<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Question extends Eloquent
{
    protected $connection ='mongodb';
    protected $collection ='questions';
    protected $fillable = ['type','description','status'];

    protected $casts = [
        'status' => 'boolean',
        'position' => 'integer'
    ];
    protected $guarded = [];
    public function forms()
    {
    return $this->belongsTo(Form::class);
    }
}
