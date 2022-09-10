<?php
//https://bolamundi2022.000webhostapp.com/selecoes/controleselecao.php?pag=16
session_start();
  include '../validarAcesso.php';


//controleselecao.php?pag=1&idsel=...
//Faz a conexão com o BD.
require '../conexao.php';
$id = $_GET["pag"];
$idsel=$_GET["idsel"];

//Quantidade de registros a serem exibidos
$total = 5;

//Indica o registro limite para paginação
if($id!=1){
    $id = $id -1;
    $id = $id * $total + 1;
}

$id--;

//Cria o SQL com limites de página ordenado por id
$sql = "SELECT * FROM jogadores ORDER BY id LIMIT $id, $total";

//Conta a quantidade total de registros
$sql1 = "SELECT count(*) as contagem FROM jogadores";

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
<link rel="stylesheet" href="/css/controleusuario/tabelacontrole.css">



</head>
<body>



<div class="content">


			<h1>Lista de jogadores</h1>
			<table>
<tr><th>Id</th><th>Nome</th><th>País</th><th>Número</th><th>Posição</th><th>Id_selecao</th><th colspan="3">Ações</th></tr>
				
<?php
	  while($row = $result->fetch_assoc()) {
		echo "<tr><td>" . $row["Id"] . "</td><td>" . $row["Nome"] . "</td><td>" . $row["Pais"] . "</td><td>" . $row["Numero"] . "</td><td>" . $row["Posicao"] . "</td><td>" . $row["Id_selecao"] . "</td>";
		echo "<td><a href='controleselecao/jogadoreditarform.php?id=" . $row["Id"] . "'><img src='img/controleselecao/editar.png' alt='Editar Jogador'></a></td><td><a href='controleselecao/jogadorexcluir.php?id=" . $row["Id"] . "'><img src='img/controleselecao/excluir.png' alt='Excluir Jogador'></a></td></tr>";
	  }
	?>				
				
			</table>
			
			<div class="pagination">
    <?php for($i=1; $i <= $contagem; $i++) {
            echo "<a href='controleselecao.php?pag=$i' class='pag'>$i </a>";
    } 
	?>  
			<a href="controleselecao/addjogador.php?idsel=<?php echo $idsel;?>"><img src='img/controleselecao/incluir.png' alt='Add Jogador'></a>
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

?> 