<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carpool extends Model
{

    protected $table = 'carpools';

    protected  $primaryKey = 'rideId';
}
