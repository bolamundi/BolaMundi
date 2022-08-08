<?php
session_start();


$idsel=$_GET["id"];
$_SESSION["idsel"]=$idsel;
require 'media.php'; 
?>

<html>
    
 <head> 
    
    <title>Seleção</title>
    <link rel="stylesheet" href="css/selecao.css" > 
    <script src="js/selecao.js"></script>

 </head>

 <body>
     
   <div class = "tabela">   
    
   <h1>SELEÇÃO BRASILEIRA</h1>
   
    <!--Mostra o total da avaliação-->
    <center>
    <div id="avaliacaovizualizador" style = "margin-bottom: 10px;">
       <h3>Avaliação</h3>
        <div id="estrelavizualizador">
        <?php
  
        if($result->num_rows > 0){
            $media= round($media,0);
        switch($media){
            case 1:
                echo "<img src='../img/selecoes/estrela.png'>";
                break;
            case 2:
                echo "<img src='../img/selecoes/estrela.png'><img src='../img/selecoes/estrela.png'>";
                break;
            case 3:
                echo "<img src='../img/selecoes/estrela.png'><img src='../img/selecoes/estrela.png'><img src='../img/selecoes/estrela.png'>";
                break;
            case 4:
                echo "<img src='../img/selecoes/estrela.png'><img src='../img/selecoes/estrela.png'><img src='../img/selecoes/estrela.png'><img src='../img/selecoes/estrela.png'>";
                break;
            case 5:
                echo "<img src='../img/selecoes/estrela.png'><img src='../img/selecoes/estrela.png'><img src='../img/selecoes/estrela.png'><img src='../img/selecoes/estrela.png'><img src='../img/selecoes/estrela.png'>";
                break;
        }

        }else{
            echo "<p>Nenhum resultado encontrado</p>";
        }
   
        ?>
        </div>
        
    </div>
    </center>
    
    <!--Mostra a tabela de jogadores-->
    
    <table id="jogadores">
        
    <?php
    
    include "gerartabela.php";
    
    ?>  
    
    </table> 
    
    <!--Avaliar seleção e enviar comentário-->
    <h3 id="h3">O que achou? Comente aqui embaixo!</h3>
 
    <input class="btnavaliar" id="btnavaliar" type="button" value="Avalie a seleção ★"  onclick="avaliar()">
    <form class="formcoment" action='cadastrarcomentario.php?id=<?php echo $idsel;?>' method="post" id="form">
     
        <textarea   class="texto" name="texto" id="texto" cols="50" rows="7" placeholder="Digite aqui seu comentário" style="resize:none;" required onmouseover='warningMoedasLigar()' onmouseout='warningMoedasDesligar()'></textarea>
        
        <input type="submit" class="enviar" id="enviar" value="Enviar"   >
        
    </form>
    <?php
    //pegar o timestamp do banco
include 'puxarRecompensaTimestamp.php';
$proxRecompensa= strtotime('now') - strtotime($ultimoResgate);
$tempoRestante=24 - floor($proxRecompensa/3600);
    ?>
      <h3 class="avisoRecompensa" id="avisoRecompensa">Você pode comentar para ganhar 5 moedas <?php echo $agora;?></h3>
            <h3 class="limiteRecompensa" id="limiteRecompensa">Você poderá receber mais moedas em <?php echo $tempoRestante;?> horas</h3>

    <form action="cadastraravaliacao.php?id=<?php echo $idsel;?>" method="post" class="sessaoavaliar" id="sessaoavaliar">
        <div class="divsair">
    <input class="btnsair" type="button" value="X" onclick="sair()">
    </div>
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
      <div class="divenviaravaliacao">
       <input type="submit" id="enviaravaliacao" value="Enviar">
        </div>
    </div>
    
       
  </form>

    <!--Mostra comentários-->
    <div>

    <?php
 
    require "mostrarcomentario.php";

    while($row = $res->fetch_assoc()){
        if(isset($_SESSION['nome']) and $row["Nome"]==$_SESSION['nome']){
            echo "<div class='coments' ><h4> Você <a type='button' href='excluircomentario.php?id=". $row["Id"] ."&idsel=". $idsel ."' >Excluir</a></h4> " . " <p>" . $row["Comentario"] . "</p> <p>" . $row["Data"] . "</p> <br><br> </div>";
        }else if($_SESSION["acesso"]=="Admin"){
    	    echo "<div class='coments' > <h4>" . $row["Nome"] . "<a type='button' href='excluircomentario.php?id=". $row["Id"] ."' >Excluir</a></h4>" . " <p>" . $row["Comentario"] . "</p> <p>" . $row["Data"] . " </p> <br><br> </div>";
        }else{
            echo "<div class='coments' > <h4>" . $row["Nome"] . "</h4> <p>" . $row["Comentario"] . "</p> <p>" . $row["Data"] . " </p> <br><br> </div>";
        }
    
    }

    ?>

    </div>
    
    <div class="pagination">
     <a href="#">1</a>
     <a href="#" class="active">2</a>
     <a href="#">3</a>
     <a href="#">4</a>
     <a href="#">5</a>
     <a href="#">6</a>
    </div>

    <!--Denuncie-->
    <button class="open-button" onclick="openForm()">Denuncie</button>

    <div class="chat-popup" id="myForm">
     <form action="/action_page.php" class="form-container">
        <h1>Denuncie</h1>
        <label for="msg"><b>Coloque o nick e copie a mensagem</b></label>
        <textarea placeholder="Se ver algum comentário maldoso que nós não tenhamos apagado, escreva para a gente e ajude o site ser um lugar saudável para todos!" name="msg" required></textarea>
        <button type="submit" class="btn">Enviar</button>
        <button type="button" class="btn cancel" onclick="closeForm()">Fechar</button>

     </form>
         
    </div>

   </div>

 </body>

</html>

<script>

var h3= document.getElementById("h3")
var form= document.getElementById("form")
var btnavaliar=document.getElementById("btnavaliar"); 
 var avisoRecompensa=document.getElementById('avisoRecompensa');
var limiteRecompensa=document.getElementById('limiteRecompensa');
<?php
if (!isset($_SESSION["acesso"])){
?>
h3.innerHTML="Você precisa estar logado para comentar!"
form.style.display='none' 

      btnavaliar.style.display='none';
 <?php  
}

?>

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
 
 function avaliar(){
  var avaliar=document.getElementById("sessaoavaliar"); 
     avaliar.style.display='flex';
     
}

function sair(){
    var avaliar=document.getElementById("sessaoavaliar"); 
    avaliar.style.display="none";
}

warningMoedasLigar=()=>{ 
<?php if($tempoRestante < 24){?>
avisoRecompensa.style.display='flex';



<?php }else{?>
limiteRecompensa.style.display='flex';

<?php }?>
}
warningMoedasDesligar=()=>{
  
avisoRecompensa.style.display='none';
limiteRecompensa.style.display='none';
    
}
</script>