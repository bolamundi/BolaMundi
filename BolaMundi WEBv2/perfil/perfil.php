<?php 

 session_start();

   if(isset($_SESSION['nome']) and isset($_SESSION['email'])){
    $nome=$_SESSION['nome'];
         $email=$_SESSION['email'];
   }else{
   header('Location:/index.php');
      exit; 
   }

 

?>

<!DOCTYPE html>

<html>
  
	<head>
      
		<title>Perfil - Bola Mundi</title>
      
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/styleperfil.css">
        <link rel="stylesheet" href="css/stylepalpites.css">
        <link rel="stylesheet" href="css/stylebotão.css">      
		<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
	<style>
      
		html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
      
	</style>
      
	</head>
  
	<body class="w3-light-grey">

	<!-- Page Container -->
    <div class="w3-content w3-margin-top" style="max-width:1400px;">

	  <!-- Grid -->
	  <div class="w3-row-padding">
  
    	<!-- Coluna Esquerda -->
   	 	<div class="w3-third">
        <!-- Informações básicas do usuário -->    
      	<div class="w3-white w3-text-grey w3-card-4">
        	<div class="w3-display-container">
          	<img src="imagemteste.jpg" style="width:100%" alt="Avatar">
          	<div class="w3-display-bottomleft w3-container w3-text-black">
            	<h2><?php echo $nome; ?></h2>
          	</div>
        	</div>
        	<div class="w3-container">
          		<p><i class="fa fa-caret-right fa-fw w3-margin-right w3-large w3-text-red"></i>Torcedor do </p>
          		<p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-red"></i>Brasil</p>
          		<p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-red"></i><?php echo $email; ?><i onclick="document.getElementById('id01').style.display='block'" class="fa fa-pencil fa-fw w3-margin-right w3-large w3-text-red"></i></p>
          		<p><i class="fa fa-lock fa-fw w3-margin-right w3-large w3-text-red"></i>1224435534<i onclick="document.getElementById('id02').style.display='block'" class="fa fa-pencil fa-fw w3-margin-right w3-large w3-text-red"></i></p>
          	<hr>
          <!-- Interações -->
          <p class="w3-large"><b><i class="fa fa-comment fa-fw w3-margin-right w3-text-red"></i>Interações</b></p>
          <p>Avaliações</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-red" style="width:90%">90%</div>
          </div>
          <p>Comentários</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-red" style="width:80%">
              <div class="w3-center w3-text-white">80%</div>
            </div>
          </div>
          <p>Compras</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-red" style="width:75%">75%</div>
          </div>
          <p>Palpites</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-red" style="width:50%">50%</div>
          </div>
          <br>
          <!-- Saldo de moedas -->
          <p class="w3-large w3-text-theme"><b><i class="fa fa-star fa-fw w3-margin-right w3-text-red"></i>Saldo</b></p>
          <p>Saldo atual</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-red" style="height:24px;width:100%"></div>
          </div>
          <p>Moedas ganhas</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-red" style="height:24px;width:55%"></div>
          </div>
          <p>Moedas gastas</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-red" style="height:24px;width:25%"></div>
          </div>
          <br>
          </div>

        </div><br>

    <!-- Fim Coluna Esquerda -->
    </div>

    <!-- Coluna Direita -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-trophy fa-fw w3-margin-right w3-xxlarge w3-text-red"></i>Seu Rank</h2>
       
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-bookmark fa-fw w3-margin-right w3-xxlarge w3-text-red"></i>Palpites</h2>
        <div id="myDIV" class="header">
  		<h2 style="margin:5px">Meus Palpites</h2>
  		<input type="text" id="myInput" placeholder="Vai acontecer...">
  		<span onclick="newElement()" class="addBtn">Add</span>
	  </div>
	    <ul id="myUL">
 	      <li>Flamengo ganhando Brasileirão</li>
  		  <li>Flamengo ganhando Copa do Brasil</li>
          <li>Flamengo ganhnado Libertadores</li>
          <li>Flamengo ganhando Supercopa</li>
       </ul>

      </div>
      </div>
      

    <!-- Fim Coluna Direita -->
    </div>
    
  </div>
      
      <!-- Modal editar e-mail-->
      <div id="id01" class="w3-modal">
    	<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
      		<div class="w3-center"><br>
        		<span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
      		</div>
          
      		<form class="w3-container" action="/action_page.php">
        		<div class="w3-section">
          			<label><b>Troque seu e-mail</b></label>
          			<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Insira seu e-mail atual" name="email" required>          
          			<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Insira seu novo e-mail" name="novoemail" required>
          			<button class="w3-button w3-block w3-red w3-section w3-padding" type="submit">Enviar</button>
        		</div>
      		</form>
      	</div>
      </div>
          
   	  <!-- Modal editar senha-->
      <div id="id02" class="w3-modal">
    	<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
      		<div class="w3-center"><br>
        		<span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
      		</div>
          
      		<form class="w3-container" action="/action_page.php">
        		<div class="w3-section">
          			<label><b>Troque sua senha</b></label>
          			<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Insira sua senha atual" name="senha" required>          
          			<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Insira sua nova senha" name="novasenha" required>
          			<button class="w3-button w3-block w3-red w3-section w3-padding" type="submit">Enviar</button>
        		</div>
      		</form>          
		</div>
      </div>
      
    	<script type="text/javascript" src="js/jspalpites.js"></script>
      
	</body>
  
</html>