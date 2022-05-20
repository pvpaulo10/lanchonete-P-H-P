<?php
include('conexao.php');
if($_POST){
    CriarConta($_POST ['nome'], $_POST['email'], $_POST['senha']);
}

?>
<form method="post">
    <fieldset>

         <legend>CRIE SUA CONTA: </legend>
        NOME: <input type="text" name="nome" require>
        <br>
        EMAIL: <input type="email" name="email">
        <br>
        SENHA: <input type="password" name="senha">
        <br>
        <button>CADASTRAR</button>

    </fieldset>
    </form>