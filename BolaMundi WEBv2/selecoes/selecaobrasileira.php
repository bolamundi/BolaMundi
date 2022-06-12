<?php

session_start();
$idsel=$_GET["id"];



?>

<html>
    
 <head> 
    
    <link rel="stylesheet" href="css/selecao.css" > 
    <script src="js/selecao.js"></script>




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
        echo "<img src='images/estrela.png'>";
        break;
case 2:
    echo "<img src='images/estrela.png'><img src='images/estrela.png'>";
    break;
    case 3:
        echo "<img src='images/estrela.png'><img src='images/estrela.png'><img src='images/estrela.png'>";
        break;
        case 4:
            echo "<img src='images/estrela.png'><img src='images/estrela.png'><img src='images/estrela.png'><img src='images/estrela.png'>";
            break;
            case 5:
                echo "<img src='images/estrela.png'><img src='images/estrela.png'><img src='images/estrela.png'><img src='images/estrela.png'><img src='images/estrela.png'>";
                break;
    }




   }else{
       echo "<p>Nenhum resultado encontrado</p>";
       
   }
   
   ?>
 
   </div>
  <form action="cadastraravaliacao.php?id=<?php echo $idsel;?>" method="post" class="sessaoavaliar" id="sessaoavaliar">
      <div class="estrelas">
      <input type="radio" id="cm_star-empty" name="fb" value="0" checked >
      <label for="cm_star-1" ><i class="fa"></i></label>
      <input type="radio" id="cm_star-1" name="fb" value="1"/>
      <label for="cm_star-2"  ><i class="fa"></i></label>
      <input type="radio" id="cm_star-2" name="fb" value="2"/>
      <label for="cm_star-3"  ><i class="fa"></i></label>
      <input type="radio" id="cm_star-3" name="fb" value="3"/>
      <label for="cm_star-4" ><i class="fa"></i></label>
      <input type="radio" id="cm_star-4" name="fb" value="4"/>
      <label for="cm_star-5" ><i class="fa"></i></label>
      <input type="radio" id="cm_star-5" name="fb" value="5"/>
       <input type="submit" id="enviaravaliacao">
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
          <td>Weverton</td>
          <td>12</td>
          <td>Goleiro</td>
          <td></td>
        </tr>
        <tr>
          <td>Ederson</td>
          <td>23</td>
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
    <td>p</td>
    <td></td>
    <td></td>
    <td></td>
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

</section>

<h3 id="h3">O que achou? Comente aqui embaixo!</h3>
  

  
<form class="form" action='cadastrarcomentario.php?id=<?php echo $idsel;?>' method="post" id="form">
<textarea   class="texto" name="texto" id="texto" cols="50" rows="7" placeholder="Digite aqui seu comentário" style="resize:none;" required></textarea>
<input class="btnavaliar" type="button" value="Avalie a seleção ★"  onclick="avaliar()">
<input type="submit" class="enviar" id="enviar" value="Enviar"   >
    


  
</form>

<div  class="coments" >

<?php
 
require "mostrarcomentario.php";

while($row = $res->fetch_assoc()){
    if(isset($_SESSION['nome']) and $row["Nome"]==$_SESSION['nome']){
        echo "<h4> Você <a type='button' href='excluircomentario.php?id=". $row["Id"] ."&idsel=". $idsel ."' >Excluir</a></h4> " . " <p>" . $row["Comentario"] . "</p> <p>" . $row["Data"] . "</p> <br><br>";
    }else if($_SESSION["acesso"]=="Admin"){
    	echo "<h4>" . $row["Nome"] . "<a type='button' href='excluircomentario.php?id=". $row["Id"] ."' >Excluir</a></h4>" . " <p>" . $row["Comentario"] . "</p> <p>" . $row["Data"] . " </p> <br><br>";
}else{
    echo "<h4>" . $row["Nome"] . "</h4> <p>" . $row["Comentario"] . "</p> <p>" . $row["Data"] . " </p> <br><br>";
    }
    
    
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