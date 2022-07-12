<?php 
session_start();
$comentario = $_POST["texto"];
if(isset($_SESSION["nome"])){
$nome=$_SESSION["nome"];}
else{ $nome=null;}
$dataobj= new DateTime();
$formato = 'Y-m-d';
$hoje = $dataobj->format($formato) ;

require 'conexao.php';

$sql2="SELECT Id FROM usuarios where nome='$nome'";

$res= $conn->query($sql2) ;
$row=$res->fetch_assoc();
$idusuario=$row["Id"];

$sql="INSERT INTO comentarios (comentario,nome,data,id_usuario) value ('$comentario','$nome','$hoje','$idusuario')";


if ( $conn->query($sql) === TRUE){
 header("Location:selecaobrasileira.php");  
    
    
}else if ($nome==null){
     header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=selecaobrasileira.php");
 
  echo '<script> window.alert("O usuário precisa estar logado para comentar") </script>';

    
    
}


else {
 header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=selecaobrasileira.php");
 
  echo '<script> window.alert("Erro ao conectar") </script>';  
    
}

















?>