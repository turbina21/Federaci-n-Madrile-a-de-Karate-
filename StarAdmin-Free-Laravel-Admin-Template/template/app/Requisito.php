<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requisito extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'REQCODIGO';
    public $incrementing = false;
    protected $fillable = [
        'REQCODIGO', 'REQFOTOCOPIACARNET', 'REQFOTOCOPIACEDULA', 'REQFOTOGRAFIAS',
        'REQSOLICITUD','REQTRABAJO'
    ];
}
