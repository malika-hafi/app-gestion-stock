<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    //

    protected $fillable = ['id_clients','nom','email','password','tel'];
}