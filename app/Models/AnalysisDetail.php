<?php

namespace Minminer_app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AnalysisDetail
 */
class AnalysisDetail extends Model
{
    protected $table = 'analysis_details';

    public $timestamps = true;

    protected $fillable = [
        'tipo_analisis_id',
        'norma_id',
        'unidad_id',
        'descripcion'
    ];

    protected $guarded = [];

        
}