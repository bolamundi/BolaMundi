<?php
session_start();


if( isset($_SESSION['acesso']) and $_SESSION['acesso']=="Admin"){

//Faz a conexão com o BD.
require 'login2/conexao.php';

//Cria o SQL (consulte tudo da tabela usuarios)
$sql = "SELECT * FROM usuarios";

//Executa o SQL
$result = $conn->query($sql);

	//Se a consulta tiver resultados
	 if ($result->num_rows > 0) {
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Tela Principal</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/tabela.css">



</head>
<body>

<div class="topnav">
<?php
//Coloca o menu que está no arquivo
//include 'menu.php';
?>
</div>

<div class="content">


			<h1>Lista de Usuários</h1>
			<table>
<tr><th>Id</th><th>Nome</th><th>Email</th><th>Senha</th><th>Acesso</th><th colspan="2">Ações</td></tr>
				
<?php
	  while($row = $result->fetch_assoc()) {
		echo "<tr><td>" . $row["Id"] . "</td><td>" . $row["Nome"] . "</td><td>" . $row["Email"] . "</td><td>" . $row["Senha"] . "</td><td>" . $row["Acesso"] . "</td>";
		echo "<td><a href='usuarioeditarform.php?id=" . $row["Id"] . "'><img src='images/editar.png' alt='Editar Usuário'></a></td><td><a href='usuarioexcluir.php?id=" . $row["Id"] . "'><img src='images/excluir.png' alt='Excluir Usuário'></a></td></tr>";
	  }
	?>				
				
			</table>
			<a href="addusuario.php"><img src='images/incluir.png' alt='Add Usuário'></a>
</div>



</body>
</html>
<?php
	//Se a consulta não tiver resultados  			
	} else {
		echo "<h1>Nenhum resultado foi encontrado.</h1>";
	}
	
//Fecha a conexão.	
	$conn->close();
	
//Se o usuário não usou o formulário
} else {
    header('Location: index.php'); //Redireciona para o form
    exit; // Interrompe o Script
}
?> 
