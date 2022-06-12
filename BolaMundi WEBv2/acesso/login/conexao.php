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
 
?>