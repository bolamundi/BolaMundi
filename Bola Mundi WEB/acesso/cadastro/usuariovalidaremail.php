<?php
session_start();

//Dados do formulário
$campoemail = filter_input(INPUT_GET, 'id');
$validador = filter_input(INPUT_GET, 'validador');

//Faz a conexão com o BD.
require '../../conexao.php';

//Sql que altera um registro da tabela usuários
$sql = "UPDATE usuarios SET Status='Ativo' WHERE Status='aguardando' and email='" . $campoemail . "' and validador=" . $validador;

//Executa o sql e faz tratamento de erro.
if ($conn->query($sql) === TRUE) {
  echo "Registro atualizado.";
  
   //Abre o arquivo log.txt, a opção "a" é para adicionar 
   $log = fopen("log.txt", "a") or die("Não abriu");
  
  //Como será a String gravada no log
    $txt = $_SESSION['Status'] . " - $sql - " . 
    date("d/m/Y") . " - " . date("H:i:s") . "\n";

  //Escreve a String no objeto que representa o arquivo
  fwrite($log, $txt);
  
  //Fecha o objeto
  fclose($log);
  
} else {
  echo "Erro: " . $conn->error;
}

//Fecha a conexão.
	$conn->close();
	
?> 