<?php

 // Parâmetros para criar a conexão
 
 $servername = "localhost";
 $username = "id18524654_loginbm";
 $password = "MXfQvb[K9m?*J-8f";
 $dbname = "id18524654_loginbolamundi";

 // Criando a conexão
 
 $conn = new mysqli($servername, $username, $password, $dbname);

 // Checando a conexão
 
 if ($conn->connect_error) {
   die("Você se deu mal: " . $conn->connect_error);
 }
 
?>