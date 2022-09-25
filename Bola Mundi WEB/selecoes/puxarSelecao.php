
<?php 
session_start();

$idsel=$_SESSION["idsel"];

require '../conexao.php';
$sql="SELECT Adjetivo FROM selecoes WHERE Id='$idsel'";
$result=$conn->query($sql);

if ($result->num_rows > 0){
    $row=$result->fetch_assoc();
    $adjetivo=$row['Adjetivo'];
  $status=true;
    
}else{

    $status=false;
    
    
}

?>