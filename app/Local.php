<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $fillable = [
        'nome'
    ];

    public function processos(){
        return $this->hasMany('App\Processo');
    }
}
