<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $fillable = [
        'tipo',
        'numero',
        'data'
    ];

    public function processos(){
        return $this->hasMany('App\Processo');
    }
}
