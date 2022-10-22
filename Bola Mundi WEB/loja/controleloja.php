<?php
//https://bolamundi2022.000webhostapp.com/selecoes/controleselecao.php?pag=16
session_start();
  include '../validarAcesso.php';


//controleselecao.php?pag=1&idsel=...
//Faz a conexão com o BD.
require '../conexao.php';
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
$sql = "SELECT * FROM produtos ORDER BY id LIMIT $id, $total";

//Conta a quantidade total de registros
$sql1 = "SELECT count(*) as contagem FROM produtos";

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


			<h1>Lista de produtos</h1>
			<table>
<tr><th>Id</th><th>Nome</th><th>Preço</th><th>Número de vendas</th><th colspan="3">Ações</th></tr>
				
<?php
	  while($row = $result->fetch_assoc()) {
		echo "<tr><td>" . $row["Id"] . "</td><td>" . $row["Nome"] . "</td><td>" . $row["Preco"] . "</td><td>" . $row["Numero_vendas"] . "</td>";
		echo "<td><a href='controleloja/produtoeditarform.php?id=" . $row["Id"] . "'><img src='/img/controleusuario/editar.png' alt='Editar Jogador'></a></td><td><a href='controleloja/produtoexcluir.php?id=" . $row["Id"] . "'><img src='/img/controleusuario/excluir.png' alt='Excluir Jogador'></a></td></tr>";
	  }
	?>				
				
			</table>
			
			<div class="pagination">
    <?php for($i=1; $i <= $contagem; $i++) {
            echo "<a href='controleselecao.php?pag=$i' class='pag'>$i </a>";
    } 
	?>  
			<a href="controleloja/addproduto.php"><img src='/img/controleusuario/incluir.png' alt='Add Jogador'></a>
</div>

<div class="wrapper">
        <canvas id="chartVendas" height='300'></canvas>
       </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
  

<script src="../relatorios/chartvendas.php"></script>

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