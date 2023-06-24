@extends('Dashboard.layouts.dashboard')

@section('content')

<h5 class="card-title fw-semibold mb-4">Cadastro de Consulta</h5>
<div class="card">
    <div class="card-body">
    <form action="/dashboard/consulta/salvar" method="post">
    @csrf
        <div class="card-body">
            <div class="form-group">
                <label>Nome do Paciente</label>
                <input type="text" class="form-control" name="paciente" required>
            </div>
            <div class="form-group">
                <label>Telefone</label>
                <input type="text" class="form-control" name="telefone" required>
            </div>
            <div class="form-group">
                <label>Data</label>
                <input type="date" class="form-control" name="data" required>
            </div>
            <div class="form-group">
                <label>Horário</label>
                <input type="time" class="form-control" name="horario" required>
            </div>
            <div class="form-group">
                <label>Dentista</label>
                <input type="text" class="form-control" name="dentista" required>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href='/dashboard/dentist' class='btn btn-default'>Voltar</a>
        </div>
    </form>
@endsection
