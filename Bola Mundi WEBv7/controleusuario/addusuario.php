<?php 

session_start();
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

	       <form class="login100-form validate-form" action="gerarusuario.php" method="post">
	            <span class="login100-form-title p-b-37"> Cadastrar usuário </span>

                <!-- Formulário seções -->
				
				<div class="wrap-input100 validate-input m-b-20" data-validate="Preencha o seu nome">
					<input class="input100" type="text" name="nome" placeholder="Nome">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Preencha o e-mail">
					<input class="input100" type="text" name="email" placeholder="E-mail">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Preencha a senha">
					<input id="psw" class="input100" type="password" name="senha" placeholder="Senha"  
					<span class="focus-input100"></span>
				</div>
			
			    <div class="wrap-input100 validate-input m-b-20" data-validate="Preencha o acesso">
					<input class="input100" type="text" name="acesso" placeholder="Acesso">
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