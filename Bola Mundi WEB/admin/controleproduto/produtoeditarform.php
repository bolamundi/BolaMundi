<?php

  session_start();
$path=2; //var para ativar uma condição no validarAcesso
  // Verifica se o usuário logado é admin
  include '../../validarAcesso.php';

  //Faz a leitura do dado passado pelo link.
  $campoid = $_GET["id"];

  //Faz a conexão com o BD.
require '../../conexao.php';
  //Cria o SQL (consulte tudo da tabela usuarios)
  $sql = "SELECT * FROM produtos WHERE Id = $campoid";

  //Executa o SQL
  $result = $conn->query($sql);

	//Se a consulta tiver resultados
	 if ($result->num_rows > 0) {

  // Cria uma matriz com o resultado da consulta
  $row = $result->fetch_assoc();
  
?>

<!DOCTYPE html>

<html>

 <!--========== INÍCIO HEAD ==========-->

 <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="../../admin/form.css">
    <title>Editar Produto</title>

 </head>

 <!--========== FIM HEAD ==========-->

 <!--========== INÍCIO BODY ==========-->

 <body>
     
   <div class="container">
   
       <div class = "info">
       
       <h1> EDITAR PRODUTO Id: <?php echo $row["Id"]; ?> </h1>
       
       <img src="../../img/BolaMundi.png" style = "margin-right: 0;" > 
       
       </div>
       
       <form action="produtoeditar.php" method='post' style ="margin-left: 50%; margin-top: 10%;">
	 
		<input type="hidden" id="nome" name="id" value="<?php echo $row["Id"]; ?>">
		
		<label for="email">Nome</label>
		<input type="text" id="nome" name="nome" value="<?php echo $row["Nome"]; ?>" placeholder="Preencha nome">

		
		<label for="email">Preço</label>
		<input type="text" id="email" name="preco" value="<?php echo $row["Preco"]; ?>" placeholder="Preencha o preço">
		
		<label for="email">Imagem</label>
		<input type="text" id="email" name="imagem" value="<?php echo $row["Imagem"]; ?>" placeholder="Preencha a imagem">		
		
	    <input type="submit" value="Editar">
		
	  </form>
        
    </div>    

 </body>

 <!-- ========= FIM BODY ========== -->

</html>

<?php
	//Se a consulta não tiver resultados  			
	}else{
		echo "<h1>Nenhum resultado foi encontrado.</h1>";
	}
	$conn->close();
    //Se o usuário não tem acesso.
  

?> 