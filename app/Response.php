<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Response extends Eloquent
{
    protected $connection ='mongodb';
    protected $collection ='responses';
    protected $fillable = ['response','clientId','questionId','formId'];
    protected $guarded = [];

}
