<?php 

session_start();
 require '../validarAcesso.php';

require '../conexao.php';

$sqlMestre="SELECT count(*) as Mestre FROM usuarios WHERE Rank='Mestre'";
$sqlDiamante="SELECT count(*) as Diamante FROM usuarios WHERE Rank='Diamante'";
$sqlOuro="SELECT count(*) as Ouro FROM usuarios WHERE Rank='Ouro'";
$sqlPrata="SELECT count(*) as Prata FROM usuarios WHERE Rank='Prata'";
$sqlBronze="SELECT count(*) as Bronze FROM usuarios WHERE Rank='Bronze'";

$result=$conn->query($sqlMestre);

if($result->num_rows>0){
  $row=$result->fetch_assoc();
  $numMestre=$row['Mestre'];
 
}

$result=$conn->query($sqlDiamante);

if($result->num_rows>0){
  $row=$result->fetch_assoc();
  $numDiamante=$row['Diamante'];
   
}
$result=$conn->query($sqlOuro);

if($result->num_rows>0){
  $row=$result->fetch_assoc();
  $numOuro=$row['Ouro'];
   
}

$result=$conn->query($sqlPrata);

if($result->num_rows>0){
  $row=$result->fetch_assoc();
  $numPrata=$row['Prata'];
   
}
$result=$conn->query($sqlBronze);

if($result->num_rows>0){
  $row=$result->fetch_assoc();
  $numBronze=$row['Bronze'];
   
}








?>