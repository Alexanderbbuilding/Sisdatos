<?php

namespace Minminer_app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AshDetail
 */
class AshDetail extends Model
{
    protected $table = 'ash_details';

    public $timestamps = true;

    protected $fillable = [
        'cenizas_id',
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