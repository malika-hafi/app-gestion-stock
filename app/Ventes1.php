<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ventes1 extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ventes';

     protected $primaryKey = 'id';
        protected $fillable   = ['id', 'id_produit', 'id_users', 'quantite', 'date'  ];
    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];
}
