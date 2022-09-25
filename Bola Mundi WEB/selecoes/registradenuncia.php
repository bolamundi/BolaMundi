<?php
session_start();

include_once("conexao.php");

if(isset($_SESSION['nome'])){
    $nome=$_SESSION['nome'];
    $recepcao=$_SESSION['nome'];
    $perfil=$_SESSION['perfil'];
   }else{
   $nome="Usuário não logado";
     $recepcao="";
   }

$msg = filter_input(INPUT_POST, 'msg', FILTER_SANITIZE_STRING);

$sqlID = "SELECT id FROM usuarios WHERE nome = '$nome'";


$sql = "INSERT INTO denuncia (nome, mensagem) value ('$nome', '$msg')";

    if(mysqli_query($conn, $sql)){
        $_SESSION['msg'] = "Sua denuncia foi enviada!"; 
        header("Location: /selecoes/selecao.php?id=1");
    } else {
        echo "erro";
    }
    
    mysqli_close($conn);

?>