@extends('Dashboard.layouts.dashboard')

@section('content')
<a href="/dashboard/dentist/novo" class="card-title fw-semibold mb-4">Cadastro de Dentista</a>

<table class ="table table-hover text-nowrap">
        <thead>
            <td>Id</td>
            <td>Nome</td>
            <td>Telefone</td>
            <td>Especialidade</td>  
            <td>Opcoes</td>    
        </thead>
    <tbody>
        <?php
            foreach($lista as $linha)
            {
                echo "<tr>" .
                        "<td>" . $linha['id'] . "</td>" .
                        "<td>" . $linha['nome'] . "</td>" .
                        "<td>" . $linha['telefone'] . "</td>" .
                        "<td>" . $linha['especialidade'] . "</td>" .
                        "<td>
                        <a href='/dashboard/dentist/editar/". $linha['id']. "' class='btn btn-default'>
                            <i class='fas fa-edit'> </i>
                            <span> Editar </span>
                            </span>

                        <a href='/dashboard/dentist/excluir/". $linha["id"]. "' class='btn btn-danger'>
                            <i class='fas fa-trash'></i>
                            <span> Excluir </span>
                        </a>
                        </span>

                        </td>" .
                    "</tr>";
            }
        ?>
    </tbody>
        </table>

@endsection