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
    <link rel="stylesheet" href="./css/controleusuario/estilo.css">
    <title>Editar Produto</title>

 </head>

 <!--========== FIM HEAD ==========-->

 <!--========== INÍCIO BODY ==========-->

 <body>

    <form action="produtoeditar.php" method="post">
        <h3>Editar Produto Id: <?php echo $row["Id"]; ?></h3>
        <input type="hidden" name="id" value="<?php echo $row["Id"]; ?>">
        <input type="text" name="nome" value="<?php echo $row["Nome"]; ?>" placeholder="Nome..." required>		
        <input type="text" name="numero_vendas" value="<?php echo $row["Numero_vendas"]; ?>" placeholder="Número de vendas..." required>	<input type="text" name="preco" value="<?php echo $row["Preco"];  ?>" placeholder="Preço..." required>     
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
  

?> 