<?php

namespace Minminer_app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sample
 */
class Sample extends Model
{
    protected $table = 'samples';

    public $timestamps = true;

    protected $fillable = [
        'manto_minas_id',
        'tipo_muestra_id',
        'destino_muestra_id',
        'tipo_mezcla_id',
        'plantas_id',
        'coque_terminado_id',
        'consecutivo',
        'annio',
        'codigo_muestra'
    ];

    protected $guarded = [];

        
}