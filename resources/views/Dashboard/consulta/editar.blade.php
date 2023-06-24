@extends('Dashboard.layouts.dashboard')

@section('title','Alteração de Dentista')

@section('content')

<div class="card card-danger">
<div class="card-header">
<h3 class="card-title">Alterar Dentista</h3>
</div>


<form action="/dashboard/consulta/salvar_alteracao" method="post">
@csrf
<input type="hidden" name="id" value='{{ $consulta["id"] }}' />
<div class="card-body">
    <div class="form-group">
<label>Nome do Paciente</label>
<input type="text" 
    class="form-control" 
    name= "paciente"
    value='{{ $consulta["paciente"] }}'
>
  </div>

  <div class="form-group">
    <label>Telefone</label>
    <input type="text" 
        class="form-control" 
         name= "telefone"
         value='{{ $consulta["telefone"] }}'
>
  </div>

  <div class="form-group">
    <label>Data</label>
    <input type="date" 
        class="form-control" 
         name= "data"
         value='{{ $consulta["data"] }}'
>
  </div>
  
  <div class="form-group">
    <label>Horário</label>
    <input type="time" 
        class="form-control" 
         name= "horario"
         value='{{ $consulta["horario"] }}'
>
  </div>

  
  <div class="form-group">
    <label>Dentista</label>
    <input type="text" 
    class="form-control" 
         name= "dentista"
         value='{{ $consulta["dentista"] }}'>
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