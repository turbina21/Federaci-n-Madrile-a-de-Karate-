<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'EXACODIGO';
    public $incrementing = false;
    protected $fillable = [
        'EXACODIGO','EVECODIGO', 'TRICODIGO', 'EXACATEGORIA', 'EXACALIFICACIONTOTAL',
        'EXABLOQUECOMUN','EXABLOQUEESPECIFICO','EXAOBSERVACIONES'
    ];
}
