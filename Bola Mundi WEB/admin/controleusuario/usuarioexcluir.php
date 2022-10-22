<?php
session_start(); 
//Verifica o acesso.
$path=2;
  include '../../validarAcesso.php';
 
//Faz a leitura do dado passado pelo link.
$campoid = $_GET["id"];
 
//Faz a conexão com o BD.
require '../../conexao.php';
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
    
  
   header('Location: ../admindocker.php?pag=1'); //Redireciona para o controle  
} else {
  echo "Erro: " . $conn->error;
}

//Fecha a conexão.
$conn->close();

//Se o usuário tem acesso

?> 