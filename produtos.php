<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<?php
    include('conexao.php');
    include('menu.php');
    if($_POST){
        CriarProdutos($_POST['nome'],$_FILES['foto'],$_POST['valor'],$_POST['descricao'],$_POST['categoria']);
    }
?>
<form method="post" enctype="multipart/form-data">
        nome do produto
        <input type="text" name="nome">
        <br>
        Valor do produto
        <input type="text" name="valor">
        <br>
        Descrição
        <textarea name="descricao" value="descricao"></textarea>
        <br>


       categoria:
       <select name="categoria" value="categoria">

           <option>Selecione...</option>
  
           <?php
           $todas = ListarCategorias();
           while($cat = $todas->fetch_object()){
               echo '<option value="'.$cat->cd.'">';
               echo $cat->nome;
               echo '</option>';
           }
           ?>
       </select>
       <br>
       Foto do Produto:
       <input type="file" name="foto"><br>
       <br>
       <button>Cadastrar</button>
</form> 
<hr>
<div>
    <table>
        <thead>
            <tr>
                <td>Código</td>
                <td>Nome</td>
                <td>Valor</td>
                <td>Sabor</td>
                <td>Imagem</td>
                
            </tr>
        </thead>

            <tbody>
                <?php
                $todas = ListarProdutos();
                while($prod = $todas->fetch_object()){

                
         echo '<tr>
                <td>'.$prod->cd.'</td>
                <td>'.$prod->nome.'</td>
                <td>'.$prod->valor.'</td>
                <td>'.$prod->descricao.'<td>
                <td><img src="'.$prod->foto.'" style="height:10vh;"></td>
                <td></td>
            </tr>';
                }
            ?>    
            </tbody>
        
        
      </table>

</div>