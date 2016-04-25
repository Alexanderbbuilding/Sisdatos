<?php

namespace Minminer_app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VolatilDetail
 */
class VolatilDetail extends Model
{
    protected $table = 'volatil_details';

    public $timestamps = true;

    protected $fillable = [
        'volatil_id',
        'crisol',
        'crisol_vacio',
        'muestra_humeda',
        'seca_mas_crisol',
        'resultados',
        'promedio',
        'repetibilidad',
        'limite_repetibilidad',
        'observaciones'
    ];

    protected $guarded = [];

        
}