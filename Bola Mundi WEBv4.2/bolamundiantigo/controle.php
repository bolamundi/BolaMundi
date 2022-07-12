<?php

session_start();


if( isset($_SESSION['acesso']) and $_SESSION['acesso']=="Admin"){
//controle.php?pag=1
//Faz a conexão com o BD.
require 'login2/conexao.php';
$id = $_GET["pag"];

//Quantidade de registros a serem exibidos
$total = 5;

//Indica o registro limite para paginação
if($id!=1){
    $id = $id -1;
    $id = $id * $total + 1;
}

$id--;

//Cria o SQL com limites de página ordenado por id
$sql = "SELECT * FROM usuarios ORDER BY id LIMIT $id, $total";

//Conta a quantidade total de registros
$sql1 = "SELECT count(*) as contagem FROM usuarios";

//Executa o SQL
$result = $conn->query($sql);
$result1 = $conn->query($sql1);

//Recupera o resultado da contagem
$row1 = $result1->fetch_assoc();
$contagem = $row1["contagem"];

if($contagem%$total==0){
    $contagem=$contagem/$total;
}else{
    $contagem=$contagem/$total + 1;    
}

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
			
			<div class="pagination">
    <?php for($i=1; $i <= $contagem; $i++) {
            echo "<a href='controle.php?pag=$i'>$i</a>";
    } 
	?>  
			<a href="addusuario.php"><img src='images/incluir.png' alt='Add Usuário'></a>
</div>

 <div class="wrapper">
        <canvas id="myChart" height='400'></canvas>
       </div>
<?php 
//Para ver o número de adms e comuns
$sql2="SELECT count(*) as adm FROM usuarios WHERE Acesso='Admin'";
$resultcont=$conn->query($sql2);
$row2 = $resultcont->fetch_assoc();
    echo $row2['adm'];
    
    
    $sql3="SELECT count(*) as usuario FROM usuarios WHERE Acesso='Usuario'";
$resultcont2=$conn->query($sql3);
$row3 = $resultcont2->fetch_assoc();
    echo $row3['usuario'];
    
    

?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script src="js/scriptchart.js"></script>
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
