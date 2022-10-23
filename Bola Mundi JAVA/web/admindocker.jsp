<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
           <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
              <link rel="stylesheet" href="css/admindocker.css">
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

    <div class = "chartprincipal" style = "margin-top: 20%;">
       <div class = "container">
         <h1 style = "padding: 20px 20px 10px 10px;">USUÁRIOS CADASTRADOS NA SEMANA</h1>
         <hr size=7>
         <div class="wrapper" style = "margin-left:2%; margin-right:2%">
           <canvas id="chartPorTempo" height='120'></canvas>
         </div>
       </div>
    </div>

    <div class = "tabelausuarios" style = "margin-top: 1.5%;">
      <div class = "container" style = "padding: 10px 10px 10px 10 px;">
         <h1 style = "padding: 20px 20px 10px 10px;"> CONTROLAR USUÁRIOS </h1>
         <hr size=7>
        <table>
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Acesso</th>
            <th>Status</th>
            <th>Data de cadastro</th>
            <th colspan="3">Ações</th>
          </tr>      
          <?php

            while($row = $result->fetch_assoc()) {

            echo "<tr><td>" . $row["Id"] . "</td><td>" . $row["Nome"] . "</td><td>" . $row["Email"] . "</td><td>" . $row["Acesso"] . "</td><td>" . $row["Status"] . "</td><td>" . $row["Data"] . "</td>";

            echo "<td><a href='../admin/controleusuario/usuarioeditarform.php?id=" . $row["Id"] . "'><img src='../img/controleusuario/editar.png' alt='Editar Usuário'></a></td><td><a href='../admin/controleusuario/usuarioexcluir.php?id=" . $row["Id"] . "'><img src='../img/controleusuario/excluir.png' alt='Excluir Usuário'></a></td><td><a href='../admin/controleusuario/bloquearusuario.php?id=" . $row["Id"] . "'><img src='../img/controleusuario/bloquear.png' alt='Bloquear Usuário'></a></td></tr>";

              }
          ?>         
        </table>
        <div class="pagination">
          <?php for($i=1; $i <= $contagem; $i++) {
              echo "<a href='../admin/admindocker.php?pag=$i' class='pag'>$i </a>";
            } 
          ?>

         <a href="../admin/controleusuario/addusuario.php"><img src='../img/controleusuario/incluir.png' alt='Add Usuário' style="width:3%; float:right; margin-right: 3.2%"></a>
        </div>
      </div>
    </div>
	
    <div class = "chartusuarioacesso" style = "margin-top: 1.5%; float: right; margin-right: 3%;">
      <div class = "container">
        <h1 style = "padding: 20px 20px 10px 10px;">TIPOS DE USUÁRIOS</h1>
        <hr size=7>
        <div class="wrapper">
          <canvas id="myChart" height='170'></canvas>
        </div>
        <hr size=7>
      </div>
    </div>

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
