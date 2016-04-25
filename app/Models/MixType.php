<?php

namespace Minminer_app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MixType
 */
class MixType extends Model
{
    protected $table = 'mix_types';

    public $timestamps = true;

    protected $fillable = [
        'porc_alto',
        'porc_bajo',
        'porc_termico'
    ];

    protected $guarded = [];

        
}