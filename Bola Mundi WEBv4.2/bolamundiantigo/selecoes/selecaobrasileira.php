<?php

session_start();

?>

<html>
    
 <head> 
    
    <link rel="stylesheet" href="selecaobrasileiracss.css" > 
    <script src="selecaobrasileirajs.js"></script>




 </head>

 <body>
    
  <section>
  
   <h1>SELEÇÃO BRASILEIRA</h1>
   <div id="avaliacaovizualizador">
       <h3>Avaliação</h3>
  
   <?php
   require 'media.php';
   if($result->num_rows > 0){
   

   $media= round($media,0);
   
   switch($media){
       case 1:
        echo "<img src='/images/estrela.png'>";
        break;
case 2:
    echo "<img src='/images/estrela.png'><img src='/images/estrela.png'>";
    break;
    case 3:
        echo "<img src='/images/estrela.png'><img src='/images/estrela.png'><img src='/images/estrela.png'>";
        break;
        case 4:
            echo "<img src='/images/estrela.png'><img src='/images/estrela.png'><img src='/images/estrela.png'><img src='/images/estrela.png'>";
            break;
            case 5:
                echo "<img src='/images/estrela.png'><img src='/images/estrela.png'><img src='/images/estrela.png'><img src='/images/estrela.png'><img src='/images/estrela.png'>";
                break;
    }




   }else{
       echo "<p>Nenhum resultado encontrado</p>";
       
   }
   
   ?>
 
   </div>
  <form action="cadastraravaliacao.php" method="post" class="sessaoavaliar" id="sessaoavaliar">
      <div class="estrelas">
      <input type="radio" id="cm_star-empty" name="fb" value="0" checked >
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
       <input type="submit" id="enviaravaliacao" onclick="enviaravaliacao()">
    </div>
    <div class="divsair">
    <input class="btnsair" type="button" value="X" onclick="sair()">
    </div>
       
  </form>
  
   
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
          <td ></td>
        </tr>
        <tr>
          <td>Ederson</td>
          <td>23</td>
          <td>Goleiro</td>
          <td></td>
        </tr>
        <tr>
          <td>Weverton</td>
          <td>12</td>
          <td>Goleiro</td>
          <td></td>
        </tr>
        <tr>
          <td>Raphinha</td>
          <td>19</td>
          <td>Atacante</td>
          <td></td>
        </tr>
        <tr>
         <td>Marquinhos</td>
         <td>13</td>
         <td>Zagueiro</td>
        <td></td>
        </tr>

  <tr>
    <td>Casemiro</td>
    <td>5</td>
    <td>Meia</td>
    <td></td>
  </tr>
  
  <tr>
    <td>Eder Militão</td>
    <td>14</td>
    <td>Zagueiro</td>
    <td></td>
  </tr>
  <tr>
    <td>Gabriel Magalhães </td>
    <td>?</td>
    <td>Zagueiro</td>
    <td></td>
  </tr>
  <tr>
    <td>Marquinhos</td>
    <td>4</td>
    <td>Zagueiro</td>
    <td></td>
  </tr>
  <tr>
    <td>Thiago Silva</td>
    <td>3</td>
    <td>Zagueiro</td>
    <td></td>
  </tr>
  
  <tr>
    <td>Daniel Alves</td>
    <td>?</td>
    <td>Lateral-direito</td>
    <td></td>
  </tr>
  <tr>
    <td>Danilo</td>
    <td>2</td>
    <td>Lateral-direito</td>
    <td></td>
  </tr>
  <tr>
    <td>Alex Sandro</td>
    <td>6</td>
    <td>Lateral-esquerdo</td>
    <td></td>
  </tr>
  <tr>
    <td>Alex Telles</td>
    <td>?</td>
    <td>Lateral-esquerdo</td>
    <td></td>
  </tr>
  
  <tr>
    <td>Guilherme Arana</td>
    <td>?</td>
    <td>Lateral</td>
    <td></td>
  </tr>
  <tr>
    <td>Fabinho</td>
    <td>15</td>
    <td>Meia</td>
    <td></td>
  </tr>
  <tr>
    <td>Fred</td>
    <td>8</td>
    <td>Meia</td>
    <td></td>
  </tr>
  <tr>
    <td>Danilo</td>
    <td>?</td>
    <td>Meia</td>
    <td></td>
  </tr>
  
  <tr>
    <td>Lucas Paquetá </td>
    <td>17</td>
    <td>Meia</td>
    <td></td>
  </tr>
  <tr>
    <td>Philippe Coutinho</td>
    <td>?</td>
    <td>Meia</td>
    <td></td>
  </tr>
  <tr>
    <td>Gabriel Jesus</td>
    <td>9</td>
    <td>Atacante</td>
    <td></td>
  </tr>
  <tr>
    <td>Gabriel Martinelli</td>
    <td>?</td>
    <td>Atacante</td>
    <td></td>
  </tr>
  
  <tr>
    <td>Matheus Cunha</td>
    <td>?</td>
    <td>Atacante</td>
    <td></td>
  </tr>
  <tr>
    <td>Neymar</td>
    <td>10</td>
    <td>Atacante</td>
    <td></td>
  </tr>
  <tr>
    <td>Richarlison</td>
    <td>7</td>
    <td>Atacante</td>
    <td></td>
  </tr>
  <tr>
    <td>Vinícius Júnior</td>
    <td>18</td>
    <td>Atacante</td>
    <td></td>
  </tr>
  
  <tr>
    <td>Danilo </td>
    <td>?</td>
    <td>Meia</td>
    <td></td>
  </tr>
  <tr>
    <td>Rodrygo</td>
    <td>?</td>
    <td>Atacante</td>
    <td></td>
      </tbody>
    </table>
  </div>

</section>

<h3 id="h3">O que achou? Comente aqui embaixo!</h3>
<form class="form" action="cadastrarcomentario.php" method="post" id="form">
<textarea   class="texto" name="texto" id="texto" cols="50" rows="7" placeholder="Digite aqui seu comentário" style="resize:none;" required></textarea>
<input class="btnavaliar" type="button" value="Avalie a seleção ★"  onclick="avaliar()">
<input type="submit" class="enviar" id="enviar" value=""   >
    
  
</form>

<div  class="coments" >

<?php
 
require "mostrarcomentario.php";

while($row = $res->fetch_assoc()){
    	echo "<h4>" . $row["Nome"] . "</h4>" . " <p>" . $row["Comentario"] . "</p> <p>" . $row["Data"] . " </p> <br><br>";

    
    
}

?>

</div>








</body>



</html>
<script>



    
var h3= document.getElementById("h3")
var form= document.getElementById("form")


<?php
if (!isset($_SESSION["acesso"])){
?>
h3.innerHTML="Você precisa estar logado para comentar!"
form.style.display='none'    
 <?php  
}

?>








 
 function avaliar(){
  var avaliar=document.getElementById("sessaoavaliar"); 
     avaliar.style.display='block';
     

   
   
}

function sair(){
    var avaliar=document.getElementById("sessaoavaliar"); 
    avaliar.style.display="none";
    
}
</script>