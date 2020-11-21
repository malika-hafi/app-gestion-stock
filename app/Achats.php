<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achats extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'achats';

    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];
}
