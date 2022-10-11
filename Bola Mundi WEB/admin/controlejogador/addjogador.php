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
	<link rel="stylesheet" href="../../admin/form.css">

  </head>

 <!--========== FIM HEAD ==========-->

 <!--========== INÍCIO BODY ==========-->

  <body>

   <div class="container">
   
       <div class = "info">
       
       <h1> CADASTRAR JOGADOR </h1>
       
       <img src="../../img/BolaMundi.png" style = "margin-right: 0;" > 
       
       </div>

		   <!-- Início do Formulário -->
		   
		   <form action="gerarjogador.php" method="post" style ="margin-left: 50%; margin-top: 10%;">
    	 
    		<label for="nome">Nome do jogador</label>
    		<input type="text" id="nome" name="nome" placeholder="Preencha o nome">
    
    		<label for="email">País</label>
    		<input type="text" id="email" name="pais" placeholder="Preencha o país">
    		
    		<label for="email">Número</label>
    		<input type="text" id="email" name="numero" placeholder="Preencha o país">
    		
    		<label for="email">Posição</label>
    		<input type="text" id="email" name="posicao" placeholder="Preencha o país">
    	  
    		<input type="submit" value="Cadastrar">
    		
    	  </form>

	       
            
        </div>
	

    </div>

  </body>

  <!-- ========= FIM BODY ========== -->

</html>

<?php 
 

?>