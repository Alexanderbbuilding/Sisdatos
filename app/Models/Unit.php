<?php

namespace Minminer_app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Unit
 */
class Unit extends Model
{
    protected $table = 'units';

    public $timestamps = true;

    protected $fillable = [
        'descripcion',
        'valor'
    ];

    protected $guarded = [];

        
}