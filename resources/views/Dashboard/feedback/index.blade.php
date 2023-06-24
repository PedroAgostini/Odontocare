@extends('Dashboard.layouts.dashboard')

@section('content')

<table class ="table table-hover text-nowrap">
        <thead>
            <td>Id</td>
            <td>Nome</td>
            <td>Telefone</td>
            <td>Avaliação</td>
            <td>Mensagem</td>  
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
                        "<td>" . $linha['avaliacao'] . "</td>" .
                        "<td>" . $linha['mensagem'] . "</td>" .
                        "<td>

                        <a href='/dashboard/feedback/excluir/". $linha["id"]. "' class='btn btn-danger'>
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
