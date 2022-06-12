<!DOCTYPE html>

<html lang="pt-br">

<!--========== INÍCIO HEAD ==========-->
    
<head>
    
    <!-- Informações base -->

	<title>Seleção Brasileira - Bola Mundi</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

    <!-- Fontes -->

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

    <!-- Plugins CSS -->

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-csstwo/csstwo.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

    <!-- Base CSS -->

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	
</head>

<!--========== FIM HEAD ==========-->

<!--========== INÍCIO BODY ==========-->
 
<body>
    <!-- Fundo da Sel -->
	<div class="container-login100" style="background-image: url('images/fundologin.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-180 p-b-250">
				<!-- Título -->
				<span class="login100-form-title p-b-37">SELEÇÃO BRASILEIRA</span>
          
                <div class="sessaoavaliar" id="sessaoavaliar">
      <div class="estrelas">
      <input type="radio" id="cm_star-empty" name="fb" value="" checked >
      <label for="cm_star-1"  onclick="clicar1()"><i class="fa"></i></label>
      <input type="radio" id="cm_star-1" name="fb" value="1"/>
      <label for="cm_star-2"  onclick="clicar2()"><i class="fa"></i></label>
      <input type="radio" id="cm_star-2" name="fb" value="2"/>
      <label for="cm_star-3"  onclick="clicar3()"><i class="fa"></i></label>
      <input type="radio" id="cm_star-3" name="fb" value="3"/>
      <label for="cm_star-4"  onclick="clicar4()"><i class="fa"></i></label>
      <input type="radio" id="cm_star-4" name="fb" value="4"/>
      <label for="cm_star-5"  onclick="clicar5()"><i class="fa"></i></label>
      <input type="radio" id="cm_star-5" name="fb" value="5"/>
       <p>Avalie o jogador!</p>
    </div>
    <div class="divsair">
    <input class="btnsair" type="button" value="X" onclick="sair()">
    </div>
       
  </div>
  
   
   <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
     <thead>
      <tr>
      <tr>
        <th>Jogador</th>
        <th>Número</th>
        <th>Posição</th>
        <th>Avaliação</th>
      </tr>
      </thead>
    </table>
  </div>
  
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <tr>
          <td>Alisson</td>
          <td>1</td>
          <td>Goleiro</td>
          <td ><input class="btnavaliar" type="button" value="★"  onclick="avaliar()"></td>
        </tr>
        <tr>
          <td>Weverton</td>
          <td>12</td>
          <td>Goleiro</td>
          <td><input class="btnavaliar" type="button" value="★"  onclick="avaliar()"></td>
        </tr>
        <tr>
          <td>Ederson</td>
          <td>23</td>
          <td>Goleiro</td>
          <td><input class="btnavaliar" type="button" value="★"  onclick="avaliar()"></td>
        </tr>
        <tr>
          <td>Raphinha</td>
          <td>19</td>
          <td>Atacante</td>
          <td><input class="btnavaliar" type="button" value="★"  onclick="avaliar()"></td>
        </tr>
        <tr>
         <td>Marquinhos</td>
         <td>13</td>
         <td>Zagueiro</td>
        <td><input class="btnavaliar" type="button" value="★"  onclick="avaliar()"></td>
        </tr>

  <tr>
    <td>Casemiro</td>
    <td>5</td>
    <td>Meia</td>
    <td><input class="btnavaliar" type="button" value="★"  onclick="avaliar()"></td>
  </tr>
  
  <tr>
    <td>p</td>
    <td></td>
    <td></td>
    <td><input class="btnavaliar" type="button" value="★"  onclick="avaliar()"></td>
  </tr>
  <tr>
    <td>a</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>s</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>d</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
  <tr>
    <td>f</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>g</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>h</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>j</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
  <tr>
    <td>k</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>l</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>ç</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>z</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
  <tr>
    <td>o</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>x</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>c</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>v</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
  <tr>
    <td>b</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>n</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>m</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>q</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
  <tr>
    <td>w</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>e</td>
    <td></td>
    <td></td>
    <td></td>
      </tbody>
    </table>
  </div>
				

			
		</div>
	</div>
	
	
	<div id="dropDownSelect1"></div>
	
    <!-- Plugins JS -->

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>

	<!-- Theme JS -->

	<script src="js/main.js"></script>

  </body>

  <!-- ========= FIM BODY ========== -->
  
</html>