<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aspirante extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'ASPCEDULA';
    public $incrementing = false;
    protected $fillable = [
        'ASPCEDULA', 'ASPNOMBRE', 'ASPAPELLIDO', 'ASPFECHANACIMIENTO', 'ASPLICENCIA', 'ASPGRADOACTUAL',
        'ASPFECHAGRADOACTUAL'
    ];
}
