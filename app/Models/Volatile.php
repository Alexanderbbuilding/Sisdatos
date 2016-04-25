<?php

namespace Minminer_app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Volatile
 */
class Volatile extends Model
{
    protected $table = 'volatiles';

    public $timestamps = true;

    protected $fillable = [
        'muestra_id',
        'analista'
    ];

    protected $guarded = [];

        
}