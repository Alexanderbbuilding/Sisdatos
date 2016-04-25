<?php

namespace Minminer_app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sulphur
 */
class Sulphur extends Model
{
    protected $table = 'sulphurs';

    public $timestamps = true;

    protected $fillable = [
        'muestra_id',
        'azufre1',
        'azufre2',
        'promedio_azufre',
        'repetibilidad_azufre',
        'limite_rep_azufre',
        'analista'
    ];

    protected $guarded = [];

        
}