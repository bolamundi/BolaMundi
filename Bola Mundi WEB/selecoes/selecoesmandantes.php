<!DOCTYPE html>

<html lang="pt-br">
    
  <head>
      
    <title>Bola Mundi - Seleções Mandantes</title>
    <meta charset="utf-8">
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
    
    .navbar {
    width: 100%;
    background-color:   #248f24;
    overflow: auto;
    height: 4.3%;
    }
            
    .navbar a {
        float: left;
        padding: 13px;
        color: white;
        text-decoration: none;
        font-size: 17px;
        margin-left: 2%;
        font-family: sans-serif;
    }

        .navbar i {
          margin-right: 7px;
        }
        
        .navbar a:hover {
          background-color:   #1f7a1f;
        }
        
        @media screen and (max-width: 500px) {
          .navbar a {
            float: none;
            display: block;
          }
        }

    
   </style>
    
  </head>
  
  <body>
      
    <div class="navbar">
      <a href="https://bolamundi2022.000webhostapp.com/index.php" style="margin-left: 10%; "><i class="fa fa-fw fa-desktop"></i>Index</a> 
      <a href="https://bolamundi2022.000webhostapp.com/historiadacopa.php"><i class="fa fa-fw fa-book"></i>História da Copa</a>
      <a href="https://bolamundi2022.000webhostapp.com/selecoes/todasaselecoes.php"><i class="fa fa-fw fa-language"></i>Todas as Seleções</a>  
      <a class="active" style = "background-color:  #145214;" href="#"><i class="fa fa-fw fa-award"></i>Seleções Mandantes</a> 
      <a href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=1&pag=1"><i class="fa fa-fw fa-envelope"></i>Seleção Brasileira</a> 
      <a href="https://bolamundi2022.000webhostapp.com/friendsarena.php"><i class="fa fa-fw fa-th"></i>Friends Arena</a>
      <a href="https://bolamundi2022.000webhostapp.com/loja/loja.php"><i class="fa fa-fw fa-money-bill" ></i>Loja</a> 
      <a href="#"><i class="fa fa-fw fa-user"></i>Perfil</a> 
    </div>
      
     <div class = selecoes>
          
      <h1>Seleções Mandantes</h1>
      
      <div class="gallery" style = "width: 10%; height:5%; position:fixed; left:55%; top:47%; transform: translate(-50%, -50%);">
        <a target="_blank" href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=32&pag=1">
            <img src="../bandeiras/bandeiraUruguai2.png" alt="Uruguai">
        </a>
        <div class="desc">Seleção Uruguaia</div>
      </div>
      
      <div class="gallery" style = "width: 10%; height:5%; position:fixed; left:38%; top:21%; transform: translate(-50%, -50%);">
        <a target="_blank" href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=2&pag=1">
            <img src="../bandeiras/bandeiraAlemanha2.jpg" alt="Alemanha">
        </a>
        <div class="desc">Seleção Alemã</div>
      </div>
      
      <div class="gallery" style = "width: 10%; height:5%; position:fixed; left:51%; top:71%; transform: translate(-50%, -50%);">
        <a target="_blank" href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=13&pag=1">
            <img src="../bandeiras/bandeiraDinamarca.jpg" alt="Dinamarca">
        </a>
        <div class="desc">Seleção Dinamarquesa</div>
      </div>
      
      <div class="gallery" style = "width: 10%; height:5%;position:fixed; left:70%; top:22%; transform: translate(-50%, -50%);">
        <a target="_blank" href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=1&pag=1">
            <img src="../bandeiras/bandeiraBrasil2.jpg" alt="Brasil">
        </a>
        <div class="desc">Seleção Brasileira</div>
      </div>
      
      <div class="gallery" style = "width: 10%; height:5%; position:fixed; left:70%; top:76%; transform: translate(-50%, -50%);">
        <a target="_blank" href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=17&pag=1">
            <img src="../bandeiras/bandeiraFrança2.jpg" alt="França">
        </a>
        <div class="desc">Seleção Francesa</div>
      </div>
      
      <div class="gallery" style = "width: 10%; height:5%; position:fixed; left:51%; top:25%; transform: translate(-50%, -50%);">
        <a target="_blank" href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=6&pag=1">
            <img src="../bandeiras/bandeiraBélgica2.png" alt="Bélgica">
        </a>
        <div class="desc">Seleção Belga</div>
      </div>
      
      <div class="gallery" style = "width: 10%; height:5%; position:fixed; left:75%; top:48%; transform: translate(-50%, -50%);">
        <a target="_blank" href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=29&pag=1">
            <img src="../bandeiras/bandeiraSérvia.jpg" alt="Sérvia">
        </a>
        <div class="desc">Seleção Sérvia</div>
      </div>
      
      <div class="gallery" style = "width: 10%; height:5%; position:fixed; left:38%; top:76%; transform: translate(-50%, -50%);">
        <a target="_blank" href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=20&pag=1">
            <img src="../bandeiras/bandeiraInglaterra2.png" alt="Inglaterra">
        </a>
        <div class="desc">Seleção Inglesa</div>
      </div>
      
      <div class="gallery" style = "width: 10%; height:5%; position:fixed; left:17%; top:47%; transform: translate(-50%, -50%);">
        <a target="_blank" href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=30&pag=1">
            <img src="../bandeiras/bandeiraSuíça2.jpg" alt="Suíça">
        </a>
        <div class="desc">Seleção Suíça</div>
      </div>
      
      <div class="gallery" style = "width: 10%; height:5%; position:fixed; left:27%; top:31%; transform: translate(-50%, -50%);">
        <a target="_blank" href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=19&pag=1">
            <img src="../bandeiras/bandeiraHolanda2.png" alt="Países Baixos">
        </a>
        <div class="desc">Seleção Holandesa</div>
      </div>
      
      <div class="gallery" style = "width: 10%; height:5%; position:fixed; left:27%; top:63%; transform: translate(-50%, -50%);">
        <a target="_blank" href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=21&pag=1">
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