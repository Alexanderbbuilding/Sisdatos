<?php

namespace Minminer_app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Rule
 */
class Rule extends Model
{
    protected $table = 'rules';

    public $timestamps = true;

    protected $fillable = [
        'descripcion'
    ];

    protected $guarded = [];

        
}