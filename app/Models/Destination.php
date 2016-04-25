<?php

namespace Minminer_app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Destination
 */
class Destination extends Model
{
    protected $table = 'destinations';

    public $timestamps = true;

    protected $fillable = [
        'descripcion'
    ];

    protected $guarded = [];

        
}