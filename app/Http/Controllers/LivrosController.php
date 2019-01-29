<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livros;
class LivrosController extends Controller
{
    //
    public function create(Request $request)
    {
        
        $cliente = new Livros;
        $cliente->titulo = $request->titulo;
        $cliente->autor = $request->autor;
        $cliente->editora = $request->editora;
        $cliente->versao = $request->versao;
        $cliente->anoLancamento = $request->anoLancamento;
        $cliente->qtdEstoque = $request->qtdEstoque;
        $cliente->qtdEmprestada = $request->qtdEmprestada;
        $cliente->save();
        return response()->json([$cliente]); 
    }
    public function list(){
        return Livros::all();

    }
}
