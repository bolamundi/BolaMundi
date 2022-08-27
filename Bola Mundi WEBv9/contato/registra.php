<?php

include_once("../conexao.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$assunto = $_POST["assunto"];
$conteudo = $_POST["mensagem"];

$sql = "INSERT INTO contatos (nome, email, assunto, conteudo) values ('$nome', '$email', '$assunto', '$conteudo')";

    if(mysqli_query($conn, $sql)){
        echo "Mensagem Enviada";
    } else {
        echo "Erro: ".$sql."<br>". mysqli_error($conn);
    }
    mysqli_close($conn);

?>