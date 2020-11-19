<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'INSCODIGO';
    public $incrementing = false;
    protected $fillable = [
        'INSCODIGO', 'EXACODIGO', 'REQCODIGO', 'CONCODIGO', 'ASPCEDULA', 'CASCODIGO',
        'INSFECHA', 'INSGRADO'
    ];
}
