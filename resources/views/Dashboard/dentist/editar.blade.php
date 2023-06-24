@extends('Dashboard.layouts.dashboard')

@section('title','Alteração de Dentista')

@section('content')

<div class="card card-danger">
<div class="card-header">
<h3 class="card-title">Alterar Dentista</h3>
</div>


<form action="/dashboard/dentist/salvar_alteracao" method="post">
@csrf
<input type="hidden" name="id" value='{{ $dentistas["id"] }}' />
<div class="card-body">
    <div class="form-group">
<label>Nome do Dentista</label>
<input type="text" 
    class="form-control" 
    name= "nome"
    value='{{ $dentistas["nome"] }}'
>
  </div>

  <div class="form-group">
    <label>Telefone</label>
    <input type="text" 
        class="form-control" 
         name= "telefone"
         value='{{ $dentistas["telefone"] }}'
>
  </div>

  <div class="form-group">
    <label>Especialidade</label>
    <input type="text" 
        class="form-control" 
         name= "especialidade"
         value='{{ $dentistas["especialidade"] }}'
>
  </div>

</div>
<div class="card-footer">
    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href='/dashboard/dentist' class='btn btn-default'>
         Voltar
    </a>
</div>
</form>
</div>

@endsection