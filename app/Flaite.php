<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flaite extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
    ];

    /*******************************************************************************************
    /************************************ Relaciones *******************************************
    *******************************************************************************************/
    
    /**
     * Relación belongsTo
     * Esta/e flaite pertenece a un/a provincia
     */
    public function provincia()
    {
        return $this->belongsTo('App\Provincia');
    }

    /**
     * Relación belongsTo
     * Esta/e flaite pertenece a un/a comuna
     */
    public function comuna()
    {
        return $this->belongsTo('App\Comuna');
    }

    /**
     * Relación belongsTo
     * Esta/e flaite pertenece a un/a cerro
     */
    public function cerro()
    {
        return $this->belongsTo('App\Cerro');
    }        
}
