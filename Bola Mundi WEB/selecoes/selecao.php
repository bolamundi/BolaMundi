<?php

session_start();

$idsel=$_GET["id"];

$_SESSION["idsel"]=$idsel;


if(isset($_SESSION['nome'])){
    $nome=$_SESSION['nome'];
    $recepcao=$_SESSION['nome'];
    $perfil=$_SESSION['perfil'];
   }else{
   $nome="Usuário não logado";
     $recepcao="";
   }

include 'puxarSelecao.php';


echo $_SESSION['msg'];

?>

<!DOCTYPE html>

<html lang="pt-br" dir="ltr">
    
  <head>
      
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleção - Bola Mundi</title>
    <link rel="stylesheet" href="css/selecao.css" > 
    <link rel="stylesheet" href="css/menu.css" > 
    <script src="js/selecao.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  
  <body>
      
   <input type="checkbox" id="check">
    
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>BOLA MUNDI </h3>
      </div>
    </header>
    
    <div class="mobile_nav">
      <div class="nav_bar">
        
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
              <a href="../index.php"><i class="fas fa-desktop"></i><span>Index</span></a>
      <a href="../historiadacopa.php"><i class="fas fa-book"></i><span>História da Copa</span></a>
      <a href="../friendsarena.php"><i class="fas fa-th"></i><span>Friends Arena</span></a>
      <a href="../selecoes/todasaselecoes.php"><i class="fas fa-language"></i><span>Todas as Seleções</span></a>
      <a href="../selecoes/selecoesmandantes.php"><i class="fas fa-award"></i><span>Seleções Mandantes</span></a>
      <a href="../loja/loja.php"><i class="fas fa-money-bill"></i><span>Loja</span></a>
      </div>
    </div>

    <div class="sidebar">
      <div class="profile_info">
        <?php
         if(isset($_SESSION['nome'])){
          echo  "<img src='../loja/images/" .$perfil."' class='profile_image' alt=''>";
         }
        ?>
        <h4 style = "color: white;"><?php echo $recepcao; ?> </h4>
      </div>
      <a href="../index.php"><i class="fas fa-desktop"></i><span>Index</span></a>
      <a href="../historiadacopa.php"><i class="fas fa-book"></i><span>História da Copa</span></a>
      <a href="../friendsarena.php"><i class="fas fa-th"></i><span>Friends Arena</span></a>
      <a href="../selecoes/todasaselecoes.php"><i class="fas fa-language"></i><span>Todas as Seleções</span></a>
      <a href="../selecoes/selecoesmandantes.php"><i class="fas fa-award"></i><span>Seleções Mandantes</span></a>
      <a href="../loja/loja.php"><i class="fas fa-money-bill"></i><span>Loja</span></a>
    </div> 
    
    <div class="content">
         <div class = "tabela">   
    <?php 
    if($status){
    
    ?>
   <h1>Seleção <?php echo $adjetivo; ?></h1>
   <?php 
    }else{
    echo "<h1>Erro ao carregar o nome da seleção </h1>"    ;
        
        
    }
   
   ?>
   
    <!--Mostra o total da avaliação-->
    <center>
    <div id="avaliacaovizualizador" style = "margin-bottom: 10px;">
     
        <div id="estrelavizualizador">
        <?php
  include 'media.php';
        if($result->num_rows > 0){
            echo '<h3>Avaliação</h3>';
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
            case 0: 
                echo "<p>Sem avaliação</p>";
                break;
                
        }

        }else{
            echo "<p>Sem avaliação</p>";
        }
   
        ?>
        </div>
        
    </div>
    </center>
    
    <!--Mostra a tabela de jogadores-->
    
    <table id="jogadores">
        
    <?php
    
   if ($idsel>=20){
      include "gerarTabela2.php";
      }else{
          include 'gerarTabela.php';
      }
    ?>  
    
    </table> 
    
    <!--Avaliar seleção e enviar comentário-->
    <h3 id="h3">O que achou? Comente aqui embaixo!</h3>
 
    <input class="btnavaliar" id="btnavaliar" type="button" value="Avalie a seleção ★"   onclick="document.getElementById('id01').style.display='block'">
    <form class="formcoment" action='cadastrarcomentario.php?id=<?php echo $idsel;?>' method="post" id="form">
     
        <textarea   class="texto" name="texto" id="texto" cols="50" rows="7" placeholder="Digite aqui seu comentário" style="resize:none;" required onmouseover='warningMoedasLigar()' onmouseout='warningMoedasDesligar()'></textarea>
        
        <input type="submit" class="enviar" id="enviar" value="Enviar"   >
        
    </form>
    <?php
    //pegar o timestamp do banco
    if (isset($_SESSION['acesso'])){
        //baloes de texto ou legendas
include 'puxarRecompensaTimestamp.php';
$proxRecompensa= strtotime('now') - strtotime($ultimoResgate);
$tempoRestante=24 - floor($proxRecompensa/3600);}
    ?>
      <h3 class="avisoRecompensa" id="avisoRecompensa">Você pode comentar para ganhar 5 moedas <?php echo $agora;?></h3>
            <h3 class="limiteRecompensa" id="limiteRecompensa">Você poderá receber mais moedas em <?php echo $tempoRestante;?> horas</h3>
            
            <div id="id01" class="w3-modal">
    	<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:300px; max-height: 300px;">
      		<div class="w3-center"><br>
        		<span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
      		</div>
          
            <form action="cadastraravaliacao.php?id=<?php echo $idsel;?>" method="post">
               
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
              	</div>
              </div>


    <!--Mostra comentários-->
    <div>

    <?php
 
    require "mostrarcomentario.php";

   

    ?>

    </div>

    <!--Denuncie-->
    <script>
       var msg = "<?php echo $_SESSION['msg']; ?>"
       if(msg=="Você precisa estar logado!" || msg=="Sua denuncia foi enviada!"){
           window.alert(msg);
           <?php $_SESSION['msg'] = "null"; ?>
       }else{
           msg = "nada"
       }
    </script>
    <button class="open-button" onclick="openForm()">Denuncie</button>

    <div class="chat-popup" id="myForm">
     <form action="registradenuncia.php" method="POST" class="form-container">
        <h1>Denuncie</h1>
        <label for="msg">Sua denuncia:</label>
        <textarea placeholder="Se ver algum comentário maldoso que nós não tenhamos apagado, escreva para a gente e ajude o site a ser um lugar saudável para todos! Por favor descreva o motivo e o usuario a ser denunciado" name="msg" required></textarea>
        <button type="submit" class="btn">Enviar</button>
        <button type="button" class="btn cancel" onclick="closeForm()">Fechar</button>

     </form>
         
    </div>

   </div>

 </body>

</html>
    </div>

    <script type="text/javascript">
    
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    
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

 $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    
warningMoedasLigar=()=>{ 
<?php if($tempoRestante <= 0){?>

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

  </body>
</html>