<?php
    include("conexao.php");
    if($_POST){
        Login($_POST['user'],$_POST['senha']);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>LOGIN</title>
</head>
<body id="corpo">
   
    
    <div id="login">
    <h1>ENTRAR</h1>
        <form method="post">
            Usúario
            <br>
             <input type="email" class="cadastro" name="user" placeholder="name@name">
            <br>
            Senha
            <br>
             <input type="password"class="senha" name="senha" placeholder="*********">
            <br>
            <input type="submit"class="enviar">
        </form>
     </div>
</body>
</html>