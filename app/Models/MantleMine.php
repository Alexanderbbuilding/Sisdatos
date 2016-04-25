<?php

namespace Minminer_app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MantleMine
 */
class MantleMine extends Model
{
    protected $table = 'mantle_mines';

    public $timestamps = true;

    protected $fillable = [
        'minas_id',
        'mantos_id'
    ];

    protected $guarded = [];

        
}