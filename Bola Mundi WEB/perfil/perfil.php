<?php 

 session_start();
 $id_usuario=$_SESSION['idusuario'];
   if(isset($_SESSION['nome']) and isset($_SESSION['email'])){
    $nome=$_SESSION['nome'];
    $email=$_SESSION['email'];
    $moeda=$_SESSION['moeda'];
    $xp=$_SESSION['xp'];
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
		<link rel="stylesheet" type="text/css" href="../css/senharequisitos.css">
		<link rel="stylesheet" type="text/css" href="css/inventario.css">
      
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
          	<?php echo "<img src='../loja/images/".$_SESSION['perfil']."' style='width:100%;' alt='Avatar'> " ?>
          	<div class="w3-display-bottomleft w3-container w3-text-black">
            	<h2><?php echo $nome; ?><i onclick="document.getElementById('id03').style.display='block'" class="fa fa-pencil fa-fw w3-margin-right w3-large w3-text-red"></i>
            	<i onclick="document.getElementById('id04').style.display='block'" class="fa fa-image fa-fw w3-large w3-text-red" style = "margin-left: 250px;"></i>
            	</h2>
          	</div>
        	</div>
        	
        	<div class="w3-container">
          		<p><i class="fa fa-caret-right fa-fw w3-margin-right w3-large w3-text-red"></i>Torcedor do </p>
          		<p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-red"></i>Brasil</p>
          		<p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-red"></i><?php echo $email; ?><i onclick="document.getElementById('id01').style.display='block'" class="fa fa-pencil fa-fw w3-margin-right w3-large w3-text-red"></i></p>
          		<p><i class="fa fa-lock fa-fw w3-margin-right w3-large w3-text-red"></i>*********<i onclick="document.getElementById('id02').style.display='block'" class="fa fa-pencil fa-fw w3-margin-right w3-large w3-text-red"></i></p>
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
          <p>Saldo atual: </p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-red" style="height:24px;width:100%"></div>
          </div>
          <p>Moedas ganhas: <?php echo $moeda; ?></p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-red" style="height:24px;width:55%"></div>
          </div>
          <p>Moedas gastas:</p>
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
        <img src="ranks/ranks.jpg" onclick="document.getElementById('modal01').style.display='block'" class="w3-hover-opacity" style="width:99.9%" alt="Ranks">

        <div id="modal01" class="w3-modal w3-animate-zoom w3-center" onclick="this.style.display='none'">
            <img class="w3-modal-content" src="ranks/ranks.jpg" alt="Ranks">
            <p style="background-color: white; width: 900px; border: 1px dashed red; padding: 50px; left: 20%; "> teste</p>
        </div>
        <h3>Seu Xp: <?php echo $xp; ?></h3> 
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
          
      		<form class="w3-container" action="trocaremail.php?id=<?php echo $id_usuario?>" method="post">
        		<div class="w3-section">
          			<label><b>Troque seu e-mail</b></label>
          			<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Insira seu e-mail novo" name="novoemail" data-validate="email" required>          
          			<input class="w3-input w3-border w3-margin-bottom" type="password" placeholder="Insira sua senha" name="senha" required>
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
          
      		<form class="w3-container" action="trocarsenha.php?id=<?php echo $id_usuario?>"  method="post">
        		<div class="w3-section">
          			<label><b>Troque sua senha</b></label>
          			<input class="w3-input w3-border w3-margin-bottom" type="password" placeholder="Insira sua senha atual" name="senha" required>          
          			<input id='psw' class="w3-input w3-border w3-margin-bottom" type="password" placeholder="Insira sua nova senha" name="novasenha" required  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
          			<button class="w3-button w3-block w3-red w3-section w3-padding" type="submit">Enviar</button>
          			<div id="message">
          <h5>A senha precisa conter:</h5>
          <p id="letter" class="invalid">Uma letra <b>minúscula</b></p>
          <p id="capital" class="invalid">Uma letra <b>maiúscula</b></p>
          <p id="number" class="invalid">Um <b>número</b></p>
          <p id="length" class="invalid">Mínimo de <b>8 caracteres</b></p>
        </div>
        		</div>
      		</form>          
		</div>
      </div>
      
      <!-- Modal editar nome-->
      <div id="id03" class="w3-modal">
    	<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
      		<div class="w3-center"><br>
        		<span onclick="document.getElementById('id03').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
      		</div>
          
      		<form class="w3-container" action="trocarnome.php?id=<?php echo $id_usuario?>"  method="post">
        		<div class="w3-section">
          			<label><b>Troque seu nickname</b></label>
          			<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Insira seu novo nickname" name="novonome" required>
                <input class="w3-input w3-border w3-margin-bottom" type="password" placeholder="Insira sua senha" name="senha" required>
          			<button class="w3-button w3-block w3-red w3-section w3-padding" type="submit">Enviar</button>
        		</div>
      		</form>          
		</div>
      </div>
      
      <!-- Modal mudar foto-->
      <div id="id04" class="w3-modal">
    	<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
    	    
      		<div class="w3-center"><br>
      		   <h3>Selecione a sua foto de perfil abaixo:</h3>
          	   <?php include 'inventario.php';?> 
        		<span onclick="document.getElementById('id04').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
      		</div>
    	<script type="text/javascript" src="js/jspalpites.js"></script>
      <script>

var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");


myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}


myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}


myInput.onkeyup = function() {

  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }

  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }


  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  

  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

</script>
	</body>
  
</html>