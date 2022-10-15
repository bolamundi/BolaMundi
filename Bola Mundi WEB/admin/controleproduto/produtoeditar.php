<?php
session_start();

$path=2; //var para ativar uma condição no validarAcesso
  // Verifica se o usuário logado é admin
  include '../../validarAcesso.php';

//Dados do formulário
$campoid = $_POST["id"];

$campoNome = $_POST["nome"];
$campoPreco = $_POST["preco"];
//$campoPreco=(int)$campoPreco;
$campoImagem = $_POST["imagem"];
//Faz a conexão com o BD.
require '../../conexao.php';
//Sql que altera um registro da tabela usuários
$sql ="UPDATE produtos SET nome='$campoNome',preco='$campoPreco',imagem='$campoImagem' WHERE id='$campoid'";

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
    
    
 header('refresh:00000000000000000000000000000000000.1; url=../admindockerprodutos.php?pag=1' );
} else {
  echo "Erro: " . $conn->error;
}
   

//Fecha a conexão.
	$conn->close();
	
//Se o usuário não tem acesso.


?> 