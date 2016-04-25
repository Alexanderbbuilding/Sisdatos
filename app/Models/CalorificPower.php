<?php

namespace Minminer_app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CalorificPower
 */
class CalorificPower extends Model
{
    protected $table = 'calorific_powers';

    public $timestamps = true;

    protected $fillable = [
        'muestra_id',
        'qvad1',
        'qvad2',
        'analista'
    ];

    protected $guarded = [];

        
}