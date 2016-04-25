<?php

namespace Minminer_app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mine
 */
class Mine extends Model
{
    protected $table = 'mines';

    public $timestamps = true;

    protected $fillable = [
        'proveedor_id',
        'seccion_estratografica_id',
        'nombre'
    ];

    protected $guarded = [];

        
}