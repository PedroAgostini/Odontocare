<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consulta;

class ConsultaController extends Controller
{
    public function index()
    {
	$consulta = Consulta::all()->toArray();
        return view('Dashboard.consulta.index', ['lista' => $consulta]);
    }

    public function create()
    {
        return view('Dashboard.consulta.create');
    }

    public function salvar_novo(Request $dados)
    {
        $consulta = new Consulta;
        $consulta->paciente = $dados->input("paciente");
        $consulta->telefone = $dados->input("telefone");
        $consulta->data = $dados->input("data");
        $consulta->horario = $dados->input("horario");
        $consulta->dentista = $dados->input('dentista');
        $consulta->save();

        return redirect('/dashboard/consulta');
    }

    public function editar($id)
    {
        $consulta = Consulta::find($id)->toArray();
    
        return view('Dashboard.consulta.editar', ['consulta' => $consulta]);
    }

    public function salvar_alteracao(Request $dados) {
        $id = $dados->input("id");
 
        $consulta = Consulta::find($id);
        $consulta->paciente = $dados->input("paciente");
        $consulta->telefone = $dados->input("telefone");
        $consulta->data = $dados->input("data");
        $consulta->horario = $dados->input("horario");
        $consulta->dentista = $dados->input('dentista');
        $consulta->save();
 
        return redirect('/dashboard/consulta');
    }

    public function excluir($id) 
    {
         $consulta = Consulta::find($id);
         $consulta->delete();
         return redirect('/dashboard/consulta');
    }
}
