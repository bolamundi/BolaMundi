<?php
session_start();
require '../conexao.php';
//Verifica o acesso.
if(isset($_SESSION['acesso'])){
include 'puxarusuario.php';
//Dados do formulário
//filtrar email
 
 
if (!filter_input(INPUT_POST, "novoemail", FILTER_VALIDATE_EMAIL)==true) {
   $novoemail=$row['Email'];//deixa no email velho
  
     header('refresh:00000000000000000000000000000000000.1; url=perfil.php');    
    echo "
    <script>
    window.alert('Email inválido')
    </script>
    
    ";
    //consertar pq escrever email inválido n gera nada
    
} else {
    $novoemail = filter_input(INPUT_POST, "novoemail");
    
}


$senha = filter_input(INPUT_POST, "senha");
$id_usuario=$_GET["id"];
$resultado=password_verify($senha,$row["Senha"]);




//Sql que altera um registro da tabela usuários
$sql = "UPDATE usuarios SET email='$novoemail' WHERE id= $id_usuario";
if ($resultado){
//Executa o sql e faz tratamento de erro.
if ($conn->query($sql) === TRUE) {
   $_SESSION['email']=$novoemail;
    
  header('refresh:00000000000000000000000000000000000.1; url=perfil.php');
} else {
  echo "Erro:". $conn->error;
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