<?php 
session_start();
$idsel=$_SESSION["idsel"];

require 'C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\conexao.php';

$sql="SELECT * FROM jogadores WHERE Id_selecao='$idsel'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
if ($result->num_rows > 0){
    
  $status=true;
    
}else{
 
    $status=false;
    
    
}

?>