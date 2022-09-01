<?php 

session_start();

$path=2; //var para ativar uma condição no validarAcesso
  // Verifica se o usuário logado é admin
  include '../../validarAcesso.php'; 
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

	       <form class="login100-form validate-form" action="gerarproduto.php" method="post">
	            <span class="login100-form-title p-b-37"> Cadastrar produto </span>

                <!-- Formulário seções -->
				
				<div class="wrap-input100 validate-input m-b-20" data-validate="Preencha o nome do produto">
					<input class="input100" type="text" name="nome" placeholder="Nome">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Preencha preço">
					<input class="input100" type="text" name="preco" placeholder="Preço">
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
 

?>