<?php 

session_start();
$cod=$_GET['cod'];
?>


<html>

 <!--========== INÍCIO HEAD ==========-->

  <head>
    
    <meta charset="UTF-8">
	<title>Esqueci minha senha, Bola Mundi :'(</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../admin/form.css">
	
  </head>
  
  <style>
  
    #message {
      display:none;
      background: #f1f1f1;
      color: #000;
      position: relative;
      padding: 20px;
      margin-top: 10px;
    }
    
    #message p {
      padding: 10px 35px;
      font-size: 18px;
    }
    
    /* ADICIONA UMA COR VERDE AO TEXTO E UMA MARCA DE SELEÇÃO QUANDO OS REQUISITOS ESTIVEREM CORRETOS  */
    .valid {
      color: green;
    }
    
    .valid:before {
      position: relative;
      left: -35px;
      content: "✔";
    }
    
    /* ADICIONA UMA COR VERMELHA AO TEXTO E UM "X" QUANDO OS REQUISITOS FOREM PREENCHIDOS INCORRETAMENTE */
    .invalid {
      color: red;
    }
    
    .invalid:before {
      position: relative;
      left: -35px;
      content: "✖";
    }
    
      
  </style>

 <!--========== FIM HEAD ==========-->

 <!--========== INÍCIO BODY ==========-->

  <body>
  
  <div class="container">
   
   <div class = "info">
   
   <h1> Redefinir senha </h1>
   
   <img src="../../img/BolaMundi.png" style = "width: 57%; margin-right: 0px;" > 
   
   </div>


	  <form action="esqueceuSenha.php" method='post' style ="margin-left: 50%; margin-top: 10%;">
	 <?php 
		if (!isset($cod)){
		echo '
		<label for="email">E-mail</label>
		<input type="text" id="email" name="email" placeholder="Preencha o e-mail..">';}else if ($cod==1){
		   	echo '
		<label for="codigo">Código</label>
		<input type="text" id="codigo" name="codigo" placeholder="Preencha com o código enviado no seu e-mail..">'; 
		     echo '
		<label for="senha">Senha nova</label>
		<input type="password" id="psw" name="senha" placeholder="Preencha com sua nova senha.." pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
		
			<div id="message">
          <h5>A senha precisa conter:</h5>
          <p id="letter" class="invalid">Uma letra <b>minúscula</b></p>
          <p id="capital" class="invalid">Uma letra <b>maiúscula</b></p>
          <p id="number" class="invalid">Um <b>número</b></p>
          <p id="length" class="invalid">Mínimo de <b>8 caracteres</b></p>
        </div>
		
		'; 
		}
		
		?>
		<input type="submit" value="Enviar">
		
	  </form>
	  
</div>

    
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

  <!-- ========= FIM BODY ========== -->

</html>

