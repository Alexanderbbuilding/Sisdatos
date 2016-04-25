<?php

namespace Minminer_app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GeographicalDescription
 */
class GeographicalDescription extends Model
{
    protected $table = 'geographical_descriptions';

    public $timestamps = true;

    protected $fillable = [
        'manto_minas_id',
        'explotador',
        'fuente',
        'columna1',
        'unidad',
        'espesor_util',
        'e',
        'n',
        'altura',
        'azumit',
        'buzamiento',
        'cuadrante_buz',
        'espesor',
        'litoestratigrafia'
    ];

    protected $guarded = [];

        
}