<?php

namespace Minminer_app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ash
 */
class Ash extends Model
{
    protected $table = 'ashes';

    public $timestamps = true;

    protected $fillable = [
        'muestra_id',
        'analista'
    ];

    protected $guarded = [];

        
}