<?php

  session_start();

  if (isset($_SESSION['acesso']) and $_SESSION['acesso']=="Admin"){

  $camponome=$_POST["nome"];
  $campoemail=$_POST['email'];
  $camposenha=$_POST['senha'];
  $campoacesso=$_POST['acesso'];
$hashsenha= password_hash($camposenha, PASSWORD_BCRYPT);
  require 'conexao.php';//Já faz a conexão automática com o db

  $filtroemail = "SELECT * FROM usuarios where email='$campoemail' ";
  $filtronome = "SELECT * FROM usuarios where nome='$camponome' ";
  $retornoemail=$conn->query($filtroemail);
  $retornonome=$conn->query($filtronome);
  $rownome=$retornonome->fetch_assoc();
  $rowemail=$retornoemail->fetch_assoc();

  if($rowemail["Email"]===$campoemail || $rownome["Nome"]===$camponome){
   header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=addusuario.php");
   echo "
   <script>
     window.alert('Email ou nome já cadastrados')
   </script>
   ";  
  
   }else{

      $sql="INSERT INTO usuarios(nome,email,senha,acesso) values('$camponome','$campoemail','$hashsenha','$campoacesso')";
      if($conn->query($sql) === TRUE ){
	   //Abre o arquivo log.txt, a opção "a" é para adicionar 
      $log = fopen("log.txt", "a") or die("Não abriu");
  
      //Como será a String gravada no log
      $txt = $_SESSION['nome'] . " - $sql - " . 
      date("d/m/Y") . " - " . date("H:i:s") . "\n";

      //Escreve a String no objeto que representa o arquivo
      fwrite($log, $txt);
  
      //Fecha o objeto
      fclose($log);
	   header("refresh:0.00000000000000000000000000000000000000001;url=/controle.php?pag=1");
	   echo "<script>window.alert('Gravado com sucesso')</script>";
	
      }else{
	     header("refresh:5;url=/controle.php?pag=1");
	     echo "Error: ". $sql . "<br>" . $conn->error;
      }

   }

   $conn->close();

   }else{
     header("Location:/index.php");
   }

?>