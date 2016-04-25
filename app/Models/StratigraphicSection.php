<?php

namespace Minminer_app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class StratigraphicSection
 */
class StratigraphicSection extends Model
{
    protected $table = 'stratigraphic_sections';

    public $timestamps = true;

    protected $fillable = [
        'descripcion'
    ];

    protected $guarded = [];

        
}