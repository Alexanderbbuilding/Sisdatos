<?php

namespace Minminer_app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Result
 */
class Result extends Model
{
    protected $table = 'results';

    public $timestamps = true;

    protected $fillable = [
        'muestra_id',
        'detalles_analisis_id',
        'descripcion',
        'base_recibe',
        'base_determina',
        'base_seca',
        'resultado',
        'resultado_final',
        'unidad'
    ];

    protected $guarded = [];

        
}