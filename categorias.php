<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<link rel="stylesheet" href="style.css">
<?php
    include('conexao.php');
    include('menu.php');
    if($_POST){
        CriarCategoria($_POST['nome'],$_FILES['foto']);
    }
?>
<form method="post" enctype="multipart/form-data">
    Nome: <input type="text" name="nome">
    <br>
    Foto: <input type="file" name="foto">
    <br>
    <button>Cadastrar</button>
</form>
<hr>
<div>
    <table>
        <thead>
            <tr>
                <td>#cod</td>
                <td>#nome</td>
                <td>#foto</td>
                <td>#</td>
            </tr>
        </thead>

            <tbody>
                <?php
                $todas = ListarCategorias();
                while($cat = $todas->fetch_object()){

                
         echo '<tr>
                <td>'.$cat->cd.'</td>
                <td>'.$cat->nome.'</td>
                <td><img src="'.$cat->foto.'" style="height:10vh;"></td>
                <td>#</td>
            </tr>';
                }
            ?>    
            </tbody>
        
        
      </table>

</div>