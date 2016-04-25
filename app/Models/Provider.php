<?php

namespace Minminer_app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Provider
 */
class Provider extends Model
{
    protected $table = 'providers';

    public $timestamps = true;

    protected $fillable = [
        'persona_id',
        'nombres',
        'direccion',
        'telefono',
        'email'
    ];

    protected $guarded = [];

        
}