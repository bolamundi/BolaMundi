<?php 
session_start();
$estrelas=$_POST["fb"];
$nome="Lucas"; //apagar dps e botar esse
//if(isset($_SESSION["nome"])){
//$nome=$_SESSION["nome"];}
//else{ $nome=null;}
require 'conexao.php';

$sql2="SELECT Id FROM usuarios where nome='$nome'";

$res= $conn->query($sql2) ;
$row=$res->fetch_assoc();
$idusuario=$row["Id"];
$idselecao=1;//add dps com a tabela selecao
$sql="INSERT INTO avaliacoes (Estrelas,Id_usuario,Id_selecao) value ('$estrelas','$idusuario',$idselecao)";


if ( $conn->query($sql) === TRUE){
 header("Location:selecaobrasileira.php");  
    
    
}else if ($nome==null){
     header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=selecaobrasileira.php");
 
  echo '<script> window.alert("O usuário precisa estar logado para avaliar") </script>';

    
    
}


else {
 header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=selecaobrasileira.php");
 
  echo '<script> window.alert("Erro ao conectar") </script>';  
    
}

