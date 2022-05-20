<?php
include('conexao.php');
if(isset($_GET['id'])){
        Excluirconta($_GET['id']);
}
?>