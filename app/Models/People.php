<?php

namespace Minminer_app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class People
 */
class People extends Model
{
    protected $table = 'peoples';

    public $timestamps = true;

    protected $fillable = [
        'tipo_documento_id',
        'nombres',
        'apellidos',
        'direccion',
        'telefono',
        'email'
    ];

    protected $guarded = [];

        
}