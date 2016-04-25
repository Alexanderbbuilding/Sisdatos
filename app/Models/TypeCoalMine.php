<?php

namespace Minminer_app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TypeCoalMine
 */
class TypeCoalMine extends Model
{
    protected $table = 'type_coal_mines';

    public $timestamps = true;

    protected $fillable = [
        'fecha_fin',
        'minas_id',
        'tipo_carbon_id'
    ];

    protected $guarded = [];

        
}