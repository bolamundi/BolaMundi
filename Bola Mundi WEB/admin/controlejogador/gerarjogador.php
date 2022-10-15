<?php

  session_start();
  require '../../conexao.php';
$path=2; //var para ativar uma condição no validarAcesso
  // Verifica se o usuário logado é admin
  include '../../validarAcesso.php';
  if (isset($_SESSION['acesso']) and $_SESSION['acesso']=="Admin"){

  $camponome=$_POST["nome"];
  $campopais=$_POST['pais'];
  $camponumero=$_POST['numero'];
  $campoposicao=$_POST['posicao'];
  $sqlIdsel="SELECT Id FROM selecoes WHERE Pais='$campopais'";
  $resIdsel=$conn->query($sqlIdsel);
  if($resIdsel->num_rows >0){
$rowIdsel=$resIdsel->fetch_assoc();
$idsel=$rowIdsel['Id'];
      
  }else {
      header("refresh:0.00000000000000000000000000000000000000001;url=../admindocker.php?pag=1");
	   echo "<script>window.alert('Este país não está na copa')</script>";
	
      
  }

   

      $sql="INSERT INTO jogadores2(nome,pais,numero,posicao,id_selecao) values('$camponome','$campopais','$camponumero','$campoposicao','$idsel')";
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
	   header("refresh:0.00000000000000000000000000000000000000001;url=../admindocker.php?pag=1");
	   echo "<script>window.alert('Gravado com sucesso')</script>";
	
      }else{
	     header("refresh:5;url=../admindocker.php?pag=1");
	     echo "Error: ". $sql . "<br>" . $conn->error;
      }

   

   $conn->close();

   }else{
     header("Location:/index.php");
   }

?>