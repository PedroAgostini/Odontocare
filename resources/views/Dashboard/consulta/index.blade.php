@extends('Dashboard.layouts.dashboard')

@section('content')
<a href="/dashboard/consulta/novo" class="card-title fw-semibold mb-4">Cadastro de Consulta</a>
<br/>
<table class ="table table-hover text-nowrap">
        <thead>
            <td>Id</td>
            <td>Paciente</td>
            <td>Telefone</td>
            <td>Data</td>
            <td>Horário</td>  
            <td>Dentista</td>
            <td>Opcoes</td>    
        </thead>
    <tbody>
        <?php
            foreach($lista as $linha)
            {
                echo "<tr>" .
                        "<td>" . $linha['id'] . "</td>" .
                        "<td>" . $linha['paciente'] . "</td>" .
                        "<td>" . $linha['telefone'] . "</td>" .
                        "<td>" . $linha['data'] . "</td>" .
                        "<td>" . $linha['horario'] . "</td>" .
                        "<td>" . $linha['dentista'] . "</td>" .
                        "<td>
                        <a href='/dashboard/consulta/editar/". $linha['id']. "' class='btn btn-default'>
                            <i class='fas fa-edit'> </i>
                            <span> Editar </span>
                            </span>

                        <a href='/dashboard/consulta/excluir/". $linha["id"]. "' class='btn btn-danger'>
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
