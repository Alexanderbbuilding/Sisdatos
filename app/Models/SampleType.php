<?php

namespace Minminer_app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SampleType
 */
class SampleType extends Model
{
    protected $table = 'sample_types';

    public $timestamps = true;

    protected $fillable = [
        'descripcion',
        'codigo'
    ];

    protected $guarded = [];

        
}