<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\ProcessoRequest;
use App\Processo;

class ProcessoController extends Controller
{
    public function index(){

        $processos = Processo::all();
        return view('compras.index',['processos'=>$processos]);

    }

    public function create(){

        return view('compras.create');

    }

    public function store(ProcessoRequest $request){

        $input = $request->all();
        Processo::create($input);    
        return redirect()->route('compras');
        
    }

    public function destroy($id){

        Processo::find($id)->delete();
        return redirect('compras');

    }
}
