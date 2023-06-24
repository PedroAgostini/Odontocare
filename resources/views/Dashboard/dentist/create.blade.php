@extends('Dashboard.layouts.dashboard')

@section('content')

<h5 class="card-title fw-semibold mb-4">Dentista</h5>
<div class="card">
    <div class="card-body">
    <form action="/dashboard/dentist/salvar" method="post">
    @csrf
                <div class="card-body">
                <div class="form-group">
                    <label>Nome do Dentista</label>
                    <input type="text" class="form-control" name="nome" required>
                </div>
                <div class="form-group">
                    <label>Telefone</label>
                    <input type="text" class="form-control" name="telefone" required>
                </div>
                <div class="form-group">
                    <label>Especialidade</label>
                    <input type="text" class="form-control" name="especialidade" required>
                </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Salvar</button>
                  <a href='/dashboard/dentist' class='btn btn-default'>Voltar</a>
                </div>
              </form>


@endsection
