<?php
session_start();


$PaisTorcedor = filter_input(INPUT_POST, "PaisTorcedor");
$id_usuario=$_GET['id'];


//Faz a conexão com o BD.
require '../conexao.php';
//Sql que altera um registro da tabela usuários
$sql = "UPDATE usuarios SET PaisTorcedor='$PaisTorcedor' WHERE id= $id_usuario";

//Executa o sql e faz tratamento de erro.
if ($conn->query($sql) === TRUE) {

    
  header('refresh:00000000000000000000000000000000000.1; url=perfil.php?id='.$id_usuario);
  echo '<script>window.alert("Torcida atualizada")</script>';
}else {
      header('refresh:00000000000000000000000000000000000.1; url=perfil.php?id='.$id_usuario);
  echo '<script>window.alert("Erro ao atualizar torcida")</script>';
}
   


  $conn->close();

?> 