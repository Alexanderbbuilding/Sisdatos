<?php

namespace Minminer_app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Adl
 */
class Adl extends Model
{
    protected $table = 'adls';

    public $timestamps = true;

    protected $fillable = [
        'muestra_id',
        'bandeja',
        'peso_muestra',
        'humedad_muestra',
        'total_peso_humedad',
        'peso_final',
        'adl_porcentaje',
        'humedad_residual',
        'resultado_humedad',
        'peso_final_p',
        'adl_porcentaje_p',
        'humedad_residual_p',
        'resultado_humedad_p',
        'analista'
    ];

    protected $guarded = [];

        
}