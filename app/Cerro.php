<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cerro extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre','provincia_id','comuna_id',
    ];
}
