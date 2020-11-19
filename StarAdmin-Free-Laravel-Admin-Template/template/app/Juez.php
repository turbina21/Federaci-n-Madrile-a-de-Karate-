<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Juez extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'JUECEDULA';
    public $incrementing = false;
    protected $fillable = [
        'JUECEDULA', 'TRICODIGO', 'JUENOMBRE', 'JUEDIPLOMA'
    ];
}
