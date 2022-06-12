<?php 
session_start();
$estrelas=$_POST["fb"];

$nome=$_SESSION["nome"];

require 'conexao.php';

$sql2="SELECT Id FROM usuarios where nome='$nome'";

$res= $conn->query($sql2) ;
$row=$res->fetch_assoc();
$idusuario=$row["Id"];
$idsel=$_GET["id"];//add dps com a tabela selecao
$sql="INSERT INTO avaliacoes (Estrelas,Id_usuario,Id_selecao) value ('$estrelas','$idusuario',$idsel)";


if ( $conn->query($sql) === TRUE){
 header("Location:selecaobrasileira.php?id=$idsel");  
    
    
}else if ($nome==null){
     header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=selecaobrasileira.php?id=$idsel");
 
  echo '<script> window.alert("O usuário precisa estar logado para avaliar") </script>';

    
    
}


else {
 header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=selecaobrasileira.php?id=$idsel");
 
  echo '<script> window.alert("Erro ao conectar") </script>';  
    
}

