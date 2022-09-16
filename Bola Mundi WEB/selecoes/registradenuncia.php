<?php
session_start();

include_once("../conexao.php");

$denuncia = filter_input(INPUT_POST, 'msg', FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

$sqlUser = "SELECT Id FROM usuarios where nome='$nome'";

$res = $conn->query($sqlUser) ;

$row = $res->fetch_assoc();

$idusuario = $row["Id"];

if(!empty($idusuario)){
    $sqlReg = "INSERT INTO denuncia (nome, mensagem) values ('$nome', '$denuncia')";
    

}else{
    echo "não funcionou";
    //header("Location: selecao.php");
}

//$sql = "INSERT INTO contato (nome, email, assunto, conteudo) values ('$nome', '$email', '$assunto', '$conteudo')";

  //  if(mysqli_query($conn, $sql)){
    //    $_SESSION['msg'] = "Sua mensagem foi enviada!"; 
      //  header("Location: ../index.php#contact");
//    } else {
  //      header("Location: ../index.php#contact");
    //}
    //mysqli_close($conn);

?>