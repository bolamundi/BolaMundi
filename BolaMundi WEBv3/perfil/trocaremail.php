<?php
session_start();
//Verifica o acesso.
if(isset($_SESSION['acesso'])){
include 'puxarusuario.php';
//Dados do formulário
$novoemail = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, "senha");
$id_usuario=$_GET["id"];

$resultado=password_verify($senha,$row["Senha"]);


//Faz a conexão com o BD.
require 'conexao.php';

//Sql que altera um registro da tabela usuários
$sql = "UPDATE usuarios SET email='" . $novoemail . " WHERE id=" . $id_usuario;
if ($resultado){
    
$filtroemail = "SELECT * FROM usuarios where email='$novoemail' ";

$retornoemail=$conn->query($filtroemail);


$rowemail=$retornoemail->fetch_assoc();

if($rowemail["Email"]===$novoemail ){
   header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=cadastrar.html");
 
  echo "
  <script>
  window.alert('Email já cadastrado')
  
  </script>
  ";  

    
}else{
    
//Executa o sql e faz tratamento de erro.
if ($conn->query($sql) === TRUE) {
   
    
  header('refresh:00000000000000000000000000000000000.1; url=/perfil.php');
} else {
  echo "Erro: " . $conn->error;
} }}else {
    
 header('refresh:00000000000000000000000000000000000.1; url=/perfil.php');    
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
   header('Location: /index.php'); //Redireciona para o form
    exit; // Interrompe o Script
}

?> 