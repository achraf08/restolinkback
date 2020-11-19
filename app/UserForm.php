<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class UserForm extends Eloquent
{
    protected $connection ='mongodb';
    protected $collection ='userforms';
    protected $fillable = ['clientId','formId','status'];

    protected $casts = [
        'status' => 'boolean',
    ];
    protected $guarded = [];
}
