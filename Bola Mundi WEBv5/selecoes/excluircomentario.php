<?php
session_start(); 

 
//Faz a leitura do dado passado pelo link.
$campoid = $_GET["id"];
$idsel=$_GET["idsel"];
//Faz a conexão com o BD.
require 'C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\conexao.php';

// Apagar da tabela usuários o registro com o id
$sql = "DELETE FROM comentarios WHERE Id=$campoid";
if($conn->query($sql)){
  header("Location:selecao.php?id=$idsel");
    $conn->close();
    
}



?> 