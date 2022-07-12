<?php

  session_start();

  if (isset($_SESSION['acesso']) and $_SESSION['acesso']=="Admin"){
$idsel=$_GET['idsel'];
  $camponome=$_POST["nome"];
  $campopais=$_POST['pais'];
  $camponumero=$_POST['numero'];
  $campoposicao=$_POST['posicao'];
  
require 'C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\data\localweb\conexao.php';
  


  
   

      $sql="INSERT INTO jogadores(nome,pais,numero,posicao,id_selecao) values('$camponome','$campopais','$camponumero','$campoposicao','$idsel')";
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
	   header("refresh:0.00000000000000000000000000000000000000001;url=../controleselecao.php?pag=1&idsel=$idsel");
	   echo "<script>window.alert('Gravado com sucesso')</script>";
	
      }else{
	     header("refresh:5;url=../controleselecao.php?pag=1&idsel=$idsel");
	     echo "Error: ". $sql . "<br>" . $conn->error;
      }

   

   $conn->close();

   }else{
     header("Location:/index.php");
   }

?>