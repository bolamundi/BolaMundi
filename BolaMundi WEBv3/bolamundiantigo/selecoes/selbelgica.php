<?php

session_start();

?>

<html>
    
 <head> 
    
    <link href="/selecoes/selalemanhacss.css" rel="stylesheet"> 
    <script src="selecoes/selalemanhajs.js"></script>




 </head>

 <body>
    
  <section>
  
   <h1>SELEÇÃO BELGA</h1>
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
          <td>a</td>
          <td></td>
          <td></td>
          <td ><input type="button" value="avaliar"  onclick="avaliar()"></td>
        </tr>
        <tr>
          <td>b</td>
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
          <td>d</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
         <td>e</td>
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
<form class="form" action="cadastrarcomentario.php" method="post" id="form">
<textarea   class="texto" name="texto" id="texto" cols="50" rows="7" placeholder="Digite aqui seu comentário" style="resize:none;" required></textarea>

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
var res;
function clicar1(){
  res=1;
window.alert(res+" estrela");

}
function clicar2() {
  res=2;
    window.alert(res+" estrelas") ;
    display.innerHTML+=res;
}
function clicar3() {
  res=3;
    window.alert(res+" estrelas");
    
}
function clicar4() {
  res=4;
    window.alert(res+" estrelas");
    
}
function clicar5() {
  res=5;
    window.alert(res+" estrelas");
    
}

</script>