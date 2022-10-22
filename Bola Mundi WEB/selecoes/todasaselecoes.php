<!DOCTYPE html>

<html lang="pt-br">
    
  <head>
      
    <title>Bola Mundi - Todas as Seleções</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/todasasselecoes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    
    <style>
        * {box-sizing: border-box}
            body {font-family: Verdana, sans-serif; margin:0}
            .mySlides {display: none}
            img {vertical-align: middle;}
            
            .slideshow-container {
              width: 90%;
              height: 90%;
              position: relative;
              margin-top: 2%;
              margin-left: 5%;
              background-image: url("https://bolamundi2022.000webhostapp.com/img/selecoes/slide/Fundo.png");
              background-size: 100% 100%;
            }
            
            .prev, .next {
              cursor: pointer;
              position: absolute;
              top: 50%;
              width: auto;
              padding: 16px;
              margin-top: -22px;
              color: white;
              font-weight: bold;
              font-size: 18px;
              transition: 0.6s ease;
              border-radius: 0 3px 3px 0;
              user-select: none;
            }
            
            .next {
              right: 0;
              border-radius: 3px 0 0 3px;
            }
            
            .prev:hover, .next:hover {
              background-color: rgba(0,0,0,0.8);
            }
            
            .text {
              color: #f2f2f2;
              font-size: 26px;
              padding: 8px 12px;
              position: absolute;
              bottom: 8px;
              width: 100%;
              text-align: center;
            }
            
            .card1 {
              background-image:url("../img/selecoes/cards/9.png");
              background-size: 100%;
              position: absolute;
              bottom: 8px;
              width: 18%;
              height: 53.5%;
              margin-top: 2%;
              margin-left: 5%;
              margin-bottom: 15%;
            }
            
            .card2 {
              background-image:url("../img/selecoes/cards/14.png");
              background-size: 100%;
              position: absolute;
              bottom: 8px;
              width: 18%;
              height: 53.5%;
              margin-left: 28%;
              margin-bottom: 15%;
            }
            
            .card3 {
              background-image:url("../img/selecoes/cards/28.png");
              background-size: 100%;
              position: absolute;
              bottom: 8px;
              width: 18%;
              height: 53.5%;
              margin-left: 55%;
              margin-bottom: 15%;
            }
            
            .card4 {
              background-image:url("../img/selecoes/cards/19.png");
              background-size: 100%;
              position: absolute;
              bottom: 8px;
              width: 18%;
              height: 53.5%;
              
              margin-left: 79%;
              margin-bottom: 15%;
            }  
            
            .card5 {
              background-image:url("../img/selecoes/cards/20.png");
              background-size: 100%;
              position: absolute;
              bottom: 8px;
             width: 18%;
              height: 53.5%;
              margin-left: 5%;
              margin-bottom: 15%;
            }
            
            .card6 {
              background-image:url("../img/selecoes/cards/21.png");
              background-size: 100%;
              position: absolute;
              bottom: 8px;
                width: 18%;
              height: 53.5%;
              margin-left: 28%;
              margin-bottom: 15%;
            }
            
            .card7 {
              background-image:url("../img/selecoes/cards/16.png");
              background-size: 100%;
              position: absolute;
              bottom: 8px;
                width: 18%;
              height: 53.5%;
              margin-left: 55%;
              margin-bottom: 15%;
            }
            
            .card8 {
              background-image:url("../img/selecoes/cards/25.png");
              background-size: 100%;
              position: absolute;
              bottom: 8px;
                width: 18%;
              height: 53.5%;
              margin-left: 79%;
              margin-bottom: 15%;
            } 
            
            .card9 {
              background-image:url("../img/selecoes/cards/4.png");
              background-size: 100%;
              position: absolute;
              bottom: 8px;
                width: 18%;
              height: 53.5%;
              margin-left: 5%;
              margin-bottom: 15%;
            }
            
            .card10 {
              background-image:url("../img/selecoes/cards/3.png");
              background-size: 100%;
              position: absolute;
              bottom: 8px;
               width: 18%;
              height: 53.5%;
              margin-left: 28%;
              margin-bottom: 15%;
            }
            
            .card11 {
              background-image:url("../img/selecoes/cards/24.png");
              background-size: 100%;
              position: absolute;
              bottom: 8px;
              width: 16%;
              height: 44%;
              margin-left: 55%;
              margin-bottom: 19%;
            }
            
            .card12 {
              background-image:url("../img/selecoes/cards/26.png");
              background-size: 100%;
              position: absolute;
              bottom: 8px;
              width: 16%;
              height: 44%;
              margin-left: 79%;
              margin-bottom: 19%;
            }
            
            .card13 {
              background-image:url("../img/selecoes/cards/17.png");
              background-size: 100%;
              position: absolute;
              bottom: 8px;
              width: 16%;
              height: 44%;
              margin-left: 5%;
              margin-bottom: 19%;
            }
            
            .card14 {
              background-image:url("../img/selecoes/cards/5.png");
              background-size: 100%;
              position: absolute;
              bottom: 8px;
              width: 16%;
              height: 44%;
              margin-left: 28%;
              margin-bottom: 19%;
            }
            
            .card15 {
              background-image:url("../img/selecoes/cards/13.png");
              background-size: 100%;
              position: absolute;
              bottom: 8px;
              width: 16%;
              height: 44%;
              margin-left: 55%;
              margin-bottom: 19%;
            }
            
            .card16 {
              background-image:url("../img/selecoes/cards/31.png");
              background-size: 100%;
              position: absolute;
              bottom: 8px;
              width: 16%;
              height: 44%;
              margin-left: 79%;
              margin-bottom: 19%;
            }
            
            .card17 {
              background-image:url("../img/selecoes/cards/15.png");
              background-size: 100%;
              position: absolute;
              bottom: 8px;
              width: 16%;
              height: 44%;
              margin-left: 5%;
              margin-bottom: 19%;
            }
            
            .card18 {
              background-image:url("../img/selecoes/cards/11.png");
              background-size: 100%;
              position: absolute;
              bottom: 8px;
              width: 16%;
              height: 44%;
              margin-left: 28%;
              margin-bottom: 19%;
            }
            
            .card19 {
              background-image:url("../img/selecoes/cards/2.png");
              background-size: 100%;
              position: absolute;
              bottom: 8px;
              width: 16%;
              height: 44%;
              margin-left: 55%;
              margin-bottom: 19%;
            }
            
            .card20 {
              background-image:url("../img/selecoes/cards/22.png");
              background-size: 100%;
              position: absolute;
              bottom: 8px;
              width: 16%;
              height: 44%;
              margin-left: 79%;
              margin-bottom: 19%;
            } 
            
            .card21 {
              background-image:url("../img/selecoes/cards/6.png");
              background-size: 100%;
              position: absolute;
              bottom: 8px;
              width: 16%;
              height: 44%;
              margin-left: 5%;
              margin-bottom: 19%;
            }
            
            .card22 {
              background-image:url("../img/selecoes/cards/8.png");
              background-size: 100%;
              position: absolute;
              bottom: 8px;
              width: 16%;
              height: 44%;
              margin-left: 28%;
              margin-bottom: 19%;
            }
            
            .card23 {
              background-image:url("../img/selecoes/cards/23.png");
              background-size: 100%;
              position: absolute;
              bottom: 8px;
              width: 16%;
              height: 44%;
              margin-left: 55%;
              margin-bottom: 19%;
            }
            
            .card24 {
              background-image:url("../img/selecoes/cards/12.png");
              background-size: 100%;
              position: absolute;
              bottom: 8px;
              width: 16%;
              height: 44%;
              margin-left: 79%;
              margin-bottom: 19%;
            } 
            
            .card25 {
              background-image:url("../img/selecoes/cards/1.png");
              background-size: 100%;
              position: absolute;
              bottom: 8px;
              width: 16%;
              height: 44%;
              margin-left: 5%;
              margin-bottom: 19%;
            }
            
            .card26 {
              background-image:url("../img/selecoes/cards/29.png");
              background-size: 100%;
              position: absolute;
              bottom: 8px;
              width: 16%;
              height: 44%;
              margin-left: 28%;
              margin-bottom: 19%;
            }
            
            .card27 {
              background-image:url("../img/selecoes/cards/30.png");
              background-size: 100%;
              position: absolute;
              bottom: 8px;
              width: 16%;
              height: 44%;
              margin-left: 55%;
              margin-bottom: 19%;
            }
            
            .card28 {
              background-image:url("../img/selecoes/cards/7.png");
              background-size: 100%;
              position: absolute;
              bottom: 8px;
              width: 16%;
              height: 44%;
              margin-left: 79%;
              margin-bottom: 19%;
            }              
            
            .card29 {
              background-image:url("../img/selecoes/cards/27.png");
              background-size: 100%;
              position: absolute;
              bottom: 8px;
              width: 16%;
              height: 44%;
              margin-left: 5%;
              margin-bottom: 19%;
            }
            
            .card30 {
              background-image:url("../img/selecoes/cards/18.png");
              background-size: 100%;
              position: absolute;
              bottom: 8px;
              width: 16%;
              height: 44%;
              margin-left: 28%;
              margin-bottom: 19%;
            }
            
            .card31 {
              background-image:url("../img/selecoes/cards/32.png");
              background-size: 100%;
              position: absolute;
              bottom: 8px;
              width: 16%;
              height: 44%;
              margin-left: 55%;
              margin-bottom: 19%;
            }
            
            .card32 {
              background-image:url("../img/selecoes/cards/10.png");
              background-size: 100%;
              position: absolute;
              bottom: 8px;
              width: 16%;
              height: 44%;
              margin-left: 79%;
              margin-bottom: 19%;
            }            
            
            .numbertext {
              color: #f2f2f2;
              font-size: 12px;
              padding: 8px 12px;
              position: absolute;
              top: 0;
            }
            
            .dot {
              cursor: pointer;
              height: 15px;
              width: 15px;
              margin: 0 2px;
              background-color: #bbb;
              border-radius: 50%;
              display: inline-block;
              transition: background-color 0.6s ease;
              margin-bottom: 2%;
            }
            
            .active, .dot:hover {
              background-color: #717171;
            }
            
            .fade {
              animation-name: fade;
              animation-duration: 1.5s;
            }
            
            @keyframes fade {
              from {opacity: .4} 
              to {opacity: 1}
            }
            
            @media only screen and (max-width: 300px) {
              .prev, .next,.text {font-size: 11px}
            }

    </style>

      
  </head>
  
  <body>
      
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    
    
    <div class="navbar">
      <a href="https://bolamundi2022.000webhostapp.com/index.php" style="margin-left: 4.8%; "><i class="fa fa-fw fa-desktop"></i>Index</a> 
      <a href="https://bolamundi2022.000webhostapp.com/historiadacopa.php"><i class="fa fa-fw fa-book"></i>História da Copa</a> 
      <a class="active" style = "background-color:  #4d0019;" href="#"><i class="fa fa-fw fa-language"></i>Todas as Seleções</a> 
      <a href="https://bolamundi2022.000webhostapp.com/selecoes/selecoesmandantes.php"><i class="fa fa-fw fa-award"></i> Seleções Mandantes</a> 
      <a href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=1&pag=1"><i class="fa fa-fw fa-envelope"></i>Seleção Brasileira</a> 
      <a href="https://bolamundi2022.000webhostapp.com/friendsarena.php"><i class="fa fa-fw fa-th"></i>Friends Arena</a>
       <a href="https://bolamundi2022.000webhostapp.com/playlist/playlists.php"><i class="fa fa-fw fa-th"></i>Playlists</a>
    </div>
    
    <h1 style="text-shadow: #990033 2px 3px 2px;">TODAS AS SELEÇÕES</h1>  
    
    <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 8</div>
          <img src="../img/selecoes/slide/Grupo A.png" style="width:100%">
          <div class="card1">
              <a href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=27&pag=1" style="text-decoration: none"><h1 style=" margin-top: 20%;font-size: 25px;color: #990033;">انقر هنا</h1></a>
          </div>
          <div class="card2">
              <a href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=13&pag=1" style="text-decoration: none"><h1 style=" margin-top: 20%;font-size: 25px;color: white;">Clic aquí</h1></a>
          </div>
          <div class="card3">
              <a href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=28&pag=1" style="text-decoration: none"><h1 style=" margin-top: 20%;font-size: 25px;color: white;">Cliquez ici</h1></a>
          </div>
          <div class="card4">
              <a href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=18&pag=1" style="text-decoration: none"><h1 style=" margin-top: 20%;font-size: 25px;color: black;">Klik hier</h1></a>
          </div>          
          <div class="text">Qatar - Equador - Senegal - Holanda</div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">2 / 8</div>
          <img src="../img/selecoes/slide/Grupo B.png" style="width:100%">
          <div class="card5">
              <a href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=19&pag=1" style="text-decoration: none"><h1 style=" margin-top: 20%;font-size: 25px;color: black;">Click here</h1></a>
          </div>
          <div class="card6">
              <a href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=20&pag=1" style="text-decoration: none"><h1 style=" margin-top: 20%;font-size: 25px;color: black;">اینجا کلیک کنید</h1></a>
          </div>
          <div class="card7">
              <a href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=15&pag=1" style="text-decoration: none"><h1 style=" margin-top: 20%;font-size: 25px;color: black;">Click here</h1></a>
          </div>
          <div class="card8">
              <a href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=24&pag=1" style="text-decoration: none"><h1 style=" margin-top: 20%;font-size: 25px;color: black;">Cliciwch yma</h1></a>
          </div> 
          <div class="text">Inglaterra - Irã - Estados Unidos - País de Gales</div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">3 / 8</div>
          <img src="../img/selecoes/slide/Grupo C.png" style="width:100%">
          <div class="card9">
              <a href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=4&pag=1" style="text-decoration: none"><h1 style=" margin-top: 20%;font-size: 25px;color: black;">Clic aquí</h1></a>
          </div>
          <div class="card10">
              <a href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=3&pag=1" style="text-decoration: none"><h1 style=" margin-top: 20%;font-size: 25px;color: black;">انقر هنا</h1></a>
          </div>
          <div class="card11">
              <a href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=23&pag=1" style="text-decoration: none"><h1 style=" margin-top: 20%;font-size: 25px;color: black;">Clic aquí</h1></a>
          </div>
          <div class="card12">
              <a href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=25&pag=1" style="text-decoration: none"><h1 style=" margin-top: 20%;font-size: 25px;color: black;">Kliknij tutaj</h1></a>
          </div> 
          <div class="text">Argentina - Arábia Saudita - México - Polônia</div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">4 / 8</div>
          <img src="../img/selecoes/slide/Grupo D.png" style="width:100%">
          <div class="card13">
              <a href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=16&pag=1" style="text-decoration: none"><h1 style=" margin-top: 20%;font-size: 25px;color: black;">Cliquez ici</h1></a>
          </div>
          <div class="card14">
              <a href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=5&pag=1" style="text-decoration: none"><h1 style=" margin-top: 20%;font-size: 25px;color: black;">Click here</h1></a>
          </div>
          <div class="card15">
              <a href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=12&pag=1" style="text-decoration: none"><h1 style=" margin-top: 20%;font-size: 25px;color: black;">Klik her</h1></a>
          </div>
          <div class="card16">
              <a href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=31&pag=1" style="text-decoration: none"><h1 style=" margin-top: 20%;font-size: 25px;color: black;">انقر هنا</h1></a>
          </div>           
          <div class="text">França - Austrália - Dinamarca - Tunísia</div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">5 / 8</div>
          <img src="../img/selecoes/slide/Grupo E.png" style="width:100%">
          <div class="card17">
              <a href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=14&pag=1" style="text-decoration: none"><h1 style=" margin-top: 20%;font-size: 25px;color: black;">Clic aquí</h1></a>
          </div>
          <div class="card18">
              <a href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=10&pag=1" style="text-decoration: none"><h1 style=" margin-top: 20%;font-size: 25px;color: black;">Clic aquí</h1></a>
          </div>
          <div class="card19">
              <a href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=2&pag=1" style="text-decoration: none"><h1 style=" margin-top: 20%;font-size: 25px;color: white;">Klick hier</h1></a>
          </div>
          <div class="card20">
          <a href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=21&pag=1"style="text-decoration: none"><h1 style=" margin-top: 20%;font-size: 25px;color: black;">ここをクリック</h1></a>
          </div> 
          <div class="text">Espanha - Costa Rica - Alemanha - Japão</div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">6 / 8</div>
          <img src="../img/selecoes/slide/Grupo F.png" style="width:100%">
          <div class="card21">
              <a href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=6&pag=1" style="text-decoration: none"><h1 style=" margin-top: 20%;font-size: 25px;color: white;">Klik hier</h1></a>
          </div>
          <div class="card22">
              <a href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=8&pag=1" style="text-decoration: none"><h1 style=" margin-top: 20%;font-size: 25px;color: black;">Click here</h1></a>
          </div>
          <div class="card23">
              <a href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=22&pag=1" style="text-decoration: none"><h1 style=" margin-top: 20%;font-size: 25px;color: white;">انقر هنا</h1></a>
          </div>
          <div class="card24">
              <a href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=11&pag=1" style="text-decoration: none"><h1 style=" margin-top: 20%;font-size: 25px;color: black;">
              Kliknite ovdje</h1></a>
          </div>            
          <div class="text">Bélgica - Canadá - Marrocos - Croácia</div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">7 / 8</div>
          <img src="../img/selecoes/slide/Grupo G.png" style="width:100%">
          <div class="card25">
              <a href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=1&pag=1" style="text-decoration: none"><h1 style=" margin-top: 20%;font-size: 25px;color: white;">Clique aqui</h1></a>
          </div>
          <div class="card26">
              <a href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=29&pag=1" style="text-decoration: none"><h1 style=" margin-top: 20%;font-size: 25px;color: black;">Кликните овде</h1></a>
          </div>
          <div class="card27">
              <a href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=30&pag=1" style="text-decoration: none"><h1 style=" margin-top: 20%;font-size: 25px;color: white;">Klick hier</h1></a>
          </div>
          <div class="card28">
              <a href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=7&pag=1" style="text-decoration: none"><h1 style=" margin-top: 20%;font-size: 25px;color: white;">Cliquez ici</h1></a>
          </div>           
          <div class="text">Brasil - Sérvia - Suíça - Camarões</div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">8 / 8</div>
          <img src="../img/selecoes/slide/Grupo H.png" style="width:100%">
          <div class="card29">
              <a href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=26&pag=1" style="text-decoration: none"><h1 style=" margin-top: 20%;font-size: 25px;color: white;">Clique aqui</h1></a>
          </div>
          <div class="card30">
              <a href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=17&pag=1" style="text-decoration: none"><h1 style=" margin-top: 20%;font-size: 25px;color: black;">Click here</h1></a>
          </div>
          <div class="card31">
              <a href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=32&pag=1" style="text-decoration: none"><h1 style=" margin-top: 20%;font-size: 25px;color: black;">Clic aquí</h1></a>
          </div>
          <div class="card32">
              <a href="https://bolamundi2022.000webhostapp.com/selecoes/selecao.php?id=9&pag=1" style="text-decoration: none"><h1 style=" margin-top: 20%;font-size: 25px;color: black;">여기를 클릭</h1></a>
          </div>          
          <div class="text">Portugal - Gana - Uruguai - Coreia do Sul</div>
        </div>
        
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
        
        </div>
        <br>
        
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span> 
          <span class="dot" onclick="currentSlide(2)"></span> 
          <span class="dot" onclick="currentSlide(3)"></span> 
          <span class="dot" onclick="currentSlide(4)"></span> 
          <span class="dot" onclick="currentSlide(5)"></span> 
          <span class="dot" onclick="currentSlide(6)"></span> 
          <span class="dot" onclick="currentSlide(7)"></span> 
          <span class="dot" onclick="currentSlide(8)"></span> 
        </div>
        
        </div>
        
        <script>
        let slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
        }
        </script>
            
        
        
    </body>
    
</html>