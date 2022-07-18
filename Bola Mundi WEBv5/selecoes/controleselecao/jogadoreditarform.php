<?php

  session_start();
  //Verifica o acesso.
  if(isset($_SESSION["acesso"]) and $_SESSION['acesso']=="Admin"){

  //Faz a leitura do dado passado pelo link.
  $campoid = $_GET["id"];

  //Faz a conexão com o BD.
require 'C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\conexao.php';

  //Cria o SQL (consulte tudo da tabela usuarios)
  $sql = "SELECT * FROM jogadores WHERE Id = $campoid";

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
    <link rel="stylesheet" href="./css/controleusuario/estilo.css">
    <title>Editar Usuário</title>

 </head>

 <!--========== FIM HEAD ==========-->

 <!--========== INÍCIO BODY ==========-->

 <body>

    <form action="jogadoreditar.php" method="post">
        <h3>Editar Jogador Id: <?php echo $row["Id"]; ?></h3>
        <input type="hidden" name="id" value="<?php echo $row["Id"]; ?>">
        <input type="text" name="nome" value="<?php echo $row["Nome"]; ?>" placeholder="Nome..." required>		
        <input type="text" name="numero" value="<?php echo $row["Numero"]; ?>" placeholder="Número..." required>	<input type="text" name="pais" value="<?php echo $row["Pais"];  ?>" placeholder="País..." required>     
        <input type="text" name="posicao" value="<?php echo $row["Posicao"]; ?>"placeholder="Posição..." required>
        <input type="submit" value="Editar">
    </form>

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
    }else{
        header('Location: /index.php'); //Redireciona para o form
    exit; // Interrompe o Script
    }

?> 