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
       
       <h1> CADASTRAR PRODUTO </h1>
       
       <img src="../../img/BolaMundi.png" style = "margin-right: 0;" > 
       
       </div>
    
    	  <form action="gerarproduto.php" method='post' style ="margin-left: 50%; margin-top: 10%;">
    	 
    		<label for="nome">Nome do produto</label>
    		<input type="text" id="nome" name="nome" placeholder="Preencha o nome do produto">
    
    		<label for="preco">Preço</label>
    		<input type="text" id="email" name="preco" placeholder="Preencha o preço">
    		
    		<label for="imagem">Imagem</label>
    		<input type="text" id="senha" name="imagem" placeholder="Preencha a imagem">	
    	  
    		<input type="submit" value="Cadastrar">
    		
	     </form>
	  
    </div>

    
		  
    </div>

  </body>

  <!-- ========= FIM BODY ========== -->

</html>

<?php 
 

?>