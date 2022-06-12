<?php

 // Parâmetros para criar a conexão
 
  $servername = "localhost";
  $username = "sdzpyvni_bolamundi2022";
  $password = "B0l4mund1";
  $dbname = "sdzpyvni_bolamundi";

  // Criando a conexão
 
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Checando a conexão
 
  if ($conn->connect_error) {
    die("Você se deu mal: " . $conn->connect_error);
  }
 
//Para ver o número de adms e comuns
$sql="SELECT count(*) as adm FROM usuarios WHERE Acesso='Admin'";
$resultcont=$conn->query($sql);
$row = $resultcont->fetch_assoc();

   $numadm =  $row['adm'];  
    $sql2="SELECT count(*) as usuario FROM usuarios WHERE Acesso='Usuario'";
$resultcont2=$conn->query($sql2);
$row2 = $resultcont2->fetch_assoc();

 $numusuario= $row2['usuario'];

   
    
    


?>  

