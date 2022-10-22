<?php 

session_start();
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
   
   <h1> CADASTRAR USUÁRIO </h1>
   
   <img src="../../img/BolaMundi.png" style = "margin-right: 0;" > 
   
   </div>


	  <form action="gerarusuario.php" method='post' style ="margin-left: 50%; margin-top: 10%;">
	 
		<label for="nome">Nome do usuário</label>
		<input type="text" id="nome" name="nome" placeholder="Preencha o nome..">

		<label for="email">E-mail</label>
		<input type="text" id="email" name="email" placeholder="Preencha o e-mail..">
		
		<label for="senha">Senha</label>
		<input type="password" id="senha" name="senha" placeholder="Preencha a senha..">	

		<label for="país">País</label>
		<select id="país" name="país">
		  <option value="australia">Brasil</option>
		  <option value="canada">Portugal</option>
		  <option value="usa">Angola</option>
		</select>
	  <label for="acesso">Acesso</label>
		<select id="acesso" name="acesso">
		  <option value="Usuario">Usuario</option>
		  <option value="Admin">Admin</option>

		</select>
		<input type="submit" value="Cadastrar">
		
	  </form>
	  
</div>

    

  </body>

  <!-- ========= FIM BODY ========== -->

</html>

