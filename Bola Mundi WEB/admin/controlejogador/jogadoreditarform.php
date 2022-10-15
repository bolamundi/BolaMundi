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
    <link rel="stylesheet" href="../../admin/form.css">
    <title>Editar Jogador</title>

 </head>

 <!--========== FIM HEAD ==========-->

 <!--========== INÍCIO BODY ==========-->

 <body>
     
<div class="container">
   
   <div class = "info">
   
   <h1>EDITAR JOGADOR</h1>
   
   <img src="../../img/BolaMundi.png" style = "margin-right: 0;" > 
   
   </div> 

    <form action="jogadoreditar.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row["Id"]; ?>">
        <input type="text" name="nome" value="<?php echo $row["Nome"]; ?>" placeholder="Nome..." required>		
        <input type="text" name="numero" value="<?php echo $row["Numero"]; ?>" placeholder="Número..." required>	<input type="text" name="pais" value="<?php echo $row["Pais"];  ?>" placeholder="País..." required>     
        <input type="text" name="posicao" value="<?php echo $row["Posicao"]; ?>"placeholder="Posição..." required>
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