<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dentist;

class DentistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $dentistas = Dentist::all()->toArray();

        return view('Dashboard.dentist.index',
                    ['lista' => $dentistas]
                   );
    }

    public function create()
    {   
        return view('Dashboard.dentist.create');
    }

    public function salvar_novo(Request $dados)
{
    $dentista = new Dentist;
    $dentista->nome = $dados->input("nome");
    $dentista->telefone = $dados->input("telefone");
    $dentista->especialidade = $dados->input("especialidade");
    $dentista->save();

    return redirect('/dashboard/dentist');
}

    public function excluir($id) 
    {
         $dentistas = Dentist::find($id);
         $dentistas->delete();
         return redirect('/dashboard/dentist');
    }
    public function editar($id) 
    {
         $dentistas = Dentist::find($id)->toArray();
         return view('Dashboard.dentist.editar',
               [ 'dentistas' => $dentistas ]
             );
    }

   public function salvar_alteracao(Request $request) {
       $id = $request->input("id");

       $dentistas = Dentist::find($id);
       $dentistas->nome          = $request->input('nome');
       $dentistas->telefone    = $request->input('telefone');
       $dentistas->especialidade        = $request->input('especialidade');
       $dentistas->save();

       return redirect('/dashboard/dentist');
   }
}