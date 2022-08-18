<?php 
session_start();
//$idsel=$_SESSION["idsel"];
$idsel=1;
require '../conexao.php';
$sql="SELECT * FROM jogadores WHERE Id=".$idsel;
$result=$conn->query($sql);
$row=$result->fetch_assoc();
if ($result->num_rows > 0){
   $adjetivo=$row['Adjetivo']; 
   echo $adjetivo;
  $status=true;
    
}else{
 
    $status=false;
    
    
}

?>