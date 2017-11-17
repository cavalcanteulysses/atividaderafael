<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Documento;

class DocumentoController extends Controller
{
    public function index(){

        $documentos = Documento::all();
        return view('compras.create',['documentos'=>$documentos]);

    }
}
