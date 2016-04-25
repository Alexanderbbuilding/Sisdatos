<?php

namespace Minminer_app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FsiDetail
 */
class FsiDetail extends Model
{
    protected $table = 'fsi_details';

    public $timestamps = true;

    protected $fillable = [
        'fsi_id',
        'boton',
        'peso',
        'perfil'
    ];

    protected $guarded = [];

        
}