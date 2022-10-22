<?php
session_start();


$Pais = filter_input(INPUT_POST, "Pais");
$id_usuario=$_GET['id'];


//Faz a conexão com o BD.
require '../conexao.php';
//Sql que altera um registro da tabela usuários
$sql = "UPDATE usuarios SET Pais='$Pais' WHERE id= $id_usuario";

//Executa o sql e faz tratamento de erro.
if ($conn->query($sql) === TRUE) {

    
  header('refresh:00000000000000000000000000000000000.1; url=perfil.php?id='.$id_usuario);
  echo '<script>window.alert("Localização atualizada")</script>';
}else {
      header('refresh:00000000000000000000000000000000000.1; url=perfil.php?id='.$id_usuario);
  echo '<script>window.alert("Erro ao atualizar localização")</script>';
}
   


  $conn->close();

?> 