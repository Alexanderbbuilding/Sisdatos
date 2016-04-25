<?php

namespace Minminer_app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LaboratorySample
 */
class LaboratorySample extends Model
{
    protected $table = 'laboratory_samples';

    public $timestamps = true;

    protected $fillable = [
        'muestra_id',
        'laboratorios_id'
    ];

    protected $guarded = [];

        
}