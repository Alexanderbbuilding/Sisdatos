<?php

namespace Minminer_app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Moisture
 */
class Moisture extends Model
{
    protected $table = 'moistures';

    public $timestamps = true;

    protected $fillable = [
        'muestra_id',
        'analista'
    ];

    protected $guarded = [];

        
}