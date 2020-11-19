<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tribunal extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'TRICODIGO';
    public $incrementing = false;
    protected $fillable = [
        'TRICODIGO', 'TRICANTIDAD'
    ];
}
