<?php

  session_start();
$path=2; //var para ativar uma condição no validarAcesso
  // Verifica se o usuário logado é admin
  include '../../validarAcesso.php';

  $campoNome=$_POST["nome"];
  $campoPreco=$_POST['preco'];
$campoImagem=$_POST['imagem'];
  
  
require '../../conexao.php';


  
   

      $sql="INSERT INTO produtos(nome,preco,imagem) values(' $campoNome','$campoPreco','$campoImagem')";
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
	   header("refresh:0.00000000000000000000000000000000000000001;url=../admindockerprodutos.php?pag=1");
	   echo "<script>window.alert('Gravado com sucesso')</script>";
	
      }else{
	     header("refresh:5;url=../admindockerprodutos.php?pag=1");
	     echo "Error: ". $sql . "<br>" . $conn->error;
      }

   

   $conn->close();

 

?>