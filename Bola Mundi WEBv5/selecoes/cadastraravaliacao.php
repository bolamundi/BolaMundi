<?php 
session_start();
$estrelas=$_POST["fb"];

$nome=$_SESSION["nome"];

require 'C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\conexao.php';

$sql2="SELECT Id FROM usuarios where nome='$nome'";

$res= $conn->query($sql2) ;
$row=$res->fetch_assoc();
$idusuario=$row["Id"];
$idsel=$_GET["id"];//add dps com a tabela selecao
$sql="INSERT INTO avaliacoes (Estrelas,Id_usuario,Id_selecao) value ('$estrelas','$idusuario',$idsel)";


if ( $conn->query($sql) === TRUE){
 header("Location:selecao.php?id=$idsel");  
    
    
}else if ($nome==null){
     header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=selecao.php?id=$idsel");
 
  echo '<script> window.alert("O usuário precisa estar logado para avaliar") </script>';

    
    
}


else {
 header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=selecao.php?id=$idsel");
 
  echo '<script> window.alert("Erro ao conectar") </script>';  
    
}

