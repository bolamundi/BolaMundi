<?php
session_start();
//Verifica o acesso.
if($_SESSION['acesso']=="Admin"){

//Dados do formulário
$campoid = $_POST["id"];
$camponome = $_POST["nome"];
$campoemail = $_POST["email"];
$campoacesso = $_POST["acesso"];

//Faz a conexão com o BD.
require 'login2/conexao.php';

//Sql que altera um registro da tabela usuários
$sql = "UPDATE usuarios SET nome='" . $camponome . "', email='" . $campoemail . "', acesso='" . $campoacesso . "' WHERE id=" . $campoid;

//Executa o sql e faz tratamento de erro.
if ($conn->query($sql) === TRUE) {
     //Abre o arquivo log.txt, a opção "a" é para adicionar 
  $log = fopen("log.txt", "a") or die("Não abriu");
  
  //Como será a String gravada no log
  $txt = $_SESSION['nome'] . " - $sql - " . 
  date("d/m/Y") . " - " . date("H:i:s") . "\n";

  //Escreve a String no objeto que representa o arquivo
  fwrite($log, $txt);
  
  //Fecha o objeto
  fclose($log);
    
    
  header('refresh:00000000000000000000000000000000000.1; url=controle.php');
} else {
  echo "Erro: " . $conn->error;
}
   

//Fecha a conexão.
	$conn->close();
	
//Se o usuário não tem acesso.
} else {
   header('Location: index.php'); //Redireciona para o form
    exit; // Interrompe o Script
}

?> 