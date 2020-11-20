<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caso extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'CASCODIGO';
    public $incrementing = false;
    protected $fillable = [
        'CASCODIGO', 'CASIMPEDIMENTOFISICO', 'CASCERTIFICADOMEDICO', 'CASASCENSOS','CASOBSERVACION'
    ];
}
