<?php

session_start();

if(isset($_SESSION['nome'])){
    $nome=$_SESSION['nome'];
    $recepcao=$_SESSION['nome'];
    $perfil=$_SESSION['perfil'];
   }else{
   $nome="Usuário não logado";
     $recepcao="";
    $perfil="";
   }


?>

<!DOCTYPE html>

<html lang="pt-br">
    
  <head>
      
    <title>Bola Mundi - Seleções Mandantes</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/menu.css" > 
    <link rel="stylesheet" href="css/selecoesmandantes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    
    <style>

    .open-button {
        background-color: #555;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        opacity: 0.8;
        position: fixed;
        bottom: 23px;
        right: 28px;
        width: 280px;
        border-radius: 10px;
        font-family: Arial;
    }

    .chat-popup {
      display: none;
      position: fixed;
      bottom: 0;
      right: 15px;
      border: 3px solid #f1f1f1;
      z-index: 9;
      text-align: center;
      font-family: Arial;
    }

    .form-container {
      max-width: 390px;
      padding: 10px;
      background-color: white;
    }
    
    .form-container img {
     width: 390px;
    }


    .form-container .btn {
      background-color: #ff4d4d;
      color: white;
      padding: 16px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      margin-bottom:10px;
      opacity: 0.8;
      font-family: Arial;
    }

    .form-container .cancel {
      background-color: red;
      border-radius: 10px;
    }
    
    .form-container .btn:hover, .open-button:hover {
      opacity: 1;
    }
    
   </style>
    
  </head>
  
  <body>
      
     <input type="checkbox" id="check">
    
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>BOLA MUNDI </h3>
      </div>
    </header>
    
    <div class="mobile_nav">
      <div class="nav_bar">
        
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
          <a href="../index.php"><i class="fas fa-desktop"></i><span>Index</span></a>
          <a href="../historiadacopa.php"><i class="fas fa-book"></i><span>História da Copa</span></a>
          <a href="../friendsarena.php"><i class="fas fa-th"></i><span>Friends Arena</span></a>
          <a href="../selecoes/todasaselecoes.php"><i class="fas fa-language"></i><span>Todas as Seleções</span></a>
          <a href="../selecoes/selecoesmandantes.php"><i class="fas fa-award"></i><span>Seleções Mandantes</span></a>
          <a href="../loja/loja.php"><i class="fas fa-money-bill"></i><span>Loja</span></a>
      </div>
    </div>

    <div class="sidebar">
      <div class="profile_info">
         <?php
         if(isset($_SESSION['nome'])){
          echo  "<img src='../loja/images/" .$perfil."' class='profile_image' alt=''>";
         }
        ?>
        <h4 style = "color: white;"><?php echo $recepcao; ?> </h4>
      </div>
      <a href="../index.php"><i class="fas fa-desktop"></i><span>Index</span></a>
      <a href="../historiadacopa.php"><i class="fas fa-book"></i><span>História da Copa</span></a>
      <a href="../friendsarena.php"><i class="fas fa-th"></i><span>Friends Arena</span></a>
      <a href="../selecoes/todasaselecoes.php"><i class="fas fa-language"></i><span>Todas as Seleções</span></a>
      <a href="../selecoes/selecoesmandantes.php"><i class="fas fa-award"></i><span>Seleções Mandantes</span></a>
      <a href="../loja/loja.php"><i class="fas fa-money-bill"></i><span>Loja</span></a>
    </div> 
    
    <div class="content"> 
      
     <div class = selecoes>
          
      <div class="gallery" style = "width: 10%; height:5%; position:fixed; left:55%; top:47%; transform: translate(-50%, -50%);">
        <a target="_blank" href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=32">
            <img src="../bandeiras/bandeiraUruguai2.png" alt="Uruguai">
        </a>
        <div class="desc">Seleção Uruguaia</div>
      </div>
      
      <div class="gallery" style = "width: 10%; height:5%; position:fixed; left:38%; top:21%; transform: translate(-50%, -50%);">
        <a target="_blank" href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=2">
            <img src="../bandeiras/bandeiraAlemanha2.jpg" alt="Alemanha">
        </a>
        <div class="desc">Seleção Alemã</div>
      </div>
      
      <div class="gallery" style = "width: 10%; height:5%; position:fixed; left:51%; top:71%; transform: translate(-50%, -50%);">
        <a target="_blank" href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=12">
            <img src="../bandeiras/bandeiraDinamarca.jpg" alt="Dinamarca">
        </a>
        <div class="desc">Seleção Dinamarquesa</div>
      </div>
      
      <div class="gallery" style = "width: 10%; height:5%;position:fixed; left:70%; top:22%; transform: translate(-50%, -50%);">
        <a target="_blank" href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=1">
            <img src="../bandeiras/bandeiraBrasil2.jpg" alt="Brasil">
        </a>
        <div class="desc">Seleção Brasileira</div>
      </div>
      
      <div class="gallery" style = "width: 10%; height:5%; position:fixed; left:70%; top:76%; transform: translate(-50%, -50%);">
        <a target="_blank" href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=16">
            <img src="../bandeiras/bandeiraFrança2.jpg" alt="França">
        </a>
        <div class="desc">Seleção Francesa</div>
      </div>
      
      <div class="gallery" style = "width: 10%; height:5%; position:fixed; left:51%; top:25%; transform: translate(-50%, -50%);">
        <a target="_blank" href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=6">
            <img src="../bandeiras/bandeiraBélgica2.png" alt="Bélgica">
        </a>
        <div class="desc">Seleção Belga</div>
      </div>
      
      <div class="gallery" style = "width: 10%; height:5%; position:fixed; left:75%; top:48%; transform: translate(-50%, -50%);">
        <a target="_blank" href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=29">
            <img src="../bandeiras/bandeiraSérvia2.jpg" alt="Sérvia">
        </a>
        <div class="desc">Seleção Sérvia</div>
      </div>
      
      <div class="gallery" style = "width: 10%; height:5%; position:fixed; left:38%; top:76%; transform: translate(-50%, -50%);">
        <a target="_blank" href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=19">
            <img src="../bandeiras/bandeiraInglaterra2.png" alt="Inglaterra">
        </a>
        <div class="desc">Seleção Inglesa</div>
      </div>
      
      <div class="gallery" style = "width: 10%; height:5%; position:fixed; left:17%; top:47%; transform: translate(-50%, -50%);">
        <a target="_blank" href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=30">
            <img src="../bandeiras/bandeiraSuíça2.jpg" alt="Suíça">
        </a>
        <div class="desc">Seleção Suíça</div>
      </div>
      
      <div class="gallery" style = "width: 10%; height:5%; position:fixed; left:27%; top:31%; transform: translate(-50%, -50%);">
        <a target="_blank" href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=17">
            <img src="../bandeiras/bandeiraHolanda2.png" alt="Países Baixos">
        </a>
        <div class="desc">Seleção Holandesa</div>
      </div>
      
      <div class="gallery" style = "width: 10%; height:5%; position:fixed; left:27%; top:63%; transform: translate(-50%, -50%);">
        <a target="_blank" href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=20">
            <img src="../bandeiras/bandeiraIrã2.jpg" alt="Irã">
        </a>
        <div class="desc">Seleção Iraniana</div>
      </div>
      
     </div>
     
     <button class="open-button" onclick="openForm()">Bônus</button>

     <div class="chat-popup" id="myForm">
        <form action="/action_page.php" class="form-container">
            <h1>Escalação 4-3-3</h1>
            <img src="../img/selecoes/escalação.png" alt="Escalação">
            <button type="button" class="btn cancel" onclick="closeForm()">Fechar</button>
        </form>
     </div>
     
     </div>
     
     <script>
     
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
        
     </script>
     
  </body>
  
</html>