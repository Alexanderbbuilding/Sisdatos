<?php

namespace Minminer_app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Fsi
 */
class Fsi extends Model
{
    protected $table = 'fsis';

    public $timestamps = true;

    protected $fillable = [
        'muestra_id',
        'analista',
        'indice_promedio',
        'observacion'
    ];

    protected $guarded = [];

        
}