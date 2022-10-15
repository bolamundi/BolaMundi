<?php
session_start();
//Verifica o acesso.
if(isset($_SESSION['acesso'])){
include 'puxarusuario.php';
//Dados do formulário
$novonome = filter_input(INPUT_POST, "novonome");
$senha = filter_input(INPUT_POST, "senha");
$id_usuario=$_GET["id"];
$resultado=password_verify($senha,$row["Senha"]);


//Faz a conexão com o BD.
require '../conexao.php';
//Sql que altera um registro da tabela usuários
$sql = "UPDATE usuarios SET nome='$novonome' WHERE id= $id_usuario";
if ($resultado){
//Executa o sql e faz tratamento de erro.
if ($conn->query($sql) === TRUE) {
   $_SESSION['nome']=$novonome;
    
  header('refresh:00000000000000000000000000000000000.1; url=perfil.php');
} }else {
    
 header('refresh:00000000000000000000000000000000000.1; url=perfil.php');    
    echo "
    <script>
    window.alert('Senha incorreta')
    </script>
    
    ";
}
   

//Fecha a conexão.
   $conn->close();
   
//Se o usuário não tem acesso.
} else {
   header('Location: ../index.php'); //Redireciona para o form
    exit; // Interrompe o Script
}

?> 