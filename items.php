<?php
include("conexao.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Projeto</title>
	<meta charset="utf-8">
	  <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
</head>
<body>
	<div class="container-fluid">
		<?php
			$todas =ListarProdutos();
			$items = 1;
			echo '<div class="row">';
			while($p = $todas-> fetch_object()){
			if($items > 4){
				$items=1;
		
				echo '</div><div class="row">';

			}
			$items++;	
				

			
	echo'	
		    <div class="col s3 m3">
		      <div class="card">
		        <div class="card-image">
		          <img src="'.$p->foto.'" height="300vh">
		          <span class="card-title">'.$p->nome.'</span>
		        </div>
		        <div class="card-content">
		          <p>'.$p->valor.'</p>
		        </div>
		        <div class="card-action">
		          <a href="#">[+]</a>
		        </div>
		      </div>
		    </div>
';
	}
	echo '</div>';
		  ?>
	</div>	

</body>
</html>