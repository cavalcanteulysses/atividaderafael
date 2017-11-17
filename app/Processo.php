<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Processo extends Model
{
    protected $fillable = [
        'tipo',
        'descricao',
        'responsavel',
        'inclusao',
        'documento_id',
        'local_id'
    ];

    public function documento(){
        return $this->belongsTo('App\Documento');
    }

    public function local(){
        return $this->belongsTo('App\Local');
    }
}
