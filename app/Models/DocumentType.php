<?php

namespace Minminer_app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentType
 */
class DocumentType extends Model
{
    protected $table = 'document_types';

    public $timestamps = true;

    protected $fillable = [
        'descripcion',
        'valor'
    ];

    protected $guarded = [];

        
}