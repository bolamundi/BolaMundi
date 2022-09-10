<?php

session_start();
include 'validarAcesso.php';

require 'conexao.php';
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
<link rel="stylesheet" href="css/controleusuario/tabelacontrole.css">



</head>
<body>



<div class="content">


			<h1>Lista de Usuários</h1>
			<table>
<tr><th>Id</th><th>Nome</th><th>Email</th><th>Acesso</th><th>Status</th><th>Data de cadastro</th><th colspan="3">Ações</th></tr>
				
<?php
	  while($row = $result->fetch_assoc()) {
		echo "<tr><td>" . $row["Id"] . "</td><td>" . $row["Nome"] . "</td><td>" . $row["Email"] . "</td><td>" . $row["Acesso"] . "</td><td>" . $row["Status"] . "</td><td>" . $row["Data"] . "</td>";
		echo "<td><a href='controleusuario/usuarioeditarform.php?id=" . $row["Id"] . "'><img src='img/controleusuario/editar.png' alt='Editar Usuário'></a></td><td><a href='controleusuario/usuarioexcluir.php?id=" . $row["Id"] . "'><img src='img/controleusuario/excluir.png' alt='Excluir Usuário'></a></td><td><a href='controleusuario/bloquearusuario.php?id=" . $row["Id"] . "'><img src='img/controleusuario/bloquear.png' alt='Bloquear Usuário'></a></td></tr>";
	  }
	?>				
				
			</table>
			
			<div class="pagination">
    <?php for($i=1; $i <= $contagem; $i++) {
            echo "<a href='controle.php?pag=$i' class='pag'>$i </a>";
    } 
	?>  
			<a href="controleusuario/addusuario.php"><img src='img/controleusuario/incluir.png' alt='Add Usuário'></a>
</div>

 <div class="wrapper">
        <canvas id="myChart" height='130'></canvas>
       </div>
 <div class="wrapper">
        <canvas id="chartPorTempo" height='300'></canvas>
       </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
  
<script src="relatorios/chartcontrole.php"></script>


<script src="relatorios/chartcadastroporsemana.php"></script> 

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

?> 
