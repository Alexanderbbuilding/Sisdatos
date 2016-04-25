<?php

namespace Minminer_app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AnalysisType
 */
class AnalysisType extends Model
{
    protected $table = 'analysis_types';

    public $timestamps = true;

    protected $fillable = [
        'norma_id',
        'codigo',
        'descripcion',
        'descripcion_corta',
        'tiempo_entrega',
        'unidad',
        'automatizado'
    ];

    protected $guarded = [];

        
}