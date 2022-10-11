<?php
require '../conexao.php';
$Id=$_GET['id'];
$sqlApagar="DELETE FROM palpites WHERE Id='$Id'";
$id_usuario=57;
if ($conn->query($sqlApagar)){
    
      header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=perfil.php?id=".$id_usuario);
 
  echo '<script> window.alert("Palpite apagado") </script>';
    
}

?>