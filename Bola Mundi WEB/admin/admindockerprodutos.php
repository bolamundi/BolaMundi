<?php

session_start();
include '../validarAcesso.php';

require '../conexao.php';
$id = $_GET["pag"];

//Quantidade de registros a serem exibidos
$total = 15;

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

<html>

  <head>

    <title>Admin Docker - Bola Mundi</title>

      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="admindocker.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

      <style>
        html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
      </style>

  </head>

<body>

<!-- Sidebar/menu -->

<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
      <img src="../img/BolaMundi.png" style = "width: 100%;">
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="../admin/admindocker.php?pag=1" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bar-chart fa-fw"></i>  Dashboard</a>
  </div>
  <div class="w3-container">
    <h5>Páginas Principais</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-desktop fa-fw"></i>  Index</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-book fa-fw"></i>  História da Copa</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-th fa-fw"></i>  Friends Arena</a>    
  </div>
  <div class="w3-container">
    <h5>Seleções</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-flag fa-fw"></i>  Seleção Brasileira</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-trophy fa-fw"></i>  Seleções Mandantes</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-language fa-fw"></i>  Todas as Seleções</a>
  </div>
  <div class="w3-container">
    <h5>Admin</h5>
  </div>
  <div class="w3-bar-block">
    <a href="../admin/admindockerjogadores.php?pag=1" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Jogadores</a>
    <a href="../admin/admindockerprodutos.php?pag=1" class="w3-bar-item w3-button w3-padding"><i class="fa fa-money fa-fw"></i>  Loja</a>
    <a href="../contato/msgAdmin.php?ordem=id+ASC" class="w3-bar-item w3-button w3-padding"><i class="fa fa-comment fa-fw"></i>  Comentários</a>
    <a href="../selecoes/dncAdmin.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-exclamation fa-fw"></i>  Denuncie</a>    
  </div>    
  
</nav>


<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;">

  <!-- Header -->

  <header style="margin-bottom: 20px;">

  </header>

 
  <div class="w3-row-padding w3-margin-bottom">

     <div class = "cards">
      <div class = "usuarios">
        <div class = "icon">
         <i class="fa fa-user fa-fw" style = "color: #00BFFF;"></i>
        </div>
        <h1 style = "color: #00BFFF;"> 10 </h1>
        <h2 style = "font-size: 27px;">Comum</h2>
      </div>
    </div>

    <div class = "cards">
      <div class = "usuarios">
        <div class = "icon">
         <i class="fa fa-user fa-fw" style = "color: #FF0000;"></i>
        </div>
        <h1 style = "color: #FF0000;"> 06 </h1>
        <h2 style = "font-size: 27px;">Admins</h2>
      </div>
    </div>

    <div class = "cards">
      <div class = "usuarios">
        <div class = "icon">
         <i class="fa fa-user fa-fw" style = "color: #FFD700;"></i>
        </div>
        <h1 style = "color: #FFD700; font-size: 50px;"> 832 </h1>
        <h2 style = "font-size: 27px;">Atletas</h2>
      </div>
    </div>

    <div class = "cards">
      <div class = "usuarios">
        <div class = "icon">
         <i class="fa fa-user fa-fw" style = "color: #90EE90;"></i>
        </div>
        <h1 style = "color: #90EE90;"> 32 </h1>
        <h2 style = "font-size: 27px;">Países</h2>
      </div>
    </div>

    <div class = "tabelaprodutos" style = "margin-top: 19.5%;">
      <div class = "container" style = "padding: 10px 10px 10px 10 px;">
         <h1 style = "padding: 20px 20px 10px 10px;"> CONTROLAR PRODUTOS </h1>
         <hr size=7>
        <table>
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Preco</th>
            <th colspan="3">Ações</th>
          </tr>      
          <?php

            while($row = $result->fetch_assoc()) {

            echo "<tr><td>" . $row["Id"] . "</td><td>" . $row["Nome"] . "</td><td>" . $row["Preco"] . "</td><td>" . "</td>";

            echo "<td><a href='../admin/controleproduto/produtoeditarform.php?id=" . $row["Id"] . "'><img src='../img/controleusuario/editar.png' alt='Editar Usuário'></a></td><td><a href='../admin/controleproduto/produtoexcluir.php?id=" . $row["Id"] . "'><img src='../img/controleusuario/excluir.png' alt='Excluir Usuário'></a></td></tr>";

              }
          ?>         
        </table>
        <div class="pagination">
          <?php for($i=1; $i <= $contagem; $i++) {
              echo "<a href='../admin/admindockerprodutos.php?pag=$i' class='pag'>$i </a>";
            } 
          ?>

         <a href="../admin/controleproduto/addproduto.php"><img src='../img/controleusuario/incluir.png' alt='Add Usuário' style="width:3%; float:right; margin-right: 3.2%"></a>
        </div>
      </div>
    </div>
	
    <div class = "chartprodutos" style = "margin-top: 1.5%; float: center; margin-right: 0.%;">
      <div class = "container">
        <h1 style = "padding: 20px 20px 10px 10px;">PRODUTOS VENDIDOS</h1>
        <hr size=7>
			<div class="wrapper">
				<canvas id="chartVendas" height='200'></canvas>
			</div>
        <hr size=7>
      </div>
    </div>


	

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
  
    <script src="../relatorios/chartcontrole.php"></script>
 
    <script src="../relatorios/chartcadastroporsemana.php"></script>  

	<script src="../relatorios/chartvendas.php"></script>	

  </div>
  
<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}

</script>

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
