<?php
session_start();
include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Denúncias</title>
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
    
    <h1>Denúncias Recebidas</h1>

    <form action="dncAdmin.php" method="GET">
    <select name="ordem" id="idordem">
        <option value="id ASC">data asc</option>
        <option value="id DESC">data des</option>
        <option value="nome">nome</option>
    </select>
    <input type="submit" value="Ordenar">
    </form>

    <br>
    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    //Ordenação das mensagens
    $ordenac = $_GET["ordem"];

    if($ordenac=="id ASC" || $ordenac=="id DESC" || $ordenac=="nome"){
        $ordenac;
    }else{
        $ordenac = "id ASC";
    }

    //Receber numero da pagina
    $pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);

    $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

    //Setar itens por pagina
    $qnt_result_pg = 10;

    //Calcular o inicio da visualização
    $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;

    $result_contato = "SELECT * FROM denuncia ORDER BY $ordenac LIMIT $inicio, $qnt_result_pg";
    
    $resultado_contato = mysqli_query($conn, $result_contato);

    while($row_mensagem = mysqli_fetch_assoc($resultado_contato)){
        echo "<div><p class='nome'>Id: " . $row_mensagem['id'] . "<p> ";
        echo "<p class='email'>ID Usuario: " . $row_mensagem['id_usuario'] . "<p>";
        echo "<p class='assunto'>Nome: " . $row_mensagem['nome'] . "<p>";
        echo "<p class='mensagem'>" . $row_mensagem['mensagem'] . "<p></div> <hr>";
    }

    //Paginação
    $result_pg = "SELECT COUNT(id) AS num_result FROM denuncia";

    $resultado_pg = mysqli_query($conn, $result_pg);

    $row_pg = mysqli_fetch_assoc($resultado_pg);

    $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);

    //Limitar links

    $max_links = 2;


    //Links de paginas


    echo "<a href='dncAdmin.php?pagina=1&ordem=$ordenac'>&le; </a> ";
    
    for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
        
        if($pag_ant >= 1){
        echo "<a href='dncAdmin.php?pagina=$pag_ant&ordem=$ordenac'>$pag_ant </a> ";
        }
    }

    echo "<a>$pagina </a>";
    
    for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
        if($pag_dep <= $quantidade_pg){
            echo "<a href='dncAdmin.php?pagina=$pag_dep&ordem=$ordenac'>$pag_dep </a> ";

        }
    }

    echo "<a href='dncAdmin.php?pagina=$quantidade_pg&ordem=$ordenac'>&ge; </a> ";

    ?>
    
    </div>
    
</body>
</html>