<?php
session_start(); 
//Verifica o acesso.
if($_SESSION['acesso']=="Admin"){
 
//Faz a leitura do dado passado pelo link.
$campoid = $_GET["id"];
 
//Faz a conexão com o BD.
require 'login2/conexao.php';

// Apagar da tabela usuários o registro com o id
$sql = "DELETE FROM usuarios WHERE id=$campoid";

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
    
  
   header('Location: controle.php'); //Redireciona para o controle  
} else {
  echo "Erro: " . $conn->error;
}

//Fecha a conexão.
$conn->close();

//Se o usuário tem acesso
} else {
   header('Location: index.php'); //Redireciona para o form
    exit; // Interrompe o Script
}
?> 