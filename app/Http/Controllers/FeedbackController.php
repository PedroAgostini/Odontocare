<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedback = Feedback::all()->toArray();

        return view('Dashboard.feedback.index',
                    ['lista' => $feedback]
                   );
    }

    public function salvar(Request $dados)
{
    $feedback = new Feedback;
    $feedback->nome = $dados->input("nome");
    $feedback->telefone = $dados->input("telefone");
    $feedback->avaliacao = $dados->input("avaliacao");
    $feedback->mensagem = $dados->input("mensagem");
    $feedback->save();

    return redirect('/feedback');
}

    public function excluir($id) 
    {
         $feedback = Feedback::find($id);
         $feedback->delete();
         return redirect('/dashboard/feedback');
    }
}