<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'EVECODIGO';
    public $incrementing = false;
    protected $fillable = [
        'EVECODIGO', 'EVEFECHA', 'EVELUGAR'
    ];
}
