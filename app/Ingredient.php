<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Ingredient extends Eloquent
{
    protected $connection ='mongodb';
    protected $collection ='ingredients';
}
