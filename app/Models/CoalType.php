<?php

namespace Minminer_app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CoalType
 */
class CoalType extends Model
{
    protected $table = 'coal_types';

    public $timestamps = true;

    protected $fillable = [
        'descripcion'
    ];

    protected $guarded = [];

        
}