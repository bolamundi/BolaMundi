<?php
session_start();

include_once("../conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$assunto = filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_STRING);
$conteudo = filter_input(INPUT_POST, 'conteudo', FILTER_SANITIZE_STRING);

$sql = "INSERT INTO contato (nome, email, assunto, conteudo) values ('$nome', '$email', '$assunto', '$conteudo')";

    if(mysqli_query($conn, $sql)){
        $_SESSION['msg'] = "Sua mensagem foi enviada!"; 
        header("Location: ../index.php#contact");
    } else {
        header("Location: ../index.php#contact");
    }
    mysqli_close($conn);

?>