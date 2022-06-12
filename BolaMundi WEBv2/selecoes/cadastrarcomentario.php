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

//pegar o id do usuario
$sql="SELECT Id FROM usuarios where nome='$nome'";

$res= $conn->query($sql) ;
$row=$res->fetch_assoc();
$idusuario=$row["Id"];
//pegar o id da selecao
$idsel=$_GET["id"];

$sql="INSERT INTO comentarios (comentario,nome,data,id_usuario,id_selecao) value ('$comentario','$nome','$hoje','$idusuario','$idsel')";


if ( $conn->query($sql) === TRUE){
 header("Location:selecaobrasileira.php?id=$idsel");  
    
    
}else if ($nome==null){
     header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=selecaobrasileira.php?id=$idsel");
 
  echo '<script> window.alert("O usuário precisa estar logado para comentar") </script>';

    
    
}


else {
 header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=selecaobrasileira.php?id=$idsel");
 
  echo '<script> window.alert("Erro ao conectar") </script>';  
    
}

















?>