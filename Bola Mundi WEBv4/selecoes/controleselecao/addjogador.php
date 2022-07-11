<?php 

session_start();
$idsel=$_GET['idsel'];
  // Verifica se o usuário logado é admin
  if (isset($_SESSION['acesso']) and $_SESSION['acesso']=="Admin"){
    
?>


<html>

 <!--========== INÍCIO HEAD ==========-->

  <head>
    
    <meta charset="UTF-8">
	<title>Cadastro Bola Mundi</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

  </head>

 <!--========== FIM HEAD ==========-->

 <!--========== INÍCIO BODY ==========-->

  <body>

    <div class="container-login100" style="background-image: url('images/fundologin.jpg');">
	  <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">

		   <!-- Início do Formulário -->

	       <form class="login100-form validate-form" action="gerarjogador.php?idsel=<?php echo $idsel;?>".$idsel" method="post">
	            <span class="login100-form-title p-b-37"> Cadastrar jogador </span>

                <!-- Formulário seções -->
				
				<div class="wrap-input100 validate-input m-b-20" data-validate="Preencha o nome do jogador">
					<input class="input100" type="text" name="nome" placeholder="Nome">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Preencha o país">
					<input class="input100" type="text" name="pais" placeholder="País">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Preencha o número">
					<input id="psw" class="input100" type="text" name="numero" placeholder="Número"  
					<span class="focus-input100"></span>
				</div>
			
			    <div class="wrap-input100 validate-input m-b-20" data-validate="Preencha A posição">
					<input class="input100" type="text" name="posicao" placeholder="Posição">
					<span class="focus-input100"></span>
				</div>
				

				<div class="container-login100-form-btn">
					<button class="login100-form-btn"> Enviar </button>
				</div>

           </form>
            
        </div>
	
	  <div id="dropDownSelect1"></div>
	
    </div>

  </body>

  <!-- ========= FIM BODY ========== -->

</html>

<?php 
 // Se não for admin, volta ao index
 }else{
    header("Location: /index.php");       
 }

?>