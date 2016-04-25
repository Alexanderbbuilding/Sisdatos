<?php

namespace Minminer_app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LoadSample
 */
class LoadSample extends Model
{
    protected $table = 'load_samples';

    public $timestamps = true;

    protected $fillable = [
        'tipo_muestra_id',
        'minas_id',
        'codigo_carga'
    ];

    protected $guarded = [];

        
}