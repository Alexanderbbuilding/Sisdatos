<?php

namespace Minminer_app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Parameter
 */
class Parameter extends Model
{
    protected $table = 'parameters';

    public $timestamps = true;

    protected $fillable = [
        'descripcion',
        'valor'
    ];

    protected $guarded = [];

        
}