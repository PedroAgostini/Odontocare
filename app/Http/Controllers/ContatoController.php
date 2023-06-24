<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    public function index()
    {
        $contato = Contato::all()->toArray();

        return view('Dashboard.contato.index',
                    ['lista' => $contato]
                   );
    }

    public function salvar(Request $dados)
{
    $contato = new Contato;
    $contato->nome = $dados->input("nome");
    $contato->telefone = $dados->input("telefone");
    $contato->assunto = $dados->input("assunto");
    $contato->mensagem = $dados->input("mensagem");
    $contato->save();

    return redirect('/contato');
}

    public function excluir($id) 
    {
         $contato = Contato::find($id);
         $contato->delete();
         return redirect('/dashboard/contato');
    }
}