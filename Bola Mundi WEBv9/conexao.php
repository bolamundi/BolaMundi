<?php

 // Parâmetros para criar a conexão
 
 $servername = "localhost";
 $username = "id19270301_bolamundi";
 $password = "D6#_D/MgIb-~?G#S";
 $dbname = "id19270301_id18524654_loginbolamundi";

 // Criando a conexão
 
 $conn = new mysqli($servername, $username, $password, $dbname);

 // Checando a conexão
 
 if ($conn->connect_error) {
   die("Você se deu mal: " . $conn->connect_error);
 }
 
?>