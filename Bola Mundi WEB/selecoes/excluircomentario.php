<?php
session_start(); 

 
//Faz a leitura do dado passado pelo link.
$pag=1;
$campoid = $_GET["id"];
$idsel=$_GET["idsel"];
//Faz a conexão com o BD.
require '../conexao.php';
// Apagar da tabela usuários o registro com o id
$sql = "DELETE FROM comentarios WHERE Id=$campoid";
if($conn->query($sql)){
  header("Location:selecao.php?id=$idsel&pag=$pag");
    $conn->close();
    
}



?> 