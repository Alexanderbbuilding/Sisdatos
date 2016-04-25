<?php

namespace Minminer_app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TypeAnalysisSample
 */
class TypeAnalysisSample extends Model
{
    protected $table = 'type_analysis_samples';

    public $timestamps = true;

    protected $fillable = [
        'tipo_analisis_id',
        'muestra_id'
    ];

    protected $guarded = [];

        
}