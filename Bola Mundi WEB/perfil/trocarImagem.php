<?php
session_start();
require '../conexao.php';
$idProd=$_GET['prod'];
$idUsuario=$_SESSION['Id_usuario'];

$sqlBuscarFoto="SELECT * FROM produtos WHERE Id='$idProd'";
$result=$conn->query($sqlBuscarFoto);
if ($result->num_rows>0){
    $row=$result->fetch_assoc(); 
    $imagem=$row['Imagem'];
    $sqlTrocarFoto="UPDATE usuarios SET Perfil='$imagem' WHERE Id='$idUsuario'";
    if ($conn->query($sqlTrocarFoto)){
        $_SESSION['perfil']=$imagem;
         header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=perfil.php?");
   echo '<script> window.alert("Foto de perfil alterada com sucesso") </script>'; 
 
    exit;
        
    }else{
            header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=perfil.php?");
 
  echo '<script> window.alert("Foto de perfil não foi alterada") </script>';
    exit;
        
    }
}









?>