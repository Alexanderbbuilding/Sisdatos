<?php

namespace Minminer_app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AdlPeso
 */
class AdlPeso extends Model
{
    protected $table = 'adl_pesos';

    public $timestamps = true;

    protected $fillable = [
        'adl_id',
        'peso',
        'por_per_hum',
        'hora_minutos'
    ];

    protected $guarded = [];

        
}