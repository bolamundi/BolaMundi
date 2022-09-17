<?php 
session_start();
$palpite=$_POST['palpite'];
$idUsuario=$_SESSION['Id_usuario'];
require '../conexao.php';
$sql="INSERT INTO palpites(palpite,Id_usuario) values('$palpite','$idUsuario')";
if ( $palpite != "" and $conn->query($sql)){
         header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=perfil.php?");
 
  echo '<script> window.alert("Palpite publicado") </script>';
    exit;
        
    
}else if($palpite == ""){
    header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=perfil.php?");
 
  echo '<script> window.alert("O palpite não pode estar vazio") </script>';
    exit;
    
}else{
     header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=perfil.php?");
 
  echo '<script> window.alert("Palpite não foi publicado") </script>';
    exit;
    
}



?>