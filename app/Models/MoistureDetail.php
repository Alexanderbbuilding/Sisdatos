<?php

namespace Minminer_app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MoistureDetail
 */
class MoistureDetail extends Model
{
    protected $table = 'moisture_details';

    public $timestamps = true;

    protected $fillable = [
        'humedad_id',
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