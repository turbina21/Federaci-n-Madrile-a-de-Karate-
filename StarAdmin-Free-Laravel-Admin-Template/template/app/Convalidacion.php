<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convalidacion extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'CONCODIGO';
    public $incrementing = false;
    protected $fillable = [
        'CONCODIGO', 'CONPAIS', 'CONTIEMPOPERMANENCIA', 'CONCURRICULUMVISADO',
        'CONACREDITACION','CONCOPIATITULOS','CONPLANESTUDIO'
    ];
}
