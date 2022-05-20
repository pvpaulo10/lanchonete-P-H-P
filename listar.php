<?php
include('conexao.php');

$registros = ListarContas();

echo '<h1> TOTAL DE CLIENTES CADASTRADOS: '.($registros->num_rows).'<h1>';
echo '<hr>';

?>
<fieldset>
<table>
    <thead>
        <tr>
            <td>Código</td>
            <td>Nome</td>
            <td>Email</td>
            <td>Excluir cadastro</td>
        </tr>
    </thead>
    <tbody>

    <?php
    while($user = $registros ->fetch_array()){
     echo '   <tr>
            <td>'.$user['cd'].'</td>
            <td>'.$user['nome'].'</td>
            <td>'.$user['email'].'</td>
            <td>
            <a href="excluir.php?id='.$user['cd'].'">
            Excluir
            </a>
            </td>
        </tr>';
    }
    ?>
    </tbody>
</table>
</fieldset>