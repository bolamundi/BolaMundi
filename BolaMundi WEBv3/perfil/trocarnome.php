<?php
session_start();
//Verifica o acesso.
if(isset($_SESSION['acesso'])){
include 'puxarusuario.php';
//Dados do formulário
$novonome = filter_input(INPUT_POST, "novonome");
$senha = filter_input(INPUT_POST, "senha");
$id_usuario=$_GET["id"];
$novasenhahash= password_hash($novasenha, PASSWORD_BCRYPT);
$resultado=password_verify($senhavelha,$row["Senha"]);


//Faz a conexão com o BD.
require '../controleusuario/conexao.php';

//Sql que altera um registro da tabela usuários
$sql = "UPDATE usuarios SET nome='" . $novonome . " WHERE id=" . $id_usuario;
if ($resultado){
       
$filtronome = "SELECT * FROM usuarios where email='$novonome' ";

$retornonome=$conn->query($filtronome);


$rownome=$retornonome->fetch_assoc();

if($rownome["Nome"]===$novonome ){
   header("refresh:0.000000000000000000000000000000000000000000000000000000001;url=/perfil.php");
 
  echo "
  <script>
  window.alert('Nome já cadastrado')
  
  </script>
  ";  

    
}
    
    
//Executa o sql e faz tratamento de erro.
if ($conn->query($sql) === TRUE) {
   
    
  header('refresh:00000000000000000000000000000000000.1; url=/perfil.php');
} else {
  echo "Erro: " . $conn->error;
} }else {
    
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