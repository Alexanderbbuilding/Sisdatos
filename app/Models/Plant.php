<?php

namespace Minminer_app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Plant
 */
class Plant extends Model
{
    protected $table = 'plants';

    public $timestamps = true;

    protected $fillable = [
        'descripcion'
    ];

    protected $guarded = [];

        
}