<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\MatriculaRequest;
use Illuminate\Http\Request;
use App\Matricula;


class MatriculaController extends Controller
{
     public function index(){

        $matriculas = Matricula::all();
        return view('matriculas.index',['matriculas'=>$matriculas]);

    }

    public function create(){

        return view('matriculas.create');

    }

    public function store(MatriculaRequest $request){

        $input = $request->all();
        Matricula::create($input);    
        return redirect()->route('matriculas');
        
    }

    public function destroy($id){

        Matricula::find($id)->delete();
        return redirect()->route('matriculas');

    }

    public function edit($id){

        $matricula = Matricula::find($id);
        return view('matriculas.edit', compact('matricula'));

    }

    public function update(MatriculaRequest $request, $id){

        $matricula = Matricula::find($id)->update($request->all());
        return redirect()->route('matriculas');

    }
}
