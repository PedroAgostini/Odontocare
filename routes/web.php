<?php

use Illuminate\Support\Facades\Route;


//Rotas Site

Route::get('/', function () {
    return view('OdontoCare.index');
});

Route::get('/sobre', function () {
    return view('OdontoCare.sobre');
});

Route::get('/servicos', function () {
    return view('OdontoCare.servicos');
});

Route::get('/contato', function () {
    return view('OdontoCare.contato');
});

Route::post('/contato/salvar',
[App\Http\Controllers\ContatoController::class, 'salvar']
);

Route::get('/feedback', function () {
    return view('OdontoCare.feedback');
});

Route::post('/feedback/salvar',
[App\Http\Controllers\FeedbackController::class, 'salvar']
);

//Rotas Dashboard

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');

// Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

// Route::get('/invoicing', [App\Http\Controllers\DashboardController::class, 'index'])->name('invoicing');

Route::group(['prefix' => 'dashboard'], function(){
    Route::get('/admin', [App\Http\Controllers\DashboardController::class, 'index']);

    Route::group(['prefix' => 'contato'], function(){
        Route::get('/', [App\Http\Controllers\ContatoController::class, 'index']);
        Route::get('/excluir/{id}',
            [App\Http\Controllers\ContatoController::class, 'excluir']
         );
    });

    Route::group(['prefix' => 'feedback'], function(){
        Route::get('/', [App\Http\Controllers\FeedbackController::class, 'index']);
        Route::get('/excluir/{id}',
            [App\Http\Controllers\FeedbackController::class, 'excluir']
         );
    });
    
    Route::group(['prefix' => 'consulta'], function(){
        Route::get('/', [App\Http\Controllers\ConsultaController::class, 'index']);
        Route::get('/novo',
            [App\Http\Controllers\ConsultaController::class, 'create']
         );
        Route::get('/editar/{id}',
            [App\Http\Controllers\ConsultaController::class, 'editar']
         );
        Route::get('/excluir/{id}', 
            [App\Http\Controllers\ConsultaController::class, 'excluir']
        );
        Route::post('/salvar_alteracao',
            [App\Http\Controllers\ConsultaController::class, 'salvar_alteracao']
         );
        Route::post('/salvar',
            [App\Http\Controllers\ConsultaController::class, 'salvar_novo']
         );
    });

    Route::group(['prefix' => 'dentist'], function(){
        Route::get('/', [App\Http\Controllers\DentistController::class, 'index']);
        Route::get('/novo',
            [App\Http\Controllers\DentistController::class, 'create']
         );
        Route::get('/editar/{id}',
            [App\Http\Controllers\DentistController::class, 'editar']
         );
        Route::get('/excluir/{id}', 
            [App\Http\Controllers\DentistController::class, 'excluir']
        );
        Route::post('/salvar_alteracao',
            [App\Http\Controllers\DentistController::class, 'salvar_alteracao']
         );
        Route::post('/salvar',
            [App\Http\Controllers\DentistController::class, 'salvar_novo']
         );
    });
    
});
